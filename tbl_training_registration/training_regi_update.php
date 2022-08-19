<?php
include("common/config.php");
if (isset($_GET['upd'])){
    $mobileNo =$_GET['upd'];
    $query = "SELECT *FROM tbl_training_registration WHERE mobileNo= $mobileNo";
    $fire = mysqli_query($con, $query) or die("can not database." . mysqli_error($con));
    if($fire)
    $rows = mysqli_fetch_assoc($fire);
}
//---update----

if (isset($_POST['btnupdate'])){
$fullName = $_POST['fullName'];
$gender = $_POST['gender'];
$fatherName = $_POST['fatherName'];
$nationality = $_POST['nationality'];
$address = $_POST['address'];
//$mobileNo = $_POST['mobileNo'];
$emailId = $_POST['emailId'];
$workingStatus = $_POST['workingStatus'];
$alternateMobileNo = $_POST['alternateMobileNo'];
$qualification = $_POST['qualification'];
$branch = $_POST['branch'];
$passingYear = $_POST['passingYear'];
$collegeName = $_POST['collegeName'];
$collegeState = $_POST['collegeState'];
$collegeCity = $_POST['collegeCity'];
$registrationDate = $_POST['registrationDate'];
$query = "UPDATE tbl_training_registration SET fullName='$fullName'
,gender='$gender',fatherName='$fatherName',nationality='$nationality',address='$address',
,emailId='$emailId',workingStatus='$workingStatus',
alternateMobileNo=$alternateMobileNo',
qualification='$qualification',branch='$branch',passingYear='$passingYear',collegeName='$collegeName',
collegeState='$collegeState',collegeCity='$collegeCity',
registrationDate='$registrationDate' WHERE mobileNo= $mobileNo";
$fire = mysqli_query($con,$query) or die("can not.".mysqli_error($con));

if ($fire) {
header("location:train_regis_display.php");

    }
}

?>
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
    <link rel="stylesheet" href="css/style.css" />

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
    <?php include "common/navbar.php"; ?>
    
    <br>
    <br>
    <div class="container my-5">
        <div class="row my-5">
            <div class="col-sm-2 "></div>
            <div class="col-12 col-sm- col-md-8  shadow rounded mt-5 mb-5 bg-light">
                <h4 class="text-center ">Training Update Registration Form</h4>
                <hr class="bg-danger" />

                <form name="signup" id="signup" action="#" method="POST">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="trainingBatchNo1" class="form-label">Training Batch No:</label>
                                <input  value="<?php echo $rows['trainingBatchNo'] ?>" type="text" class="form-control"
                                 id="trainingBatchNo" name="trainingBatchNo"
                                    placeholder="Enter your Training Batch No" required />

                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="fullName1">FullName:</label>
                                <input value="<?php echo $rows['fullName'] ?>"type="text" class="form-control"
                                 id="fullName" name="fullName"
                                    placeholder="Enter your FullName" required />
                            </div>

                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="fatherName1">FatherName:</label>
                                <input value="<?php echo $rows['fatherName'] ?>" type="text"
                                 class="form-control" id="fatherName" name="fatherName"
                                    placeholder="Enter your FatherName" required />
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="branch1">Branch:</label>
                                <input value="<?php echo $rows['branch'] ?>" type="text"
                                 class="form-control" id="branch" name="branch"
                                    placeholder="Enter your Branch" required />
                            </div>
                        </div>
                        <div class="col-md-4">


                            <div class="form-group">
                                <label for="address1">Address:</label>
                                <input value="<?php echo $rows['address'] ?>" 
                                type="text" class="form-control" id="address" name="address"
                                    placeholder="Enter your Address" required />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="mobileNo1">Mobile No.:</label>
                                <input value="<?php echo $rows['mobileNo'] ?>"
                                 type="mobile" class="form-control" id="mobileNo" name="mobileNo"
                                    placeholder="Enter your Mobile" required />
                            </div>

                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="emailId" 1>EmailId: </label>
                                <input value="<?php echo $rows['emailId'] ?>" 
                                type="email" class="form-control" id="emailId" name="emailId"
                                    placeholder="Enter your EmailId" required />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="passingYear1">PassingYear:</label>
                                <input value="<?php echo $rows['passingYear'] ?>" 
                                type="month" class="form-control" id="passingYear" name="passingYear"
                                    placeholder="Enter your passing" required />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="alternateMobileNo1">Alternate Mobile No:</label>
                                <input value="<?php echo $rows['alternateMobileNo'] ?>"
                                 type="mobile" class="form-control" id="alternateMobileNo"
                                    name="alternateMobileNo" placeholder="Enter your AlternateMobNo." required />
                            </div>
                        </div>
                    </div>
                    <div class="row  d-flex justify-content-start">

                    
                        <div class="col-md-3">
                            <label for="gender1">Gender:</label>
                            <div class="form-group">
                                <div class="">
                                    <select value="<?php echo $rows['gender']?>" id="gender" name="gender" class="form-select "
                                        aria-label="Default select example">
                                       
                                        <option value="Female">Female</option>
                                        <option value="Male">Male</option>

                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <label for="qualification1">Qualification: </label>

                            <div class="form-group">

                                <div class="">

                                    <select value="<?php echo $rows['qualification'] ?>" id="qualification" name="qualification" class="form-select "
                                        aria-label="Default select example">
                                   
                                        <option value="Be\BTech">Be\BTech</option>
                                        <option value="M.Tech">M.Tech</option>
                                        <option value="BSC">BSC</option>
                                        <option value="Bcom">Bcom</option>
                                        <option value="Be\BTech">BCA</option>
                                        <option value="M.Tech">MCA</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="nationality1">Nationality:</label>
                                <div class="">

                                    <select value="<?php echo $rows['nationality'] ?>" id="nationality" name="nationality" class="form-select "
                                        aria-label="Default select example">
                                       
                                        <option value="Indian">Indian</option>
                                        <option value="NRI">NRI</option>

                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <label for="workingStatus1">WorkStatus:</label>
                            <div class="form-group">
                                <div class="">


                                    <select value="<?php echo $rows['workingStatus'] ?>" id="workingStatus" name="workingStatus" class="form-select "
                                        aria-label="Default select example">
                                        
                                        <option value="student">Student</option>
                                        <option value="employee">Employee</option>
                                        <option value="job search">Job Search</option>

                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="collegeName1">CollegeName:</label>
                                <input value="<?php echo $rows['collegeName'] ?>" type="text" class="form-control"
                                 id="collegeName" name="collegeName"
                                    placeholder="Enter your College Name" required />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="collegeState1">CollegeState: </label>
                                <input value="<?php echo $rows['collegeState'] ?>" type="text" 
                                class="form-control" id="collegeState" name="collegeState"
                                    placeholder="Enter your College Status" required />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="collegeCity1">CollegeCity:</label>
                                <input value="<?php echo $rows['collegeCity'] ?>"
                                 type="text" class="form-control" id="collegeCity" name="collegeCity"
                                    placeholder="Enter your College Name" required />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="registrationDate">RegistrationDate:</label>
                                <input value="<?php echo $rows['registrationDate'] ?>"
                                 type="date" class="form-control" id="registrationDate" name="registrationDate"
                                    placeholder="Enter your Registradate" required />
                            </div>
                        </div>
                      
                    </div>
                    <div class="row">
                        <div class="col-md-12">

                            <div class=" mb-5 d-flex justify-content-start">
                                <div>
                                    <button type="submit" name="btnupdate" class="btn btn-lg btn-primary">Update</button>
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
