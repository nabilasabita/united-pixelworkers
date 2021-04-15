<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <style type="text/css">
  .background-color-menu{
    background-color: #cccccc;
    background-size: cover;
  }
  .radiofilter{
    margin-left: 30px;
}
  .list{
    margin-left: 30px;
}
  .shop-page {
    font-family: Arial;
    margin: 0;
    color: black;
    background-color: #cccccc;
}
  #middle-menu{
    padding: 0px;
  }
  body{
  background-image: url("background.png");
  background-size: cover;
}
  .shop-content{
  float:left;
  background-color: #cccccc;
}
  .linksleft.a{
    resize: none;
    color: black;
  }
  .overlay {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
  overflow-x: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 25%;
  width: 100%;
  text-align: left;
  margin-top: 30px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 20px;
  font-size: 30px;
}
.overlay .menu-list a{
  font-size: 15px;
}


@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}

.searchbox-top{
  position: relative;
}

.container-2{
  width: 100px;
  vertical-align: middle;
  white-space: nowrap;
  position: relative;
}

.container-2 input#search{
  width: 40px;
  height: 50px;
  background: #2b303b03;
  border: none;
  font-size: 10pt;
  float: left;
  color: #262626;
  padding-left: 35px;
  -webkit-border-radius: 10px;
  -moz-border-radius: 5px;
  border-radius: 5px;
  color: #000;
 
  -webkit-transition: width .55s ease;
  -moz-transition: width .55s ease;
  -ms-transition: width .55s ease;
  -o-transition: width .55s ease;
  transition: width .55s ease;
}

.container-2 input#search::-webkit-input-placeholder {
   color: #65737e;
}
 
.container-2 input#search:-moz-placeholder { /* Firefox 18- */
   color: #65737e;  
}
 
.container-2 input#search::-moz-placeholder {  /* Firefox 19+ */
   color: #65737e;  
}
 
.container-2 input#search:-ms-input-placeholder {  
   color: #65737e;  
}

.container-2 .icon{
  position: absolute;
  top: 50%;
  margin-left: 17px;
  margin-top: 17px;
  z-index: 1;
  color: #4f5b66;
}

.container-2 input#search:focus, .container-2 input#search:active{
  outline:none;
  width: 300px;
}
 
.container-2:hover input#search{
width: 300px;
}
 
