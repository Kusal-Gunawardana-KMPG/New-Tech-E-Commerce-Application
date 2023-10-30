<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | New Tech</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" type="text/css" href="semantic.css">
    <link rel="icon" href="resources/LOGO.gif" />
</head>

<body class="signin-background">


    <div class="col-12 LOGO " style="text-shadow: 2px 2px 5px white;"></div>
    <div class="row justify-content-center align-items-center">
        
        <div class="col-12 col-lg-12" style="height: 10px;"></div>
        <div class="col-12 col-lg-6 p-5 mt-3 mb-3" style="background-color: white; border-radius: 10px; align-items: center;">
            <div class="row g-2">
                <div class="col-12">
                    <p class="row justify-content-center align-items-center signup-continue-header mb-4">Sign Up to Continue</p>
                </div>
                <div class="col-6">
                    <label class="form-label" style="font-weight:bolder;">First Name</label>
                    <input type="text" class="form-control" />
                </div>
                <div class="col-6">
                    <label class="form-label" style="font-weight:bolder;">Last Name</label>
                    <input type="text" class="form-control" />
                </div>
                <div class="col-12">
                    <label class="form-label" style="font-weight:bolder;">Email</label>
                    <input type="email" class="form-control" />
                </div>
                <div class="col-12">
                    <label class="form-label" style="font-weight:bolder;">Password</label>
                    <input type="password" class="form-control" />
                </div>
                <div class="col-6">
                    <label class="form-label" style="font-weight:bolder;">Mobile</label>
                    <input type="text" class="form-control" />
                </div>
                <div class="col-6">
                    <label class="form-label" style="font-weight:bolder;">Gender</label>
                    <select class="form-select">
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
                <div class="col-12 col-lg-6 d-grid">
                    <button class="btn btn-outline-primary" style="font-weight:bolder; font-size: large;"  onclick="home();">Sign Up</button>
                </div>
                <div class="col-12 col-lg-6 d-grid">
                    <button class="btn btn-outline-dark" style="font-weight:bolder; font-size:medium;" onclick="signin();">Already have an account ?<br/> Sign In</button>
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