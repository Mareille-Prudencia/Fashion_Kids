<?php

include "config.php";

if (isset($_POST['login'])){

    $clientEmail = $_POST["emailAddress"];
    $clientPassword = $_POST["password"];

    //compare
    $sql = "SELECT * FROM `clients` WHERE emailAddress='$clientEmail'";

    $result = mysqli_query($link,$sql);


    if ($result){

        $data = mysqli_num_rows($result);

        if ($data==1){

            while ($row=mysqli_fetch_array($result)){

                $id = $row['id'];
                $emailAddress = $row["emailAddress"];
                $password = $row["password"];
                $firstName = $row["firstName"];

                //verify password

                if (password_verify($clientPassword,$password)){
                    session_start();
                    $_SESSION["loggedin"]=true;
                    $_SESSION["id"]=$id;
                    $_SESSION["username"]=$firstName;

                    header("location:index.php");

                }else{
                    echo "Passwords are not matching";
                }

            }

        }else{
            echo "No such email address found";
        }
    }
}