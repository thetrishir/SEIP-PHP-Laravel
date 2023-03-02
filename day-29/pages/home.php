<section>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php
            foreach ($product->carouselImages  as $carImg) {
            ?>
                <div class="carousel-item 
                <?php
                if ($carImg['id'] == 1) {
                    echo 'active';
                }
                ?>" data-bs-interval="1000">
                    <img src="<?php echo $carImg['image']; ?> " class="d-block w-100" alt="..." height="500px">
                </div>
            <?php
            }
            ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    </div>
</section>
<section class="py-5">
    <div class="container-fluid">
        <div class="row">
            <h1 class="text-center mb-5">All Products</h1>
        </div>
        <div class="row">
            <?php
            foreach ($product->products as $key => $value) {
            ?>
                <div class="col-md-3">
                    <div class="card my-3 w-100">
                        <div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <?php
                                foreach ($value['image'] as $key => $image) {
                                ?>
                                    <div class="carousel-item 
                                    <?php
                                    if ($key == 0) {
                                        echo 'active';
                                    }
                                    ?>" data-bs-interval="1000">
                                        <img src="<?php echo $image; ?> " class="d-block w-100" alt="..." height="200px">
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $value['title']; ?> ( <?php echo $value['price'] ?> &dollar; )</h5>
                            <p class="card-text"><?php echo $value['desc']; ?></p>
                            <a href="#" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
            <?php

            }
            ?>
        </div>
    </div>
</section>