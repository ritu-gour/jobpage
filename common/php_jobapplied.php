<?php 
                include('config.php');
                 //data: {'mainmobile':mainmobile,'fullname':fullname,'alternatenumber':alternatenumber,'role':role,'status':status},
                if (isset($_POST['mobile']) && isset($_POST['job_id']) && isset($_POST['email']))
                {
                    $mobile = $_POST['mobile'];
                    $job_id = $_POST['job_id'];
                    $email = $_POST['email'];
                   
                    $qry="INSERT INTO `tbl_applied_job_user`(email, mobile, job_id)VALUES('$email', '$mobile', '$job_id')";
                //echo $qry;
                $run = mysqli_query($con, $qry);
                
                if ($run == TRUE) 
                {
                    $data['status'] = 'success';

                }
                else
                    $data['status'] = 'failed';
                
                echo json_encode($data);        
              }
           ?>