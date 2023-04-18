<?php
include_once 'nav.php'
?>
<section class="banner-wrapper">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block slide-img w-100 " src="/images/slide1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block slide-img w-100  " src="/images/slide2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block slide-img w-100 " src="/images/slide3.jpg" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
</section>


<!-- ABOUT US -->
<div style="background-color: #f5f5f5;">
    <div class="container my-5">
        <h1 class="text-center mb-5">About Us</h1>
        <div class="row">
            <div class="col-md-6 ">

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod nunc euismod, egestas magna eget, malesuada dolor. Aenean auctor ullamcorper enim quis mollis. Nunc feugiat, risus in commodo feugiat, metus nisi bibendum nulla, quis pulvinar libero mi eget lacus. Duis sodales, nunc et efficitur luctus, nunc magna bibendum lacus, vel blandit felis arcu ac lectus.</p>
            </div>
            <div class="col-md-6">
                <img src="/images/about.png" alt="About Us" class="img-fluid">
            </div>
        </div>
    </div>
</div>
<!-- SERVICES PART -->
<div style="background-color: white;">
    <div class="container my-5 mt-10">
        <h1 class="text-center mb-5">Our Services</h1>
        <p class="text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem esse maxime nemo dolore, alias reprehenderit vel nesciunt minus veniam vero animi provident pariatur totam. Explicabo tenetur dolorem cum nihil ipsa accusamus?</p>
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="/images/service_WD.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Web Development</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod nunc euismod, egestas magna eget, malesuada dolor. Aenean auctor ullamcorper enim quis mollis.</p>
                        <a href="single-post.php" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="/images/service_GD.webp" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Graphic Design</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod nunc euismod, egestas magna eget, malesuada dolor. Aenean auctor ullamcorper enim quis mollis.</p>
                        <a href="single-post.php" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="/images/Service_DM.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Digital Marketing</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod nunc euismod, egestas magna eget, malesuada dolor. Aenean auctor ullamcorper enim quis mollis.</p>
                        <a href="single-post.php" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- PORTFOLIO PART -->

<div class="container my-5 " style="background-color: #f5f5f5;">
    <h1 class="text-center mb-5">Our Portfolio</h1>
    <p class="text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem esse maxime nemo dolore, alias reprehenderit vel nesciunt minus veniam vero animi provident pariatur totam. Explicabo tenetur dolorem cum nihil ipsa accusamus?</p>
    <div class="row mt-5">
        <div class="col-md-4 text-center my-4">
            <div class="card custom-card">
                <img src="/images/portfolio1.avif" class="card-img-top" alt="First Portfoilo">
                <div class="card-body">
                    <h5 class="card-title">Graphics Design</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="/single-post.php" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center my-4">
            <div class="card custom-card">
                <img src="/images/portfolio2.jpg" class="card-img-top" alt="Second Portfoilo">
                <div class="card-body">
                    <h5 class="card-title">Dynamic Web Page</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="/single-post.php" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center my-4">
            <div class="card custom-card">
                <img src="/images/portfolio3.jpg" class="card-img-top" alt="First Portfoilo">
                <div class="card-body">
                    <h5 class="card-title">Animation Design</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="/single-post.php" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        
        
    </div>
</div>




<?php
include_once 'footer.php'
?>