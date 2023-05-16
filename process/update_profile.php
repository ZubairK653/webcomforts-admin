<?php
// 
require_once '../includes/include.php';

// database conenction
$db         = new DatabaseConnection;
$conn       = $db->conn;

$admintable = "tbladmin";

$bcheck = $db->protectData($_POST['bcheck']);
// check the form submission
if(isset($_POST['update_profile']) && $bcheck =="true"){

   $userid  = $db->protectData($_POST['user_id']);

   $userrow =  $user->getUserData($userid);

    if($userrow == NULL){?>
        <form method="post" action="../profile.php" id="errorForm">
		    <input type="hidden" name="error" value="admin-does-not-exist" />  
	    </form>
	    <script type="text/javascript">
    	document.getElementById('errorForm').submit(); // SUBMIT FORM
	    </script>
     <?php  
    }
    else{
        // get the username from form
        $username = $db->protectData($_POST['username']);

        if($username == ''){?>
            <form method="post" action="../profile.php" id="errorForm">
		    <input type="hidden" name="error" value="Username invalid" />  
            </form>
            <script type="text/javascript">
            document.getElementById('errorForm').submit(); // SUBMIT FORM
            </script>
       <?php }

            // get password from form
            $password = $db->protectData($_POST['password']);
            if($password != ''){
                $password = md5($password);

                $sqlQuery = "UPDATE ".$admintable." SET 
                admin_username  = '".$username."',
                admin_password = '".$password."' WHERE admin_id =".$userid;
            }
            else
            {
                $sqlQuery = "UPDATE ".$admintable." SET 
                admin_username  = '".$username."'
                WHERE admin_id =".$userid;
            }

            $result = $user->Run($sqlQuery);
                //check if the image is selected
                if($_FILES['image']['name'] !=''){
                    require '../includes/image-upload-class.php';
                    $image_upload = new ImageUpload($_FILES, $userid);
                }
                if($result == 1){?>
                    <form method="post" action="../profile.php" id="successForm">
                    <input type="hidden" name="success" value="User Updated Succcessfully." />  
                    </form>
                    <script type="text/javascript">
                    document.getElementById('successForm').submit(); // SUBMIT FORM
                    </script>

                    <?php } else { ?>
                    <form method="post" action="../profile.php" id="errorForm">
                    <input type="hidden" name="error" value="User not updated" />  
                    </form>
                    <script type="text/javascript">
                    document.getElementById('errorForm').submit(); // SUBMIT FORM
                    </script>
                
                <?php }

                
    }
}
            // if form is not submitted
else{?>
                <form method="post" action="../profile.php" id="errorForm">
                <input type="hidden" name="error" value="Invalid session" />  
                </form>
                <script type="text/javascript">
                document.getElementById('errorForm').submit(); // SUBMIT FORM
                </script>
<?php } ?>

