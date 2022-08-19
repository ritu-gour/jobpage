<?php

include("../common/config.php");
if (isset($_GET['upd'])){
    $trainingBatchNo= $_GET['upd'];
    $query = "SELECT *FROM tbl_training WHERE trainingBatchNo=$trainingBatchNo";
    $fire = mysqli_query($con, $query) or die("can not database." . mysqli_error($con));
    if($fire)
    $rows = mysqli_fetch_assoc($fire);
}
//---update----

if ((isset($_POST['update']))) {


$trainingHeading= $_POST['trainingHeading'];
$skill = $_POST['skill'];
$remark = $_POST['remark'];
$syllabus = $_POST['syllabus'];
$startsform = $_POST['startsform'];


$query = "UPDATE tbl_training SET trainingHeading='$trainingHeading',
skill='$skill',remark='$remark',
syllabus='$syllabus',startsform='$startsform' WHERE trainingBatchNo=$trainingBatchNo";
$fire = mysqli_query($con, $query) or die("can not." . mysqli_error($con));

if ($fire) {
header("location:tbl_training_display.php");

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
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6 my-5 shadow rounded mt-5 mb-5 ">
                <h4 class="text-center my-4">Training Form</h4>
                <hr class="bg-danger" />
                <form action="#" method="POST">
                    <div class="row">
                        <div class="col-sm">
                            <div class="mb-3">
                                <label for="trainingBatchNo1" class="form-label">Training Batch No:</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"></i>
                                        </div>
                                    </div>
                                    <input  disabled value="<?php echo $rows['trainingBatchNo'] ?>" type="text" class="form-control" id="trainingBatchNo" name="trainingBatchNo"
                                        placeholder="Enter your Training Heading" required />
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="trainingHeading" class="form-label">Training Heading:</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"></i>
                                        </div>
                                    </div>
                                    <input value="<?php echo $rows['trainingHeading'] ?>" type="text" class="form-control" id="trainingHeading" name="trainingHeading"
                                        placeholder="Enter your Training Heading" required />
                                </div>

                            </div>
                            <div class="mb-3">
                                <label for="skill" class="form-label">Skills:</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"></i>
                                        </div>
                                    </div>
                                    <input value="<?php echo $rows['skill'] ?>" type="text" class="form-control" id="skill" name="skill"
                                        placeholder="eg. C, CPP, NodeJs, ReactJs etc" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="mb-3">
                                <label for="remark" class="form-label">Remark:</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"></div>
                                    </div>
                                    <input value="<?php echo $rows['remark'] ?>" type="text" class="form-control" id="remark" name="remark"
                                        placeholder="Enter your Remark" required />
                                </div>


                            </div>
                            <div class="mb-3">
                                <label for="syllabus" class="form-label">Syllabus:</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                        </div>
                                    </div>
                                    <input value="<?php echo $rows['syllabus'] ?>" class="form-control" type="text" name="syllabus" id="syllabus"
                                        placeholder="Syllabus" required />
                                </div>

                            </div>
                            <div class="mb-3">
                                <label for="startsform" class="form-label">Starts From:</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                        </div>
                                    </div>
                                    <input value="<?php echo $rows['startsform'] ?>" type="date" class="form-control" id="startsform" name="startsform"
                                        placeholder="Enter your Starts From" required />
                                </div>
                            </div>

                            <div class="mb-3 my-3">
                                <div class="form-group">
                                    <button type="submit" name="update" class="btn btn-primary btn-lg">Update</button>


                                </div>
                            </div>
                        </div>

                </form>

            </div>
        </div>
        <div class="col-sm-4"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>

</html>
