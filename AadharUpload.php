<?php

    if(isset($_FILES['file'])) { 
        $file = $_FILES['file'];
        $file_name = $file['name']; 
        $file_type = $file['type']; 
        $file_size = $file['size']; 
        $file_tmp_name = $file['tmp_name']; 
        $file_error = $file['error']; 

        $ext = explode('.', $file_name); 
        $act_ext = strtolower(end($ext)); 

        $allow = array('png'); 

        if(!(in_array($act_ext, $allow))) 
            echo "Invalid file type." . "<br>";
        
        else if (!($file_error === 0)) 
            echo "There was an error uploading your file" . "<br>";

        else if($file_size > 5000000)
            echo "File too big" . "<br>";

        else {
            $new_fname = "Uploaded_File.".$act_ext; 

            $destination ="/xampp/htdocs/PHP/Uploads/".$new_fname;

            move_uploaded_file($file_tmp_name, $destination);

            header("Location: WEBB.php?uploadsuccess");
        }
    }

?>