<!DOCTYPE html>
<html lang="en">
  <head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>
		User Profile
	</title>
</head>
<body>
	<!--navbar start-->
	<nav class="navbar">


		<div class="navbar-left">
			<a href="userhome" class="logo"><img src="images/main.png"></a>

			<div class="search-box">
				<img src="images/search.png">
				<input type="text" placeholder="Search">
			</div>
		</div>



        <div class="navbar-center">
			<ul>
				<li><a href="userhome" class="active-link"><img src="images/home.png"> <span>Home</span></a></li>
				<li><a href="userdonatelist"><img src="images/images.png"> <span>My Donotes</span></a></li>
				<li><a href="userdonateapply"><img src="images/493411.png"> <span>Apply For Donotes</span></a></li>

			</ul>
		</div>



        @foreach ($data as $da1 )


<div class="navbar-right">
    <div class="online">
        <img src="upload/{{$da1->image}}" class="nav-profile-img" onclick="toggleMenu()">
    </div>

</div>
<!--profile drop menu-->

<div class="profile-menu-wrap" id="profileMenu">
    <div class="profile-menu">
        <div class="user-info">
            <img src="upload/{{$da1->image}}">
            <div>
                <h3>{{$da1->name}}</h3>
                <a href="userprofile">See Your Profile</a>
            </div>
        </div>
        <hr>
        <a href="userlogin" class="profile-manu-link">
            <img src="images/logout.png">
            <p>Logout</p>
            <span>></span>
        </a>
    </div>
</div>


</nav>
	<!--navbar end-->

    <section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4 mb-sm-5">
                <div class="card card-style1 border-0">
                    <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                        <div class="row align-items-center">
                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <img src="upload/{{$da1->image}}" height="300px" weight='300px'alt="...">
                                <br>
                                <br>
                                <form action="userprofileimage" method="post" enctype="multipart/form-data">
                                    @csrf
                                <input type="text" name="id" value="{{$da1->id}}" hidden>
                                <input type="file" name="file" accept="image/*" style="background-color:blue; color:white;">
                                <button type="submit" class="btn btn-success">Save</button>
                                </form>

                               
                                
                            </div>
                           
                            <div class="col-lg-6 px-xl-10">
                                <div class="bg-secondary d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded">
                                    <h3 class="h2 text-white mb-0">{{$da1->name}}</h3>
                                    
                                </div>
                                <ul class="list-unstyled mb-1-9">
                                    <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Email:</span> {{$da1->email}}</li>
                                    <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Phone:</span>{{$da1->phone}}</li>
                                    
                                </ul>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
           
                          
                            
                            
                        
                 
</section>
@endforeach
<div class="sidebar-useful-links">

    	<div class="copyright-msg">
    		<img src="images/main.png">

    	</div>
    	<p>Created at 2023 by team PATRON</p>
    </div>
<script>
	let profileMenu=document.getElementById("profileMenu");
	function toggleMenu(){
		profileMenu.classList.toggle("open-menu");

	}
</script>

<style>
    body{margin-top:20px;}
.card-style1 {
    box-shadow: 0px 0px 10px 0px rgb(89 75 128 / 9%);
}
.border-0 {
    border: 0!important;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: 0.25rem;
}

section {
    padding: 120px 0;
    overflow: hidden;
    background: #fff;
}
.mb-2-3, .my-2-3 {
    margin-bottom: 2.3rem;
}

.section-title {
    font-weight: 600;
    letter-spacing: 2px;
    text-transform: uppercase;
    margin-bottom: 10px;
    position: relative;
    display: inline-block;
}
.text-primary {
    color: #ceaa4d !important;
}
.text-secondary {
    color: #15395A !important;
}
.font-weight-600 {
    font-weight: 600;
}
.display-26 {
    font-size: 1.3rem;
}

@media screen and (min-width: 992px){
    .p-lg-7 {
        padding: 4rem;
    }
}
@media screen and (min-width: 768px){
    .p-md-6 {
        padding: 3.5rem;
    }
}
@media screen and (min-width: 576px){
    .p-sm-2-3 {
        padding: 2.3rem;
    }
}
.p-1-9 {
    padding: 1.9rem;
}

