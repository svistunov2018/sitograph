<?php
// *** ./index.php
// *** DO NOT EDIT THIS FILE
// *** WILL BE OVERWRITTEN DURING UPDATE

include("load.php");



// create MSV Website instance
$website = new MSV_Website();

// start the instance
$website->start();


msv_start();


// MODULES
msv_load();




echo msv_output_page();






