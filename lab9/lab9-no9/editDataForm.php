<?php include "conection.php" ?>

<?php

    $statusMsg = ''; 
     
    // File upload directory 
    $targetDir = "img/"; 
     
    if(isset($_POST["submit"])){ 
        if(!empty($_FILES["file"]["name"])){ 
            $fileName = basename($_FILES["file"]["name"]); 
            $targetFilePath = $targetDir . $fileName; 
            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION); 
    
            $username = $_POST['username'];
            $name = $_POST['name'];
            $address = $_POST['address'];
            $email = $_POST['email'];
         
            // Allow certain file formats 
            $allowTypes = array('jpg','png','jpeg','gif'); 
            if(in_array($fileType, $allowTypes)){ 
                // Upload file to server 
                if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){ 
                    // Insert image file name into database 
                    $update = $pdo->prepare("UPDATE member 
                    SET (name='$name', address='$address', email='$email', img='".$fileName."')"); 
                    if($update){ 
                        $statusMsg = "updated successfully."; 
                    }else{ 
                        $statusMsg = "File upload failed, please try again."; 
                    }  
                }else{ 
                    $statusMsg = "Sorry, there was an error uploading your file."; 
                } 
            }else{ 
                $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
            } 
        }else{ 
            $statusMsg = 'Please select a file to upload.'; 
        } 
    } 
    echo $statusMsg; 
?>