<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Volunteer Application</title>
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand"><a href="index.html"><img src="images/main.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">Users Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="donate.html">Riders Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Admin Login</a>
                    </li>

                </ul>

            </div>
    </nav>




    <div style="background-color:rgb(104, 238, 104);">

        <section class="vh-100">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-xl-9">
                        <form action="" method="post" enctype="multipart/form-data" >
                            @csrf
                            <h1 class="text-white mb-4">Apply for a Volunteer</h1>

                            <div class="card" style="border-radius: 15px;">
                                <div class="card-body">

                                    <div class="row align-items-center pt-4 pb-3">
                                        <div class="col-md-3 ps-5">

                                            <h6 class="mb-0">Full name</h6>

                                        </div>
                                        <div class="col-md-9 pe-5">

                                            <input type="text" class="form-control form-control-lg"placeholder="full name" name="name" />

                                        </div>
                                    </div>

                                    <hr class="mx-n3">

                                    <div class="row align-items-center py-3">
                                        <div class="col-md-3 ps-5">

                                            <h6 class="mb-0">Email address</h6>

                                        </div>
                                        <div class="col-md-9 pe-5">

                                            <input type="email" class="form-control form-control-lg"
                                                placeholder="example@example.com" name="email" />

                                        </div>
                                    </div>

                                    <hr class="mx-n3">


                                    <div class="row align-items-center py-3">
                                        <div class="col-md-3 ps-5">

                                            <h6 class="mb-0">Phone</h6>

                                        </div>
                                        <div class="col-md-9 pe-5">

                                            <input type="text" class="form-control form-control-lg"
                                                placeholder="Phone" name="phone" />

                                        </div>
                                    </div>

                                    <hr class="mx-n3">


                                    <div class="row align-items-center py-3">
                                        <div class="col-md-3 ps-5">

                                            <h6 class="mb-0">Address</h6>

                                        </div>
                                        <div class="col-md-9 pe-5">

                                            <input type="text" class="form-control form-control-lg"
                                                placeholder="Address" name="address" />

                                        </div>
                                    </div>
                                    <hr class="mx-n3">


                                    <div class="row align-items-center py-3">
                                        <div class="col-md-3 ps-5">

                                            <h6 class="mb-0">Nid Number</h6>

                                        </div>
                                        <div class="col-md-9 pe-5">

                                            <input type="text" class="form-control form-control-lg"
                                                placeholder="Nid Number" name="nid" />

                                        </div>
                                    </div>
                                    <hr class="mx-n3">


                                    
                                    <hr class="mx-n3">


                                    

                                    

                                    <div class="row align-items-center py-3">
                                        <div class="col-md-3 ps-5">

                                            <h6 class="mb-0">Upload CV</h6>

                                        </div>
                                        <div class="col-md-9 pe-5">

                                            <input class="form-control form-control-lg" id="formFileLg"
                                                type="file" name="file" />
                                            <div class="small text-muted mt-2">Upload your CV/Resume or any other
                                                relevant file. Max file
                                                size 50 MB</div>

                                        </div>
                                    </div>

                                    <hr class="mx-n3">

                                    <div class="px-5 py-4">
                                        <button type="submit" class="btn btn-primary btn-lg">Send
                                            application</button>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div style="background-color:rgb(104, 238, 104);">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>


    <div class="footer_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="footer_logo"><img src="images/main.png"></div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <h4 class="footer_taital">NAVIGATION</h4>
                    <div class="footer_menu_main">
                        <div class="footer_menu_left">
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="donate.html">Donate</a></li>
                                    <li><a href="contact.html">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer_menu_right">
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="news.html">News</a></li>
                                    <li><a href="mission.html">Our Mission</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <h4 class="footer_taital">NEWS</h4>
                    <p class="footer_text">Generators on the Internet</p>
                    <p class="footer_text">Tend to repeat predefined</p>
                    <p class="footer_text">Chunks as necessary, making</p>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <h4 class="footer_taital">address</h4>
                    <p class="footer_text">Dhaka Bangladesh</p>
                    <p class="footer_text">+01 1234567890</p>
                    <p class="footer_text">patronwelfare@gmail.com </p>
                </div>
            </div>
            <div class="footer_section_2">
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-3">
                        <div class="social_icon">
                            <ul>
                                <li><a href="#"><img src="images/fb-icon.png"></a></li>
                                <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                                <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
                                <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-8 col-lg-9">
                        <input type="text" class="address_text" placeholder="Enter your Enail" name="text">
                        <button type="button" class="get_bt">SUBSCRIBE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
        <div class="container">
            <p class="copyright_text">2020 All Rights Reserved. Design by Patron
                    </p>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
