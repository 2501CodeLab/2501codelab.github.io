<!DOCTYPE html>
<html lang="en">
<head>
<!-- ------------- -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- ------------- -->
<title>Home - Lane Tech Codelab</title>
<meta name="description" content="The Lane Tech Codelab is an organization of developers who make stuff!">
<meta name="author" content="Zyplos">
<!-- ------------- -->
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="assets/css/styles.css" rel="stylesheet" type="text/css">
<link href="http://bootswatch.com/paper/bootstrap.min.css" rel="stylesheet" type="text/css">

<!-- ------------- -->
<meta property="og:url" content="https://2501codelab.github.io/">
<meta property="og:type" content="website">
<meta property="og:title" content="Lane Tech Codelab">
<meta property="og:image" content="https://2501codelab.github.io/assets/media/fb_bk.png">
<meta property="og:description" content="The Lane Tech Codelab is an organization of developers who make stuff!">
<meta property="og:site_name" content="Lane Tech Codelab">
<meta property="og:locale" content="en_US">
<!-- ------------- -->
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@LTCodelab" />
<meta name="twitter:creator" content="@Zyplos" />
<!-- ------------- -->
<meta name="theme-color" content="#ff3e3e">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<!-- ------------- -->

<!-- Favicons -->

<!-- ------------- -->
<!--<script src="assets/js/stuff.js"></script>-->
<style>
html {
    position: relative;
    min-height: 100%;
}
body {
    margin-bottom: 60px;
}
#main-header {
    color: #ffde00;
    background-color: #ff3e3e;
    height: 500px;
    text-align: center;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    justify-content: center;
    align-items: center;
    
    background-image: url("assets/media/f_header_bk_b.png");
	background-repeat: no-repeat;
	background-size: cover;
    background-position: 50% 42%; 
}
#version {
    font-size: 8px;
    color: lightgray;
}
.navbar-default {
    background-color: rgba(255,62,62,1.00);
}
.navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:hover, .navbar-default .navbar-nav>.active>a:focus .navbar-default .navbar-brand {
    background-color: #E00000;
}
.navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:hover, .navbar-default .navbar-nav>.active>a:focus {
    background-color: #E00000;
}
.navbar-default .navbar-brand {
    color: #ffbaba;
}
.navbar-default .navbar-brand:hover, .navbar-default .navbar-brand:focus {
    color: #FFFFFF;
}
.navbar-default .navbar-nav>li>a {
    color: #ffbaba;
}
.navbar-default .navbar-nav>li>a:hover, .navbar-default .navbar-nav>li>a:focus {
    color: #FFFFFF;
}
.navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:hover, .navbar-default .navbar-nav>.open>a:focus {
    background-color: #ec2020;
    color: #FFFFFF;
}
/*
    .dropdown-menu{
        background-color: #E01818;
    }
    
    .dropdown-menu>li>a{
        color: white;
    }*/
    
    
.navbar {
    transition: -webkit-box-shadow 0.5s ease;
    -webkit-transition: -webkit-box-shadow 0.5s ease;
    -moz-transition: -webkit-box-shadow 0.5s ease;
    -o-transition: -webkit-box-shadow 0.5s ease;
    -webkit-box-shadow: none;
}
.navbar a.navbar-brand {
    padding: 9px 15px 8px;
}
#navbar-image-main {
    height: 45px !important;
}

footer {
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 80px;
    background-color: #ff3e3e;
}


@media (max-width: 768px) {
.text-left {
    text-align: center;
}
.text-right {
    text-align: center;
}
}
#project-panel {
    margin-top: 30px;
}
#secondary-header {
    background-color: #EBEBEB;
    height: 300px;
    text-align: center;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    justify-content: center;
    align-items: center;
}
    
    ::-webkit-scrollbar-track
{
	
	background-color: #CCCCCC;
}

::-webkit-scrollbar
{
	width: 10px;
	background-color: #CCCCCC;
}

::-webkit-scrollbar-thumb
{
	background-color: #ffde00;
}
</style>




 
</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header"> <a class="navbar-brand" href="/"> <!-- --> <img src="assets/media/codelab_logo.svg" id="navbar-image-main" /> <!-- --> </a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mobile-menu" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
</div>
        <div class="collapse navbar-collapse" id="mobile-menu">
            <ul class="nav navbar-nav navbar-right">
                <li> <a href="/"> Home </a> </li>
                <li> <a href="team.php"> The Team </a> </li>
                <li> <a href="projects/"> Projects </a> </li>
                <li> <a href="contact.php"> Contact </a> </li>
                <!-- <li class="active navbar-divider"><a>&nbsp;</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">devspace <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Testerperson Area</a></li>
            <li><a href="#">Account</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Log out</a></li>
          </ul>
        </li> -->
