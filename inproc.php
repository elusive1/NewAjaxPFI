<?php


function getGUID(){
    if (function_exists('com_create_guid')){
        return com_create_guid();
    }else{
        mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
        $charid = strtoupper(md5(uniqid(rand(), true)));
        $hyphen = chr(45);// "-"
        $uuid = // "{"
            substr($charid, 0, 8).$hyphen
            .substr($charid, 8, 4).$hyphen
            .substr($charid,12, 4).$hyphen
            .substr($charid,16, 4).$hyphen
            .substr($charid,20,12);
        return $uuid;
    }
}
$GUID = getGUID();
if (isset($_SERVER['HTTP_X_PFI_SESSIONTOKEN'])) {
    header("X-PFI-SessionToken: ".$_SERVER['HTTP_X_PFI_SESSIONTOKEN']);
    $set = 'Yes';
}else{
    header("X-PFI-SessionToken: ".$GUID);
    $set = 'not set';
};


$response1 = '{
        "Error":null,
        "Script":"hidebutton()",
        "InProcessUrl":null,
        "ShowMarketingOptIn":true
}';


$temp1 = '{
        "Error":null,
        "Script":"hidebutton()",
        "InProcessUrl":null,
        "ShowMarketingOptIn":true
}';

//respond

if ($_SERVER['HTTP_X_PFI_STATUS'] == "PfiProcessing") {
    $response = $response1;
    //echo $response;
}elseif ($_SERVER['HTTP_X_PFI_STATUS'] == "PfiConfirmButtonShown"){
    $response = $response1;
    //echo $response;
}elseif ($_SERVER['HTTP_X_PFI_STATUS'] == "PfiPurchaseSuccessz"){
    $response = $response1;
    //echo $response;
}elseif ($_SERVER['HTTP_X_PFI_STATUS'] == "PfiPurchaseSuccessa"){
    //$var = '1';
}else{
    $response = $response1;
    //echo $response1;
};

echo $response;


?>