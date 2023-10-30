<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watchlist | New Tech</title>

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


    <div class="hidden2 d-none d-sm-block d-md-none"></div>
    <div class="hidden3 d-block d-sm-none"></div>

    <div style="background-color: black;">

        <div class="container-fluid" style="background-color: rgb(189, 192, 195);">
            <div class="row">

                <div class="col-12">
                    <div class="row">
                        <div class="col-12 border border-1 border-primary rounded mb-5">
                            <div class="row">

                                <div class="col-12 col-lg-12">
                                    <hr />
                                </div>

                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12 emptyCart" style="text-shadow: 4px 2px 10px white;"></div>

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

                                <div class="col-11 col-lg-2 border-0 border-end border-1 border-danger">

                                    <nav class="nav nav-pills flex-column">
                                        <a class="nav-link active" aria-current="page" href="watchlist.php">My Watchlist</a>
                                        <a class="nav-link" href="mycart.php">My Cart</a>

                                    </nav>
                                </div>

                                <div class="col-12 col-lg-9">
                                    <div class="row">
                                        <div class="col-12 emptyView"></div>

                                        <div class=" col-12 col-lg-12 bg-body rounded mb-2" style="border-radius:30px ;">
                                            <div class="row">
                                                <div class="text-center">
                                                    <div class="row">
                                                        <div class=" mt-5">
                                                            <span class="fw-bold text-black-50"><i class="bi bi-search" style="font-size: 100px; "></i></span>
                                                        </div>
                                                        <div class=" mt-3 mb-5">
                                                            <span class="h1 text-black-50 fw-bold">You Haven't Added Products Yet...</span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php include "footer.php"; ?>


    <script src="bootstrap.js"></script>
    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
</body>

</html>