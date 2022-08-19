<?php


include("../common/config.php");
if (isset($_GET['upd'])){
    $job_id = $_GET['upd'];
    $query = "SELECT *FROM tbl_job_post WHERE job_id =$job_id";
    $fire = mysqli_query($con, $query) or die("can not database." . mysqli_error($con));
    if($fire)
    $rows = mysqli_fetch_assoc($fire);
}
//---update----

if ((isset($_POST['update']))) {

$skills = $_POST['skills'];
$Job_description = $_POST['Job_description'];
$qualification = $_POST['qualification'];
$employment_type = $_POST['employment_type'];
$package = $_POST['package'];
$location = $_POST['location'];
$post_date = $_POST['post_date'];
$job_status = $_POST['job_status'];
$job_profile = $_POST['job_profile'];
//$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
$experience = $_POST['experience'];
$query = "UPDATE tbl_job_post SET  `skills`='$skills'
,`Job_description`='$Job_description',
`qualification`='$qualification',`employment_type`='$employment_type'
,`package`='$package',`location`='$location',`post_date`='$post_date',
`job_status`='$job_status',`job_profile`='$job_profile',
`experience`='$experience' WHERE job_id=$job_id";
$fire = mysqli_query($con, $query) or die("can not." . mysqli_error($con));

if ($fire) {
header("location:display_jobs.php");

    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="stylemain.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <title>Micro Technologies</title>
    <link rel="icon" href="image/micro-technologies-logo-120x120.png" type="image/icon type" />

    <link rel="stylesheet" href="../css/styletraining.css">
    <link rel="stylesheet" href="../css/style.css" />

</head>

<body>
    <?php include "../common/navbar.php"; ?>
    <br>
    <br>
    <br>
    <div class="container my-5">
        <div class="row my-5">
            <div class="col-sm-2 "></div>
            <div class="col-12 col-sm- col-md-8  shadow rounded mt-5 mb-5 bg-light">
                <h4 class="text-center ">Update Form</h4>
                <hr class="bg-danger" />

                <form name="signup" id="signup" action="#" method="POST">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="job_id">Job_Id:</label>
                                <input disabled value="<?php echo $rows['job_id'] ?>" type="text" class="form-control"
                                    id="job_id" name="job_id" placeholder="Enter your job_id" required />
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="skills1">Skills:</label>
                                <input value="<?php echo $rows['skills'] ?>" type="text" class="form-control"
                                    id="skills" name="skills" placeholder="Enter your Skills" required />
                            </div>

                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Job_description1">Job_Description:</label>
                                <input value="<?php echo $rows['Job_description'] ?>" type="text" class="form-control"
                                    id="Job_description" name="Job_description" placeholder="Enter your Job_Description"
                                    required />
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="qualification1">Qualification:</label>
                                <input value="<?php echo $rows['qualification'] ?>" type="text" class="form-control"
                                    id="qualification" name="qualification" placeholder="Enter your Qualification"
                                    required />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="employment_type1">Employment_Type:</label>
                                <input value="<?php echo $rows['employment_type'] ?>" type="text" class="form-control"
                                    id="employment_type" name="employment_type" placeholder="Enter your Employment_Type"
                                    required />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="package1">Package:</label>
                                <input value="<?php echo $rows['package'] ?>" type="text" class="form-control"
                                    id="package" name="package" placeholder="Enter your Package" required />
                            </div>

                        </div>

                    </div>
                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="location">Location: </label>
                                <input value="<?php echo $rows['location'] ?>" type="text" class="form-control"
                                    id="location" name="location" placeholder="Enter your Location" required />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="post_date1">Post_Date: </label>
                                <input value="<?php echo $rows['post_date'] ?>" type="date" class="form-control"
                                    id="post_date" name="post_date" placeholder="Enter your passing" required />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="job_status1">Job_Status:</label>
                                <input value="<?php echo $rows['job_status'] ?>" type="text" class="form-control"
                                    id="job_status" name="job_status" placeholder="Enter your Job_Status" required />
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="job_profile1">Job_Profile:</label>
                                <input value="<?php echo $rows['job_profile'] ?>" type="text" class="form-control"
                                    id="job_profile" name="job_profile" placeholder="Enter your Job_Profile" required />
                            </div>
                        </div>
                        <!-- <div class="col-md-4">
                <label for="image">image: </label>
                <input value="<?php echo $rows['image'] ?>" type="file" class="form-control" placeholder="browse"
                    id="image" name="image" required />
            </div>-->
                        <div class="col-md-4">

                            <div class="form-group">
                                <label for="Experience1">Experience:</label>
                                <input value="<?php echo $rows['experience'] ?>" type="text" class="form-control"
                                    id="experience" name="experience" placeholder="Enter your Experience" required />
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">

                            <div class=" mb-5 d-flex justify-content-start">
                                <div>
                                    <button type="submit" name="update" class="btn btn-lg btn-primary">Update</button>
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

    <!-- Footer -->
    <div class="container-fluid text-dark" style="background-color: #DCDCDC;">
        <div class="row">
            <div class="col-sm-8 mt-3 mb-3">
                <p class="text-center">Copyright &#169; 2021 Micro Technologies All Right Reserved</p>
            </div>
            <div class="col-sm-4   mt-3 mb-3">
                <div class="d-flex justify-content-around">
                    <div> <a href="#"><img src="../svg/facebook-3.svg" alt="" height="30" width="30" srcset=""></a></div>
                    <div><img src="../svg/linkedin-icon-2.svg" alt="" srcset="" height="30" width="30"></a></div>
                    <div><img src="../svg/twitter-3.svg" alt="" srcset="" height="30" width="30"></a></div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init({
        offset: 200,
        duration: 900,
        once: true,
    });
    </script>
    <!-- Script for POP Modal > -->

</body>

</html>