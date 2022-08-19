<?php
    include_once('../common/config.php');
   
 $num_per_page=01;
    if(isset($_GET["page"]))
    {
            $page=$_GET["page"];
    }
    else
    {
        $page=1;
    }

    $start_from=($page-1) * 01;
    $sql="Select * from tbl_training limit $start_from,$num_per_page";
    
    $rs_result=mysqli_query($con,$sql);
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
    <link rel="stylesheet" href="../css/stylemain.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <title>Micro Technologies</title>
    <link rel="stylesheet" href="../css/styletraining.css">
    <link rel="stylesheet" href="../css/style.css" />
   
  

    <style>
    .s3 {
        background: #000000;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to bottom, #434343, #000000);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to bottom, #434343, #000000);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }

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
</head>

<body>
    <?php include "../common/navbar.php"; ?>
    <br>
    <br>

    <div class="">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <!--  <img src="img/im1.jpg" class=" w-100" alt="..." width="300" height="300">--->
                    <div class="carousel-item active">
                        <img src="../img/training0.png" class="d-block w-100" alt="..." width="400px" height="400px">

                    </div>
                    <div class="carousel-item">
                        <img src="../img/training4.jpg" class="d-block w-100" alt="..." width="400px" height="400px">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/Corporate_Training_3_1.jpg" class="d-block w-100" alt="..." width="400px"
                            height="400px">
                    </div>

                    <div class="carousel-caption  ">
                        <?php
                     while($rows=mysqli_fetch_array($rs_result))
                    {
                      ?>
                        <div class='col-sm-12'>

                            <div class="row g-0">
                                <div class="card shadow card1">
                                    <div class="card-header" id="headingOne">
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <span style="color: blue; font-weight: bold;">
                                                    <?php echo $rows['trainingHeading'] ;?> <a href="#"
                                                        data-toggle="modal" data-target="#myModal"
                                                        class="btn btn-primary btn-sm">Enquiry</a></span>
                                            </div>
                                            <div class="col-sm-7">
                                                <span style="float: right; font-size: 16px;color: black">Strats
                                                    Date:<?php echo $rows['startsform'] ;?></span>
                                            </div>
                                        </div>
                                        <!-- <div class="d-flex justify-content-between">
                                    <span style="color: blue; font-weight: bold;"> <?php echo $rows['trainingHeading'] ;?>  <a href="#" data-toggle="modal" data-target="#myModal"
                                                class="btn btn-primary btn-sm">Enquiry</a></span>
                                           
                                                <span
                                                style="float: right; font-size: 16px;color: black"><?php echo $rows['startsform'] ;?></span>
                                    </div>-->


                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <input type="hidden" name="training_id" id="training_id" value="MTR1">
                                            <h7 style=" color: black;;margin-right: 560px;">
                                                Skill: <?php echo $rows['skill'] ;?></h7><br>
                                            <h7 style=" color: blue;margin-right: 200px;">
                                                <b>Remark:</b> <?php echo $rows['remark'] ;?>
                                            </h7><br>



                                            <div class="d-inline-flex p-3  text-white" style="margin-right: 800px;">

                                                <div class="p-2"> <a href="../tbl_training_registration/training_registration.php"><button
                                                            type="button"
                                                            class="btn btn-outline-primary">Register</button></a> </div>
                                                <div class="p-2 "> <a href="#"> <button type="butten"
                                                            class="btn btn-outline-success">Syllabus</button></a></div>


                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <?php
            }
                ?>
                        </div>
                    </div>

                </div>
            </div>
            <div class="container">
                <ul class="pagination my-3 ">
                    <li class="page-item" <?php
                if($page==1)
                echo "class='disabled'";
                ?>><a class="page-link" aria-label="Previous" href="training.php?page=<?php
                 echo $page-1;
                ?>
                "> <span aria-hidden="true">&laquo;</span></a></li>
                    <?php
                  $sql="select * from tbl_training";
                 $rs_result=mysqli_query($con,$sql);    
                 $total_records=mysqli_num_rows($rs_result);
                 $total_page=ceil($total_records/$num_per_page);
            for($i=1;$i <= $total_page; $i++)
              { ?>
                    <li class="page-item" <?php
                if($page==$i)
                echo "class='active'";
                ?>><a href="training.php?page="><?php  echo "<a aria-label='Previous' class='page-link' href='training.php?page=".$i."' >".$i."</a>";?></a>
                    </li>
                    <?php
               }
                  ?>
                    <li class="page-item" <?php
                if($page==$total_page)
                echo "class='disabled'";
                ?>><a aria-label="Previous" class="page-link" href="training.php?page=<?php
                 echo $page+1;
                ?>"> <span aria-hidden="true">&raquo;</span></a></li>
                </ul>
            </div>
        </div>
    </div>
    </div>

    </div>





    <section class="pt-5 pb-5  shadow " style="background-color: #D3E0DC;">
        <div class="container">
            <div class="row">
                <div class="col-6">

                </div>
                <div class="col-6 text-right">
                    <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button"
                        data-slide="prev">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
                <div class="col-12">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">

                                    <div class="col-sm-6  ">
                                        <nav class="navbar navbar  shadow" style="background-color: #120078;">
                                            <div class="container fluid">
                                                <span class="navbar-brand mb-0 h1 text-white">STUDENT TRAINING</span>
                                            </div>
                                        </nav>

                                        <div class="card shadow " style="max-width: 570px;">
                                            <div class="row ">
                                                <p class="j">ETPA INFOTECH PVT.LTD,certified by ISO 9001:2015
                                                    is Northern India’sbest training institute which offers
                                                    training in many evergreen technology.CETPA has designed its
                                                    training </p>
                                                <div class="col-sm-6 ">
                                                    <img src="../img/s1.jfif" class="card-img shadow " alt="..."
                                                        height="180px">
                                                </div>
                                                <div class="col-sm-6">
                                                    <p>program to fulfill the needs of engineering students by
                                                        offering various types of training programs like, Students
                                                        Training,
                                                        6 weeks training, Industrial training, winter training,
                                                        corporate
                                                    </p>
                                                </div>
                                                <p class="j">
                                                    training, final year project training. Moreover it provides student
                                                    training in different
                                                    technologies like Software Testing, JAVA, embedded system,oracle
                                                    certified,VLSI,
                                                    PLC and SCADA Training and much more. Different technologies are
                                                    delivered
                                                    for students training with well-described module and different time
                                                    period. <a href="#" class="btn btn-primary btn-sm">Read More</a></p>

                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <nav class="navbar navbar  shadow" style="background-color: #120078;">
                                            <div class="container-fluid">
                                                <span class="navbar-brand mb-0 h1 text-white">HR CONSULTANCY</span>
                                            </div>
                                        </nav>
                                        <div class="card shadow " style="max-width: 570px;">
                                            <div class="row ">
                                                <p class="j">Our primary focus is on the efficiency of the employees as
                                                    well as the quality of service they
                                                    provide.
                                                    We also take into account their reliability, dedication, and time
                                                    commitment. Moreover,</p>
                                                <div class="col-sm-6">
                                                    <img src="../img/consul.jfif" class="card-img shadow " alt="..."
                                                        height="180px">
                                                </div>
                                                <div class="col-sm-6">
                                                    <p>we also emphasize how professional they are, keeping in
                                                        mind the cost-effectiveness. Our HR Consultancy in Noida also
                                                        conducts preliminary interviews and placement drives.We also
                                                        provide special
                                                    </p>
                                                </div>
                                                <p class="j">
                                                    training to selected candidates, if necessary.
                                                    We have an experienced team of corporate trainers
                                                    to train the candidates according to the company’s requirements.And
                                                    so far, we have trained over
                                                    15,000 candidates who have been placed in various
                                                    multinational corporations. Human Resources in any company is
                                                    becoming increasingly important day
                                                    by day.<a href="#" class="btn btn-primary btn-sm">Read More</a></p>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">

                                    <div class="col-sm-6  ">
                                        <nav class="navbar navbar  shadow" style="background-color: #120078;">
                                            <div class="container fluid">
                                                <span class="navbar-brand mb-0 h1 text-white">FRESHER TRAINING</span>
                                            </div>
                                        </nav>
                                        <div class="card shadow " style="max-width: 570px;">
                                            <div class="row ">
                                                <p class="j">CETPA INFOTECH, the best training instituteis the right
                                                    choice for the students who are fresher or
                                                    last year pass out and want to engage in long term or short term
                                                    summer training or winter </p>
                                                <div class="col-sm-6 ">
                                                    <img src="../img/fre.png" class="card-img shadow " alt="..."
                                                        height="180px">
                                                </div>
                                                <div class="col-sm-6">
                                                    <p> training or industrial training.CETPA is the finest training
                                                        company which offers
                                                        fresher training in various Northern India’s cities like Roorkee
                                                        , Noida, Dehradun and Lucknow. The company
                                                    </p>
                                                </div>
                                                <p class="j">
                                                    offers hands on training with the help of team of highly experienced
                                                    and proficient trainers who
                                                    follows best training methodology,
                                                    which makes CETPA one of the most trusted training company in whole
                                                    of North India.<a href="#" class="btn btn-primary btn-sm">Read
                                                        More</a> </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <nav class="navbar navbar  shadow" style="background-color: #120078;">
                                            <div class="container-fluid">
                                                <span class="navbar-brand mb-0 h1 text-white">PROFESSIONAL
                                                    TRAINING</span>
                                            </div>
                                        </nav>
                                        <div class="card shadow " style="max-width: 570px;">
                                            <div class="row ">
                                                <p class="j">CETPA imparts Professional Training to individuals from
                                                    diverse field to enhance and sharpen their
                                                    technical skills so that they get jobs in to and leading companies.
                                                    CETPA, the best summer </p>
                                                <div class="col-sm-6">
                                                    <img src="../img/pro.jfif" class="card-img shadow " alt="..."
                                                        height="180px">
                                                </div>
                                                <div class="col-sm-6">
                                                    <p> training institute provides Professional Training
                                                        in manifold regions of India: ROORKEE, LUCKNOW, NOIDA,
                                                        and DEHRADUN so that participants can chose the training
                                                        center which is
                                                    </p>
                                                </div>
                                                <p class="j">
                                                    nearest to their home and start their training
                                                    sessions. Professional Training at CETPA leads to improvisation
                                                    of skills and knowledge and it enhances ones potential which
                                                    will surely develop an extra edge in one’s career. <a href="#"
                                                        class="btn btn-primary btn-sm">Read
                                                        More</a></p>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">

                                    <div class="col-sm-6  ">
                                        <nav class="navbar navbar  shadow" style="background-color: #120078;">
                                            <div class="container fluid">
                                                <span class="navbar-brand mb-0 h1 text-white">CORPORATE TRAINING</span>
                                            </div>
                                        </nav>
                                        <div class="card shadow " style="max-width: 570px;">
                                            <div class="row ">
                                                <p class="j">Today’s age is competitive age in which labor and
                                                    technologies change and become outdated rapidly.
                                                    This all leads to business complication. A company cannot employ new
                                                    employees all the </p>
                                                <div class="col-sm-6 ">
                                                    <img src="../img/cor.jfif" class="card-img shadow " alt="..."
                                                        height="180px">
                                                </div>
                                                <div class="col-sm-6">
                                                    <p>time whenever this happens because it will increase their
                                                        expense. The solution for this problem
                                                        is Corporate Training as this training will update and sharpen
                                                        employees skill set in the cutting
                                                        edge
                                                    </p>
                                                </div>
                                                <p class="j">
                                                    technologies so that they can justify their value to the
                                                    organization.
                                                    CETPA, the best training institute improves the skill and capability
                                                    of
                                                    corporate professionals by providing them high quality training .<a
                                                        href="#" class="btn btn-primary btn-sm">Read More</a> </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <nav class="navbar navbar  shadow" style="background-color: #120078;">
                                            <div class="container-fluid">
                                                <span class="navbar-brand mb-0 h1 text-white">COLLEGE CAMPUS
                                                    TRAINING</span>
                                            </div>
                                        </nav>
                                        <div class="card shadow " style="max-width: 570px;">
                                            <div class="row ">
                                                <p class="j">College campus training program is a program by which CETPA
                                                    provides different training program to
                                                    technical students in different areas like B.Tech/M.Tech, B.Sc.
                                                    /M.Sc., BCA/MCA, etc. </p>
                                                <div class="col-sm-6">
                                                    <img src="../img/coll.jfif" class="card-img shadow " alt="..."
                                                        height="180px">
                                                </div>
                                                <div class="col-sm-6">
                                                    <p> inside college campus itself in different and latest
                                                        technologies. This training is important
                                                        since it contains all the necessary traits which are important
                                                        for learners to understand before
                                                        they enter
                                                    </p>
                                                </div>
                                                <p class="j">
                                                    into corporate world where practical knowledge is given more
                                                    importance than
                                                    theoretical knowledge. At CETPA, which is best training institute,
                                                    College
                                                    Campus training is meant to augment the “industry readiness” level
                                                    of students making .<a href="#" class="btn btn-primary btn-sm">Read
                                                        More</a></p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <!-- The Modal -->
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header" style="background-color: #120078;">
                        <h4 class="modal-title" style="color: white;">Quick Enquiry</h4>
                        <button type="button" class="close " style="color: white;" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body shadow">
                        <form action="#" method="POST">
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
                                            <input type="text" class="form-control" id="fullName" name="fullName"
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
                                            <input type="mobile" class="form-control" id="mobileNo" name="mobileNo"
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
                                            <input type="email" class="form-control" id="emailId" name="emailId"
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
                                            <input type="text" class="form-control" id="qualification"
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
                                            <input class="form-control" type="text" name="message" id="message"
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
                                            <input type="text" class="form-control" id="collegeName" name="collegeName"
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
                                            <input class="form-control" type="date" name="enquiryDate" id="enquiryDate"
                                                placeholder="Enter your EnquiryDate" required />
                                        </div>


                                    </div>


                                    <div class="mb-3 my-5">
                                        <div class="form-group">
                                            <button type="submit" name="submit1" class="btn btn-block text-white"
                                                style="background-color: #120078;">Apply</button>

                                        </div>
                                    </div>
                                </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div id="carouselExampleSlidesOnly" class="carousel slide   " data-ride="carousel">
        <div class="carousel-inner " style="background-image: url(img/bus.jpg);background-repeat: no-repeat;
      
      background-size: 100% 100%;  height: 400%;
           ">
            <div class="carousel-item active">
                <div class="container con1 ">
                    <section class="pt-5 pb-5">

                        <div class="row">
                            <div class="col-md-4 ">


                                <div class="">
                                    <img src="../img/bus1.jpg" alt="img" height="240px" width="330px">
                                </div>

                            </div>
                            <div class="col-md-8 py-2 py-sm-0">
                                <div class="card card3 " style="background-color: #120078;">

                                    <p class="place card3" style="color: white;">

                                        CETPA INFOTECH PVT. LTD., "THE BEST IT AND EMBEDDED TRAINING
                                        ORGANIZATION"</strong>
                                        <br> has been conducting the
                                        "Recruitment Drive" for its one of the
                                        leading IT services provider clients&nbsp;"Fiserv"
                                        in the year 2013 for 2013 pass out (BE/B.TECH on
                                        Computer Science/ Information Technology/Electronics
                                        &amp; Communication / Telecommunication, Electrical,
                                        M.C.A / M.Sc. Computer Science and MCM with B.Sc.
                                        /B.C.A / B.C.S) candidates. Package: 2.85 Lakhs per annum
                                        M.C.A / M.Sc. Computer Science and MCM with B.Sc.

                                        <br> <br>
                                        <br> <br>
                                    </p>
                                </div>
                            </div>
                        </div>



                </div>
                </section>
            </div>

        </div>
    </div>


    <div class="container-fluid shadow s my-1 ">
        <div class="container">
            <div class="row ">
                <div class="col-sm-12 my-3">
                    <span class="badge badge-pill badge-secondary even-larger-badge"
                        style="font-size: 30px;">Database</span>
                </div>
            </div>
            <div class="row  ">
                <div class="col-sm-3">
                    <div class="card-deck" data-aos="fade-up">
                        <div class="card ">
                            <div class="card-body">
                                <img src="../img/oracle-6.svg" class="card-img-top " height="100" width="100" alt="...">
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Oracle</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card-deck" data-aos="fade-up">
                        <div class="card">
                            <div class="card-body">
                                <img src="../img/mysql.svg" class="card-img-top" alt="..." height="100" width="100">
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">MySQL</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card-deck" data-aos="fade-up">
                        <div class="card">
                            <div class="card-body">
                                <img src="../img/mariadb.svg" class="card-img-top" alt="..." height="100" width="100">
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">MariaDB</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card-deck" data-aos="fade-up">
                        <div class="card">
                            <div class="card-body">
                                <img src="../img/postgresql.svg" class="card-img-top" alt="..." height="100" width="100">
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">PostgreSQL</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 my-3">
                    <div class="card-deck" data-aos="fade-up">
                        <div class="card">
                            <div class="card-body">
                                <img src="../img/mongodb.svg" class="card-img-top" alt="..." height="100" width="100">
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">MongoDB</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 my-3">
                    <div class="card-deck" data-aos="fade-up">
                        <div class="card">
                            <div class="card-body">
                                <img src="../img/microsoft-sql-server.svg" class="card-img-top" alt="..." height="100"
                                    width="100">
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Microsoft SQL Server</small>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-sm-3 my-3">
                    <div class="card-deck" data-aos="fade-up">
                        <div class="card">
                            <div class="card-body">
                                <img src="../img/redis.svg" class="card-img-top" alt="..." height="100" width="100">
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Redis</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 my-3">
                    <div class="card-deck" data-aos="fade-up">
                        <div class="card">
                            <div class="card-body">
                                <img src="../img/aws-rds.svg" class="card-img-top" alt="..." height="100" width="100">
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Amazone RDS</small>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    <div class="container-fluid shadow  my-2" style="background-color: #EA9A96;">
        <div class="container ">
            <div class="row ">
                <div class="col-sm-12 my-3">
                    <span class="badge badge-pill badge-secondary even-larger-badge" style="font-size: 24px;">Project
                        Solutions</span>
                </div>
            </div>
            <div class="row  ">
                <div class="col-sm-3">
                    <div class="card-deck" data-aos="fade-up">
                        <div class="card shadow ">
                            <div class="card-body">
                                <img src="../img/jira-3.svg" class="card-img-top" height="50" width="100" alt="...">
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">JIRA</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card-deck" data-aos="fade-up">
                        <div class="card shadow ">
                            <div class="card-body">
                                <img src="../img/jenkins.svg" class="card-img-top" alt="..." height="50" width="100">
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Jenkins</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card-deck" data-aos="fade-up">
                        <div class="card shadow ">
                            <div class="card-body">
                                <img src="../img/database-labs.svg" class="card-img-top" alt="..." height="50" width="100">
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Database Design Solutions</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card-deck" data-aos="fade-up">
                        <div class="card shadow ">
                            <div class="card-body">
                                <img src="../img/agile-software.svg" class="card-img-top" alt="..." height="50"
                                    width="100">
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Agile</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 my-3">
                        <span class="badge badge-pill badge-secondary even-larger-badge" style="font-size: 24px;">Cloud
                            Computing</span>
                    </div>
                </div>
                <div class="col-sm-3 my-3">
                    <div class="card-deck" data-aos="fade-up">
                        <div class="card">
                            <div class="card-body">
                                <img src="../img/aws-2.svg" class="card-img-top" alt="..." height="50" width="100">
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">AWS</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 my-3">
                    <div class="card-deck" data-aos="fade-up">
                        <div class="card shadow ">
                            <div class="card-body">
                                <img src="../img/google-cloud-1.svg" class="card-img-top" alt="..." height="50"
                                    width="100">
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Google Cloud</small>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-sm-3 my-3">
                    <div class="card-deck" data-aos="fade-up">
                        <div class="card shadow ">
                            <div class="card-body">
                                <img src="../img/microsoft-azure.svg" class="card-img-top" alt="..." height="50"
                                    width="100">
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Microsoft Azure</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 my-3">
                    <div class="card-deck" data-aos="fade-up">
                        <div class="card shadow ">
                            <div class="card-body">
                                <img src="../img/salesforce-2.svg" class="card-img-top" alt="..." height="50" width="100">
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">SalesForce</small>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    <div class="container-flude">
        <div id="carouselExampleSlidesOnly" class="carousel slide s3" 
            data-bs-ride="carousel">
            <div class="carousel-inner" >
                <div class="carousel-item active">

                    <div class="container con my-4">
                        <img src="../img/bus1.jpg" style="margin-left: 40px;" class="rounded-circle my-3 shadow"
                            width="150px" height="150px" alt="Cinque Terre">
                        <div class="card-body text-white" style="margin-left: 20px;">
                            <h5 class="card-title" >Kritika Rana</h5>
                            <p class="card-text">Micro Technologies gave me the best opportunity and guidance by the
                                trainers was superlative .They provide me a platform and a better path for my career and
                                also helped me throughout the process of my placements.</p>

                        </div>

                        <div class="d-flex p-3 text-white" style="margin-left: 20px;">
                            <div class="p-2 "><a
                                    href="https://www.linkedin.com/in/kritika-rana-5bb05817b/?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base%3BztBAvU8SS4GXexFixEt8KQ%3D%3D&licu=urn%3Ali%3Acontrol%3Ad_flagship3_profile_view_base-recommendation_details_profile"><i
                                        class="fa fa-linkedin-square " style="font-size:30px;color:white;"></i></a>
                            </div>
                            <div class="p-2 "><a href="#"><i class="fa fa-facebook-square "
                                        style="font-size:30px;color:white;"></i></a></div>
                            <div class="p-2"><a href="#"><i class="fa fa-envelope "
                                        style="font-size:30px;color:white;"></i></a></div>
                        </div>
                    </div>


                </div>
                <div class="carousel-item">
                    <div class="container con my-4">
                        <img src="../img/manoj.jpg" style="margin-left: 40px;" class="rounded-circle my-3 shadow"
                            width="150px" height="150px" alt="Cinque Terre">
                        <div class="card-body text-white" style="margin-left: 20px;">
                            <h5 class="card-title">Mr. Manoj Patil</h5>
                            <p class="card-text">Great learning experience with professionalism. Looking forward to work
                                more in future.</p>
                        </div>
                        <div class="d-flex p-3 text-white" style="margin-left: 20px;">
                            <div class="p-2 "><a
                                    href="https://www.linkedin.com/in/manojpatil04/?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base%3BztBAvU8SS4GXexFixEt8KQ%3D%3D&licu=urn%3Ali%3Acontrol%3Ad_flagship3_profile_view_base-recommendation_details_profile"><i
                                        class="fa fa-linkedin-square " style="font-size:30px;color:white;"></i></a>
                            </div>
                            <div class="p-2 "><a href="#"><i class="fa fa-facebook-square "
                                        style="font-size:30px;color:white;"></i></a></div>
                            <div class="p-2"><a href="#"><i class="fa fa-envelope "
                                        style="font-size:30px;color:white;"></i></a></div>
                        </div>
                    </div>

                </div>
                <div class="carousel-item" style="height: 650px;">
                    <div class="container con my-4">
                        <img src="../img/talish.jpg" style="margin-left: 40px;" class="rounded-circle my-3 shadow"
                            width="150px" height="150px" alt="Cinque Terre">
                        <div class="card-body text-white" style="margin-left: 20px;">
                            <h5 class="card-title">Talish Hussain</h5>
                            <p class="card-text">Vinay Singh(Co-Founder of MicroTechnologies) is a great mentor and has
                                exceptional expertise in the field of computer science. Some of his expertise includes
                                SQL/NoSQL database, cloud computing, microservices, and many different programming
                                languages. I have worked under his guidance and I like his problem solving and
                                optimization skill a lot. Apart from his technical expertise, Vinay Singh is a great
                                leader and human being to work with.</p>

                        </div>
                        <div class="d-flex p-3 text-white" style="margin-left: 20px;">
                            <div class="p-2 "><a
                                    href="https://www.linkedin.com/in/talish-h-362a2317b/?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base%3BztBAvU8SS4GXexFixEt8KQ%3D%3D&licu=urn%3Ali%3Acontrol%3Ad_flagship3_profile_view_base-recommendation_details_profile"><i
                                        class="fa fa-linkedin-square " style="font-size:30px;color:white;"></i></a>
                            </div>
                            <div class="p-2 "><a href="#"><i class="fa fa-facebook-square "
                                        style="font-size:30px;color:white;"></i></a></div>
                            <div class="p-2"><a href="#"><i class="fa fa-envelope "
                                        style="font-size:30px;color:white;"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="container con my-4">
                        <img src="../img/Asmit.jpg" style="margin-left: 40px;" class="rounded-circle my-3 shadow"
                            width="150px" height="150px" alt="Cinque Terre">
                        <div class="card-body text-white" style="margin-left: 20px;">
                            <h5 class="card-title">Asmit Bajaj</h5>
                            <p class="card-text">Vinay Sir and Microtechnologies helped me alot throughout my placement
                                process. The knowledge delivered by him is excellent, as per the industrial mark and
                                helped me alot in my placement interviews.
                                Placed in various MNC's.</p>

                        </div>
                        <div class="d-flex p-3 text-white" style="margin-left: 20px;">
                            <div class="p-2 "><a
                                    href="https://www.linkedin.com/in/asmit-bajaj-a66772188/?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base%3BztBAvU8SS4GXexFixEt8KQ%3D%3D&licu=urn%3Ali%3Acontrol%3Ad_flagship3_profile_view_base-recommendation_details_profile"><i
                                        class="fa fa-linkedin-square " style="font-size:30px;color:white;"></i></a>
                            </div>
                            <div class="p-2 "><a href="#"><i class="fa fa-facebook-square "
                                        style="font-size:30px;color:white;"></i></a></div>
                            <div class="p-2"><a href="#"><i class="fa fa-envelope "
                                        style="font-size:30px;color:white;"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="container con my-4">
                        <img src="../img/Soumya.jpg" style="margin-left: 40px;" class="rounded-circle my-3 shadow"
                            width="150px" height="150px" alt="Cinque Terre">
                        <div class="card-body text-white" style="margin-left: 20px;">
                            <h5 class="card-title">Soumya Nadgir</h5>
                            <p class="card-text">My experience at this company has been great so far, I have been able
                                to learn a lot without any work pressure or stress . Also as promised I have got a
                                placement in a perfect company. Soumya Nadgir
                            </p>

                        </div>
                        <div class="d-flex p-3 text-white" style="margin-left: 20px;">
                            <div class="p-2 "><a
                                    href="https://www.linkedin.com/in/soumya-nadgir-100b76155/?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base%3BztBAvU8SS4GXexFixEt8KQ%3D%3D&licu=urn%3Ali%3Acontrol%3Ad_flagship3_profile_view_base-recommendation_details_profile"><i
                                        class="fa fa-linkedin-square " style="font-size:30px;color:white;"></i></a>
                            </div>
                            <div class="p-2 "><a href="#"><i class="fa fa-facebook-square "
                                        style="font-size:30px;color:white;"></i></a></div>
                            <div class="p-2"><a href="#"><i class="fa fa-envelope "
                                        style="font-size:30px;color:white;"></i></a></div>
                        </div>
                    </div> 
                </div>
                <div class="carousel-item " style="height: 650px;">

                    <div class="container con my-4">
                        <img src="../img/Sudeep.jpg" style="margin-left: 40px;" class="rounded-circle my-3 shadow"
                            width="150px" height="150px" alt="Cinque Terre">
                        <div class="card-body text-white" style="margin-left: 20px;">
                            <h5 class="card-title">Sudeep Agarwal</h5>
                            <p class="card-text">My internship with Micro Technologies India has been an extremely
                                rewarding experience, I've applied a lot of the knowledge that I learned in collage, and
                                also learned advanced skills from fellow interns, co-workers and mentors. I believe my
                                internship will give me an advantage when I apply for full-time jobs after I graduate
                                this Year. I received full time job offer from various companies, and joined one of them
                                as a software developer.</p>

                        </div>
                        <div class="d-flex p-3 text-white" style="margin-left: 20px;">
                            <div class="p-2 "><a
                                    href="https://www.linkedin.com/in/sudeep-agarwal-73546b188/?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base%3BztBAvU8SS4GXexFixEt8KQ%3D%3D&licu=urn%3Ali%3Acontrol%3Ad_flagship3_profile_view_base-recommendation_details_profile"><i
                                        class="fa fa-linkedin-square " style="font-size:30px;color:white;"></i></a>
                            </div>
                            <div class="p-2 "><a href="#"><i class="fa fa-facebook-square "
                                        style="font-size:30px;color:white;"></i></a></div>
                            <div class="p-2"><a href="#"><i class="fa fa-envelope "
                                        style="font-size:30px;color:white;"></i></a></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
   
    <div class="container-fluid shadow " style="background-color: #E5E5E5;">
        <div class="container ">
            <div class="row ">
                <div class="col-sm-12 my-3">
                    <span class="badge badge-pill badge-secondary even-larger-badge"
                        style="font-size: 24px;">Languages</span>
                </div>
            </div>
            <div class="row  ">
                <div class="col-sm-3">
                    <div class="card-deck" data-aos="fade-up">
                        <div class="card shadow ">
                            <div class="card-body">
                                <img src="../img/c-2975.svg" class="card-img-top" height="50" width="100" alt="...">
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">C</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="card-deck" data-aos="fade-up">
                        <div class="card shadow ">
                            <div class="card-body">
                                <img src="../img/c.svg" class="card-img-top" alt="..." height="50" width="100">
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">C++</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card-deck" data-aos="fade-up">
                        <div class="card shadow ">
                            <div class="card-body">
                                <img src="../img/java-4.svg" class="card-img-top" alt="..." height="50" width="100">
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">JAVA</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card-deck" data-aos="fade-up">
                        <div class="card shadow ">
                            <div class="card-body">
                                <img src="../img/python-5.svg" class="card-img-top" alt="..." height="50" width="100">
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Python 3</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 my-3">
                    <div class="card-deck" data-aos="fade-up">
                        <div class="card shadow ">
                            <div class="card-body">
                                <img src="../img/javascript-4.svg" class="card-img-top" alt="..." height="50" width="100">
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">JavaScript</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 my-3">
                    <div class="card-deck" data-aos="fade-up">
                        <div class="card shadow ">
                            <div class="card-body">
                                <img src="../img/php-1.svg" class="card-img-top" alt="..." height="50" width="100">
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">PHP</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-sm-12 my-3">
                        <span class="badge badge-pill badge-secondary even-larger-badge" style="font-size: 24px;">Web
                            Development</span>
                    </div>
                </div>
                <div class="col-sm-3 my-3">
                    <div class="card-deck" data-aos="fade-up">
                        <div class="card shadow ">
                            <div class="card-body">
                                <img src="../img/html5.svg" class="card-img-top" alt="..." height="50" width="100">
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">HTML</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 my-3">
                    <div class="card-deck" data-aos="fade-up">
                        <div class="card shadow ">
                            <div class="card-body">
                                <img src="../img/css-3.svg" class="card-img-top" alt="..." height="50" width="100">
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">CSS</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 my-3">
                    <div class="card-deck" data-aos="fade-up">
                        <div class="card shadow ">
                            <div class="card-body">
                                <img src="../img/sass-1.svg" class="card-img-top" alt="..." height="50" width="100">
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">SASS</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 my-3">
                    <div class="card-deck" data-aos="fade-up">
                        <div class="card shadow ">
                            <div class="card-body">
                                <img src="../img/react.svg" class="card-img-top" alt="..." height="50" width="100">
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">React Js</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 my-3">
                    <div class="card-deck" data-aos="fade-up">
                        <div class="card shadow ">
                            <div class="card-body">
                                <img src="../img/redux.svg" class="card-img-top" alt="..." height="50" width="100">
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Redux</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 my-3">
                    <div class="card-deck" data-aos="fade-up">
                        <div class="card shadow ">
                            <div class="card-body">
                                <img src="../img/nextjs-3.svg" class="card-img-top" alt="..." height="50" width="100">
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Next Js</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 my-3">
                    <div class="card-deck" data-aos="fade-up">
                        <div class="card shadow ">
                            <div class="card-body">
                                <img src="../img/angular-icon-1.svg" class="card-img-top" alt="..." height="50"
                                    width="100">
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Angular Js</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 my-3">
                    <div class="card-deck" data-aos="fade-up">
                        <div class="card shadow ">
                            <div class="card-body">
                                <img src="../img/vue-9.svg" class="card-img-top" alt="..." height="50" width="100">
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Vue Js</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 my-3">
                    <div class="card-deck" data-aos="fade-up">
                        <div class="card shadow ">
                            <div class="card-body">
                                <img src="../img/nodejs-1.svg" class="card-img-top" alt="..." height="50" width="100">
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Node js</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 my-3">
                    <div class="card-deck" data-aos="fade-up">
                        <div class="card shadow ">
                            <div class="card-body">
                                <img src="../img/spring-3.svg" class="card-img-top" alt="..." height="50" width="100">
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Spring</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 my-3">
                    <div class="card-deck" data-aos="fade-up">
                        <div class="card shadow ">
                            <div class="card-body">
                                <img src="../img/laravel-2.svg" class="card-img-top" alt="..." height="50" width="100">
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Laravel</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 my-3">
                    <div class="card-deck" data-aos="fade-up">
                        <div class="card shadow ">
                            <div class="card-body">
                                <img src="../img/deno-1.svg" class="card-img-top" alt="..." height="50" width="100">
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Deno</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-sm-12 my-3">
                        <span class="badge badge-pill badge-secondary even-larger-badge" style="font-size: 24px;">Mobile
                            App</span>
                    </div>
                </div>
                <div class="col-sm-3 my-3">
                    <div class="card-deck" data-aos="fade-up">
                        <div class="card shadow ">
                            <div class="card-body">
                                <img src="../img/android.svg" class="card-img-top" alt="..." height="50" width="100">
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Andriod</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 my-3">
                    <div class="card-deck" data-aos="fade-up">
                        <div class="card shadow ">
                            <div class="card-body">
                                <img src="../img/swift-15.svg" class="card-img-top" alt="..." height="50" width="100">
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Swift</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 my-3">
                    <div class="card-deck" data-aos="fade-up">
                        <div class="card shadow ">
                            <div class="card-body">
                                <img src="../img/react.svg" class="card-img-top" alt="..." height="50" width="100">
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">React Native</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 my-3">
                    <div class="card-deck" data-aos="fade-up">
                        <div class="card shadow ">
                            <div class="card-body">
                                <img src="../img/flutter.svg" class="card-img-top" alt="..." height="50" width="100">
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Flutter</small>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    <div class="container-fluid shadow  my-3" style="background-color: #E5E5E5;">
        <div class="container ">
            <div class="row ">
                <div class="col-sm-12 my-3">
                    <span class="badge badge-pill badge-secondary even-larger-badge"
                        style="font-size: 24px;">Others</span>
                </div>
            </div>
            <div class="row  ">
                <div class="col-sm-3">
                    <div class="card-deck" data-aos="fade-up">
                        <div class="card shadow ">
                            <div class="card-body">
                                <img src="../img/ai.svg" class="card-img-top" height="40" width="100" alt="...">
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">AI</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card-deck" data-aos="fade-up">
                        <div class="card shadow ">
                            <div class="card-body">
                                <h3>Deep Learning</h3>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Deep Learning</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card-deck" data-aos="fade-up">
                        <div class="card shadow ">
                            <div class="card-body">
                                <h3 style="font-size: 25px;">Machine Learning</h3>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Machine learning</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card-deck" data-aos="fade-up">
                        <div class="card shadow ">
                            <div class="card-body">
                                <h3 style="font-size: 25px;">IOT</h3>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">IOT</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card-deck" data-aos="fade-up">
                        <div class="card my-1">
                            <div class="card-body">
                                <img src="../img/linux-tux.svg" alt="" alt="..." height="100" width="100">
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Linux</small>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    </div>
<!-- Footer  -->
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
    <script>
    $(document).ready(function() {
        $("#myModal").modal();
    });
    </script>
</body>

</html>
<?php
include '../common/config.php';
if (isset($_POST['submit1'])) {
   
    $fullName = $_POST['fullName'];
    $mobileNo= $_POST['mobileNo'];
    $emailId = $_POST['emailId'];
    $message = $_POST['message'];
    $qualification =$_POST['qualification'];
    $collegeName= $_POST['collegeName'];
    $enquiryDate=$_POST['enquiryDate'];
    $query = "INSERT INTO `tbl_quick_enquiry`(`fullName`, `mobileNo`, `emailId`, `qualification`,
     `message`, `collegeName`, `enquiryDate`) VALUES 
    ('$fullName','$mobileNo','$emailId','$qualification','$message','$collegeName','$enquiryDate')";
     $run = mysqli_query($con,$query) or die("con not insert the dat.".mysqli_error($con));
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