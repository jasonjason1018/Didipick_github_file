<?
/*
session物件
*/
class Session {

  //啟動session程序
  function Session(){
  session_start();
  }

  //設定session陣列欄位值
  function set($name,$value){
    $_SESSION[$name] = $value;
  }

  //讀取session陣列欄位值
  function get($name){
    if(isset($_SESSION[$name])){
      return $_SESSION[$name];
    }else{
      return false;
    }
  }
  //取消session陣列欄位值
  function del($name){
    if(isset($_SESSION[$name])){
      unset($_SESSION[$name]);
      return true;
    }else{
      return fales;
    }
  }  
  //刪除session所有資料
  function destroy(){
    $_SESSION = array();
    session_destroy;
  }
}
?>