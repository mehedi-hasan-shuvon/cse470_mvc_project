<?php

//require mysql connection
require('../model/database/DBController.php');

//require product class
require('../model/database/DBController.php');

//require Cart class
require('../model/database/DBController.php');

//DBcontroller object
$db= new DBController();

//product object
$product= new Product($db);
$product_shuffle=$product->getData();

//cart object
$Cart= new Cart($db);



