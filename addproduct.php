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
    <link rel="stylesheet" type="text/css" href="semantic.min.css">

    <title>Add Product | New Tech</title>
</head>

<body class="add-product-body">
    <div class="col-12  mb-5">
        <?php include "header.php"; ?>
    </div>

    <br />

    <div class="hidden1 "></div>
    <div class="hidden2 d-none d-sm-block d-md-none"></div>
    <div class="hidden3 d-block d-sm-none"></div>
    <div class="container-fluid">
        <div class="row gy-3">

            <div class="col-12">
                <div class="row">

                    <br />

                    <div class="col-12 text-center">
                        <h2 class="h2 text-danger fw-bold">Add New Product</h2>
                    </div>

                    <br />

                    <div class="col-12">
                        <div class="row">

                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12">
                                        <label class="form-label fw-bold" style="font-size: 20px;">
                                            Product Title
                                        </label>
                                    </div>
                                    <div class="offset-0 offset-lg-2 col-12 col-lg-8">
                                        <input type="text" class="form-control" id="title" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <hr class="border-dark" />
                            </div>

                            <div class="col-12 col-lg-4 border-end border-dark">
                                <div class="row">

                                    <div class="col-12">
                                        <label class="form-label fw-bold" style="font-size: 20px;">Product Category</label>
                                    </div>

                                    <div class="col-12">
                                        <select class="form-select text-center">
                                            <option>Category</option>
                                            <option>Mobile Phones</option>
                                            <option>Camera</option>
                                            <option>Laptops</option>
                                            <option>Headphones</option>
                                            <option>Power Banks</option>
                                            <option>Earbuds</option>
                                            <option>Parts</option>
                                            <option>Other</option>

                                        </select>
                                    </div>

                                </div>
                            </div>

                            <div class="col-12 col-lg-4 border-end border-dark">
                                <div class="row">

                                    <div class="col-12">
                                        <label class="form-label fw-bold" style="font-size: 20px;">Select Product Brand</label>
                                    </div>

                                    <div class="col-12">
                                        <select class="form-select text-center">
                                            <option value="0">Select Brand</option>

                                            <option>Nokia</option>
                                            <option>Samsung</option>
                                            <option>Apple</option>

                                        </select>
                                    </div>

                                </div>
                            </div>

                            <div class="col-12 col-lg-4 border-end border-dark">
                                <div class="row">

                                    <div class="col-12">
                                        <label class="form-label fw-bold" style="font-size: 20px;">Add Product Model</label>
                                    </div>

                                    <div class="col-12">
                                        <input type="text" class="form-control" id="title" />
                                    </div>

                                </div>
                            </div>


                            <div class="col-12">
                                <hr class="border-dark" />
                            </div>

                            <div class="col-12">
                                <div class="row">

                                    <div class="col-12 col-lg-4 border-end border-dark">
                                        <div class="row">
                                            <div class="col-12">
                                                <label class="form-label fw-bold" style="font-size: 20px;">Select Product Condition</label>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check form-check-inline mx-5">
                                                    <input class="form-check-input" type="radio" checked />
                                                    <label class="form-check-label fw-bold">Brandnew</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" />
                                                    <label class="form-check-label fw-bold">Used</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-lg-4 border-end border-dark">
                                        <div class="row">
                                            <div class="col-12">
                                                <label class="form-label fw-bold" style="font-size: 20px;">Add Product Colour</label>
                                            </div>
                                            <div class="col-12">

                                                <select class="form-select ">
                                                    <option>Select Colour</option>

                                                    <option>black</option>
                                                    <option>White</option>
                                                    <option>Golden</option>
                                                    <option>red</option>
                                                    <option>Green</option>
                                                    <option>Blue</option>

                                                </select>
                                            </div>

                    
                                        </div>
                                    </div>

                                    <div class="col-12 col-lg-4">
                                        <div class="row">
                                            <div class="col-12">
                                                <label class="form-label fw-bold" style="font-size: 20px;">Add Product Quantity</label>
                                            </div>
                                            <div class="col-12">
                                                <input type="number" class="form-control" />
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-12">
                                <hr class="border-dark" />
                            </div>

                            <div class="col-12">
                                <div class="row">

                                    <div class="col-6 border-end border-dark">
                                        <div class="row">
                                            <div class="col-12">
                                                <label class="form-label fw-bold" style="font-size: 20px;">Price</label>
                                            </div>
                                            <div class="offset-0 offset-lg-2 col-12 col-lg-8">
                                                <div class="input-group mb-2 mt-2">
                                                    <span class="input-group-text">Rs.</span>
                                                    <input type="text" class="form-control" />
                                                    <span class="input-group-text">.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="row">

                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="offset-0 offset-lg-2 col-2 pm pm1"></div>
                                                    <div class="col-2 pm pm2"></div>
                                                    <div class="col-2 pm pm3"></div>
                                                    <div class="col-2 pm pm4"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-12">
                                <hr class="border-dark" />
                            </div>

                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12">
                                        <label class="form-label fw-bold" style="font-size: 20px;">Product Description</label>
                                    </div>
                                    <div class="col-12">
                                        <textarea cols="30" rows="15" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <hr class="border-dark" />
                            </div>

                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12">
                                        <label class="form-label fw-bold" style="font-size: 20px;">Add Some Images Describing Product</label>
                                    </div>
                                    <div class="offset-lg-3 col-12 col-lg-6">
                                        <div class="row">
                                            <div class="col-4 border border-dark rounded">

                                            </div>
                                            <div class="col-4 border border-dark rounded">

                                            </div>
                                            <div class="col-4 border border-dark rounded">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="offset-lg-3 col-12 col-lg-6 d-grid mt-3" style="background-color: black; border-radius: 20px;">
                                        <input type="file" class="d-none" multiple />
                                        <label class="ui inverted red basic button">Upload Images</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <hr class="border-dark" />
                            </div>



                            <div class="offset-lg-4 col-12 col-lg-4 d-grid mt-3 mb-3">
                                <button class="positive ui button">Save Product</button>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <br />

        </div>
    </div>

    <?php include "footer.php"; ?>

    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
</body>

</html>