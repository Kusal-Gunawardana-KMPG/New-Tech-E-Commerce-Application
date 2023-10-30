<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" type="text/css" href="semantic.css">
    <link rel="icon" href="resources/LOGO.gif" />

    <title>Products | New Tech</title>
</head>

<body style="background-color: gray;">

    <div class="col-12  mb-5">
        <?php include "header.php"; ?>
    </div>

    <br />

    <div class="hidden1 "></div>
    <div class="hidden2 d-none d-sm-block d-md-none"></div>
    <div class="hidden3 d-block d-sm-none"></div>
    <div class="row align-items-center justify-content-center " style="border-radius:20px ;">
        <div class=" col-lg-6 col-12 offset-col-lg-3 border border-white p-3">

            <div class="card ">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="resources/camera/camera.jfif" class="d-block w-100" alt="Camera">
                        </div>
                        <div class="carousel-item">
                            <img src="resources/camera/camera2.png" class="d-block w-100" alt="Camera">
                        </div>
                        <div class="carousel-item">
                            <img src="resources/camera/camera3.png" class="d-block w-100" alt="Camera">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="col-12 row align-items-center justify-content-center">
                    <div class="col-md-8">
                        <div class="card-body">
                            <div class="card-body text-center">
                                <h5 class="card-title">EOS R10 Camera<br /><span class="badge bg-info">In Stock</span></h5>
                                <span class="card-text text-secondary" style="font-weight: bolder;">Rs 49500.00</span> <br />
                                <span class="card-text text-dark fw-bold">03 Items Available</span><br />
                                <button onclick="singleproductview();" class="col-12 btn btn-success ">Buy Now</button>
                                <button class="ui inverted red button col-12 mt-2"><a href="https://asia.canon/en/consumer/eos-r10-rf-s18-45mm-f-4-5-6-3-is-stm/product">Add to Cart</a></button>
                                <div class="ui steps">
                                    <a class="active step">
                                        <div class="content">
                                            <div class="title">Shipping</div>
                                            <div class="description">Choose your shipping options</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <p class="card-text">
                            <h2>Born Explorer</h2>
                            <b>Explore infinite possibilities with the lightweight EOS R10. With a new APS-C sensor on the revolutionary RF mount, you get a telephoto effect of approximately 1.6x while maintaining high resolution.</b>
                            <br />
                            <br />
                            This mirrorless camera shoots up to 23 frames per second and weighs only approximately 429g.
                            <br />
                            <ul>
                                <li>Approx. 24.2MP APS-C CMOS sensor with 1.6x crop factor</li>
                                <li>Up to 23 fps continuous shooting with AF/AE tracking</li>
                                <li>4K UHD (6K oversampling) and 4K 60p</li>
                            </ul>
                            </p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="hidden2 d-none d-sm-block d-md-none"></div>
    <div class="hidden3 d-block d-sm-none"></div>

    <br />


    <script src="bootstrap.js"></script>
    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
</body>

</html>