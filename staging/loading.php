<?php
header("X-PFI-InProcessUrl: staging.psgdemo.com/NewAjaxPFI/staging/inproc.php");

//echo $_GET["test"];

function get_contents() {
    file_get_contents("http://staging.psgdemo.com/NewAjaxPFI/staging/inproc.php");
    //var_dump($http_response_header);
    echo var_dump($http_response_header[5]['"']);
    echo "<br>" . var_dump($http_response_header[5]);
    foreach($http_response_header as $value)
{
  echo "<br>" . $value[5];
}
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