<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Advanced Search | New Tech</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" type="text/css" href="semantic.css">
    <link rel="icon" href="resources/LOGO.gif" />
</head>

<body style="background-color: gray;">


    <div class="container-fluid">
        <div class="row">



            <div class="col-12  mb-2">
                <div class="col-12  mb-5">
                    <?php include "header.php"; ?>
                </div>
                <br />

                <div class="hidden1 "></div>
                <div class="hidden2 d-none d-sm-block d-md-none"></div>
                <div class="hidden3 d-block d-sm-none"></div>
                <div class="row">
                    <div class="offset-lg-4 col-12 col-lg-4">
                        <div class="row">
                            <div class="col-2">
                                <div class="mt-2 mb-2 logo" style="height: 80px;"></div>
                            </div>
                            <div class="col-10 text-center">
                                <p class="fs-1 text-black-50 fw-bold mt-3 pt-2">Advanced Search</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="offset-lg-2 col-12 col-lg-8 bg-body rounded mb-2 " style="border-radius: 10px;">
                <div class="row">

                    <div class="offset-lg-1 col-12 col-lg-10">
                        <div class="row mt-3 ">
                            <div class="col-12 col-lg-10  mb-1">
                                <input type="text" class="form-control" placeholder="Start Typing Here..." />
                            </div>
                            <div class="col-12 col-lg-2 mt-2 mb-1 d-grid">
                                <button type="button" class="btn btn-primary position-relative">
                                    Search
                                    <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                                        <span class="visually-hidden">Search</span>
                                    </span>
                                </button>
                            </div>
                            <div class="col-12">
                                <hr class="border border-3 border-primary" />
                            </div>
                        </div>
                    </div>

                    <div class="offset-lg-1 col-12 col-lg-10 mb-3">
                        <div class="row">

                            <div class="col-12">
                                <div class="row">

                                    <div class="col-12 col-lg-6 mb-2">
                                        <input type="text" class="form-control" placeholder="Price From..." />
                                    </div>

                                    <div class="col-12 col-lg-6 mb-2">
                                        <input type="text" class="form-control" placeholder="Price To..." />
                                    </div>

                                </div>
                            </div>

                        </div>


                    </div>

                </div>
            </div>

            <div class="offset-lg-2 col-12 col-lg-8 bg-body rounded mb-2">
                <div class="row">
                    <div class="offset-4 offset-lg-8 col-8 col-lg-4 mt-2 mb-2">
                        <select class="form-select border border-start-0 border-top-0 border-end-0 border-2 border-primary shadow-none" id="s">
                            <option>Sort By</option>
                            </option>
                            <option>Best Match</option>
                            <option>Price High to Low</option>
                            <option>Price Low to High</option>
                            <option>In Stock</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="offset-lg-2 col-12 col-lg-8 bg-body rounded mb-2">
                <div class="row">
                    <div class="offset-lg-1 col-12 col-lg-10 text-center">
                        <div class="row" id="view_area">
                            <div class="offset-5 col-2 mt-5">
                                <span class="fw-bold text-black-50"><i class="bi bi-search" style="font-size: 100px;"></i></span>
                            </div>
                            <div class="offset-3 col-6 mt-3 mb-5">
                                <span class="h1 text-black-50 fw-bold">No Items Searched Yet...</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <?php include "footer.php"; ?>


    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>

</body>

</html>