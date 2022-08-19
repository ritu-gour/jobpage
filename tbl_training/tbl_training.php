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
    <a href="tbl_training_display.php" style="color: blue;">View</a>
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
                                        <div class="input-group-text">
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" id="trainingBatchNo" name="trainingBatchNo"
                                        placeholder="Enter your Training Heading" required />
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="trainingHeading" class="form-label">Training Heading:</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" id="trainingHeading" name="trainingHeading"
                                        placeholder="Enter your Training Heading" required />
                                </div>

                            </div>
                            <div class="mb-3">
                                <label for="skill" class="form-label">Skills:</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" id="skill" name="skill"
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
                                    <input type="text" class="form-control" id="remark" name="remark"
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
                                    <input class="form-control" type="text" name="syllabus" id="syllabus"
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
                                    <input type="date" class="form-control" id="startsform" name="startsform"
                                        placeholder="Enter your Starts From" required />
                                </div>
                            </div>

                            <div class="mb-3 my-3">
                                <div class="form-group">
                                    <button type="submit" name="submit" class="btn btn-primary btn-lg">Submit</button>


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
<?php

if (isset($_POST['submit'])){
    include '../common/config.php';
    $trainingBatchNo = $_POST['trainingBatchNo'];
    $trainingHeading = $_POST['trainingHeading'];
    $skill = $_POST['skill'];
    $remark = $_POST['remark'];
    $syllabus = $_POST['syllabus'];
    $startsform = $_POST['startsform'];
    
  
    $query = "INSERT INTO `tbl_training`(`trainingBatchNo`,`trainingHeading`, `skill`, `remark`, `syllabus`,`startsform`) 
    VALUES ('$trainingBatchNo','$trainingHeading','$skill','$remark','$syllabus','$startsform')";
     $run = mysqli_query($con,$query) or die("con not insert the data.".mysqli_error($con));
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