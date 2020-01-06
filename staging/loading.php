<?php
header("X-PFI-InProcessUrl: staging.psgdemo.com/NewAjaxPFI/staging/inproc.php");

echo 'Hello ' . htmlspecialchars($_GET["name"]) . '!';

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