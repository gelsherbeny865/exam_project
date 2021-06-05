<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=CSS_PATH;?>front/style.css">
    
    <style>
        @import url(https://fonts.googleapis.com/css?family=Cinzel+Decorative:400,900);
  
  /* Three columns side by side */
.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

/* Display the columns below each other instead of side by side on small screens */
@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

/* Add some shadows to create a card effect */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

/* Some left and right padding inside the container */
.container {
  padding: 0 16px;
}

/* Clear floats */
.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
  
  
  .subtitle {
  margin: 0 0 2em 0;
  }
  .fancy {
  line-height: 0.5;
  text-align: center;
  }
  .fancy span {
  display: inline-block;
  position: relative;  
  }
  .fancy span:before,
  .fancy span:after {
  content: "";
  position: absolute;
  height: 7px;
  
  border-top: 5px solid #A8B1FF;
  top: 0;
  width: 150px;
  }
  .fancy span:before {
  right: 100%;
  margin-right: 15px;
  }
  .fancy span:after {
  left: 100%;
  margin-left: 15px;
  }
  
    </style>
    <title><?= $title2 ?></title>
</head>
<body>
          <!-- startheader -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a style="font-size: xx-large ; font-weight: bold; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;" class="navbar-brand" href="<?= CSS_PATH;?>home/index"><span style="color: #A8B1FF; font-size: xx-large;">SE</span>-exams</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; 
          <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active headpad" aria-current="page" href="<?=CSS_PATH;?>home/index" >Home</a>
              <a class="nav-link headpad" href="<?=CSS_PATH;?>home/about"style="color: #A8B1FF !important; font-weight: 900 !important;">About</a>
              <a class="nav-link headpad" href="<?= CSS_PATH;?>home/contact">Contact</a>
               &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
              &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
              &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
              
            </div>
            <form class="d-flex" style="margin-right: 30px; ">
                <a class="nav-link headpad" href="<?= CSS_PATH;?>user/login" style="margin-right: 40px; font-weight:bold ;" >Log In</a>
                <button class="btn btn-outline-success  sup" type="submit" style="background-color: #A8B1FF !important; color: white;border: none; border-radius: 30px; width: 100px; height: 50px; box-shadow:0 3px 3px 0 rgba(0, 0, 0, 0.2), 0 3px 5px 0 rgba(0, 0, 0, 0.19);"><a href="<?= CSS_PATH;?>user/signup" style="text-decoration: none; color: white;">Sign Up</a></button>
              </form>
              </form>
          </div>
        </div>
 </nav>
      <!-- endheader -->
      <div class="hero">
        <div class="container-fluid" >
            <div class="row align-items-center" >
                <div class="col-md-6"   >
                 
                    <p style="margin-top: 150px;">

                     <h1>Software engneering</h1>
                     <br>  <h5 style="font-weight: 600 ; color: gray; ">
                        The Software Engineering program seeks to be among the best 
technical programs at the local, regional and international levels
that meet the needs of the business sector in the field of
software industry and systems development. This is
done by providing distinguished curricula in various</h5>
                      </p><br>
                     <br><br><br><br><br><br><br><br><br><br>
                  </div>
                <div class="col-md-6">
                    <img src="<?=CSS_PATH;?>front/images/abbbbbbbbbout1.PNG" style="height: 550px; " >
                </div>
            </div>
        </div>
    </div>

    <div class="hero">
        <div class="container-fluid" >
            <div class="row align-items-center" >
                <div class="col-md-7">
                    <img src="<?=CSS_PATH;?>front/images/aaaaaaaaaabout2.PNG" style="height: 550px;" >
                </div>
                <div class="col-md-5"   >
                    <br><br><br>
                 
                    <p style="margin-top: 100px;">
                        <h3 class="subtitle fancy"><span> About Us</span></h3>
                          The Software Engineering program seeks to be
                        among the best technical programs at the local,
                        regional and international levelsthat meet the needs 
                        of the business sector in the field of
                        software industry and systems development. 
                        This is done by providing distinguished curricula
                         in various
                        
                 </h5>
                      </p><br>
                     <br><br><br><br><br><br><br><br><br><br>
                  </div>
               
            </div>
        </div>
    </div>
    <!-- team -->

    <div >
    <section class="our-webcoderskull padding-lg">
        <div class="container">
          <div class="row heading heading-icon">
              <h2>Our Team</h2>
          </div>
          <ul class="row">
            <li class="col-12 col-md-6 col-lg-3">
                <div class="cnt-block equal-hight" style="height: 349px;">
                  <figure><img src="<?=CSS_PATH;?>front/images/dramna.PNG" class="img-responsive" alt=""></figure>
                  <h3><a > Dr Amna</a></h3>
                  <p>Professor</p>
                  <ul class="follow-us clearfix">
                    <li><a href="https://www.facebook.com/amna.elkhmri"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
            </li>
            <li class="col-12 col-md-6 col-lg-3">
                <div class="cnt-block equal-hight" style="height: 349px;">
                  <figure><img src="<?=CSS_PATH;?>front/images/dramr.jpg" class="img-responsive" alt=""></figure>
                  <h3><a href="#">Dr Amr Abohany</a></h3>
                  <p>Professor</p>
                  <ul class="follow-us clearfix">
                    <li><a href="https://www.facebook.com/engamr.abohany"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
            </li>
            <li class="col-12 col-md-6 col-lg-3">
                <div class="cnt-block equal-hight" style="height: 349px;">
                  <figure><img src="<?=CSS_PATH;?>front/images/drhaitham.jpg" class="img-responsive" alt=""></figure>
                  <h3><a>Dr Haitham Elwahsh</a></h3>
                  <p>Professor</p>
                  <ul class="follow-us clearfix">
                    <li><a href="https://www.facebook.com/haitham.elwahsh.9"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
             </li>
            <li class="col-12 col-md-6 col-lg-3">
                <div class="cnt-block equal-hight" style="height: 349px;">
                  <figure><img src="<?=CSS_PATH;?>front/images/drreda.jpg" class="img-responsive" alt=""></figure>
                  <h3><a href="http://www.webcoderskull.com/">Dr Reda M Hussin</a></h3>
                  <p>Professor</p>
                  <ul class="follow-us clearfix">
                    <li><a href="https://www.facebook.com/DrRedaHussien"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
            </li>
          </ul>
        </div>
      </section></div>
    </div>

     <!-- team end -->
      

       <!--Footer Links-->
       <div class="container-fluid mt-5 mb-4 text-center text-md-left" style="background-color: #F2F3FF;">
        <div class="row mt-3">

          <!--First column-->
          <div class="col-md-3 col-lg-4 col-xl-3 mb-4 dark-grey-text"><br>
            <a style="font-size: xx-large ; font-weight: bold; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;" class="navbar-brand" href="#"><span style="color: #A8B1FF; font-size: xx-large;">&nbsp; &nbsp; &nbsp; SE</span> <span style="color: #000000;">-exams</span></a>
        
           <br><br>
            <p style="color: #000000;">other resources</p>
            <p style="color: #000000;">tutorials videos</p>

          </div>
          <!--/.First column-->

          <!--Second column-->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 dark-grey-text"><br>
            <h6 class="title font-weight-bold mt-3"><strong>  About Us&nbsp; &nbsp;</strong></h6>
          <br>
            <p style="color: white ;"><a href="#!" class="dark-grey-text" style="text-decoration: none; color: black !important;">Fci-kfs&nbsp;&nbsp; &nbsp; &nbsp;  </a>
            </p>
            <p style="color: white;"><a href="#!" class="dark-grey-text" style="text-decoration: none;color: black !important;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; software department</a></p>
            
          </div>
          <!--/.Second column-->

          <!--Third column-->
          <div class="col-md-4 col-lg-3 col-xl-3 dark-grey-text"><br>
            <h6 class="title font-weight-bold mt-3" style="color: black;"><strong>contact Us&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</strong></h6>
            <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; color: white;">
            <p style="color: black;"><i class="fa fa-home mr-3"></i> F.C.I , KFS , Egypt&nbsp; &nbsp;&nbsp; &nbsp;</p>
            <p style="color: black;"><i class="fa fa-envelope mr-3"></i> kfs_info@kfs.edu.eg</p>
            <p style="color: black;"><i class="fa fa-phone mr-3"></i> 0473214998&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</p>
          </div>
          <!--/.Third column-->

        </div>
        <!-- Add font awesome icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<a href="https://www.facebook.com/SUFCIKFS/" class="fa fa-facebook faaaa"></a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://twitter.com/Kafrelsheikh_U" class="fa fa-twitter faaaa"></a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://www.linkedin.com/school/kafr-el-sheikh-university/" class="fa fa-linkedin faaaa"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
      </div>
      <!--/.Footer Links-->

      <!-- Copyright-->
      <div class="footer-copyright py-3 text-center">
        <div class="container-fluid">
          © 2021 Copyright: <a  style="text-decoration: none;" href="https://www.facebook.com/computers.kfs.edu.eg/"><strong style="text-decoration: none; color: #000000;">FCI-SE-TEAM</strong></a>
        </div>
      </div>
      <!--/.Copyright -->

      </footer>
      <!--/.Footer-->
      <script>
          jQuery("h1").fitText(1.2);

      </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>