.bg-secondary {
    background: #15395A !important;
}
@media screen and (min-width: 576px){
    .pe-sm-6, .px-sm-6 {
        padding-right: 3.5rem;
    }
}
@media screen and (min-width: 576px){
    .ps-sm-6, .px-sm-6 {
        padding-left: 3.5rem;
    }
}
.pe-1-9, .px-1-9 {
    padding-right: 1.9rem;
}
.ps-1-9, .px-1-9 {
    padding-left: 1.9rem;
}
.pb-1-9, .py-1-9 {
    padding-bottom: 1.9rem;
}
.pt-1-9, .py-1-9 {
    padding-top: 1.9rem;
}
.mb-1-9, .my-1-9 {
    margin-bottom: 1.9rem;
}
@media (min-width: 992px){
    .d-lg-inline-block {
        display: inline-block!important;
    }
}
.rounded {
    border-radius: 0.25rem!important;
}
</style>









<style>
    body {
    background:#eee;
    margin-top: 20px;
}
.page-inner.no-page-title {
    padding-top: 30px;
}
.page-inner {
    position: relative;
    min-height: calc(100% - 56px);
    padding: 20px 30px 40px 30px;
    background: #f3f4f7;
}
.card.card-white {
    background-color: #fff;
    border: 1px solid transparent;
    border-radius: 4px;
    box-shadow: 0 0.05rem 0.01rem rgba(75, 75, 90, 0.075);
    padding: 25px;
}
.grid-margin {
    margin-bottom: 2rem;
}
.profile-timeline ul li .timeline-item-header {
    width: 100%;
    overflow: hidden;
}
.profile-timeline ul li .timeline-item-header img {
    width: 40px;
    height: 40px;
    float: left;
    margin-right: 10px;
    border-radius: 50%;
}
.profile-timeline ul li .timeline-item-header p {
    margin: 0;
    color: #000;
    font-weight: 500;
}
.profile-timeline ul li .timeline-item-header p span {
    margin: 0;
    color: #8e8e8e;
    font-weight: normal;
}
.profile-timeline ul li .timeline-item-header small {
    margin: 0;
    color: #8e8e8e;
}
.profile-timeline ul li .timeline-item-post {
    padding: 20px 0 0 0;
    position: relative;
}
.profile-timeline ul li .timeline-item-post > img {
    width: 100%;
}
.timeline-options {
    overflow: hidden;
    margin-top: 20px;
    margin-bottom: 20px;
    border-bottom: 1px solid #f1f1f1;
    padding: 10px 0 10px 0;
}
.timeline-options a {
    display: block;
    margin-right: 20px;
    float: left;
    color: #2b2b2b;
    text-decoration: none;
}
.timeline-options a i {
    margin-right: 3px;
}
.timeline-options a:hover {
    color: #5369f8;
}
.timeline-comment {
    overflow: hidden;
    margin-bottom: 10px;
    width: 100%;
    border-bottom: 1px solid #f1f1f1;
    padding-bottom: 5px;
}
.timeline-comment .timeline-comment-header {
    overflow: hidden;
}
.timeline-comment .timeline-comment-header img {
    width: 30px;
    border-radius: 50%;
    float: left;
    margin-right: 10px;
}
.timeline-comment .timeline-comment-header p {
    color: #000;
    float: left;
    margin: 0;
    font-weight: 500;
}
.timeline-comment .timeline-comment-header small {
    font-weight: normal;
    color: #8e8e8e;
}
.timeline-comment p.timeline-comment-text {
    display: block;
    color: #2b2b2b;
    font-size: 14px;
    padding-left: 40px;
}
.post-options {
    overflow: hidden;
    margin-top: 15px;
    margin-left: 15px;
}
.post-options a {
    display: block;
    margin-top: 5px;
    margin-right: 20px;
    float: left;
    color: #2b2b2b;
    text-decoration: none;
    font-size: 16px !important;
}
.post-options a:hover {
    color: #5369f8;
}
.online {
    position: absolute;
    top: 2px;
    right: 2px;
    display: block;
    width: 9px;
    height: 9px;
    border-radius: 50%;
    background: #ccc;
}
.online.on {
    background: #2ec5d3;
}
.online.off {
    background: #ec5e69;
}
#cd-timeline::before {
    border: 0;
    background: #f1f1f1;
}
.cd-timeline-content p,
.cd-timeline-content .cd-read-more,
.cd-timeline-content .cd-date {
    font-size: 14px;
}
.cd-timeline-img.cd-success {
    background: #2ec5d3;
}
.cd-timeline-img.cd-danger {
    background: #ec5e69;
}
.cd-timeline-img.cd-info {
    background: #5893df;
}
.cd-timeline-img.cd-warning {
    background: #f1c205;
}
.cd-timeline-img.cd-primary {
    background: #9f7ce1;
}
.page-inner.full-page {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
}
.user-profile-card {
    text-align: center;
}
.user-profile-image {
    width: 100px;
    height: 100px;
    margin-bottom: 10px;
}
.team .team-member {
    display: block;
    overflow: hidden;
    margin-bottom: 10px;
    float: left;
    position: relative;
}
.team .team-member .online {
    top: 5px;
    right: 5px;
}
.team .team-member img {
    width: 40px;
    float: left;
    border-radius: 50%;
    margin: 0 5px 0 5px;
}
.label.label-success {
    background: #43d39e;
}
.label {
    font-weight: 400;
    padding: 4px 8px;
    font-size: 11px;
    display: inline-block;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 0.25em;
}

