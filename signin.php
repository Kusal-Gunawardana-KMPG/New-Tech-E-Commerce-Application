

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In | New Tech </title>

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
                    <div class="col-3 ">
                        <p style="color: white; font-family: honey; font-weight: bold; font-size: 30px; font-style: italic;">Sign In</p>
                    </div>
                    <div class="col-12 col-lg-12" style="height: 20px;"></div>
                    <div>
                        <div class="p-5" style="background-color: white; border-radius: 10px; align-items: center;">
                            <div class="col-12">
                                <label class="form-label justify-content-center" style="font-weight:bolder;">Email</label>
                                <input type="email" class="form-control" />
                            </div>
                            <div class="col-12">
                                <label class="form-label justify-content-center" style="font-weight:bolder;">Password</label>
                                <input type="password" class="form-control" />
                            </div>
                            <div class="row justify-content-center p-1">
                                <div class="col-8 col-lg-6 ">
                                    <div class="form-check ">
                                        <input class="form-check-input " type="checkbox" />
                                        <label class="form-check-label">Remember Me</label>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-5 col text-end align-self-end ">
                                    <a href="#" class="link-primary">Forgot Password?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12  offset-col-lg-3 mt-2 mb-2">
                    <div class="row justify-content-center">
                        <div class="col-12 ">
                            <div class="col-12 col-lg-12 d-grid p-1">
                                <button class="ui inverted grey button" onclick="home();"><b style="font-size: larger;">Sign In</b></button>
                            </div>
                            <div class="col-12 col-lg-12 d-grid p-1">
                                <button class="ui inverted brown button " onclick="signup();"><b style="font-size: larger;">New to eShop ? Join Now</b></button>
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