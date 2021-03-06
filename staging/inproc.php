<?php
header("Connection: keep-alive");
header("X-PFI-Status: ". $_SERVER['HTTP_X_PFI_STATUS']);

//test for sessionToken
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
        "ShowMarketingOptIn":false,
        "inProcessUrl":null,
        "Script":"inproctest()"
}';

$temp1 = '{
    "Error":null,
    "ShowMarketingOptIn":false,
    "inProcessUrl":null,
    "Script":"alreadySub()"
}';

$temp2 = '{
    "Error":null,
    "ShowMarketingOptIn":false,
    "inProcessUrl":null,
    "Script":"PfiInprocTest()"
}';

$temp3 = '{
    "Error":null,
    "ShowMarketingOptIn":false,
    "inProcessUrl":null,
    "Script":"MsisdnConfirmed()"
}';

$temp4 = '{
    "Error":null,
    "ShowMarketingOptIn":false,
    "inProcessUrl":null,
    "Script":"PurchaseButtonShown()"
}';

//respond

if ($_SERVER['HTTP_X_PFI_STATUS'] == "PfiAlreadySubscribed") {
    $response = $temp1;
    //echo $response;
}elseif ($_SERVER['HTTP_X_PFI_STATUS'] == "initiated"){
    $response = $response1;
}elseif ($_SERVER['HTTP_X_PFI_STATUS'] == "PfiConfirmButtonShown"){
    $response = $temp3;
    //echo $response;
}elseif ($_SERVER['HTTP_X_PFI_STATUS'] == "PfiPreviousPurchase"){
    $response = $temp1;
    //echo $response;
}elseif ($_SERVER['HTTP_X_PFI_STATUS'] == "PfiPurchaseButtonShown"){
    $response = $temp4;
}else{
    $response = $temp2;
    //echo $response1;
};

//echo $response1;
echo $response;

?>