</style>

    

<style>
    *{
	margin: 0;
	padding: 0;
	font-family: 'poppins', sans-serif;
	box-sizing: border-box;
}
body{
	background: #f0f2f5;
	color: #5f5f5f;
}
a{
	text-decoration: none;
	color: #5f5f5f;
}

/*----------start of navbar--------*/
.navbar{
	display: flex;
	align-items: center;
	justify-content: space-between;
	background: white;
	padding: 6px 6%;
	position: sticky;
	top: 0;
	z-index: 100;
	box-shadow: 0 5px 10px rgb(0,0,0,0.1);
}
.logo img{
	width: 160px;
	margin-right: 45px; 
	display: block;

}
.navbar-center ul li{
   display: inline-block;
   list-style: none;
}
.navbar-center ul li a{
	display: flex;
	align-items: center;
	font-size: 14px;
	margin: 5px 8px;
	padding-right: 5px; 
	position: relative;
}
.navbar-center ul li a img{
	width: 40px;

}
.navbar-center ul li a::after{
	content: '';
	width: 0;
	height: 2px;
	background: #DC7633;
	position: absolute;
	bottom: -15px;
	transition: width 0.3s;

}
.navbar-center ul li a:hover::after, 
.navbar-center ul li a.active-link::after{
	
	width: 100%;
	

}
.nav-profile-img{
	width: 40px;
	display: block;
	border-radius: 50%;
	cursor: pointer;
	position: relative;
}
.online{
	position: relative;

}
.online::after{
	content: '';
	width: 7px;
	height: 7px;
	border:2px solid #fff;
	border-radius: 50%;
	right: 0px;
	top: 0px;
	background: #41db51;
	position: absolute;
}
.search-box{
	background: #f0f2f5;
	width: 250px;
	border-radius: 20px;
	display: flex;
	align-items: center;
	padding: 0 15px;

}
.navbar-left{
	display: flex;
	align-items: center;
}
.search-box img{
	width: 14px;
}
.search-box input{
	width: 100%;
	background: transparent;
	padding: 8px;
	outline: none;
	border: 0;
}
/*----------end of navbar--------*/

.container{
	padding: 20px 6%;
	display: flex;
	flex-wrap: wrap;
	justify-content: space-between;
}
/*----------start of left sidebar--------*/
.left-sidebar{
	flex-basis: 25%;
	align-self: flex-start;
	position: sticky;
	top: 73px;
}

.sidebar-profile-box{
	background: #fff;
}
.sidebar-profile-info{
	padding: 0 25px;
}
.sidebar-profile-info img{
	width: 90px;
	border-radius: 50%;
	background: #fff;
	padding: 4px;
	margin-top: -45px;
}
.sidebar-profile-info h1{
	font-size: 20px;
	font-weight: 600;
	color: #222;
}
.sidebar-profile-info h3{
	font-size: 14px;
	font-weight: 500;
	color: #777;
}
.sidebar-profile-info ul{
	list-style: none;
	margin: 20px 0px;
}

