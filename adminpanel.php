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

    <title>Admin Panel | New Tech</title>
</head>

<body style="background-color: gray;">

    <div class="col-12  mb-5">
        <?php include "header.php"; ?>
    </div>

    <br />

    <div class="hidden1 "></div>
    <div class="hidden2 d-none d-sm-block d-md-none"></div>
    <div class="hidden3 d-block d-sm-none"></div>

    <div class="row align-items-center justify-content-center ">
        <div class="col-12 col-lg-12 row ">
            <div class="col-12 col-lg-6 offset-lg-3" style="background-color: brown; border-radius: 20px;">
                <div class="col-12   ui inverted basic button" style="border-radius:20px ; font-size: medium; font-weight: bold;" onclick="addproduct();"> Add New Product</div>
            </div>
        </div>

        <div style="height: 10px;"></div>

        <div class="col-12 col-lg-12 row ">
            <div class="col-12 col-lg-6 offset-lg-3" style="background-color: black; border-radius: 20px;">
                <div class="col-12   ui inverted basic button" style="border-radius:20px ; font-size: medium; font-weight: bold;" onclick="updateproduct();"> Update Products</div>
            </div>
        </div>

        <div style="height: 10px;"></div>

        <div class="col-12 col-lg-12 row ">

            <div class="col-12 col-lg-12 " style="background-color:darkblue; border-radius: 20px;">
                <div class="row align-items-center justify-content-center">
                    <div class="mt-3"></div>
                    <div class="col-12 col-lg-4 ui inverted olive basic button" style="border-radius:20px ; font-size: medium; font-weight: bold;" onclick="manageproducts();"> Manage Products</div>
                    <div class="col-12 col-lg-4 ui inverted olive basic button" style="border-radius:20px ; font-size: medium; font-weight: bold;" onclick="manageusers();"> Manage Users</div>
                    <div class="mt-3"></div>
                </div>
            </div>

        </div>



        <div style="height: 20px;"></div>

        <div class=" col-lg-10 col-12 offset-col-lg-1 border border-white p-3" style="border-radius:20px ;">
            <div class="col-lg-8 col-8 offset-2">
                <div class="ui icon message" style="border-radius:20px ;">
                    <i class="notched circle loading icon"></i>
                    <div class="content">
                        <div class="header">
                            Just one second....
                        </div>
                        <p>We're fetching that content for you.</p>
                    </div>
                </div>
            </div>

            <br /><br />

            <div class="col-lg-10 col-12  mt-4 offset-lg-2">
                <div class="ui four statistics">

                    <div class="statistic">
                        <div class="value">
                            <i class="bi bi-people-fill"></i>
                            479 +
                        </div>
                        <div class="label">
                            Users
                        </div>
                    </div>

                    <div class="statistic">
                        <div class="value">
                            120
                        </div>
                        <div class="label">
                            Products
                        </div>
                    </div>

                    <div class="statistic">
                        <div class="value">
                            <i class="bi bi-receipt"></i> 57
                        </div>
                        <div class="label">
                            Sellings
                        </div>
                    </div>

                </div>
            </div>

            <br />

            <div class="col-lg-10 col-12  mt-4 offset-lg-1" style="background-color: white; border-radius:30px ;">
                <div class="p-5">
                    <div class="row align-items-center justify-content-center col-lg-6 col-12">
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <button type="button" class="btn btn-danger disabled">Products</button>
                            <button type="button" class="btn btn-primary disabled">Sellings</button>
                            <button type="button" class="btn btn-success disabled">Users</button>
                        </div>
                        <br /><br />
                    </div>
                    <?php include "graph.php"; ?>
                </div>
            </div>


        </div>
    </div>


    <div class="hidden2 d-none d-sm-block d-md-none"></div>
    <div class="hidden3 d-block d-sm-none"></div>

    <br />
    <?php include "footer.php"; ?>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="semantic.min.js"></script>
    <script src="bootstrap.js"></script>
    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
</body>

</html>