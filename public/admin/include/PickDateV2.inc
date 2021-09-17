<SCRIPT LANGUAGE=Vbs>
<!--
	sub imgPickDate(varObj)
		dim RtnDate
		'PickDate(0) yyyymmdd 西元年  PickDate(1) yyymmdd 民國年
		RtnDate=PickDate(0,date)
		if RtnDate="" then exit sub end if
		if  RtnDate="-1" then
			varObj.value=""
		else
			'varObj.value=left(RtnDate,4)-1911 & "-" & mid(RtnDate,5,2) & "-" & right(RtnDate,2) '民國格式
			varObj.value=left(RtnDate,4) & "-" & mid(RtnDate,5,2) & "-" & right(RtnDate,2)			'西元格式
            'varObj.value=right("0"&left(RtnDate,4)-1911,3)&mid(RtnDate,5,2)&right(RtnDate,2)
		end if
	end sub
	
	function PickDate(cntCase,tDay)
		'cntCase :0 西元 YYYYMMDD			1: 民國 YYYMMDD
		dim winRtn,tmpMon
		tDay=replace(tDay,".","")
		tDay=replace(tDay,"/","")
		
		if cntCase=0 and len(trim(tDay))=8 then
			tDay=left(tday,4)&"/"&mid(tDay,5,2)&"/"&right(tDay,2)
		end if
		
		if cntCase=1 and len(trim(tDay))>=6 then
			tmpMon=right(tDay,4)
			tDay=left(tday,len(tDay)-4)+1911&"/"&left(tmpMon,2)&"/"&right(tDay,2)
		end if
		
		if not isDate(tDay) then
			tDay=""
		end if

		winRtn=window.showModalDialog("include/PickDateV2.htm",tDay,"dialogHeight: 240px; dialogWidth: 192px;" & _
					" center: Yes; help: No; resizable: No; status: No;scroll:no;")
		if winRtn<>"" then
			PickDate=split(winRtn,",")(cntCase)
		else
			PickDate=""
		end if
	end function	
-->
</SCRIPT>