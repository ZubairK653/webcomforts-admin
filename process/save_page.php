<?php
// 
require_once '../includes/include.php';
require_once '../includes/categoryController.php';

$db         = new DatabaseConnection;
$conn       = $db->conn;

$bcheck = $db->protectData($_POST['bcheck']);

if($bcheck == true){

    $inputData = [

        'title'                  => $db->protectData($_POST['title']),
        'pageurl'                => $db->protectData($_POST['page_url']),
        'tagline'                => $db->protectData($_POST['page_heading']),
        'tags'                   => $db->protectData($_POST['page_tags']),
        'author'                 => $db->protectData($_POST['author']),
        'is_portfolio'           => $db->protectData($_POST['is_portfolio']),
        'is_headline'            => $db->protectData($_POST['is_headline']),
        'show_picondetails'      => $db->protectData($_POST['show_picondetails']),
        'url_portfolio'          => $db->protectData($_POST['url_portfolio']),
        'short_description'      => $db->protectData($_POST['short_description']),
        'parent_id'              => $db->protectData($_POST['parent_id']),
        'status'                 => $db->protectData($_POST['status'])
        
    ];
     $inputData['title']; 
    if(empty($inputData['title'] || $inputData['pageurl'])){?>
            <form method="post" action="../add-category.php" id="errorForm">
                <input type="hidden" name="error" value="Please fill all the required fields." />  
            </form>
            <script type="text/javascript">
            document.getElementById('errorForm').submit(); // SUBMIT FORM
            </script>
        <!-- header("Location: ../add-category.php?error=not-updated"); -->
   <?php }
        else{
            
        $result = $category->saveCategory($inputData);
 
        if($result[0] = true){
            $ID =  $result[1]
            ?>
                    <form method="post" action="../edit-category.php" id="successForm">
                    <input type="hidden" name="success" value="Category added." />  
                    <input type="hidden" name="id" value="<?= $ID ;?>">
                    </form>
                    <script type="text/javascript">
                    document.getElementById('successForm').submit(); // SUBMIT FORM
                    </script>
         <?php }
        else{?>
            <form method="post" action="../add-category.php" id="errorForm">
                <input type="hidden" name="error" value="Error in adding category." />  
            </form>
            <script type="text/javascript">
            document.getElementById('errorForm').submit(); // SUBMIT FORM
            </script>
       <?php }
    }  

}