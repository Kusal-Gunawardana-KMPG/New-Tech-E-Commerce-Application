<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  Administrator Login | New Tech </title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" type="text/css" href="semantic.css">
    <link rel="icon" href="resources/LOGO.gif" />
</head>

<body class="signin-background">

    <div class="col-12 p-3 ">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 ">
                <div class="col-12 LOGO " style="text-shadow: 2px 2px 5px white;"></div>
                <div class="row justify-content-center align-items-center">
                    <div class="col-3 col-lg-6">
                        <p style="color: white; font-family: honey; font-weight: bold; font-size: 30px; ">Administrator Login</p>
                    </div>
                    <div class="col-12 col-lg-12" style="height: 10px;"></div>
                    <div>
                        <div class="p-5" style="background-color: rgb(220, 222, 226); border-radius: 10px; align-items: center;">
                            <div class="col-12">
                                <label class="form-label justify-content-center mt-2" style="font-weight:bolder;">Administrator ID</label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="col-12">
                                <label class="form-label justify-content-center mt-2" style="font-weight:bolder;">Email Address</label>
                                <input type="email" class="form-control" />
                            </div>
                            <div class="col-12"> 
                                <label class="form-label justify-content-center mt-2" style="font-weight:bolder;">Verification Code</label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="col-12">
                                <label class="form-label justify-content-center mt-2" style="font-weight:bolder;">Password</label>
                                <input type="password" class="form-control" />
                            </div>
                            <div class=" p-2">
                            </div>
                            <div class="col-12 row justify-content-center align-items-center ">
                                <div class="col-12 col-lg-4 ">
                                    <a href="#" style="font-weight:bold ; font-size: medium;" class="link-primary">Forgot Password ?</a>
                                </div>
                            </div>
                            <div class="col-12 row justify-content-center align-items-center mt-3">
                                <div class="col-12 col-lg-6 d-grid p-1">
                                    <button class="ui inverted brown button " onclick="adminlogin();"><b style="font-size: x-large;"> -  Log In  - </b></button>
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