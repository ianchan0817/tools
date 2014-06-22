$(function() {
    $("#timestamp2Date").click(function() {
    	var unix_timestamp = $("#timestamp").val();
    	var date = new Date(unix_timestamp*1000);

    	var year = date.getUTCFullYear();
    	var month  = date.getUTCMonth();
    	var day = date.getUTCDate();
		var hours = date.getUTCHours();
		var minutes = date.getUTCMinutes();
		var seconds = date.getUTCSeconds();
		month += 1;
		$("#year").val(year);
		$("#month").val(month);
		$("#day").val(day);
		$("#hours").val(hours);
		$("#minutes").val(minutes);
		$("#seconds").val(seconds);

		$("#localtime").text("Your local time is " + date.toString() );
    })

    $("#date2Timestamp").click(function(){
    	var year = $("#year").val();
		var month = $("#month").val();
		var day = $("#day").val();
		var hours = $("#hours").val();
		var minutes = $("#minutes").val();
		var seconds = $("#seconds").val();
		month -= 1;
		var timestamp = Date.UTC(year, month, day, hours, minutes, seconds, 0);
		$("#timestamp").val(timestamp/1000);
		$("#localtime").text("Your local time is " + new Date(timestamp).toString() );
    })

    $("#encode").click(function(){
    	var url = $("#url").val();
    	$("#url").val(encodeURI(url));
 	    return false;
    })

    $("#decode").click(function(){
    	var url = $("#url").val();
    	$("#url").val(decodeURI(url));
      	return false;
    })
});



function display_c(){
	var refresh=1000;
	mytime=setTimeout('display_ct()',refresh)
}

function display_ct() {
	var x = new Date()
	document.getElementById('ct').innerHTML = x;
	tt=display_c();
 }

var BIGtoGB = 0;
function toCode(){
	var TempStr = "";
	var TempStr1 = "";
	var TempStrWord = "";
	var TempWordMath = 0;
	var TempWordHex = new Array();
	// if(document.myForm.C1.checked){
	// 	document.getElementById("p1").innerHTML = document.myForm.S1.value;
	// 	TempStrWord = document.getElementById("p1").innerText;
	// }else{
	// 	TempStrWord = document.myForm.S1.value;
	// }
	TempStrWord = document.myForm.S1.value;
	for(i=0;i<TempStrWord.length;i++){
		TempStr1 = TempStrWord.charAt(i);
		TempWordMath = TempStr1.charCodeAt(0);
		switch(BIGtoGB){
		case 0:
			if(!toGB[TempWordMath]){
				TempStr += TempStr1;
			}else{
				TempStr += String.fromCharCode(toGB[TempWordMath]);
			}
			break;
		case 1:
			if(!toBIG[TempWordMath]){
				TempStr += TempStr1;
			}else{
				TempStr += String.fromCharCode(toBIG[TempWordMath]);
			}
			break;
		case 2:
			if(!toGB2[TempWordMath]){
				TempStr += TempStr1;
			}else{
				TempStr += toGB2[TempWordMath];
			}
			break;
		case 3:
			if(!toBIG2[TempWordMath]){
				TempStr += TempStr1;
			}else{
				TempStr += toBIG2[TempWordMath];
			}
			break;
		}
	}
	document.myForm.S1.value = TempStr;
}

