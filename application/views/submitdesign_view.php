	
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">



<style type="text/css">

 .btn-default{
      color: red;
      border: 0px;
      width:75px;

    }

  a{
  color : red;
}
/* Style the body */
body {
  font-family: Arial;
  margin: 0;
  transition: background-color .5s;
}

/* Header/Logo Title */
.header {
  padding: 60px;
  text-align: center;
  background-image:url('backgroundheader.jpeg');
  color: #27282A;
  font-size: 50px;
}
b{
	font-family: aktiv-grotesk,sans-serif;
  /*  font-weight: 500;*/
    font-style: normal;
    color: #2b2d31;
    /*padding: 0 6px;*/
}
.content{
font-family: aktiv-grotesk,sans-serif;
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 1.85
}

.container{
  background: #fbfbfb;
  max-width: 500px;
  padding: 20px;
}

#file {
  display: inline-block;
}
#file input[type=file] {
  display:none;
}
.container_1{
  margin-top: 20px;
  margin-left: 50px;
  margin-right: 50px;
  padding-top: 20px;
  padding-left: 10px;
  padding-right: 10px;
  border :0px;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}


.sidenav {
  margin-top: 47px;
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
li{
  line-height: 2.1;
  font-size: 15px;
  color: white;
  font-weight: lighter;

}

h4,h5,h6{
  padding-top: 20px;
  color: white;
  padding-bottom: 20px;
  font-size: 15px;
  border-top: 1px solid grey;
  font-weight: bold;

}

.tempat{
  margin-top: 12px;
  border: 1px groove white;
  width: 300px;

}
.container_0{
  padding-top: 100px;
  padding-bottom: 50px;

}


/* Page Content */
.content {padding:20px;}

.container_3{

  padding-top: 10px;
  margin-left: 20px;
  margin-right: 20px;
 /* border: 1px solid black;*/
  width: 100%;
  height: 700px;
  margin-bottom: 20px;


}

  footer{
    background: #2b2d31;
    height: 650px;   

  }

  .container_4{
  padding-top: 100px;
  padding-bottom: 50px;

}

.container_5{
  margin-top: 20px;
  margin-left: 50px;
  margin-right: 50px;
  padding-top: 20px;
  padding-left: 10px;
  padding-right: 10px;
  border :0px;
}

.navbar{
  background-color: white;
}

.has-search .form-control {
  padding-left: 10px;
/*  padding-top: 50px*/
}

.has-search .form-control-feedback {
  position: absolute;
  z-index: 2;
  display: block;
  width: 2.375rem;
  height: 2.375rem;
  line-height: 2.375rem;
  text-align: center;
  pointer-events: none;
  color: #aaa;
}

</style>
</head>

<body>
<div class="topnav">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-2">
          <ul class="nav navbar-nav">
              <li ><span style="color: red; font-size:30px;cursor:pointer;" onclick="openNav()">&#9776; </span></li> 
              <li><div style="padding-left: 10px; padding-top: 15px" class="form-group has-search">
                    <span class="fa fa-search form-control-feedback"></span>
                    <input type="text" class="form-control" placeholder="Search">
                  </div><!-- <img style="width: 50px" height="50px" src="searchlogo.png"> -->
              </li>
          </ul>
        </div>
           <div class="col-lg-8">
          <ul class="nav navbar-nav" style= "margin-left: 500px" >
              <li><img style="margin: center" width="50px" height="55px" src="logo.png"/></li>
          </ul>
      </div>
      <div class="col-lg-2">
          <ul class="nav navbar-nav" style= "margin-left:50px">
              <li  style="text-align: right;"><a style="color: red" href="#"><span style="color: red; padding-right: 5px" class="glyphicon glyphicon-user"></span>Sign In</a></li>
              <li><!-- <a href="#" class="btn btn-default btn-lg"style="color: red;"><span class="glyphicon glyphicon-shopping-cart"></span></a> -->  <button class="btn btn-default btn-lg" onclick="openRightMenu()">&#9776;</button>
              </li>
          </ul>
      </div>
      </div>
    </div>
<!--   <span style="color: red; font-size:30px;cursor:pointer;" onclick="openNav()">&#9776; </span>
 -->
 <!--  <a href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a> -->
</div>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a style="color: red; font-family: aktiv-grotesk,sans-serif;">Cotton Breau</a>
  <a href="#">All product</a>
  <a href="#">Submit a Design</a>
  <a href="#">My Account</a>
  <a href="#">Sign Out</a>
</div>

<div class="w3-sidebar w3-bar-block w3-card w3-animate-right" style="display:none;right:0;width: 350px; background-color: #DEDDDD" id="rightMenu">
  <div class="topnav" style="background-color: white">
 <span class="navbar-text" style="text-align: left;">Shoppingchart</span>
  <button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large" style="text-align: right;"><a style="color: red">Close &times;</a></button>
</div>
    <!--  <li><button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large" style="text-align: right;"><a>Close &times;</a></button></li> -->
  
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
</div>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}