.sidebar-profile-info ul li{
	
	margin: 5px 0;
	width: 100%;
	font-size: 13px;
}
.sidebar-profile-info ul li span{
	float: right;
	color: #045be6;
}
.sidebar-profile-link{
	display: flex;
	align-items: center;
	border-top: 1px solid #ccc;

}
.sidebar-profile-link a{
	flex-basis: 50%;
	display: flex;
	align-items: center;
	justify-content: center;
	padding-right: 15px 0; 
	font-size: 13px;
	border-left: 1px solid #ccc;
	
	
}
.sidebar-profile-link a:first-child{
	border-left: 0;
}
.sidebar-profile-link a img{
	width: 20px;
	margin-right: 10px;
}
.sidebar-activity{
   background: #fff;
   padding: 5px 25px;
    margin: 12px 0;
}

.sidebar-activity h3{
color: #777;
font-size: 14px;
font-weight: 500;
margin: 20px 0 10px;
}
.sidebar-activity a{
display: flex;
align-items: center;
font-size: 12px;
font-weight: 500;
color: #888;
margin: 3px 0;
}
.sidebar-activity a img{
width: 20px;
margin-right: 10px
}
.discover-more-link{
border-top: 1px solid #ccc;
text-align: center;
margin-top: 20px;
margin-left: -25px;
margin-right: -25px;
}


.discover-more-link a{
color: #045be6;
display: inline-block;
margin: 10px 0;
}


/*----------start of right sidebar--------*/

.right-sidebar{
	flex-basis: 25%;
	align-self: flex-start;
	position: sticky;
	top: 73px;
}
.sidebar-news{
background: #fff;
padding: 10px 25px;
}
.info-icon{
width: 15px;
float: right;
margin-top: 15px;
}
.sidebar-news h3{
font-size: 18px;
font-weight: 600;
color: #333;
margin: 10px 0 30px;
}
.sidebar-news a{
display: block;
font-size: 12px;
font-weight: 600;
margin-top: 10px;
margin-bottom: -5px;
}
.sidebar-news span{
font-size: 12px;
}
.sidebar-news .read-more-link{
color: #045be6;
font-weight: 500;
margin: 20px 0 10px;
}
.sidebar-ad{
background: #fff;
padding: 15px 25px;
text-align: center;
margin: 12px 0;
font-size: 12px;
}
.sidebar-ad img{
width: 60px;
border-radius: 50%;
margin: 4px;
}
.sidebar-ad small{
float: right;
font-weight: 500;
}
.sidebar-ad p{
margin-top: 30px;
margin-bottom: 10px;
}
.sidebar-ad b{
display: block;
font-weight: 500;
margin-top: 10px;
}

.ad-link{
display: inline-block;
border: 1px solid #045be6;
border-radius: 30px;
padding: 5px 15px;
color: #045be6;
font-weight: 500;
margin: 20px auto 10px;
}
.sidebar-useful-links{
padding: 15px 25px;
text-align: center;
}
.sidebar-useful-links a{
display: inline-block;
font-size: 14px;
margin: 4px 2px;
}
.copyright-msg{
display: flex;
align-items: center;
justify-content: center;
font-size: 12px;
margin-top: 10px;
font-weight: 500;
}
.copyright-msg img{
width: 80px;
margin-right: 4px;
}

/*----------start of main-content--------*/
.like-btn {
  background-color: blue;
}

.main-content{
	flex-basis: 47%;
}
.create-post{
background: #fff;
}
.create-post-input{
padding: 20px 25px 10px;
display: flex;
align-items: flex-start;

}

.create-post-input img{
width: 35px;
border-radius: 50%;
margin-right: 10px;
}
.create-post-input textarea{
width: 100%;
border: 0;
outline: 0;
resize: none;
background: transparent;
margin-top: 8px;
}

::placeholder{
font-weight: 500;
}
.create-post-links{
display: flex;
align-items: flex-start;
}
.create-post-links li{
list-style: none;
border-top: 1px solid #ccc;
border-radius: 1px solid #ccc;
flex-basis: 25%;
height: 40px;
font-size: 13px;
display: flex;
align-items: center;
justify-content: center;
cursor: pointer;
}

