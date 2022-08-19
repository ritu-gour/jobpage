<?php
include("../common/config.php");
if (isset($_GET['upd'])){
    $mobileNo=$_GET['upd'];
    $query = "SELECT *FROM tbl_quick_enquiry WHERE mobileNo=$mobileNo";
    $fire = mysqli_query($con, $query) or die("can not database." . mysqli_error($con));
    if($fire)
    $rows = mysqli_fetch_assoc($fire);
}
//---update----

if (isset($_POST['btnupdate'])){
$fullName = $_POST['fullName'];
//$mobileNo = $_POST['mobileNo'];
$emailId = $_POST['emailId'];
$qualification = $_POST['qualification'];
$message = $_POST['message'];
$collegeName = $_POST['collegeName'];
$enquiryDate = $_POST['enquiryDate'];


$query = "UPDATE tbl_quick_enquiry SET fullName='$fullName',emailId='$emailId',
qualification='$qualification',message='$message',collegeName='$collegeName',
enquiryDate='$enquiryDate' WHERE mobileNo=$mobileNo";
$fire = mysqli_query($con,$query) or die("can not.".mysqli_error($con));

if ($fire) {
header("location:quick_enquiry_display.php");

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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/stylemain.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <title>Micro Technologies</title>
    <link rel="stylesheet" href="../css/styletraining.css">
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
        <div class="row my-5">
            <div class="col-sm-2 "></div>
            <div class="col-12 col-sm- col-md-8  shadow rounded mt-5 mb-5 bg-light">
                <h4 class="text-center ">Training Update Registration Form</h4>
                <hr class="bg-danger" />

                <form name="signup" id="signup" action="#" method="POST">
               
                            <div class="row">
                                <div class="col-sm">
                                    <div class="mb-3">

                                        <label for="fullName1" class="form-label">FullName:</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend ">
                                                <div class="input-group-text" style="background-color: #120078;"><i
                                                        class="fa fa-user" style="font-size:20px;color:white;"
                                                        aria-hidden="true"></i></div>
                                            </div>
                                            <input value="<?php echo $rows['fullName'] ?>" type="text" class="form-control" id="fullName" name="fullName"
                                                placeholder="Enter your fullName" required />
                                        </div>

                                    </div>

                                    <div class="mb-3">
                                        <label for="mobileNo1" class="form-label">Mobile NO.:</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text" style="background-color: #120078;"><i
                                                        class="fa fa-phone" style="font-size:20px;color:white;"
                                                        aria-hidden="true"></i></div>
                                            </div>
                                            <input value="<?php echo $rows['mobileNo'] ?>" type="mobile" class="form-control" id="mobileNo" name="mobileNo"
                                                placeholder="Enter your mobile" required />
                                        </div>


                                    </div>

                                    <div class="mb-3">

                                        <label for="emailId1" class="form-label">Email:</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text" style="background-color: #120078;"><i
                                                        class="fa fa-envelope" style="font-size:20px;color:white;"></i>
                                                </div>
                                            </div>
                                            <input value="<?php echo $rows['emailId'] ?>" type="email" class="form-control" id="emailId" name="emailId"
                                                placeholder="Enter your email" required />
                                        </div>


                                    </div>

                                    <div class="mb-3">
                                        <label for="qualification1" class="form-label">Qualification:</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text" style="background-color: #120078;"><i
                                                        class="fa fa-graduation-cap" style="font-size:20px;color:white;"
                                                        aria-hidden="true"></i></div>
                                            </div>
                                            <input value="<?php echo $rows['qualification'] ?>" type="text" class="form-control" id="qualification"
                                                name="qualification" placeholder="Enter your Qualification" required />
                                        </div>


                                    </div>
                                </div>
                                <div class="col-sm">

                                    <div class="mb-3">
                                        <label for="message1" class="form-label">Any Message</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text" style="background-color: #120078;"><i
                                                        class="fa fa-envelope" style="font-size:20px;color:white;"></i>
                                                </div>
                                            </div>
                                            <input value="<?php echo $rows['message'] ?>" class="form-control" type="text" name="message" id="message"
                                                required />
                                        </div>


                                    </div>

                                    <div class="mb-3">
                                        <label for="collegeName1" class="form-label">CollegeName</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text" style="background-color: #120078;"><i
                                                        class="fa fa-briefcase" style="font-size:20px;color:white;"></i>
                                                </div>
                                            </div>
                                            <input value="<?php echo $rows['collegeName'] ?>" type="text" class="form-control" id="collegeName" name="collegeName"
                                                placeholder="Enter your CollegeName" required />
                                        </div>



                                    </div>

                                    <div class="mb-3">
                                        <label for="enquiryDate1" class="form-label">EnquiryDate</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text" style="background-color: #120078;"><i
                                                        class="fa fa-file" style="font-size:20px;color:white;"></i>
                                                </div>
                                            </div>
                                            <input value="<?php echo $rows['enquiryDate'] ?>" class="form-control" type="date" name="enquiryDate" id="enquiryDate"
                                                placeholder="Enter your EnquiryDate" required />
                                        </div>


                                    </div>


                                    <div class="mb-3 my-5">
                                        <div class="form-group">
                                            <button type="submit" name="btnupdate" class="btn btn-block text-white"
                                                style="background-color: #120078;">Update</button>

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
