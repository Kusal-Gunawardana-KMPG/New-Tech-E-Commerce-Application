<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile | New Tech</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" type="text/css" href="semantic.css">
    <link rel="icon" href="resources/LOGO.gif" />
</head>

<body style="background-color: gray;">

    <div class="col-12  mb-5">
        <?php include "header2.php"; ?>
    </div>

    <br />

    <div class="hidden1 "></div>
    <div class="hidden2 d-none d-sm-block d-md-none"></div>
    <div class="hidden3 d-block d-sm-none"></div>


    <div class="container-fluid">
        <div class="row ">
            <div class="col-12  offset-lg-4 col-lg-8 ">

                <div class="ui card p-4">
                    <div class="image">
                        <img src="resources/user2.png">
                    </div>
                    <div class="content">
                        <a class="header">Mihidu Siriwardena</a>
                        <div class="meta">
                            <span class="date">Joined in 2022</span>
                        </div>
                        <div class="description">
                        Mihidu Siriwardena is a Premium Member <BR/>
                        with More than 30 Orders
                        </div>
                    </div>
                    <div class="extra content">
                        <a>
                        <i class="bi bi-receipt-cutoff"></i>
                            671 + Views
                        </a>
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