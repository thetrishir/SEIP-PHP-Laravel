<section>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1575936123452-b67c3203c357?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8aW1hZ2V8ZW58MHx8MHx8&w=1000&q=80" class="d-block w-100" alt="..." height="400px">
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1575936123452-b67c3203c357?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8aW1hZ2V8ZW58MHx8MHx8&w=1000&q=80" class="d-block w-100" alt="..." height="400px">
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1575936123452-b67c3203c357?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8aW1hZ2V8ZW58MHx8MHx8&w=1000&q=80" class="d-block w-100" alt="..." height="400px">
            </div>
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
            foreach ($p->pro as $key => $product) {
    
            ?>
                    <div class="col-md-3">
                        <div class="card my-3 w-100">
                            <div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <?php
                                    foreach ($product['image'] as $key => $image) {
                                    ?>
                                        <div class="carousel-item <?php
                                                                    if ($key == 0) {
                                                                        echo 'active';
                                                                    }
                                                                    ?> " data-bs-interval="1000">
                                            <img src="<?php echo $image; ?> " class="d-block w-100" alt="..." height="200px">
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $product['title']; ?> ( <?php echo $product['price'] ?> &dollar; )</h5>
                                <p class="card-text"><?php echo $product['desc']; ?></p>
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