function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
function openRightMenu() {
  document.getElementById("rightMenu").style.display = "block";
}

function closeRightMenu() {
  document.getElementById("rightMenu").style.display = "none";
}
</script>


<div class="header">
<h1 style="text-align: middle; font-size: 60px; font-family:Arial Black, Gadget, sans-serif;font-weight: 900;"><strong>Submit a Design</strong></h1> 
<h3 style="text-align: middle">Have an idea? Show us what you’ve got.</h3>
 
</div>

<div class="container_3"><table align="Left">
      <div class="container_2">
          <div class="content">
  <div class="col-lg-6">
  <p class="text-left">Hey, welcome to Cotton Bureau! If you haven’t already, brush up on<a href=""> How It Works.</a>  Still have questions? Email <a href="#">sellers@cottonbureau.com</a>. We’re here to help.</p><br/>  
  <h1 class="text-left"><strong>Artwork Guidelines</strong></h1><br/>
  <p class="text-left">Screenprinted designs work best when they're made from areas of flat color. If your design has gradients, shadows, or glows, it's much harder (or even impossible) to print. Avoid those if possible. Vector files are best. If vector isn't possible, 600dpi raster images (at actual size or bigger) also works. Make sure all your colors are easily separable... on separate layers, or in separate groups.</p><br/>
  <p class="text-left">We typically allow printing in two locations: choose from front, back, and sleeve prints. Keep your main print location (front) to four (4) colors or fewer. Keep your secondary print location (back or sleeve) to two colors or fewer. Yes, black and white count as colors. What's actual size? Glad you asked. You have a printable area of 11" wide by 14" tall to work with for the t-shirt front or back. If you want to print on the sleeve, keep it 3" by 3" or smaller.</p>
  <p>If you have something non-standard in mind—metallic ink or foil prints, glow-in-the-dark, split fountain gradients, etc.—let us know. We’ll see what we can do.</p><br/>
  <p class="text-left">Got it? Good. Let's make something together.</p>
          </div>
      </div>
    </table>

    <table>
      <div class="col-lg-6">
        <div class="container">
            <form method="post">
              
                <label class="Form-label">
                    <div class="Form-labelText">Preview</div>
                      <div class="Form-input Form-input--file">
                          <div class="file-input-wrapper">
                              <div class="file-input-button">
                                <div id="file">
                                    <label>
                                          <!-- <input type="file" ngf-select ng-model="new_files" ng-change="fs.uploadFiles(new_files)" multiple> -->
                                          <input type="file"  name="photo" accept=".gif, .jpeg, .jpg, .png, image/gif, image/jpeg, image/png" class="file-input-current" value="Browse">
                                              <span class="btn btn-danger">browse</span>
                                    </label>
                                </div> 
                              <input type="text" readonly="readonly" class="file-input-filename">
                              </div>
                            </div> 
                        </div>
                </label>
                <div class="Form-labelMessage">Must be JPG/PNG/GIF format and less than 5 MB.<a href="#">Download the Mockup Template PSD </a>(or <a href="#">grab the kids version</a>)
                    and use that to create your submission.
                </div>
        
                <label class="Form-label">
                  <div class="Form-labelText">Artwork</div> 
                  <div class="Form-input Form-input--file">
                    <div class="file-input-wrapper">
                      <div class="file-input-button">
                        <div id="file">
                          <label>
                             <input type="file" name="artwork" accept=".psd, .ai, .eps, .pdf, image/vnd.adobe.photoshop, application/pdf, application/postscript" class="file-input-current" value="browse">
                            <span class="btn btn-danger">browse</span>
                          </label>
                        </div> 
                        <input type="text" readonly="readonly" class="file-input-filename">
                      </div>
                    </div>
                  </div>

                  <div class="Form-inputSuffix u-alignMiddle">
                    <div class="Loader">
                        <input type="hidden" name="artwork_location"> 
                        <input type="hidden" name="artwork_bucket"> 
                        <input type="hidden" name="artwork_key">
                       </div>  
                </label> 
                  <div class="Form-labelMessage" style="font-weight: lighter;">
                    Is your artwork ready? Include it here to speed your submission along.
                    File must be PSD, AI, PDF, or EPS.Please keep it under 300 MiB.
                    <br>
                  </div>
    
              <label class="Form-label">
                <div class="Form-labelText">Tell Us About Your Design</div>
                <textarea name="about" class="Form-textarea"></textarea>
              </label>
         

            <div class="Form-molecule">
              <label class="Form-label">
                <div class="Form-labelText">Who is your design for?</div>
                  <div class="Form-dropdown">
                    <select name="who" class="Form-dropdownSelect">
                      <option value="adults">Grown Ups</option> 
                      <option value="kids">Kids</option> 
                      <option value="everyone">People of All Ages</option>
                      <br>
                      <br>
                    </select>
                  </div>
              </label>
            </div>

               <input type="hidden" name="action" value="submit design"> 
                  <div class="Form-molecule u-push--2--reverse">
                    <button class="btn btn-secondary btn-lg btn-block" style="background-color: black"><a style="color: white">Submit a Design</a> </button></div> 
            </form>
          </div>
        </div>
      </table>
    </div>

