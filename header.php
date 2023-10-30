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

    <style>
        body {
            font-family: "Lato", sans-serif;
        }

        .sidepanel {
            width: 0;
            position: fixed;
            z-index: 1;
            height: 100%;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidepanel a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidepanel a:hover {
            color: #f1f1f1;
        }

        .sidepanel .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
        }

        .openbtn {
            font-size: 20px;
            cursor: pointer;
            background-color: #111;
            color: white;
            padding: 10px 15px;
            border: none;
        }

        .openbtn:hover {
            background-color: #444;
        }
    </style>

</head>

<body>
    <div class="fixed-top">
        <div class="col-12 ">
            <div class="row  mb-1">

                <nav class="navbar navbar-dark bg-dark ">

                    <div class="offset-lg-7 offset-1 col-6 col-lg-5 align-self-start ">

                        <span class="text-lg-start"><a href="#" class="col-lg-1 header-topic "> New Tech</a></span> |
                        <div class="ui buttons">
                            <button class="ui button"><b style="font-size:medium;" onclick="index();">SignOut</b></button>
                            <div class="or"></div>
                            <button class="ui positive button"><b onclick="signin();" style="font-size:medium;">SignIn</b></button>
                        </div>
                        | <span class="text-lg-start fw-bold col-lg-2 col-12">
                            <b style="font-size:small;"><a href="#" style="text-shadow: 2px 2px 4px #000000; color:rgb(194, 194, 240);">Help and Contact</a></b>
                        </span>

                    </div>


                </nav>

                <div class="col-lg-12 col-12 " style="margin-top:-5px;">
                    <div id="mySidepanel" class="sidepanel">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                        <a href="myprofile.php">My Profile</a>
                        <a href="#">Categories</a>
                        <a href="#">Daily Deals</a>
                        <a href="#">Explore</a>
                        <a href="#">Customer Care</a>
                        <a href="#">Contact Us</a>
                        <a href="#">Settings</a></a>
                    </div>
                    <div class="row" style="background-color: black;">

                        <div class="col-lg-2 col-3">
                            <button class="openbtn" onclick="openNav()">☰ MENU</button>
                        </div>

                        <div class="align-self-end">
                            <nav class="navbar navbar-light bg-light">
                                <div class="container-fluid">
                                    <a class="navbar-brand">Search for anything</a>
                                    <button type="button" class="btn btn-outline-dark" onclick="advancedsearch();"> Advanced Search</button>
                                    <form class="d-flex">
                                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                        <button class="btn btn-outline-success" type="submit">Search</button>
                                    </form>
                                </div>
                            </nav>
                        </div>

                    </div>
                    <script>
                        function openNav() {
                            document.getElementById("mySidepanel").style.width = "250px";
                        }

                        function closeNav() {
                            document.getElementById("mySidepanel").style.width = "0";
                        }
                    </script>
                </div>
            </div>



        </div>
    </div>
</body>

</html>