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
   $sql="Select * from tbl_training_registration limit $start_from,$num_per_page";
   
   $result=mysqli_query($con,$sql);
?>
<?php
include('../common/config.php');

if ((isset($_GET['del']))) {
  $trainingBatchNo =$_GET['del'];
  $query = "DELETE FROM tbl_training_registration WHERE trainingBatchNo=$trainingBatchNo";
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
    <link rel="stylesheet" href="../css/stylemain.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <title>Micro Technologies</title>
    <link rel="stylesheet" href="../css/styletraining.css">
    <link rel="stylesheet" href="../css/style.css" />
   
</head>

<body>
    <?php include "../common/navbar.php"; ?>
    <br>
    <br>
    <br>
   
   
  <div class="container my-5  bg-light">
 <div class="table-responsive">
      <table class="table table-hover my-3 py-3"  id="datatable">
        <thead style="background-color:black ;">
          <tr style="color:white;">
          <th>TrainingBatchNo</th>
          <th>FullName</th>
          <th>Gender</th>
          <th>FatherName</th>
          <th>Nationality</th>
          <th>Address</th>
          <th>MobileNo</th>
          <th>EmailId</th>
          <th>WorkingStatus</th>
          <th>AlternateMobileNo</th>
          <th>Qualification</th>
          <th>Branch</th>
          <th>PassingYear</th>
          <th>CollegeName</th>
          <th>CollegeState</th>
          <th>CollegeCity</th>
          <th>RegistrationDate</th>
         
            <th>Delete</th>
            <!--<th>Update</th>-->
        </tr>
        </thead>
        <tbody style="background-color: white;">
        <?php
          $number = 1;
        while($rows=mysqli_fetch_array($result)){
            ?>
            <tr>
             
                <td><?php echo $rows['trainingBatchNo'];?></td>
                <td><?php echo $rows['fullName'];?></td>
                <td><?php echo $rows['gender'];?></td>
                <td><?php echo $rows['fatherName'];?></td>
                <td><?php echo $rows['nationality'];?></td>
                <td><?php echo $rows['address'];?></td>
                <td><?php echo $rows['mobileNo'];?></td>
                <td><?php echo $rows['emailId'];?></td>
                <td><?php echo $rows['workingStatus'];?></td>
                <td><?php echo $rows['alternateMobileNo'];?></td>
                <td><?php echo $rows['qualification'];?></td>
                <td><?php echo $rows['branch'];?></td>
                <td><?php echo $rows['passingYear'];?></td>
                <td><?php echo $rows['collegeName'];?></td>
                <td><?php echo $rows['collegeState'];?></td>
                <td><?php echo $rows['collegeCity'];?></td>
                <td><?php echo $rows['registrationDate'];?></td>
              
               
               
                
                <td>
                    <a href="<?php $_SERVER['PHP_SELF'] ?>?del='<?php echo $rows['trainingBatchNo']?>'" class="btn btn-sm btn-danger">Delete</a>
                  </td>
                  <td>
                  <!--<a href="training_regi_update.php?upd='<?php echo $rows['mobileNo']?>'" 
                    class="btn btn-sm btn-warning">Update</a>-->
                </td>
                 
         </tr>
         
            <?php
             
        }
        ?>
    </table>
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
    $sql="select * from tbl_training_registration";
    $result=mysqli_query($con,$sql);
    $total_records=mysqli_num_rows($result);
    $total_page=ceil($total_records/$num_per_page);
    for($i=1;$i<=$total_page;$i++)
    {
        ?>
        
        <li class="page-item" ><?php  echo "<a  class='page-link' aria-label='Previous' href='train_regis_display.php?page=".$i."' >".$i."</a>";?>
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
