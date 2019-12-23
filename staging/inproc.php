<?php

header("X-PFI-SessionToken:" .$_SERVER['HTTP_X_PFI_SESSIONTOKEN']);

$response1 = '{
        "Error":null,
        "ShowMarketingOptIn":false,
        "inProcessUrl":null,
        "Script":"inproctest()"
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

echo $response1;
echo "Your Session token is: ".$_SERVER['HTTP_X_PFI_SESSIONTOKEN'];
echo "Your Status is: ".$_SERVER['HTTP_X_PFI_STATUS'];
//echo $response;

?>