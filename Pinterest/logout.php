<?php

include("index.html");
include 'connectdb.php';

session_start();
session_unset(); 

session_destroy();

?>