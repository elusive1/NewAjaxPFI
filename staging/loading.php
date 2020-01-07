<?php
header("X-PFI-InProcessUrl: staging.psgdemo.com/NewAjaxPFI/staging/inproc.php");

function replicate_sessiontoken() {
    file_get_contents("http://staging.psgdemo.com/NewAjaxPFI/staging/inproc.php");
    foreach($http_response_header as $key=> $value)
{
  if($key==5) header($value); //echo "<br>" . $value;
}
  }
  
  replicate_sessiontoken();
?>
<html>
<head>
<meta http-equiv="X-UA-Compatible" charset="UTF-8" content="ie=edge">
<link rel="stylesheet" href="http://staging.psgdemo.com\NewAjaxPFI\staging\css\Style.css">
</head>
<body>
<br>
<?php
session_start();
echo "<br>";
echo "Your Alias is: " . $_GET['a'];
echo "<br>";
echo "Your Status is: " . $_GET['status'];
echo "<br>";
echo "Your Session Token is: " . $_GET['sessionToken'];
echo "<br>";
echo "Your Transaction ID is: " . $_GET['t'];
?>
<br>
<div class="powerade">
<div id="powerade">
<img src="http://staging.psgdemo.com\NewAjaxPFI\staging\images\loading1.gif">
</div>
<br>
<br>
<div class ="footer">
</div>
</body>
</html>