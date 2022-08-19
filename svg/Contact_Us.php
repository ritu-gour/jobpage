<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-EMNRGBRPHF"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'G-EMNRGBRPHF');
        </script>
    <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Micro Technologies</title>
  <link rel="icon" href="image/micro-technologies-logo-120x120.png" type="image/icon type" />


  <!-- Scroll Animation  -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


  <!-- bootstrap  CSS  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" />
  <!-- font awsome  -->
  <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@500&display=swap" rel="stylesheet" />

  <!-- below Our services font (h2) -->
  <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@700&display=swap" rel="stylesheet">


  <!-- google font  heading with shadow -->
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">

  <!-- nav font  -->
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet" />

  <!-- crousel Font  -->
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap" rel="stylesheet">

  <!-- heading 2 google font  -->
  <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

  <!-- external Css  -->
  <link rel="stylesheet" href="css/style.css" />

    <!-- address font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">

    <style>
      h1 {
        font-family: "Sansita Swashed", cursive;
      }
      h2 {
        font-family: 'Noto Sans KR', sans-serif;
    }
    .heading1{
      font-family: 'Amiri', serif;
      font-size: 3.2em;
      background: -webkit-linear-gradient(rgb(14, 15, 15), #333);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

  body {
 background-image: url("./image/Group.png");
 background-color: #cccccc;
 background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.addressFont{
  font-family: 'Ubuntu', sans-serif;
  border-radius: 15px;
}
.addressFont h5{
  font-weight: bolder;
  color:rgb(0, 119, 255);
}
.addressFont p{
  font-weight: bold;
}
  
  .loader {
  border: 2px solid #f3f3f3;
  border-radius: 50%;
  border-top: 2px solid blue;
  border-right: 2px solid green;
  border-bottom: 2px solid red;
  width: 70px;
  height: auto;
  -webkit-animation: spin 16s linear infinite;
  animation: spin 16s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
    </style>
  </head>
  <body>
<!-- navBar  -->
<?php include "common/navbar.php"; ?>


<div class="container" style="margin-top: 100px;">
  <h1 class="text-center heading1">Contact Us</h1>
 <div class="row tagline" >
   <div class="col-sm-8">
     <!-- address 1-->
 <div class="card shadow p-3 mb-5 bg-body  addressFont" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">OFFICE 1</h5>
    <p class="card-text">A26 MPSRTC COMPLEX, CITY DEPOT SQUARE, BHOPAL M.P. 462003 IN</p>
    <a href="#" class="btn btn-outline-primary">Direction</a>
  </div>
</div>
<!-- address 2 -->
<div class="card my-4 shadow p-3 mb-5 bg-body  addressFont" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">OFFICE 2</h5>
    <p class="card-text">SECOND FLOOR, PLOT NO. 194/1 INFRONT OF CANARA BANK, BHADBHADA ROAD, BHOPAL MP 462044 IN</p>
    <a href="#" class="btn btn-outline-primary">Direction</a>
  </div>
</div>
   </div>
   <div class="col-sm-4 p-4 mb-5 bg-light shadow-lg" data-aos="fade-up" style="border-radius:20px;">
     <form class="mb-3" action="#" method="POST">
       <div class="form-group">
         <label for="YourName"><b>Name</b> </label>
         <input
           type="text"
           class="form-control"
           id="YourName"
           placeholder="Your Name"
           name="name"
           required
         />
       </div>
       <div class="form-group">
         <label for="Email"><b>Email</b> </label>
         <input
           type="email"
           class="form-control"
           id="Email"
           placeholder="Your Email"
           name="email"
           required
         />
       </div>
       <div class="form-group">
         <label for="Mobile"><b>Mobile No.</b> </label>
         <input
           type="text"
           class="form-control"
           id="Mobile"
           placeholder="Your mobile"
           name="mobile"
           required
         />
       </div>
       <div class="form-group">
         <label for="Subject"><b>Subject</b> </label>
         <input
           type="text"
           class="form-control"
           id="Subject"
           placeholder="Your Subject"
           name="subject"
           required
         />
       </div>
       <div class="form-group">
         <label for="exampleFormControlTextarea1"> <b>Message</b> </label>
         <textarea
           class="form-control"
           id="exampleFormControlTextarea1"
           rows="3"
           placeholder="Your Message"
           name="message"
           required
         ></textarea>
       </div>
       <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block mt-5" style="border-radius:20px;">Submit</button>
     </form>
   </div>
 </div>

 

  <!-- Address  -->
 <!-- <div class="row mt-5">
  <div class="offset-sm-2 col-sm-8 offset-sm-2">
    <div class="row">
       <div class="col-sm-12">
           <h2>Office 1</h2>
           <h4 >Address : </h4>
           <hr>
       </div>
       <div class="col-sm-12">
           <h2>Office 2</h2>
           <h4>Address : </h4>
       </div>
    </div>
  </div>
 </div> -->

</div>


      <!-- Footer  -->
      <div class="container-fluid text-dark" style="background-color: #DCDCDC;">
        <div class="row">
            <div class="col-sm-8 mt-3 mb-3">
              <p class="text-center">Copyright &#169; 2021 Micro Technologies  All Right Reserved</p>
            </div>
            <div class="col-sm-4   mt-3 mb-3">
              <div class="d-flex justify-content-around">
                  <div> <a href="#"><img src="./svg/facebook-3.svg" alt="" height="30" width="30" srcset=""></a></div>
                  <div><img src="./svg/linkedin-icon-2.svg" alt="" srcset="" height="30" width="30"></a></div>
                  <div><img src="./svg/twitter-3.svg" alt="" srcset="" height="30" width="30"></a></div>
                </div>
            </div>
        </div>
      </div>



    <!-- js Bundle   -->
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    ></script>
     <!-- scroll Animation  -->
     <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
     <script>
       AOS.init({
         offset: 200,
         duration: 1000,
         once: false,
       });
     </script>
  </body>
</html>

<?php
    if(isset($_POST['submit']))
    {
      include 'db/connect.php';
      $name =$_POST["name"];
      $email =$_POST["email"];
      $mobile = $_POST['mobile'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];

      $sql = "INSERT INTO contactus(name, email, mobile, subject, message) values (upper('$name'), '$email', '$mobile', '$subject', '$message')";
      //echo $sql;
      if ($con->query($sql) === TRUE)
      {
        ?>
            <script type="text/javascript">alert('Thanks for Enquiry\nWe will contact you soon!!!')</script>
        <?php
            //header('Location:#');
      }
      else
      {
            //echo "Error" .$con->error;
      }
      $con->close();
    }
?>    
