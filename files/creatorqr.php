<?php
include("qrcode.php");
$myClass= new QrCodes; 
$myClass->IsImage=0;
$myClass->Size =$_POST["size"];
$myClass->Margin =$_POST["margin"]; 
$myClass->CoddingType =$_POST["codding"];
$myClass->Background =$_POST["background"]; 
$myClass-> TransparencyLv=$_POST["transparent"];
$myClass->CorrectionLevel=$_POST["correction"];
//$myClass->Transparent=; 
Switch ($_POST["id_fun"])
			{
		 Case 1:
			echo $myClass->GetCode($_POST["text"]);
            break;
         Case 2:
			echo $myClass->GetMail($_POST["email"],$_POST["subject"],$_POST["message"]);
			break;
		 Case 3:
			echo $myClass->GetGeo($_POST["latitude"],$_POST["longitude"]);
            break;
		 Case 4:
			echo $myClass->GetSms($_POST["smsphone"],$_POST["smstext"]);
            break;
		Case 5:
			echo $myClass->GetMms($_POST["mmsphone"],$_POST["mmstext"]);
            break;
		 Case 6:
			echo $myClass->GetPhone($_POST["phone"]);
            break;
		 Case 7:
			echo $myClass->GetBookmark($_POST["url"],$_POST["texturl"]);
			break;
		 Case 8:
			echo $myClass->GetContact($_POST["mename"],$_POST["mephone"],$_POST["meurl"],$_POST["meemail"],$_POST["menote"]);
			break;
		 Case 9:
			echo $myClass->GetVcard($_POST["vname"],$_POST["vcompany"],$_POST["vjobtitle"],$_POST["vworktel"],$_POST["vhometel"],$_POST["vemail"],$_POST["vurl"],$_POST["vnote"]);
            break;
		 Case 10:
			echo $myClass->WiFi($_POST["wifisid"],$_POST["wifipas"],$_POST["wifitype"]);
		    break;
		 Case 11:
			echo $myClass->PayPal($_POST["paypal"]);
            break;
			
		 Case 12:
			echo $myClass->YoutubeChannel($_POST["ytchannel"]);
			
            break;
		 Case 13:
			echo $myClass->YoutubeVideo($_POST["ytvideo"]);
            break;
		 Case 14:
			echo $myClass->GplusUser($_POST["gpuser"]);
            break;
		 Case 15:
			echo $myClass->GplusAbout($_POST["gpabour"]);
            break;
		 Case 16:
			echo $myClass->GplusPhotos($_POST["gpphotos"]);
            break;
		 Case 17:
			echo $myClass->GplusVideo($_POST["gpvideo"]);
            break;			
		 Case 18:
			echo $myClass->GplusBuzz($_POST["gpbuzz"]);
            break;
		 Case 19:
			echo $myClass->FacebookInfo($_POST["facebook"]);
            break;
		 Case 20:
			echo $myClass->TwitterInfo($_POST["twitter"],$_POST["twitterlink"]);
			break;
			
		

		Case 21:
			echo $myClass->EnvatoUser($_POST["selectmarket"],$_POST["envatouser"]);
			break;
		Case 22:
			echo $myClass->EnvatoEdit($_POST["selectmarket"],$_POST["envatouser"]);
			break;		
		Case 23:
			echo $myClass->EnvatoDownloads($_POST["selectmarket"],$_POST["envatouser"]);
			break;
		Case 24:
			echo $myClass->EnvatoHistory($_POST["selectmarket"],$_POST["envatouser"]);
			break;
		Case 25:
			echo $myClass->EnvatoWithdrawal($_POST["selectmarket"],$_POST["envatouser"]);
			break;
		Case 26:
			echo $myClass->EnvatoEarnings($_POST["selectmarket"],$_POST["envatouser"]);
			break;
		Case 27:
			echo $myClass->EnvatoStatement($_POST["selectmarket"],$_POST["envatouser"]);
			break;	
		Case 28:
			echo $myClass->EnvatoItem($_POST["selectmarket"],$_POST["envatouser"],$_POST["envatoitem"]);
			break;
		Case 29:
			echo $myClass->EnvatoItemFaq($_POST["selectmarket"],$_POST["envatouser"],$_POST["envatoitem"]);
			break;
		Case 30:
			echo $myClass->EnvatoItemComments($_POST["selectmarket"],$_POST["envatouser"],$_POST["envatoitem"]);
			break;
		Case 31:
			echo $myClass->EnvatoItemEdit($_POST["selectmarket"],$_POST["envatouser"],$_POST["envatoitem"]);
			break;			

		Case 32:
			echo $myClass->AlexaInfo($_POST["domain"]);
			break;
			
		Case 33:
			echo $myClass->WhoisInfo($_POST["domain"]);
			break;
		Case 34:
			echo $myClass->CompeteInfo($_POST["domain"]);
			break;
			
		Case 35:
			echo $myClass->QuantcastInfo($_POST["domain"]);
			break;

		Case 36:
			echo $myClass->HistatsInfo($_POST["histatid"]);
			break;	

			
	/**/
        }

?>