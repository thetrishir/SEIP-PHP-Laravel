<?php

require_once('vendor/autoload.php');

use App\classes\Home;
use App\classes\About;
use App\classes\Products;
use App\classes\Calculator;


if (isset($_GET['page'])) {
    include 'pages/includes/header.php';
    if ($_GET['page'] == 'home') {
        $product = new Products;
        $home = new Home;
        $home->index($product);
    } elseif ($_GET['page'] == 'about') {
        $about = new About();
        $about->index();
    } elseif ($_GET['page'] == 'project') {
        $cal = new Calculator($_POST);
        $result = $cal->calculator();
        include 'pages/project.php';
    } else {
        header("Location: route.php?page=home");
    }
    include 'pages/includes/footer.php';
} else {
    include 'pages/includes/header.php';
    header("Location: route.php?page=home");
    include 'pages/includes/footer.php';
}
