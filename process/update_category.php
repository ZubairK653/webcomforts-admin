<?php
// 
require_once '../includes/include.php';
require_once '../includes/categoryController.php';

$db         = new DatabaseConnection;
$conn       = $db->conn;

$bcheck = $db->protectData($_POST['bcheck']);
$id     = $db->protectData($_POST['id']);

if($bcheck == true && $id != ""){

    $inputData = [

        'title'            => $db->protectData($_POST['title']),
        'tagline'          => $db->protectData($_POST['page_heading']),
        'tags'             => $db->protectData($_POST['page_tags']),
        'status'           => $db->protectData($_POST['status']),
        'description'      => $db->protectData($_POST['short_description']),
        'pageurl'          => $db->protectData($_POST['page_url']),
        'id'               => $id
        
    ];
     $inputData['title']; 
    if(empty($inputData['title'] || $inputData['tagline'] || $inputData['pageurl'])){?>
            <form method="post" action="../edit-category.php" id="errorForm">
                <input type="hidden" name="error" value="Please fill all the required fields." />  
            </form>
            <script type="text/javascript">
            document.getElementById('errorForm').submit(); // SUBMIT FORM
            </script>
        <!-- header("Location: ../add-category.php?error=not-updated"); -->
   <?php }
        else{
            
        $result = $category->updateCategory($inputData);
 
        if($result[0] = true){
            $ID =  $result[1]
            ?>
             <form method="post" action="../edit-category.php" id="successForm">
                    <input type="hidden" name="success" value="Category Updated." />  
                    <input type="hidden" name="id" value="<?= $ID ;?>">
                    </form>
                    <script type="text/javascript">
                    document.getElementById('successForm').submit(); // SUBMIT FORM
                    </script>
         <?php }
        else{?>
            <form method="post" action="../edit-category.php" id="errorForm">
                <input type="hidden" name="error" value="Error in adding category." />  
            </form>
            <script type="text/javascript">
            document.getElementById('errorForm').submit(); // SUBMIT FORM
            </script>
       <?php }
    }  

}