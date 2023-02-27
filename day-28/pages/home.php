<?php
require_once 'vendor/autoload.php';
use App\classes\Products;

$p = new Products;
foreach ($p->products as $value) {
    $proArray[] = $value['title'];
    $index=0;
}
?>
<section class="container-fluid p-0">
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/cows-flying.jpg" class="d-block w-100" height="400px" alt="Carousel-1">
            </div>
            <div class="carousel-item">
                <img src="assets/img/holy-cow.jpg" class="d-block w-100" height="400px" alt="Carousel-2">
            </div>
            <div class="carousel-item">
                <img src="assets/img/holy-cow.jpg" class="d-block w-100" height="400px" alt="Carousel-3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<section>
    <div class="container">
        <div class="row py-5">
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="assets/img/holy-cat.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php
                                                    echo $proArray[$index++];
                                                ?></h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="assets/img/holy-cat.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php
                                                    echo $proArray[$index++];
                                                ?></h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="assets/img/holy-cat.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php
                                                    echo $proArray[$index++];
                                                ?></h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="assets/img/holy-cat.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php
                                                    echo $proArray[$index++];
                                                ?></h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>