.create-post-links li img{
width: 15px;
margin-right: 5px;
}
.create-post-links li:last-child{
background: #fff;
color: #fff;
border-top: 0;
border-right: 0;
}

.sort-by{
display: flex;
align-items: center;
margin: 10px 0;
}
.sort-by hr{
flex: 1;
border: 0;
height: 1px;
background: #ccc;
}
.sort-by p{
font-size: 13px;
padding-left: 5px;
}
.sort-by p span{
font-weight: 600;
cursor: pointer;
}
.sort-by p span img{

width: 12px;
margin-left: 3px;
}
.post{
background: #fff;
padding: 20px 25px 5px;
margin: 5px 0 15px;
}
.post-author{
display: flex;
align-items: flex-start;
margin-bottom: 20px;
}
.post-author img{
width: 35px;
border-radius: 50%;
margin-right: 10px;
margin-top: 5px;
}
.post-author h1{
font-size: 18px;
font-weight: 600;
color: #333;
}
.post-author small{
display: block;
margin-bottom: -2px;
}
.post p{
font-size: 14px;
margin-bottom: 15px;
}
.post p{
font-size: 14px;
margin-bottom: 15px;
}
.post-stats{
display: flex;
flex-wrap: wrap;
align-items: center;
justify-content: space-between;
font-size: 12px;
border-bottom: 1px solid #ccc;
padding-bottom: 6px;
}
.post-stats div{
display: flex;
align-items: center;
}
.post-stats img{
width: 15px;
margin-right: -5 px;
}
.liked-users{
 margin-left: 10px;
}

.post-activity{
display: flex;
align-items: center;
justify-content: space-between;
padding: 10px 0;
font-size: 14px;
font-weight: 500;
}
.post-activity div{
display: flex;
align-items: center;
}
.post-activity-user-icon{
width: 22px;
border-radius: 50%;
}
.post-activity-arrow-icon{
width: 12px;
margin-left: 5px;
}
.post-activity-link img{
width: 18px;
margin-right: 8px;
}

/*profile drop down menu*/
.profile-menu-wrap{
position: absolute;
top: 100%;
right: 5%;
width: 320px;
max-height: 0;
overflow: hidden;
transition: max-height 0.5s;

}
.profile-menu-wrap.open-menu{
max-height: 400px;
}
.profile-menu{
background: #222;
color: #fff;
padding: 20px;
margin: 10px;
}
.user-info{
display: flex;
align-items: center;
}
.user-info img{
width: 50px;
border-radius: 50%;
margin-right: 15px;
} 
.user-info h3{
font-weight: 500;
margin-bottom: -7px;
}
.user-info a{
color: #c9dbf8;
font-size: 13px;
}

.profile-menu hr{
border: 0;
height: 1px;
width: 100%;
background: #fff;
margin: 15px 0 10px;
}
.profile-manu-link{
display: flex;
align-items: center;
color: #fff;
margin: 12px 0;
font-size: 14px;
}
.profile-manu-link p{
	width: 100%;
}
.profile-manu-link img{
width: 35px;
border-radius: 50%;
margin-right: 15px;
}
/*-----profile page--------*/
.profile-main {
flex-basis: 73%;
}

.profile-sidebar{
flex-basis: 25%;
align-self: flex-start;
position: sticky;
top: 73px;
}
.profile-container{
background: #fff;
}
.profile-container-inner{
padding: 0 4% 10px;
}
.profile-pic{
width: 150px;
border-radius: 50%;
margin-top: -75px;
padding: 5px;
background: #fff;
}
.profile-container h1{
font-size: 28px;
font-weight: 600;
color: #222;
}
.profile-container b{
font-weight: 500;
}
.profile-container p{
margin-top: 5px;
}
.profile-container p a{
color: #045be6;
font-weight: 500;
}

