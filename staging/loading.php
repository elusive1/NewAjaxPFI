<?php
header("X-PFI-InProcessUrl: staging.psgdemo.com/NewAjaxPFI/staging/inproc.php");

function get_contents() {
   session_start();
   $var_test = $_GET['hello']; 
   echo $var_test;
  }
  
  get_contents();

?>
<html>
<head>
<meta http-equiv="X-UA-Compatible" charset="UTF-8" content="ie=edge">
<link rel="stylesheet" href="http://staging.psgdemo.com\NewAjaxPFI\staging\css\Style.css">
</head>
<body>
<br>
<br>
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