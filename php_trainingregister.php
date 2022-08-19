<?php
if (isset($_POST['registerforTraining']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobile'])) 
{

    // DB config
    include 'common/config.php';

    $name =  $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $message = $_POST['message'];


    $skills = $_POST['skills'];
    $qualification = $_POST['qualification'];
    $experience = $_POST['experience'];

    $filename = $_FILES['resume']['name'];
    $tmp_name = $_FILES['resume']['tmp_name'];


    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    $Newfilename =  "training_".$name . $mobile . "." . $ext;
    $fileTypes = $_FILES['resume']['type'];
    $fileSize = $_FILES["resume"]["size"] / 1024;

    if ($experience == '0')
        $experience = '0 years';

    //$sql_u = "SELECT mobile, training_id FROM tbl_training_form WHERE  mobile = '$mobile'";
    //echo $sql_u;
    //$res_u = mysqli_query($con, $sql_u);


    //if (mysqli_num_rows($res_u) > 0) 
    //{
    //    echo '<script type="text/javascript">';
    //    echo 'alert("Your Resume already sent to me");';
      //  echo 'window.location = "jobs";';
    //    echo '</script>';
    //} 
    //else 
    //{
        //echo $tmp_name."----";
        //echo $name."----".$mobile."----".$email."----".$skills."----".$qualification."----".$experience;
        if ($tmp_name && $name && $mobile && $email && $skills && $qualification && $experience) 
        {

            if ($ext === "doc" or $ext === "docx" or $ext === "pdf") 
            {

                if ($fileSize <= 8120) 
                {

                    if (move_uploaded_file($tmp_name, "trainingResumeUpload/" . $Newfilename)) 
                    {

                        $sql = "INSERT INTO `tbl_training_form`(`name`, `email`, `mobile`, `skills`, `qualification`, `experience`, `fileName`, `message`, `training_id`) VALUES ('$name','$email','$mobile','$skills','$qualification','$experience','$Newfilename', '$message', 'MTR1')";
                        //echo $sql;
                        if (mysqli_query($con, $sql)) 
                        {

                            echo '<script type="text/javascript">';
                            echo 'alert("Registered Successfully\n");';
                            echo 'window.location = "Training.php"';
                            echo '</script>';
                        } 
                        else 
                        {
                            echo '<script type="text/javascript">';
                            echo 'alert("Please try agin.");';
                            echo 'window.location = "Training.php"';
                            echo '</script>';
                        }
                    } 
                    else 
                    {
                        echo '<script type="text/javascript">';
                        echo 'alert("Files Does not Move, Please try agin");';
                        echo 'window.location = "Training.php"';
                        echo '</script>';
                    }
                } else {
                    echo '<script type="text/javascript">';
                    echo 'alert("Please upload Under 5MB file Size");';
                    echo 'window.location = "Training.php"';
                    echo '</script>';
                }
            } else {

                echo '<script type="text/javascript">';
                echo 'alert("Please select only doc or docx or pdf file.");';
                echo 'window.location = "Training.php"';
                echo '</script>';
            }
        } 
        else 
        {
            echo '<script type="text/javascript">';
            echo 'alert("Please select reuired fields");';
            echo 'window.location = "Training.php"';
            echo '</script>';
        }
    //}
}
?>