<?php
    include_once('../common/config.php');
   
 
?>
<?php
include_once('../common/config.php'); 
$num_per_page=02;
   if(isset($_GET["page"]))
   {
           $page=$_GET["page"];
   }
   else
   {
       $page=1;
   }

   $start_from=($page-1) * 02;
   $sql="Select * from tbl_job_post ORDER BY post_date DESC limit $start_from,$num_per_page";
   
   $result=mysqli_query($con,$sql);
?>
<?php
include('../common/config.php');

if ((isset($_GET['del']))) {
  $job_id =$_GET['del'];
  $query = "DELETE FROM tbl_job_post WHERE 	job_id=$job_id";
  $fire = mysqli_query($con, $query) or die("can not data." . mysqli_error($con));
  if ($fire) {
    ?> <script>
alert("Are You sure");
</script>
<?php
    } else {
      ?>

<script>
alert('Not Delete');
</script>

<?php
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
    <link rel="stylesheet" href="css/stylemain.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <title>Micro Technologies</title>
    <link rel="icon" href="../image/micro-technologies-logo-120x120.png" type="image/icon type" />
    <link rel="stylesheet" href="../css/styletraining.css">
    <link rel="stylesheet" href="../css/style.css" />
   
</head>

<body>
    <?php include "../common/navbar.php"; ?>
    <br>
    <br>
    <br>
   
   
  <div class="container-fluid my-5  bg-light">
 <div class="table-responsive">
      <table class="table table-hover my-3 py-3"  id="datatable">
        <thead style="background-color:black ;">
          <tr style="color:white;">
          <th>No.</th>
          <th>Skills</th>
          <th>Job_description</th>
           <th>Qualification</th>
            <th>Employment_type</th>
            <th>Package</th>
            <th>Location</th>
            <th>Post_date</th>
            <th>Job_status</th>
            <th>Job_profile</th>
            <th>Image</th>
            <th>Experience</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
        </thead>
        <tbody style="background-color: white;">
        <?php
          $number = 1;
        while($rows=mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $number;?></td>
                <td><?php echo $rows['skills'];?></td>
                <td><?php echo $rows['Job_description'];?></td>
                <td><?php echo $rows['qualification'];?></td>
                <td><?php echo $rows['employment_type'];?></td>
                <td><?php echo $rows['package'];?></td>
                <td><?php echo $rows['location'];?></td>
                <td><?php echo $rows['post_date'];?></td>
                <td><?php echo $rows['job_status'];?></td>
                <td><?php echo $rows['job_profile'];?></td>
                <td>
                <?php echo '<img class="img rounded-circle" width=60px" height="60px" src="data:image/jpeg;base64,' . base64_encode($rows['image']) . '"/>' ?>
                </td>
                <td><?php echo $rows['experience'];?></td>
               
                
                <td>
                    <a href="<?php $_SERVER['PHP_SELF'] ?>?del='<?php echo $rows['job_id']?>'" class="btn btn-sm btn-danger">Delete</a>
                  </td>
                  <td>
                  <a href="job_update.php?upd='<?php echo $rows['job_id']?>'" class="btn btn-sm btn-warning">Update</a>
                </td>
                 
         </tr>
         
            <?php
              $number++;
        }
        ?>
    </table>
    
   
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
    $result=mysqli_query($con,$sql);
    $total_records=mysqli_num_rows($result);
    $total_page=ceil($total_records/$num_per_page);
    for($i=1;$i<=$total_page;$i++)
    {
        ?>
        
        <li class="page-item" ><?php  echo "<a  class='page-link' aria-label='Previous' href='display_jobs.php?page=".$i."' >".$i."</a>";?>
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
    
</body>

</html>
