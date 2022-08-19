

<?php
include("config.php");
if(isset($_POST['submit']))
{
    $username = $_POST['user_name'];
    $pass = $_POST['password'];

    $qry1 = "SELECT SHA2('$pass', 224) as password";
    echo $qry1;
    $run1 = mysqli_query($con, $qry1);
    $row1 = mysqli_num_rows($run1);
    $data1 = mysqli_fetch_assoc($run1);
    $pass1 = $data1['password'];

    //echo $pass1;
    $qry = "SELECT mobile, password, status FROM tbl_user_profile WHERE mobile='$username' AND password='$pass1'";
    echo $qry;

    $run = mysqli_query($con,$qry);
    $row = mysqli_num_rows($run);
    $data = mysqli_fetch_assoc($run);
    //echo $data['password'];

    //if ($pass1 == $data['password'])
        //echo "Match";

    if($row<1)
    {
        var_dump($con->error);
    ?>
        <script>alert("Username or password does not match");</script>
        
    <?php
        header('location:../jobs.php');
    }
    else
    {
        //$data = mysqli_fetch_assoc($run);
        if ($data['status'] == 'Enabled')
        {
            $user_n1 = $data['mobile'];
          //echo $user_n1;
            session_start();
            $_SESSION['user_n']=$user_n1;
            //echo "hi ".$_SESSION['user_n'];
            header('location:../jobs.php');
        }
        else
        {
    ?>
            <script>alert("User account is locked, please contact to Admin");</script>
           
        <?php 
            header('location:../jobs.php');
        }
    }

}
?>