<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>PATRON</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
      <!-- owl stylesheets -->
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">

      </div><nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand"><a href="index.html"><img src="images/main.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                     <a class="nav-link" href="">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="userlogin">Users Login</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="riderlogin">Riders Login</a>
                  </li>



               </ul>

            </div>
         </nav>
         <br>
         <br>
         <br>
      <!-- header section end -->
      <!-- banner section start -->
      <div class="banner_section layout_padding">
         <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
               <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="row">
                        <div class="col-sm-12">
                           <h1 class="banner_taital">Help Poor Child</h1>
                           <p class="banner_text">Today’s healthy and happy children have to be developed into tomorrow’s mature, responsible and educated individuals who can improve the nation-building process.
                              The future of any community can be changed for the better by focusing on children and youth. </p>
                           <div class="read_bt"><a href="#">Read More</a></div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-sm-12">
                        <h1 class="banner_taital">Help Poor Women</h1>
                        <p class="banner_text">The project will provide food, nutrition, other necessary supports for poor women and their families so that they are able to live with dignity.


                           One the objective of  fundraising activity is to help the poor and needy pregnant women of the underprivileged stay healthy during their pregnancy as most of these pregnant women are poor single mothers left behind by their husbands.
                           
                            </p>
                        <div class="read_bt"><a href="#">Read More</a></div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-sm-12">
                        <h1 class="banner_taital">Help Poor Oldage</h1>
                        <p class="banner_text">  When talking about elderly people we mean not only the poverty, but also the fight for survival, a continuous fight with the disease, isolation (often forced), the fight with the feeling of being social useless. 
                        </p>
                        <div class="read_bt"><a href="#">Read More</a></div>
                     </div>
                  </div>
                  
                  
               </div>
            </div>
         </div>
         <form action="admindonateinfoapply" method="post">
            @csrf
         <div class="donation_box">
            <h4 class="donation_taital">Contact For Donation</h4>
            <div class="mail_box">
               <input type="text" class="mail_text" placeholder="Your Name" name="Name">
               <input type="email" class="mail_text" placeholder="Email" name="Email">
               <input type="text" class="mail_text" placeholder="Phone" name="Phone">
            </div>
           
            <div class="send_bt"><button style="background-color:green" type="submit" class="btn btn-secondary">Send</button></div>
         </div>
      </form>
         <div class="fundraise_section">
            <div class="fundraise_section_main">
               <div class="row">
                  <div class="col-lg-4">
                     <div class="box_main">
                        <div class="icon_1"><img src="images/icon-1.png"></div>
                        <h4 class="volunteer_text">Riders</h4>
                        <p class="lorem_text">Involvement in Patron's welfare work helps me appreciate everything i have in my life and reminds me of the importance of things like family, friends, foods and health.Patron always tries to get a new perspective on people’s  own life, seeing the little things and events that makes me happy.</p>
                        <div class="join_bt"><a href="riderapplyfrom">Apply Now</a></div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="box_main active">
                        <div class="icon_1"><img src="images/icon-2.png"></div>
                        <h4 class="volunteer_text">Volunteer</h4>
                        <p class="lorem_text">Being a Patron's volunteer in a low-income area makes me understand that everyone has a story, no matter how small or insignificant it may seem. You must remember that each individual has a different story, but you must also take the time to appreciate and comprehend the narratives of those around you.</p>
                        <div class="join_bt"><a href="#">Apply Now</a></div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="box_main">
                        <div class="icon_1"><img src="images/icon-3.png"></div>
                        <h4 class="volunteer_text">DONATION</h4>
                        <p class="lorem_text">Giving is more important than getting in life. People who perform good deeds for others tend to be happier themselves. A “positive feedback loop” occurs when your efforts to make others happy lead to a rise in your happiness.Charity teaches us that seemingly little deeds may have a profound effect.</p>
                       
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
      <!-- banner section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-8">
                  <h2 class="about_taital">ABOUT CHARITY</h2>
                  <p class="about_text">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If youmany variations of passages of Lorem Ipsum
                     available, but the majority have suffered
                     alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you many
                     variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, byinjected humour, or randomised words which don't look even slightly believable. If you
                  </p>
                  <div class="readmore_bt"><a href="#">Read more</a></div>
               </div>
               <div class="col-sm-4">
                  <div class="about_img"><img src="images/food-p.jpg"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
      <!-- mission section start -->
      <div class="mission_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="mission_taital">Mission causes</h1>
                  <p class="mission_text">Humanitarian relief, peacekeeping, environmental conservation, scientific exploration, social justice, development, education, cultural preservation, equality, poverty alleviation, human rights, climate change mitigation, biodiversity conservation, peace, knowledge, empowerment, disaster response, health, sustainability, justice, reconciliation, poverty eradication, cultural diversity, conflict resolution, community development, scientific advancement, access to resources. </p>
               </div>
            </div>
         </div>
         <div class="mission_section_2">
            <div class="row">
               <div class="offset-md-2"></div>
               <div class="col-md-5">
                  <div class="container_main">
                     <img src="images/Dhaka Saver646a74f6df3324.72985966.jpg" alt="Avatar" class="image">
                     <div class="overlay">
                        <div class="text">
                           <h4 class="some_text">Dhaka Saver</h4>
                           <p class="alteration_text">Alteration in some form, by injected humour, or randomised words whichalteration in some form, by injected humour, or randomised words which</p>
                           <div class="btn_main">
                              <div class="donate_bt"><a href="#">Read More</a></div>
                              
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="container_main">
                     <img src="images/Dhaka Mirpur646a749346dca4.04703928.jpg" alt="Avatar" class="image">
                     <div class="overlay">
                        <div class="text">
                           <h4 class="some_text">Dhaka Mirpur </h4>
                           <p class="alteration_text">To enlighten the public on the importance of preventing and usage of food waste in a proper way.To accept donations of food, food-related product, money and other properties.</p>
                           <div class="btn_main">
                              <div class="donate_bt"><a href="#">Read More</a></div>
                              
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
              
         
      <!-- mission section end -->
      
      <!-- events section end -->
      <!-- donate section start -->
      <div class="donate_section layout_padding">
         <div class="container">
            <h1 class="donate_taital">Donat pepole Says </h1>
            <div class="donate_taital_main">
               <div id="main_slider" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="donate_left">
                           <div class="client_img"><img src="images/client-img.png"></div>
                        </div>
                        <div class="donate_right">
                           <h3 class="client_name_text">Mardo Merk</h3>
                           <p class="dummy_text">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefinedIf you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined</p>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="donate_left">
                           <div class="client_img"><img src="images/client-img.png"></div>
                        </div>
                        <div class="donate_right">
                           <h3 class="client_name_text">Mardo Merk</h3>
                           <p class="dummy_text">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefinedIf you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined</p>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="donate_left">
                           <div class="client_img"><img src="images/client-img.png"></div>
                        </div>
                        <div class="donate_right">
                           <h3 class="client_name_text">Mardo Merk</h3>
                           <p class="dummy_text">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefinedIf you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined</p>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                  <i class="fa fa-angle-right"></i>
                  </a>
                  <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                  <i class="fa fa-angle-left"></i>
                  </a>
               </div>
            </div>
         </div>
      </div>
      <!-- donate section end -->
      <!-- footer section start -->
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
                              <li><a href="">Home</a></li>
                              <li><a href="">Donate</a></li>
                              <li><a href="">Contact us</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="footer_menu_right">
                        <div class="footer_menu">
                           <ul>
                              <li><a href="">About</a></li>
                              <li><a href="">News</a></li>
                              <li><a href="">Our Mission</a></li>
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
                  <p class="footer_text">patronwelfare@gmail.com</p>
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
            <p class="copyright_text">2023 All Rights Reserved. Design by <a href="https://html.design">Patron</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript -->
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>

