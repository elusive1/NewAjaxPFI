<?php

$response1 = '{
        "error":null,
        "ShowMarketingOptIn":false,
        "inProcessUrl":null,
        "script":"console.log("INPROCESS WORKING!")",
}';


$temp1 = '{
        "Error":null,
        "Script":"hidebutton()",
        "InProcessUrl":null,
        "ShowMarketingOptIn":true
}';

//respond

if ($_SERVER['HTTP_X_PFI_STATUS'] == "Initiated") {
    $response = $response1;
    //echo $response;
}elseif ($_SERVER['HTTP_X_PFI_STATUS'] == "PfiProcessing"){
    $response = $response1;
}elseif ($_SERVER['HTTP_X_PFI_STATUS'] == "PfiAlreadySubscribed"){
    $response = $response1;
    //echo $response;
}elseif ($_SERVER['HTTP_X_PFI_STATUS'] == "PfiConfirmButtonShown"){
    $response = $response1;
    //echo $response;
}elseif ($_SERVER['HTTP_X_PFI_STATUS'] == "PfiPurchaseSuccessz"){
    //$var = '1';
}elseif ($_SERVER['HTTP_X_PFI_STATUS'] == "PfiPurchaseSuccessa"){
    //$var = '1';
}else{
    $response = $temp1;
    //echo $response1;
};

//echo $response1;
echo $response;


?>