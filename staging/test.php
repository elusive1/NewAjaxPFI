<?php
header("X-PFI-InProcessUrl: staging.psgdemo.com/NewAjaxPFI/staging/inproc.php");
header("Access-Control-Allow-Origin: http://staging.psgdemo.com/NewAjaxPFI/staging/inproc.php");

/*function replicate_sessiontoken() {
   file_get_contents("http://staging.psgdemo.com/NewAjaxPFI/staging/inproc.php");
   foreach($http_response_header as $key=> $value)
{
 if($key==6) header($value); //echo "<br>" . $value;
}
 }
 
 replicate_sessiontoken();*/

 function replicate_sessiontoken() {
   $url = 'http://staging.psgdemo.com/NewAjaxPFI/staging/inproc.php';
   $inproc_headers = get_headers($url);
   foreach($inproc_headers as $key=> $value)
{
 if($key==6) header($value); //echo "<br>" . $value;
}
 }
 
 replicate_sessiontoken();

?>
<html>
<head>
<meta http-equiv="X-UA-Compatible" charset="UTF-8" content="ie=edge">
<link rel="stylesheet" href="http://staging.psgdemo.com\NewAjaxPFI\staging\css\Style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<script type="text/JavaScript">
var alreadySub = function() {
   window.location.href = "/NewAjaxPFI/staging/loading.php";
}
/*var inproctest = function() {
   var x =
   console.log(x);
}*/
var MsisdnConfirmed = function() {
   console.log('PfiConfirmButtonShown');
}

let PurchaseButtonShown = function() {
   console.log('PfiPurchaseButtonShown');
}
</script>
<?php 
echo "<script type=\"text/javascript\"> var inproctest = function() { console.log(".json_encode($_SERVER['HTTP_X_PFI_STATUS']),")}</script>";
echo "<script type=\"text/javascript\"> var PfiInprocTest = function() { console.log('Pfi Inproc Test')}</script>";
?>
<div class="sub2body" id="sub2body">
<div class="powerade" id ="simpsons">
<img src="http://staging.psgdemo.com\NewAjaxPFI\staging\images\simpsons.gif">
<br>
<div class ="footer">
   <h1><p>BUY NOW FOR ETERNAL HAPPINESS!</p></h1>
</div>
</div>
<div data-pfi-area="true" class="button2" id="Merchantbutton2"></div>
<!--<div class="powerade"> --> 
<!-- Old main image -->
<!-- <img src="images\powerade.jpg"> -->
<!--</div> -->
<!--<script type="text/JavaScript" src="http://staging.psgdemo.com\NewAjaxPFI\staging\JavaScript\psgdemo2.js"></script>-->
<script type="text/JavaScript">
var hidebutton = "hidebutton";
var serviceId = "1575";
var reference = "powerade";
//var contentUrl = "\NewAjaxPFI\staging\loading.php?a=<//?php echo $_SERVER['HTTP_X_PFI_ALIAS']?>&status=<//?php echo $_SERVER['HTTP_X_PFI_STATUS']?>&sessionToken=<//?php echo $_SERVER['HTTP_X_PFI_SESSIONTOKEN']?>&t=<//?php echo $_SERVER['HTTP_X_PFI_TRANSACTIONID']?>";
var contentUrl = "http://staging.psgdemo.com/NewAjaxPFI/staging/loading.php?a=<?php echo $_SERVER['HTTP_X_PFI_ALIAS']?>&status=<?php echo $_SERVER['HTTP_X_PFI_STATUS']?>&sessionToken=<?php echo $_SERVER['HTTP_X_PFI_SESSIONTOKEN']?>&t=<?php echo $_SERVER['HTTP_X_PFI_TRANSACTIONID']?>";
var contentId = "sub2";

document.getElementById('Merchantbutton2').onload = merchantCall(hidebutton, serviceId, reference, contentUrl, contentId);
</script>
<div class ="footer">
<p>PSG TEST SITE</p>
<?php

if ($_SERVER['HTTP_X_PFI_STATUS'] == "PfiAlreadySubscribed"){
   echo "<script type=\"text/javascript\">window.location.href = 'http://www.google.com';</script>";
   }
elseif ($_SERVER['HTTP_X_PFI_STATUS'] == "Initiated") {
   echo "<script type=\"text/javascript\"> console.log('Initiated status!');</script>";
   }
else {
   echo "<script type=\"text/javascript\"> console.log('Nothing!');</script>";
}

    echo"<br>";
    echo $set;
    echo $notset;
    echo"<br>";
    echo "Your Network is: ".$_SERVER['HTTP_X_PFI_NETINFO'];
    echo"<br>";
    echo "Your Alias is: ".$_SERVER['HTTP_X_PFI_ALIAS'];
    echo"<br>";
    echo "Your Status is: ".$_SERVER['HTTP_X_PFI_STATUS'];
    echo"<br>";
    echo "Your Network is: ".$_SERVER['HTTP_X_PFI_NETINFO'];
    echo"<br>";
    echo "Your reference is: ".$_SERVER['HTTP_X_PFI_REFERENCE'];
    echo"<br>";
    echo "Your Session token is: ".$_SERVER['HTTP_X_PFI_SESSIONTOKEN'];
    echo"<br>";
    echo "GUID generated is: ".$GUID;
    echo"<br>";
    echo "Your hash is: ".$_SERVER['HTTP_X_PFI_HASH'];
    echo"<br>";
    echo "Your callerid is: ".$_SERVER['HTTP_X_PFI_CALLERID'];
    echo"<br>";
    echo "Your transid is: ".$_SERVER['HTTP_X_PFI_TRANSACTIONID'];
    echo"<br>";
    echo"<br>";
    //echo print_r($_SERVER);
    //echo"<br>";
    //echo"<br>";
    echo"response header ";
    echo print_r($http_response_header);
    echo"<br>";
    echo"Request ";
    echo print_r($_REQUEST['HTTP_X_PFI_STATUS'], true);
    echo"<br>";
    echo"<br>";
    $url = 'http://staging.psgdemo.com/NewAjaxPFI/staging/inproc.php';
    echo print_r(get_headers($url), true);
    echo "<br>";
    echo "<br>";
    echo print_r($_SERVER);
    echo getallheaders();
?>
<!--Removing the JQUERY TEST-->
<script>
   //JQUERY TEST
   /*$.ajax({
      url:'http://pfistaging.psgdemo.com/pfiAjax/GenerateCaptcha'
    }).done(function () { 
      console.log('PfiCaptchaShown'); 
   });*/

   var pin = JQ('#pfi-pin').val();
   
   console.log(pin);

   var submitPinTest = pfiPinSubmit;
   

</script>
<!-- <script type="text/JavaScript">
var origCheckNetworkLookupMt = checkNetworkLookupMt;
checkNetworkLookupMt = function()
{
  console.log('checkNetworkLookupMt performed!!')
  origCheckNetworkLookupMt() 
  }
</script>-->
</script>
</div>
</div>
</body>
</html>