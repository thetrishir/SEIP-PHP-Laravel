<?php
require_once 'vendor/autoload.php';

use App\classes\About;
use App\classes\Home;
use App\classes\Products;


if (isset($_GET['page'])) {
    include 'pages/includes/header.php';
    if ($_GET['page'] == 'home') {
        // $products = new Products;
        // echo '<pre>';
        // print_r($products);
        $home = new Home;
        $home->index();
    } elseif ($_GET['page'] == 'about') {
        $about = new About;
        $about->index();
    } else {
        header("location: route.php?page=home");
    }
    include 'pages/includes/footer.php';
} else {
    header("location: route.php?page=home");
}
