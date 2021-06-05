<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=CSS_PATH;?>front/style.css">
    <title><?= $title ;?></title>
</head>
<body>
          <!-- startheader -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a style="font-size: xx-large ; font-weight: bold; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;" class="navbar-brand" href="<?=CSS_PATH;?>home/index"><span style="color: #A8B1FF; font-size: xx-large;">SE</span>-exams</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; 
          <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active headpad" aria-current="page" href="<?=CSS_PATH;?>home/index" style="color: #A8B1FF !important; font-weight: 900 !important;">Home</a>
              <a class="nav-link headpad" href="<?=CSS_PATH;?>home/about">About</a>
              <a class="nav-link headpad" href="<?=CSS_PATH;?>home/contact">Contact</a>
               &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
              &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
              &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
              
            </div>
            <form class="d-flex" style="margin-right: 30px; ">
                <a class="nav-link headpad" href="<?=CSS_PATH;?>user/login" style="margin-right: 40px; font-weight:bold ;" >Log In</a>
                <button class="btn btn-outline-success  sup" type="submit" style="background-color: #A8B1FF !important; color: white;border: none; border-radius: 30px; width: 100px; height: 50px; box-shadow:0 3px 3px 0 rgba(0, 0, 0, 0.2), 0 3px 5px 0 rgba(0, 0, 0, 0.19);"><a href="<?=CSS_PATH;?>user/signup" style="text-decoration: none; color: white;">Sign Up</a></button>
              </form>
          </div>
        </div>
 </nav>
   


<!-- materials start -->


<section class="content">
      <div class="container-fluid">
      <form role="form" method="post" action="/material/updateos">
                <div class="card-body">
                  <div class="form-group">
                    <label >Question</label>
                   
                    <input type="text" name="question" class="form-control" value="<?=$data->question?>" placeholder="Enter question">
                   <br>
                   <label >Option A</label>
                    <input type="text" name="optionA" class="form-control" value="<?= $data->optionA?>" placeholder="Enter option a">
                     <br>
                     <label >Option B</label>
                 <input type="text" name="optionB"  class="form-control" value="<?= $data->optionB?>" placeholder="Enter option b">

                 <label >Option C</label>
                 <input type="text" name="optionC"  class="form-control"  value="<?= $data->optionC?>" placeholder="Enter option c">

                 <label >Option D</label>
                 <input type="text" name="optionD"  class="form-control" value="<?= $data->optionD?>" placeholder="Enter option d">

                 <label > Correct Option </label>
                 <input type="text" name="correct_option"  class="form-control" value="<?= $data->correct_option?>" placeholder="Enter correct option">
                     <br>
                 <input type="hidden" name="id"  value="<?= $data->id?>">
                  </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Add</button>
                </div>
      </form>



      </div>
    </section>
<!-- 
materials end -->
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>