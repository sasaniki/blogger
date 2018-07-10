<?php
include('way2sms-api.php');

//if (isset($_REQUEST['uid']) && isset($_REQUEST['pwd']) && isset($_REQUEST['phone']) && isset($_REQUEST['msg'])) {
    //$res = sendWay2SMS($_REQUEST['uid'], $_REQUEST['pwd'], $_REQUEST['phone'], $_REQUEST['msg']);
    $uid=trim('9066369651');
    $pwd=trim('chiranthan6991');
    $phone=trim('9164226249');
    $msg=trim('hi');
    $res = sendWay2SMS($uid, $pwd, $phone, $msg);
    if (is_array($res))
        echo $res[0]['result'] ? 'true' : 'false';
    else
        echo $res;
    exit;
//}