</ul>
</div>
</div>
</nav>

<!-- TODO: Find a better header image perhaps -->
<div class="jumbotron" id="main-header">
    <div class="container">
        <h1 style="color:#ffde00;">Welcome.</h1>
        <p>to the Codelab!</p>
        
      
</div>
</div>
<div class="container">
       <div class="row">
           <div class="project-panel">
        <h2 class="text-left">LT Lost & Found</h2>
        <div class="col-xs-12">
           
           
            <div class="row">
               <div class="col-sm-3 col-xs-12">
               
                   <img src="assets/media/f_project_137.png" alt="LT Lost & Found Logo" class="img-responsive img-rounded" />
               
               
       </div>
           
           
               <div class="col-sm-9 col-xs-12">
               <p>The LT Lost & Found app is a community-driven app that helps students find and report lost items found around Lane Tech.</p>
               <p> <a class="btn btn-primary" href="https://2501codelab.github.io/lost-and-found/" target="_blank"> See Project </a> </p>
               
               
       </div>
           
           
    </div>
 
</div>
   </div>
</div>
       
       
       <br/>
        
        <div class="row">

            <div class="project-panel">
        <h2 class="text-right">LT Navigator</h2>
        <div class="col-xs-12">
           
           
            <div class="row">
              
           <div class="col-sm-3 col-xs-12 pull-right">
               
                    <img src="assets/media/f_project_137.png" alt="LT Navigator Logo" class="img-responsive img-rounded" />
               
               
       </div>
           
                <div class="col-sm-9 col-xs-12">
               <p>A webapp made to help parents, visitors, and new students get around Lane Tech and see various important parts or highlights.</p>
               <p> <a class="btn btn-primary disabled pull-right" href="#"> See Project </a> </p>
               
               
       </div>
               
                
           
           
    </div>
 
</div>

</div>

</div>
  
        <br>
        <br>
  
        <div class="row">

            <div class="project-panel">
        <h2 class="text-center rainbow"> Lane Tech NEO </h2>
        <div class="col-xs-12">
           
           
            <div class="row">
              
               <div class="col-xs-12">
               
                   <img src="assets/media/f_project_1.png" alt="Lane Tech NEO Homepage" class="img-responsive img-rounded center-block" />
               
               
       </div>
           
               <div class="col-xs-12 text-center">
               <p>A collaborative effort with the Codelab and CS Department at Lane Tech in order to make a great experience for students, teachers, parents, and alumni.</p>
               <p> <a class="btn btn-primary" href="http://lanetech.org" target="_blank"> Visit Site </a> </p>
               
               
       </div>
               
               
           
           
    </div>
 
</div>

</div>

</div>
 
 
 
        <br>
        <br>
  
  
   
</div>

<div class="jumbotron" id="secondary-header">
    <div class="container-fluid">
        <h3 style="color:#ff3e3e">See the rest of our projects!</h3>
        <br>
        <p> <a href="projects/" class="btn btn-primary btn-lg">Project Page</a> </p>
        
      
</div>
</div>



<br>

<footer>
      <div class="container" style="color: #ffde00">
          <div style="padding-top: 30px" class="pull-left">
              <p>Copyright &copy; LTCodeLab 2017</p>
  </div>
      
     
      
          <div style="padding-top: 20px" class="pull-right">
              <img src="assets/media/zyplos_logo.svg" style="height: 45px" />
  </div>
  </div>
</footer>



 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous">
</script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
</script> 
   
    <script>
        
        console.log('%c --------------------------------------', 'color: #ff3e3e;');
        console.log('%c Hey!', 'color: #ff3e3e;');
        console.log('%c ', 'color: #ff3e3e;');
        console.log('%c You! Yeah you!', 'color: #ff3e3e;');
        console.log('%c Snooping around the console!', 'color: #ff3e3e;');
        console.log('%c That\'s okay, if anything, we encourage it! Check out our Github at: https://github.com/2501CodeLab/', 'color: #ff3e3e;');
        console.log('%c Consider passing by one of our Codelab meetings.', 'color: #ff3e3e;');
        console.log('%c --------------------------------------', 'color: #ff3e3e;');
        
       $(window).scroll(function(){
           
        
           
  var sPos = $(window).scrollTop();
           
      
           
    if (sPos > 450){
        
        
        $(".navbar").css("-webkit-box-shadow", "0 1px 2px rgba(0,0,0,0.3)"); 

    } else {
         $(".navbar").css("-webkit-box-shadow", "none"); 

    }
});
        
        
    </script>
</body>
</html>
