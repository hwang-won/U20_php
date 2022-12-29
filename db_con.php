<?php
    $server_name = 'localhost';
    $username = 'jihoon';
    $password = '1026baby';
    $dbname = 'u20';

    // create connection
    // $con = mysqli_connect("127.0.0.1","jihoon","1026baby","u20");
    $con = mysqli_connect($server_name,$username,$password,$dbname);

    // check connection
    if(mysqli_connect_errno()){
        echo "Failed to connect : " . mysqli_connect_error();
    }else{
    //     $output = "db connect success";
    //     $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . ');';
    // if ($with_script_tags) {
    //     $js_code = '<script>' . $js_code . '</script>';
    // }
    // echo $js_code;
    }
?>