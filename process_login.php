<?php
    $usernameLogin = $_POST["usernameLogin"];
    $passwordLogin = $_POST["passwordLogin"];
    $userFound = 0;
    $passFound = 0;
    $namaLogin;


    // Pengambilan data dari Database
    if(file_exists("dataPengguna.txt")){
        $file = file_get_contents("dataPengguna.txt");
        $dataPengguna = unserialize($file);   
    }
    if(file_exists("banyakData.txt")){
        $banyakData = file_get_contents("banyakData.txt"); 
    }


    //Pengecekan Username
    if (empty($usernameLogin)) {
        $usernameErrLog = "Username Invalid!";
    }
    else {
        $userFound = array_search($usernameLogin, array_column($dataPengguna, "username"));
        if($usernameLogin != $dataPengguna[$userFound]["username"]) {
            $usernameErrLog = "Username invalid!";
        }
    }
    //Pengecekan Password
    if (empty($passwordLogin)) {
        $passwordErrLog = "Password invalid!";
    }
    else {
        $passFound = array_search($passwordLogin, array_column($dataPengguna, "password"));
        if($passwordLogin != $dataPengguna[$passFound]["password"]) {
            $passwordErrLog = "Password invalid!";
        }
        else if($userFound != $passFound) {
            $passwordErrLog = "Username and password not match!";
        }
    }
    //Mencari nama
    $namaLogin = $dataPengguna[$userFound]["nama"];


    if(empty($usernameErrLog) && empty($passwordErrLog)) {
        header("Location:dashboard.php?usernameLogin=$usernameLogin&namaLogin=$namaLogin");
    }
    else {
        include("login.php");
    }
?>