<footer>
    <div class="container_4">
      <div class="row">
        <div class="col-lg-8">
            <h3 style="color: white"> SIGN UP OUR NEWSLETTER, GET 10% OFF YOUR NEXT ORDER </h3>
        </div>
        <div class="col-lg-4">
          <div class="tempat">
            <input type="text" name="email" placeholder="  discount@me.com" class="email_input">
            <a href="#"><span class="glyphicon glyphicon-envelope"></span></a>
          </div>
           
        </div>
    </div>
  </div>

  <div class="container_5">
    <div class="row">
      <div class="col-md-2">
        <h4 class="font-weight-bold text-uppercase mt-3 mb-4">Shop</h4>

        <ul class="list-unstyled">
          <li>
            <a href="#!" style="color: white; font-weight: lighter; "> All Product</a>
          </li>
          <li>
            <a href="#!" style="color: white; font-weight: lighter; ">Tags</a>
          </li>
          <li>
            <a href="#!" style="color: white; font-weight: lighter; ">Blank by CB</a>
          </li>
          <li>
            <a href="#!" style="color: white; font-weight: lighter;">Help</a>
          </li>
        </ul>
      </div>

    <div class="col-md-2">
      <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Sell</h5>
      
      <ul class="list-unstyled">
        <li>
          <a href="#1" style="color: white; font-weight: lighter; ">How it works</a>
        </li>
        <li>
          <a href="#1" style="color: white; font-weight: lighter; ">Submit a Design</a>
        </li>
        <li>
          <a href="#1" style="color: white; font-weight: lighter; ">Cotton Bureau Plus</a>
        </li>
      </ul>
    </div>

   <div class="col-md-2">
      <h6 class="font-weight-bold text-uppercase mt-3 mb-4">Company</h6>
      
      <ul class="list-unstyled">
        <li>
          <a href="#1" style="color: white; font-weight: lighter;">About Us</a>
        </li>
        <li>
          <a href="#1" style="color: white; font-weight: lighter;">Jobs</a>
        </li>
        <li>
          <a href="#1" style="color: white; font-weight: lighter; ">CB Newsletter</a>
        </li>
        <li>
          <a href="#1" style="color: white; font-weight: lighter;">Business Casual Blog</a>
        </li>
        <li>
          <a href="#1" style="color: white; font-weight: lighter;">Privacy Policy</a>
        </li>
        <li>
          <a href="#1" style="color: white; font-weight: lighter;">Terms of Service</a>
        </li>
      </ul>
    </div>


   <div class="col-md-2">
      <h6 class="font-weight-bold text-uppercase mt-3 mb-4">Blank</h6>
      
      <ul class="list-unstyled">
        <li>
          <a href="#1" style="color: white; font-weight: lighter;">Shop Blank</a>
        </li>
        <li>
          <a href="#1" style="color: white; font-weight: lighter;">About Blank </a>
        </li>
        <li>
          <a href="#1" style="color: white; font-weight: lighter;">Blank Newsletter</a>
        </li>
        <li>
          <a href="#1" style="color: white; font-weight: lighter;">Be a Model</a>
        </li>
      </ul>
    </div>


   <div class="col-md-2">
      <h6 class="font-weight-bold text-uppercase mt-3 mb-4">Account</h6>
      
      <ul class="list-unstyled">
        <li>
          <a href="#1" style="color: white; font-weight: lighter;">Sign In</a>
        </li>
        <li>
          <a href="#1" style="color: white; font-weight: lighter;">Create Account</a>
        </li>
      </ul>
    </div>

   <div class="col-md-2">
      <h6 class="font-weight-bold text-uppercase mt-3 mb-4">Contact</h6>
      
      <ul class="list-unstyled">
        <li>
          <a href="#1" style="color: white; font-weight: lighter;">us@cottonbureau.com</a>
        </li>
        <li>
          <a href="#1" style="color: white; font-weight: lighter;">Twitter</a>
        </li>
        <li>
          <a href="#1" style="color: white; font-weight: lighter;">Facebook</a>
        </li>
        <li>
          <a href="#1" style="color: white; font-weight: lighter;">Instagram</a>
        </li>
        <li>
          <br/>
          <a href="#1" style="color: grey; font-weight: lighter; font-size: 17px; font-style: italic;">Support available 10am-6pm ET Monday through Friday</a>
        </li>

      </ul>
    </div>

    <div class="row">
        <div class="col-md-12" style="color: grey; padding-top: 30px; font-size: 15px; font-weight: bolder; " align="center" >
          © Cotton Bureau. All rights reserved.
        </div>
    </div>
  </div>
</div>
  </footer>
</body>
</html>