<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> My Cart | New Tech</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" type="text/css" href="semantic.css">
    <link rel="icon" href="resources/LOGO.gif" />
</head>

<body>
    <div class="col-12  mb-5">
        <?php include "header2.php"; ?>
    </div>

    <br />

    <div class="hidden1 "></div>
    <div class="hidden2 d-none d-sm-block d-md-none"></div>
    <div class="hidden3 d-block d-sm-none"></div>

    <div class="container-fluid" style="background-color: black;">
        <div class="row">

            <div class="col-12 border border-1 border-primary rounded mb-3" style="background-color: rgb(189, 192, 195);">
                <div class="row">

                    <div class="col-12">
                        <label class="form-label fs-1 fw-bolder" style="color: maroon;">Cart <i style="text-shadow: 4px 2px 10px white;" class="bi bi-cart4 fs-1 text-success" ></i></label>
                    </div>

                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 emptyCart"></div>

                            <div class="offset-lg-4 col-12 col-lg-4 d-grid mb-3">
                                <a href="home.php" class="btn btn-outline-primary fs-3 fw-bold" style="border-radius:30px ;">
                                    Start Shopping
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-12">
                        <hr />
                    </div>

                    <div class="col-12">
                        <div class="row">
                            <div class=" col-12 col-lg-6 mb-3">
                                <input type="text" class="form-control" placeholder="Search Your Cart From Here..." />
                            </div>
                            <div class="col-12 col-lg-2 d-grid mb-3">
                                <button class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <hr />
                    </div>


                    <div class="col-12 col-lg-9">
                        <div class="row">



                            <div class="card mb-3 mx-0 col-12">
                                <div class="row g-0">

                                    <hr>

                                    <div class="col-md-5 offset-lg-2">

                                        <div class=" col-12 col-lg-12 bg-body rounded mb-2">
                                            <div class="row">
                                                <div class="text-center">
                                                    <div class="row">
                                                        <div class=" mt-5">
                                                            <span class="fw-bold text-black-50"><i class="bi bi-search" style="font-size: 100px;"></i></span>
                                                        </div>
                                                        <div class=" mt-3 mb-5">
                                                            <span class="h1 text-black-50 fw-bold">No Items Added Yet...</span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-2">
                                        <div class="card-body d-grid">
                                            <a class="btn btn-outline-success mb-2" onclick="home();">Add</a>
                                            <a class="ui red button">Remove</a>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="col-md-12 mt-3 mb-3">
                                        <div class="row">
                                            <div class="col-6 col-md-6">
                                                <span class="fw-bold fs-5 text-black-50">Requested Total <i class="bi bi-info-circle"></i></span>
                                            </div>
                                            <div class="col-6 col-md-6 text-end">
                                                <span class="fw-bold fs-5 text-black-50">Rs.00.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>






                        </div>
                    </div>

                    <div class="col-12 col-lg-3">
                        <div class="row">

                            <div class="col-12">
                                <label class="form-label fs-3 fw-bold">Summary</label>
                            </div>

                            <div class="col-12">
                                <hr />
                            </div>

                            <div class="col-6 mb-3">
                                <span class="fs-6 fw-bold">items ()</span>
                            </div>

                            <div class="col-6 text-end mb-3">
                                <span class="fs-6 fw-bold">Rs.00.00</span>
                            </div>

                            <div class="col-6">
                                <span class="fs-6 fw-bold">Shipping</span>
                            </div>

                            <div class="col-6 text-end">
                                <span class="fs-6 fw-bold">Rs.00.00</span>
                            </div>

                            <div class="col-12 mt-3">
                                <hr />
                            </div>

                            <div class="col-6 mt-2">
                                <span class="fs-4 fw-bold">Total</span>
                            </div>

                            <div class="col-6 mt-2 text-end">
                                <span class="fs-4 fw-bold">Rs.00.00</span>
                            </div>

                            <div class="col-12 mt-3 mb-3 d-grid">
                                <button class="btn btn-info fs-5 fw-bold" style="border-radius:30px ;">CHECKOUT</button>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <br />
    <?php include "footer.php"; ?>

    <script src="bootstrap.js"></script>
    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
</body>

</html>