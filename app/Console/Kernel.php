<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\DB;
use App\didipick_cart;
class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        $schedule->call(function () {
            $result = DB::select("select * from rate order by insert_date desc");
            //print_r($result);
            if(count($result) == 0){
                $dbday = '00-00-00';
            }else{
                $dbday = explode(' ', $result[0]->insert_date);
                $dbday = $dbday[0];
            }
            $day = date("Y-m-d");
            if($dbday != $day){
                date_default_timezone_set("Asia/Taipei");
                $today = date("Y-m-d H:i:s");
                $client = new \GuzzleHttp\Client();
                $result = $client->get('https://forex.cnyes.com/currency/JPY/TWD');
                $result = explode('jsx-685978323 currency-number currency-now', $result->getBody()->getContents());
                $result = explode('</div>', $result[1]);
                $result = explode('">', $result[0]);
                $rate = $result[1];
                    DB::insert("insert into rate (rate, insert_date) values ('$rate', '$today')");
            }
        })->everyMinute();

        $schedule->call(function () {
            date_default_timezone_set("Asia/Taipei");
            $today = date("H:i");
            if($today == '12:00'){
                $cartsize = didipick_cart::where('status', '0')->count();
                if($cartsize != 0){
                    didipick_cart::where('status', '0')->delete();
                }
            }
        })->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
