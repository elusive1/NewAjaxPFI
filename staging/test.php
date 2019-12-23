<html>
<head>
<meta http-equiv="X-UA-Compatible" charset="UTF-8" content="ie=edge">
<link rel="stylesheet" href="http://ec2-3-10-164-218.eu-west-2.compute.amazonaws.com\NewAjaxPFI\css\Style.css">
</head>
<body>
<div class="sub2body" id="sub2body">
<div class="powerade" id ="simpsons">
<img src="http://ec2-3-10-164-218.eu-west-2.compute.amazonaws.com\NewAjaxPFI\images\simpsons.gif">
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
<script type="text/JavaScript" src="http://ec2-3-10-164-218.eu-west-2.compute.amazonaws.com\NewAjaxPFI\JavaScript\psgdemo2.js"></script>
<div class ="footer">
<p>PSG TEST SITE</p>
<?php
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
    echo "Your referance is: ".$_SERVER['HTTP_X_PFI_REFERANCE'];
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
    echo"<br>";
    echo print_r($_SERVER);
    echo"<br>";
    echo"<br>";
    echo"response header";
    echo print_r($http_response_header);
    echo"<br>";
    echo"Request";
    echo print_r($_REQUEST);
?>
</div>
</div>
</body>
</html>