.profile-btn{
margin: 20px 0;
}
.profile-btn a{
display: inline-flex;
align-items: center;
background: #e4e6eb;
padding: 6px 15px;
border-radius: 4px;
margin-right: 10px;
}
.profile-btn a img{
width: 18px;
margin-right: 5px;
}
.profile-btn .primary-btn{
background: #045be6;
color: #fff;
}
.profile-description{
background: #fff;
padding: 20px 4% 30px;
margin: 12px 0;
}
.profile-description h2{
color: #333;
margin: 10px 2px;
font-weight: 600;
}
.see-more-link{
display: block;
text-align: right;
font-size: 15px;
}

.profile-desc-row{
display: flex;
align-items: flex-start;
margin: 20px 0;
}
.profile-desc-row img{
width: 50px,
margin-right: 25px;
margin-top: 5px;
}
.profile-desc-row div{
width: 100%;
}
.profile-desc-row h3{
font-size: 18px;
font-weight: 600;
color: #333;
}
.profile-desc-row b{
display: block;
font-weight:500;
font-size: 15px;
}
.profile-desc-row p{
margin-top: 15px;
}
.profile-desc-row hr{
border: 0;
border-bottom: 1px solid #999;
margin-top: 10px;
}
.experience-link{
display: flex;
align-items: center;
justify-content: center;
padding-top: 20px;
font-weight: 500;
}
.experience-link img{
width: 20px;
margin-left: 8px;
}
.education-link{
display: flex;
align-items: center;
justify-content: center;
padding-top: 20px;
font-weight: 500;
}
.education-link img{
width: 20px;
margin-left: 8px;
}
.skills-btn{
background-color: #BEE37D ;
display: inline-block;
margin: 10px 5px;
padding: 6px 18px;
border: 1px solid #777;
border-radius: 30px;
font-size: 12px;
font-weight: 500;
}
.language-btn{
background-color: #85C1E9  ;
display: inline-block;
margin: 10px 5px;
padding: 6px 18px;
border: 1px solid #777;
border-radius: 30px;
font-size: 12px;
font-weight: 500;
}


/*-----profile right sidebar--------*/

.profile-sidebar .sidebar-ad{
margin: 0;
}
.sidebar-people{
background: #fff;
padding: 15px 25px;
margin: 12px 0;
font-size: 12px;
}
.sidebar-people h3{
font- size: 16px;
font-weight: 600;
margin: 10px 0 20px;
}
.sidebar-people-row{
display: flex;
align-items: flex-start;
margin: 6px 0;
}
.sidebar-people-row img{
width: 40px ;
border-radius: 50%;
margin-right: 8px;
margin-top: 5px;
}
.sidebar-people-row h2{
font-weight: 500;
font- size: 16px;
}
.sidebar-people-row a{
display: inline-block;
margin: 10px 0;
padding: 5px 25px;
border: 1px solid #045be6;
border-radius: 30px;
font-weight: 500;
color: #045be6;
}

.profile-footer{
padding: 0 6% 30px;
}
.profile-footer .sidebar-useful-links{
text-align: left;
padding: 0;
}
.profile-footer .copyright-msg{
justify-content: flex-start;
}

#showMoreLink{
	display: none;
}



/* ---------responsive------------*/

@media only screen and (max-width: 600px){
.search-box{
background: transparent;
width: auto;
padding: 0;
}
.search-box input{
width: 0;
padding: 0;
}
.navbar-center ul li a span{
	display: none;
}

.navbar-center ul li a{
padding-right: 0;
margin: 5px;
}
.nav-profile-img{
width: 30px;
}
.container{
padding: 15px 3%;
}
.left-sidebar, .right-sidebar{
flex-basis: 100%;
position: relative;
top: unset;
}
.main-content{
flex-basis:100%;
}

.post-stats div{
margin: 2px 0;
}
.post-activity-link span{
display: none;
}
.post-activity-link img{
margin-right: 0;
}
.profile-main, .profile-sidebar{
flex-basis: 100%;
}
.profile-container{
font- size: 14px;
}
.profile-pic{
width: 100px;
margin-top: -50px;
}
.profile-description{
	font-size: 14px;
}
#showMoreLink{
display: block;
width: fit-content;
margin: 10px auto;
font-size: 14px;
cursor: pointer;
}
.sidebar-activity{
display: none;
}
.sidebar-activity.open-activity{
display: block;
}

}
</style>

</body>
</html>