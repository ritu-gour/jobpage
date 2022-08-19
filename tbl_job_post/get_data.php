<?php
include('../common/config.php');
 
if(isset($_POST['custId'])){
 $id = $_POST['custId'];
 
 $sql = "select * from tbl_job_post where job_id='$id'";
 $result = mysqli_query($con,$sql);
 
 $response = "<div>";
 while($rows= mysqli_fetch_array($result)){
    $id = $rows['job_id'];
 $response .= "  <a href='javascript:void(0)' class='closebtn ' onclick='closeNav()'>&times;</a>
    <nav class='navbar navbar-light bg-light shadow mb-1'>
        <div class='container'>
            <div class='row '>
                <div class='col-md-6 my-2'>
                    <h4 style='color:#141E61;'>".$rows['job_profile']."</h4>
                </div>
                <div class='col-md-6 my-2'>
                    <button type='button' style='margin-left: 170px;font-size:15px;'
                        class='btn btn-primary btn-lg'>Apply Now <i style='font-size:20px my-5'
                            class='fa'>&#xf178;</i></button>
                </div>
                <div class='d-flex '>
                    <div class='p-2 mr-auto '>
                    </div>
                    <div class='p-2 '>
                        <p style='margin-left: 450px;font-size:15px;color:white;'></p>
                       
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class='container my-3'>
        <div class='row'>
            <div class='col-sm-7'>
                <h4 style='color:#141E61;'>Job Overview</h4>
                <div class='row' style='margin-left: 30px;'>
                    <div class='row'>
                        <div class='col-md-7'>
                            <i class='fa fa-map-marker' style='font-size:23px; color:#77ACF1 '
                                aria-hidden='true'></i>&nbsp;&nbsp;&nbsp;Location
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$rows['location']."</p>
                        </div>
                        <div class='col-md-5'>

                            <i class='fa fa-briefcase'
                                style='font-size:23px;color:#77ACF1;'></i>&nbsp;&nbsp;Employment Type
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". $rows['employment_type']."</p>
                        </div>
                    </div>
                </div>
                <div class='row ' style='margin-left: 30px;'>
                    <div class='col-md-12'>
                        <i class='fa fa-clock-o' style='font-size:23px;color:#77ACF1;'
                            aria-hidden='true'></i>&nbsp;&nbsp;&nbsp;Date Posted
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$rows['post_date']."</p>
                    </div>
                </div>
                <h4 style='color:#141E61;'>Additional Details</h4>
                <div class='row my-2' style='margin-left: 30px;'>
                    <div class='col-md-7'>
                        <i class='fa fa-hashtag' style='font-size:23px;color:#77ACF1;'></i>&nbsp;&nbsp;&nbsp;Job ID
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;416</p>
                    </div>
                    <div class='col-md-5'>
                        <i class='fa fa-calendar' style='font-size:23px;color:#77ACF1;'></i>&nbsp;&nbsp;&nbsp;Job Status
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$rows['job_status']."</p>
                    </div>
                </div>
            </div>
            <div class='col-sm-5'>
                <div class='card ' style='width: 18rem;margin-left: 20px;'>
                    <div class='card-header ' align='center' style='font-size:20px;color:#0A1931;'>Company Details</div>
                   
                    <div class='card'>
                  <img class='img' src='data:image/jpeg;base64,".base64_encode($rows['image'])."' class='card-img-top'
                   alt='...' width='284px' height='170px'/>
            
                        <div class='card-body'>

                            <h5 class='card-title ' style='margin-left:20px;'><b style='color: #00A8CC;'>".$rows['job_profile']."</b> </h5>
                           
                        </div>
                    </div>
                </div>
                <b style='margin-left:28px ;font-size:20px;color:#141E61;'>Bookmark or Share</b>
                <div class='d-flex mb-2'>
                    <a href='#'><i class='fa fa-envelope' style='font-size:30px;color:brown;'></i></a>
                    <a href='#'><i class='fa fa-facebook-square' style='font-size:30px;color:darkblue;'
                            aria-hidden='true'></i></a>
                    <a href='#'><i class='fa fa-linkedin-square ' style='font-size:30px;color:blue;'></i></a>
                    <a href='#'><i class='fa fa-whatsapp ' style='font-size:30px;color:green;'></i></a>
                </div>
            </div>
            <hr>
            <div class='row'>
            <div class='col-sm-6'>
            <h4 class='mt-3'style='color:#DA0037;'>Required Skills:-</h4>
            ". $rows['skills']."
            <br><br>
            <h4 style='color:#DA0037;'>Job Description:-</h4>
            ".$rows['Job_description']."
           
            </div>
            <div class='col-sm-6'>
            </div>
          </div>
      
       
    </div>";
 
 
 }
 $response .= "</div>";
 
 echo $response;
 exit;
}
?>