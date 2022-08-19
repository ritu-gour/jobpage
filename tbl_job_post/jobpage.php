<?php
   include_once('../common/config.php');
 $num_per_page=04;
    if(isset($_GET["page"]))
    {
            $page=$_GET["page"];
    }
    else
    {
        $page=1;
    }

    $start_from=($page-1) * 04;
    $sql="Select * from tbl_job_post ORDER BY post_date DESC limit $start_from,$num_per_page";
    
    $rs_result=mysqli_query($con,$sql);
?>

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

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' type='text/javascript'></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- font awsome  -->
    <link rel="icon" href="../image/micro-technologies-logo-120x120.png" type="../image/icon type" />

    <link rel="stylesheet" href="../css/stylejob.css">
    <link rel="stylesheet" href="../css/stylemain.css">
    <link rel="stylesheet" href="../css/style.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Micro Technologies</title>
   
    <style>

 
      h1 {
        font-family: "Sansita Swashed", cursive;
      }

      h2{
        font-family: 'Average Sans', sans-serif;
      }
      h3{
      font-family: 'Raleway', sans-serif;
      }
      h4{
        font-family: 'Average Sans', sans-serif;
      }
      h5{
        font-family: 'Average Sans', sans-serif;
      }
      .heading1{
      font-family: 'Amiri', serif;
      font-size: 3.2em;
      background: -webkit-linear-gradient(rgb(39, 167, 97), #333);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

  h6:hover{ 
    box-shadow: 0 0 8px rgba(33,33,33,.2); 
  }
      .even-larger-badge {
          font-size: 1.2em;
          margin-top: 20px;
          margin-bottom: 10px;
          margin-left: 2px;
        }

 /* Mobile Responsive  */
 @media only screen and (max-width: 600px) {
 
  .display-4 {
          font-size: 1.5rem;
          font-weight: 300;
          line-height: 1.2;
        }
  }

  div.sticky 
  {
    position: -webkit-sticky;
    position: sticky;
    top: 75px;
    padding: 0px;
    font-size: 20px;
  
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
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <a class="navbar-brand" href="#">
            <img src="../image/micro-technologies-logo-120x120.png" width="40" height="40" class="d-inline-block align-top"
                alt="" loading="lazy" />
            <b>Micro Technologies</b>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <blink>
                    <li class="loader" style="margin-top: 2px; text-align:center;">
                        <a href="http://helpdesk.mtnptech.com" target="_blank"><span style="font-size: 12px">Covid-19
                                Help</span></a>
                    </li>
                </blink>
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="About">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Service">Services & Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="jobs">Jobs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Training">Training</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="Contact_Us">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="d-flex justify-content-between mb-3 sticky">
        <div class="p-2 ">
            <p class="nav navbar-nav ml-auto">Anonymous User</p>
        </div>
        <div class="p-2 "><button type="button" id="loginPage" href="#myLoginModal"
                class="trigger-btn float-right btn btn-outline-success" data-toggle="modal">
                <i class="fas fa-sign-in-alt"></i>
                <span>Login</span>
            </button></div>

    </div>
    <div id="myLoginModal" class="modal fade">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #E1E8EB;">
                    <h4 class="modal-title ">User Login</h4>
                    <button type="button" class="close " style="color:black;" data-dismiss="modal"
                        aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="common/login_modal.php" method="POST">
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text" style="background-color:#E1E8EB;"><i
                                            class="fa fa-user" style="font-size:20px;color:#334257;"></i>
                                    </div>
                                </div>
                                <input type="text" name="user_name" class="form-control" placeholder="Mobile number"
                                    required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text" style="background-color:#E1E8EB;"><i
                                            class="fa fa-lock" style="font-size:20px;color:#334257;"></i>
                                    </div>
                                </div>
                                <input type="password" name="password" class="form-control" placeholder="Password"
                                    required="required">
                            </div>

                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn  btn-block btn-lg "
                                style="background-color:#E1E8EB;" value="Login">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a>If you have already created Id, then you just login and apply!!!</a>
                </div>
                <div class="modal-footer">
                    <a href="#" data-toggle="modal" data-target="#signupModal">Don't have id, click here to create</a>
                </div>
            </div>
        </div>
    </div>


    <div class="container my-3">
    <h3>Current Openings</h3>
        <div id="records_contant">

        </div>
        <?php
       
          
       echo"<div class='row '>";
      
      
       while($rows=mysqli_fetch_array($rs_result))
       {
        if ($rows['job_status']=="Closed")
        {
          $btns = "disabled";
        }
        else
        {
          $btns = "enabled";
        }
        $post_dt = date_create($rows["post_date"]);
        $id = $rows['job_id'];
          echo"<div class='col-sm-6 my-2 py-sm-0 '>";
          echo"  <div class='card '>";
          echo"<div class='card-header'>";
          echo" <div class='d-flex justify-content-between'>";
          echo"<div class=''>";
          echo "".$rows['job_profile']."&nbsp;&nbsp;<span style='font-size:18px;cursor:pointer;' data-id='".$id."'class='btn-popup '
              onclick='openNav()'> <i class='fa fa-arrow-circle-right' style='font-size:25px; color:#185ADB'
              aria-hidden='true'></i></span> ";
          echo"</div>";
          echo"<div class=''>";
          echo"<p style='color:#185ADB;'>Posted on<b style='font-size:15px;'>:</b> ".$rows['post_date']."</p>";
          echo"</div>";
          echo"</div>";
          echo" </div>";
          echo" <div class='card-body'>";
          echo"<i class='fa fa-briefcase' style='font-size:20px;color:#334257;'>";
          echo"</i>&nbsp;&nbsp;Experience<b style='font-size:15px;'>:</b> &nbsp;".$rows['experience']."<b style='font-size:20px;'>,</b>";
          echo"&nbsp;&nbsp;Package<b style='font-size:15px;'>:</b> <i class='fa fa-inr' aria-hidden='true'></i>";
          echo"".$rows['package']."<b style='font-size:20px;'>,</b>";
                                echo"&nbsp;&nbsp;<i class='fa fa-map-marker' aria-hidden='true' style='font-size:22px;color: #334257;'></i> Location<b style='font-size:15px;'>:</b>";
                                echo"&nbsp;".$rows['location']."";
       
                              echo"<p class='mt-1'>Qualification<b style='font-size:18px;'>:</b> &nbsp;&nbsp;".$rows['qualification']."</p>";
                             
       
                                echo" <div class='d-flex justify-content-between'>";
                                echo"<div class='p-2 '>";
                                       
                               
                                if (isset($_SESSION['user_n']))
                                {
                                ?>
                                                <button type="button" class="btn btn-primary  applyJob"
                                                    data-mobile="<?php echo $_SESSION['user_n'];?>"
                                                    data-jobid="<?php echo $rows['job_id'];?>" data-email="<?php echo $email;?>"
                                                    <?php echo $btns;?>>Apply</button>
                
                                                <?php
                                }
                                else
                                {
                                ?>
                                                <button type="button" class="btn btn-outline-primary" data-toggle="modal"
                                                    data-target="#myLoginModal">Apply</button>
                                                <?php
                                  }
                                
                              
                       
       
                                           echo"  </div>";
                                           echo"<div class='p-2'>";
                                           if ( $rows['job_status']=='Open')
                                           $colr = 'btn-success';
                                         else
                                           $colr = 'btn-warning';
                                        echo" <button class='btn btn btn-info btn-sm' mt-1 text-center' disabled>Position:
                                      ".$rows['job_status']." </button>";
                                      echo"</div>";
       
                                      echo" </div>";
                                      echo"</div>";
                                      echo"</div>";
                                      echo"</div>";
                                      echo" <br>";
                   
                   }
             
           ?>

    </div>
    <nav aria-label="Page navigation example">
  <ul class="pagination ">
      
    <li class="page-item">
    <a class="page-link"  aria-label="Previous" href="<?php
  if($page <=1)
  {
      echo '#';
      
  }
  else
  {
      echo"?page=".$page -1;
  }
  ?>"> <span aria-hidden="true">&laquo;</span>
  <span class="sr-only">Previous</span></a>
    </li>

    <?php
    $sql="select * from tbl_job_post";
    $rs_result=mysqli_query($con,$sql);
    $total_records=mysqli_num_rows($rs_result);
    $total_page=ceil($total_records/$num_per_page);
    for($i=1;$i<=$total_page;$i++)
    {
        ?>
        
        <li class="page-item" ><?php  echo "<a  class='page-link' aria-label='Previous' href='jobpage.php?page=".$i."' >".$i."</a>";?>
        </li>
        <?php
       
    }
    ?>
   
   
   
   
   
   
   
    <li class="page-item">
   
   
   <a class="page-link" aria-label="Next"href="<?php
  if($page ==$total_page)
  {
      echo '#';
      
  }
  else
  {
      echo"?page=".$page +1;
  }
  ?>"> <span aria-hidden="true">&raquo;</span>
  <span class="sr-only">Next</span></a>
     
    </li>
  </ul>
</nav>
   

    </div>



    <!---------------------side card--------------------->

    <div id="mySidenav" class="sidenav ">


    </div>

    <script type="text/javascript">
    $(document).ready(function() {

        $('.btn-popup').click(function() {
            var custId = $(this).data('id');
            $.ajax({
                url: 'get_data.php',
                type: 'post',
                data: {
                    custId: custId
                },
                success: function(response) {
                    $('.sidenav').html(response);
                    $('#mySidenav').modal('show');
                }
            });
        });

    });

    function openNav() {
        document.getElementById("mySidenav").style.width = "900px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }

    function readRecords() {
        var readrecord = "readrecord";
        $.ajax({
            url: "jobmodel.php",
            type: 'post',
            data: {
                readrecord: readrecord
            },

            success: function(data, status) {
                $('#records_contant').html(data);

            }
        });

    }
    </script>

</body>

</html>