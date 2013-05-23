$(document).ready(function(){



var qrtype=$("#selectQr :selected").val();
var qrsize=$("#selectQrSize :selected").val();
var qrmargin=$("#selectQrMargin :selected").val();
var qrtransparent=$("#selectQrTransparency :selected").val();
var qrencoding=$("#selectQrEncoding :selected").val();
var qrcorrection=$("#selectQrCorrection :selected").val();
var qrbackground=$("#selectQrBackground").val();




  


$("#selectQr").change(function () {
 qrtype=$("#selectQr :selected").val();
$(".option div").removeClass("visibleDiv");
$("#googlelink").val("");
$("#view"+$(this).val()).addClass("visibleDiv");
$("#view"+$(this).val()+" h5").text($("#selectQr :selected").val());
});

$("#selectQrSize").change(function () {

 qrsize=$("#selectQrSize :selected").val();
}); 

$("#selectQrMargin").change(function () {

 qrmargin=$("#selectQrMargin :selected").val();
}); 

$("#selectQrTransparency").change(function () {

 qrtransparent=$("#selectQrTransparency :selected").val();
}); 

$("#selectQrEncoding").change(function () {

 qrencoding=$("#selectQrEncoding :selected").val();
}); 


$("#createQR").click(function () {
qrbackground=$("#selectQrBackground").val();

$.ajax({
	async: false,
	global: false,
   type: "POST",
   url: "creatorqr.php",
   data: "id_fun="+qrtype+"&size="+qrsize+"&margin="+qrmargin+"&codding="+qrencoding+"&correction="+qrcorrection+"&background="+qrbackground+"&transparent="+qrtransparent+createString(qrtype),
 
   success: function(msg){
  $('div.qrimageDiv').css({'background-image' : 'url('+msg+')'});
  $('div.qrimageDiv').css({ 'background-position': "center center"});
    $('div.qrimageDiv').css({ 'background-repeat': "no-repeat"});
 $("#googlelink").val(msg);
 },
				error:function(XMLHttpRequest,status,error){
				alert(error);
				}
			});

});



function createString(qrtype)
{
var qrstring="";
switch(qrtype)
{
case '1':

 qrstring="&text="+$("#text2qr").val();
  break;
case '2':
 qrstring="&email="+$("#email2qr").val()+"&subject="+$("#subject2qr").val()+"&message="+$("#message2qr").val();
  break;
  
  case '3':
 qrstring="&latitude="+$("#latitude2qr").val()+"&longitude="+$("#longitude2qr").val();
   break;
  case '4':
 qrstring="&smsphone="+$("#smsphone2qr").val()+"&smstext="+$("#smstext2qr").val();
  break;
  case '5':
  qrstring="&mmsphone="+$("#mmsphone2qr").val()+"&mmstext="+$("#mmstext2qr").val();
  break;
  case '6':
 qrstring="&phone="+$("#phone2qr").val();
  break;
  case '7':

 qrstring="&url="+$("#url2qr").val()+"&texturl="+$("#titleurl2qr").val();
  break;
  case '8':
	
 qrstring="&mename="+$("#mename2qr").val()+"&mephone="+$("#mephone2qr").val()+"&meurl="+$("#meurl2qr").val()+"&meemail="+$("#meemail2qr").val()+"&menote="+$("#menote2qr").val();
  break;
  case '9':
qrstring="&vname="+$("#vname2qr").val()+"&vcompany="+$("#vcompany2qr").val()+"&vjobtitle="+$("#vjobtitle2qr").val()+"&vworktel="+$("#vworktel2qr").val()+"&vhometel="+$("#vhometel2qr").val()+"&vemail="+$("#vemail2qr").val()+"&vurl="+$("#vurl2qr").val()+"&vnote="+$("#vnote2qr").val();
  break;
  case '10':
  qrstring="&wifisid="+$("#wifisid2qr").val()+"&wifipas="+$("#wifipas2qr").val()+"&wifitype="+$("#wifitype2qr :selected").val();
  break;
  case '11':
 qrstring="&paypal="+$("#paypal2qr").val();
  break;
  case '12':
 qrstring="&ytchannel="+$("#ytchannel2qr").val();

  break;
  case '13':
 qrstring="&ytvideo="+$("#ytvideo2qr").val();
  break;
  case '14':
 qrstring="&gpuser="+$("#gpuser2qr").val();
  break;
  case '15':
  qrstring="&gpabout="+$("#gpabour2qr").val();
  break;
  case '16':
  qrstring="&gpphotos="+$("#gpphotos2qr").val();
  break;
  case '17':
 qrstring="&gpvideo="+$("#gpvideo2qr").val();
  break;
   case '18':
  qrstring="&gpbuzz="+$("#gpbuzz2qr").val();
  break;
  case '19':
  qrstring="&facebook="+$("#facebook2qr").val();
  break;
  case '20':
 qrstring="&twitter="+$("#twitter2qr").val()+"&twitterlink="+$("#twitterlink2qr :selected").val();
 break;
  case '21':
 qrstring="&selectmarket="+$("#selectmarket2qr :selected").val()+"&envatouser="+$("#envatouser2qr").val();
  break;
  case '22':
qrstring="&selectmarket="+$("#selectmarket2qr2 :selected").val()+"&envatouser="+$("#envatouser2qr2").val();
  break;
  case '23':
qrstring="&selectmarket="+$("#selectmarket2qr3 :selected").val()+"&envatouser="+$("#envatouser2qr3").val();
  break;
  case '24':
 qrstring="&selectmarket="+$("#selectmarket2qr4 :selected").val()+"&envatouser="+$("#envatouser2qr4").val();
  break;
  case '25':
qrstring="&selectmarket="+$("#selectmarket2qr5 :selected").val()+"&envatouser="+$("#envatouser2qr5").val();
  break;
  case '26':
qrstring="&selectmarket="+$("#selectmarket2qr6 :selected").val()+"&envatouser="+$("#envatouser2qr6").val();
  break;
  case '27':
qrstring="&selectmarket="+$("#selectmarket2qr7 :selected").val()+"&envatouser="+$("#envatouser2qr7").val();
  break;
  case '28':
qrstring="&selectmarket="+$("#selectmarket12qr :selected").val()+"&envatouser="+$("#envatouser12qr").val()+"&envatoitem="+$("#envatoitem12qr").val();

  break;
  case '29':
qrstring="&selectmarket="+$("#selectmarket12qr2 :selected").val()+"&envatouser="+$("#envatouser12qr2").val()+"&envatoitem="+$("#envatoitem12qr2").val();
  break;
  case '30':
qrstring="&selectmarket="+$("#selectmarket12qr3 :selected").val()+"&envatouser="+$("#envatouser12qr3").val()+"&envatoitem="+$("#envatoitem12qr3").val();
  break;
  case '31':
qrstring="&selectmarket="+$("#selectmarket12qr4 :selected").val()+"&envatouser="+$("#envatouser12qr4").val()+"&envatoitem="+$("#envatoitem12qr4").val();
  break;
  case '32':
 qrstring="&domain="+$("#domainqr").val();
  break;
  
  case '33':
qrstring="&domain="+$("#domainqr2").val();
  break;
  case '34':
qrstring="&domain="+$("#domainqr3").val();
  break;
  case '35':
qrstring="&domain="+$("#domainqr4").val();
  break;
  case '36':
qrstring="&histatid="+$("#domainidqr").val();
  break;
  
default:

}

return qrstring;
}

 }); // end document read