<?php

if(isset($_POST['submit'])) {

    $serverName = "(local)";
    $connectionInfo = array("Database"=>"CS_DB");
    $conn = sqlsrv_connect( $serverName, $connectionInfo);
    if( $conn ) {
        echo "Connection established.<br />";
    }else{
        echo "Connection could not be established.<br />";
        die( print_r( sqlsrv_errors(), true));
    }

    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $password_c = md5($_POST['password_c']);
    $email = $_POST['email'];

    $insert = "INSERT into Users(Username,Password,Email) VALUES('" . $username . "','" . $password . "','" . $email . "')";
    sqlsrv_query($conn, $insert);

}

?>