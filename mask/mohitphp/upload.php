<?php

if(isset($_POST['submit'])){
    $file = $_FILES['file']; // $_Files 

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
    
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    
    
    $allowed = array('jpg', 'jpeg', 'png', 'pdf');
    
    if(in_array($fileActualExt, $allowed)){
        
        if($fileError === 0){
            if($fileSize < 500000){
                
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = 'localhost/mohitphp/uploads/'.$fileNameNew;
                
                move_uploaded_file($fileTmpName, $fileDestination);
                
                header("Location: mask.php?uploadsuccess");
                    
                    
                
                
            }else{
                
                echo "file is too big";
            }
            
            
        }else{
            echo "there was an error uploading your file!";
        }
        
    }else {
        echo "You cannot Upload files of this type";
    }
    
    
}
?>