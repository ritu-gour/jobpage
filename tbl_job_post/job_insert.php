<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-EMNRGBRPHF"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-EMNRGBRPHF');
    </script>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Micro Technologies</title>
    <link rel="icon" href="image/micro-technologies-logo-120x120.png" type="image/icon type" />
    <!-- Scroll Animation  -->


    <!-- bootstrap  CSS  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" />
    <!-- font awsome  -->

    <!-- external Css  -->
    <link rel="stylesheet" href="../css/style.css" />

    <style>
    h1 {
        font-family: "Sansita Swashed", cursive;
    }

    h2 {
        font-family: 'Average Sans', sans-serif;
    }

    h3 {
        font-family: 'Raleway', sans-serif;
    }

    h4 {
        font-family: 'Average Sans', sans-serif;
    }

    h5 {
        font-family: 'Average Sans', sans-serif;
    }

    .heading1 {
        font-family: 'Amiri', serif;
        font-size: 3.2em;
        background: -webkit-linear-gradient(rgb(39, 167, 97), #333);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    h6:hover {
        box-shadow: 0 0 8px rgba(33, 33, 33, .2);
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

    div.sticky {
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
        0% {
            -webkit-transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(360deg);
        }
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>

<body>
    <!-- navBar  -->
    <?php include "../common/navbar.php"; ?>

    <br>
    <br>
    <div class="container my-5">
        <a href="display_jobs.php" style="color: blue;">View</a>
        <div class="row my-5">
            <div class="col-sm-2 "></div>
            <div class="col-12 col-sm- col-md-8  shadow rounded mt-5 mb-5 bg-light">
                <h4 class="text-center ">Registration Form</h4>
                <hr class="bg-danger" />
               
                <form action="#" method="POST" enctype="multipart/form-data" id="job-form">
                    <div class="row">
                    <div class="col-md-4">
                            <div class="form-group">
                                <label for=" job_id1"> job_id:</label>
                                <input type="text" class="form-control" id=" job_id" name=" job_id"
                                    placeholder="Enter your  job_id" required />
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="skills1">Skills:</label>
                                <input type="text" class="form-control" id="skills" name="skills"
                                    placeholder="Enter your Skills" required />
                            </div>

                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Job_description1">Job_Description:</label>
                                <input type="text" class="form-control" id="Job_description" name="Job_description"
                                    placeholder="Enter your Job_Description" required />
                            </div>
                        </div>
                    </div>

                    <div class="row">

                    <div class="col-md-4">
                            <div class="form-group">
                                <label for="qualification1">Qualification:</label>
                                <input type="text" class="form-control" id="qualification" name="qualification"
                                    placeholder="Enter your Qualification" required />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="employment_type1">Employment_Type:</label>
                                <input type="text" class="form-control" id="employment_type" name="employment_type"
                                    placeholder="Enter your Employment_Type" required />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="package1">Package:</label>
                                <input type="text" class="form-control" id="package" name="package"
                                    placeholder="Enter your Package" required />
                            </div>

                        </div>
                       
                    </div>
                    <div class="row">

                    <div class="col-md-4">
                            <div class="form-group">
                                <label for="location" 1>Location: </label>
                                <input type="text" class="form-control" id="location" name="location"
                                    placeholder="Enter your Location" required />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="post_date1">Post_Date: </label>
                                <input type="date" class="form-control" id="post_date" name="post_date"
                                    placeholder="Enter your passing" required />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="job_status1">Job_Status:</label>
                                <input type="text" class="form-control" id="job_status" name="job_status"
                                    placeholder="Enter your Job_Status" required />
                            </div>
                        </div>
                       
                    </div>
                    <div class="row">
                    <div class="col-md-4">
                            <div class="form-group">
                                <label for="job_profile1">Job_Profile:</label>
                                <input type="text" class="form-control" id="job_profile" name="job_profile"
                                    placeholder="Enter your Job_Profile" required />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="image">image: </label>
                            <input type="file" class="form-control" placeholder="browse" id="image" name="image"
                                required />
                        </div>
                        <div class="col-md-4">

                            <div class="form-group">
                                <label for="Experience1">Experience:</label>
                                <input type="text" class="form-control" id="experience" name="experience"
                                    placeholder="Enter your Experience" required />
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">

                            <div class=" mb-5 d-flex justify-content-start">
                                <div>
                                    <button type="submit" name="submit" class="btn btn-lg btn-primary">Submit</button>
                                </div>

                                <div style="margin-left:20px;">
                                    <button type="submit" name="cancel" class="btn btn-lg btn-danger">Cancel</button>
                                </div>

                            </div>

                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
    <div class="col-sm-4"></div>
    </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>

</html>
<?php
include('../common/config.php');
if (isset($_POST['submit'])) {
    $job_id =$_POST['job_id'];
    $skills =$_POST['skills'];
    $Job_description =$_POST['Job_description'];
    $qualification =$_POST['qualification'];
    $employment_type =$_POST['employment_type'];
    $package =$_POST['package'];
    $location =$_POST['location'];
    $post_date =$_POST['post_date'];
    $job_status =$_POST['job_status'];
    $job_profile =$_POST['job_profile'];
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $experience =$_POST['experience'];
    $sql = "INSERT INTO `tbl_job_post`(`job_id`,`skills`, `Job_description`,
     `qualification`, `employment_type`, `package`, `location`, `post_date`,
      `job_status`, `job_profile`, `image`, `experience`)
     VALUES ('$job_id','$skills','$Job_description','$qualification','$employment_type',
     '$package','$location','$post_date','$job_status','$job_profile','$image','$experience')";

    $run = mysqli_query($con, $sql) or die("con not insert the data.".mysqli_error($con));

    if($run){
        ?> <script>
alert("data submitted to database");
</script>
<?php
  
      } else {
      ?>

<script>
alert('Not Submitted');
</script>

<?php
      }
}
?>