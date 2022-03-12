<?php

$link = mysqli_connect("localhost","root","", "fashionkids");

if ($link == false){
    die("Error connecting to server".mysqli_connect_error($link));
}