.container-2:hover .icon{
  color: #93a2ad;
}
  
  </style>
  </head>
  <body class="shop-page" style>
    <div id="web app" class="panel-group">
    <div class="background"></div>
      <header class="site-header transparent into inverse store-masthead">
        <nav class="navbar fixed-top navbar-light bg-light">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-3">
                  <ul class="nav navbar-nav">
                    <div class="menu-left">
                      <span style="font-size:25px;cursor:pointer" onclick="openNav()">&#9776;</span>
                      <li><div id="myNav" class="overlay">
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                            <div class="logo">
                            <a href="#" class="logo">LOGO</a>
                            </div>
                            <ul class="menu-list">
                              <li class="shop-list">
                                <a href="#" id="shopLink" class="Menu-link">Shop</a>
                                  <div class="overlay-content">
                                    <a href="#">About</a>
                                    <a href="#">Services</a>
                                    <a href="#">Clients</a>
                                    <a href="#">Contact</a>
                                  </div>
                              </li>
                              <br/>
                              <li class="sell-list">
                                <a href="#" id="sellLink" class="Menu-link">Sell</a>
                                  <div class="overlay-content">
                                    <a href="#">About</a>
                                    <a href="#">Services</a>
                                    <a href="#">Clients</a>
                                    <a href="#">Contact</a>
                                  </div>
                              </li>
                              <li class="sign-out">
                                <div class="overlay-content">
                                    <a href="#">Sign Out</a>
                                </div>
                              </li>
                            </ul>
                          </div>
                      </li>
                    </div>
                  </ul>
                  <ul class="searchBox-top">
                    <div class="box">
                          <div class="container-2">
                              <span class="icon"><i class="fa fa-search"></i></span>
                              <input type="search" id="search" placeholder="Search..." />
                          </div>
                        </div>
                  </ul>
              </div>
              <div class="col-lg-6">
                  <ul class="nav navbar-nav" style= "margin-left: 600px" >
                      <li><img style="display: block; margin-left: auto; margin-right: auto" width="50px" height="55px" src="logo.png"/></li>
                  </ul>
              </div>
              <div class="col-lg-3">
                  <ul class="nav navbar-nav" style="float: right">
                      <li class="float-right"><a href="#"><span class="glyphicon glyphicon-user"></span>Sign In</a></li>
                      <li class="float-right"><img style="width: 50px" height="50px" src="chartlogo.png"></li>
                  </ul>
              </div>
            </div>
          </div>
          <div class="sub-header transparent inverse">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="linksleft">
                    <a href="#">shop all products</a>&nbsp&nbsp
                    <a href="#">Tags</a>&nbsp&nbsp
                    <a href="#">Blank by CB</a>&nbsp&nbsp
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="links right" style="float:right">
                    <a href="#" class="promo">logo</span>
                    <strong><span style="font-style: normal; font-size: 15px; padding: 0px; vertical-align: middle;">50% OFF BLANK TEES</span></strong>
                  </ul>
                  </div>
                </div>
              </div>
            </div>
        </nav>
      </header>
        <section class="into shop-intro">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="la.jpg" alt="Chania">
              <div class="carousel-caption">
                <h3>Los Angeles</h3>
                <p>LA is always so much fun!</p>
              </div>
            </div>

            <div class="item">
              <img src="chicago.jpg" alt="Chicago">
              <div class="carousel-caption">
                <h3>Chicago</h3>
                <p>Thank you, Chicago!</p>
              </div>
            </div>

            <div class="item">
              <img src="ny.jpg" alt="New York">
              <div class="carousel-caption">
                <h3>New York</h3>
                <p>We love the Big Apple!</p>
              </div>
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        </section>
      <div class="main-menu">
        <div class="container-fluid"  id="middle-menu">
          <div class="row">
            <div class="col-lg-3">
              <section id="shop-content" class="shop-content">
                <div class="instant-search">
                  <section class="shop-wrapper">
                    <aside class="shop-control">
                      <form action role="search" novalidate="novalidate" class="search-form">
                        <input type="search" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false"
                        required="required" maxlength="512" aria-label="Search" placeholdder="Search here.." class="search-box-input">
                        <button type="submit" title="Search" class="Searchbox-Submit">
                          <svg role="img" xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 40 40" class="ais-SearchBox-submitIcon">
                          <path d="M26.804 29.01c-2.832 2.34-6.465 3.746-10.426 3.746C7.333 32.756 0 25.424 0 16.378 
                          0 7.333 7.333 0 16.378 0c9.046 0 16.378 7.333 16.378 16.378 0 3.96-1.406 7.594-3.746 10.426l10.534 10.534c.607.607.61 1.59-.004
                          2.202-.61.61-1.597.61-2.202.004L26.804 29.01zm-10.426.627c7.323 0 13.26-5.936 13.26-13.26 0-7.32-5.937-13.257-13.26-13.257C9.056
                          3.12 3.12 9.056 3.12 16.378c0 7.323 5.936 13.26 13.258 13.26z" fillRule="evenodd"></path></svg>
                        </button>
                        <button type="reset" title="Clear" hidden="hidden" class="ais-SearchBox-reset">
                          <svg role="img" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 20 20" class="ais-SearchBox-resetIcon">
                          <path d="M8.114 10L.944 2.83 0 1.885 1.886 0l.943.943L10 8.113l7.17-7.17.944-.943L20 1.886l-.943.943-7.17 7.17 7.17 7.17.943.944
                          L18.114 20l-.943-.943-7.17-7.17-7.17 7.17-.944.943L0 18.114l.943-.943L8.113 10z" fillRule="evenodd"></path></svg>
                        </button>
                      </form>
                      <h4 class="heading">Filter Products:</h4>
                      <br/>
                      <div class="hierarchicalMenu">
                        <div class="Categories">Categories</div>
                        <br/>
                          <form action="#" class="radiofilter">
                            <div class="row">
                              <div class="Apparel-menu">
                                <input type="radio" name="MenuMenu" id="Apparel" data-toggle="collapse" data-target="#demo">
                                <label for="Apparel">Apparel</label>
                                  <div class="list" id="demo">
                                    <div class="row">
                                      <input type="radio" name="Menu" id="Teens">
                                      <label for="Teens">Teens</label>
                                    </div>
                                    <div class="row">
                                      <input type="radio" name="Menu" id="Sweatshirt">
                                      <label for="Sweatshirt">Sweatshirt</label>
                                    </div>
                                    <div class="row">
                                      <input type="radio" name="Menu" id="Tanks">
                                      <label for="Tanks">Tanks</label>
                                    </div>
                                    <div class="row">
                                      <input type="radio" name="Menu" id="Jacket">
                                      <label for="Jacket">Jacket</label>
                                    </div>
                                  </div>
                              </div>
                              <div class="kids-menu">
                                <input type="radio" name="MenuMenu" id="kids" data-toggle="collapse" data-target="#demo1">
                                <label for="kids">Kids</label>
                                  <div class="list" id="demo1">
                                    <div class="row">
                                      <input type="radio" name="Menu" id="Teens">
                                      <label for="Teens">Teens</label>
                                    </div>
                                    <div class="row">
                                      <input type="radio" name="Menu" id="Onesie">
                                      <label for="onesie">Onesie</label>
                                    </div>
                                  </div>
                              </div>
                              <div class="Accesories-menu">
                                <input type="radio" name="MenuMenu" id="accessories">
                                <label for="accessories">Accessories</label>
                              </div>
                              <div class="hats-menu">
                                <input type="radio" name="MenuMenu" id="hat">
                                <label for="hat">Hats</label>
                              </div>
                            </div>
                            <div class="popup">
                              <div class="row">
                                <div class="cut-menu">
                                  <input type="radio" name="popupmenu" id="cut">
                                    <label for="cut">Cut</label>
                                      <div class="list">
                                        <div class="row">
                                          <input type="radio" name="Menu" id="Men">
                                          <label for="Men">Men</label>
                                        </div>
                                        <div class="row">
                                          <input type="radio" name="Menu" id="Womens">
                                          <label for="Womens">Women</label>
                                        </div>
                                        <div class="row">
                                          <input type="radio" name="Menu" id="Unisex">
                                          <label for="Unisex">Unisex</label>
                                        </div>
                                      </div>
                                </div>
                                <div class="material">
                                  <input type="radio" name="popupmenu" id="material">
                                    <label for="material">Material</label>
                                      <div class="list">
                                        <div class="row">
                                          <input type="radio" name="Menu" id="tri">
                                          <label for="tri">Tri-blend</label>
                                        </div>
                                        <div class="row">
                                          <input type="radio" name="Menu" id="cotton">
                                          <label for="cotton">100% cotton</label>
                                        </div>
                                        <div class="row">
                                          <input type="radio" name="Menu" id="poly">
                                          <label for="poly">Poly cotton</label>
                                        </div>
                                      </div>
                              </div>
                            </div>                           
                          </form>
                      </div>
                </div>
              </section>
            </div>
            </div>
            <div class="col-lg-9">
              <div class="background-color-menu"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

<script>
function openNav() {
  document.getElementById("myNav").style.width = "16%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}

</script>
  </body>
</html>