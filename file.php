<?php

//if(isset($_FILES["image"]))
//{
//    echo "<pre>";
//    print_r($_FILES);
//    echo "</pre>";
//
//     echo $file_name = $_FILES['image'] ["name"] ;
//     echo $file_size =$_FILES['image']["size"];
//     echo $file_tmp =$_FILES['image']["tmp_name"];
//     echo $file_type =$_FILES['image']["type"];
//
//     move_uploaded_file($file_tmp,'uploaded-image/' .$file_name);
//     echo success;
//}


if (isset($_FILES["image"])) {
     echo "<pre>";
     print_r($_FILES);
     echo "</pre>";

    $file_name = $_FILES['image']["name"];
    $file_size = $_FILES['image']["size"];
    $file_tmp = $_FILES['image']["tmp_name"];
    $file_type = $_FILES['image']["type"];


    $upload_directory = '/home/ashishb/ashish/project/testrepo1/uploaded-image/';

    if (move_uploaded_file($file_tmp, $upload_directory . $file_name)) {
        echo "File uploaded successfully!";
    } else {
        echo "File upload failed!";
    }
}


?>
<html>
<body>
<form action="" method="post" enctype="multipart/form-data">
 <input type="file" name="image"/>
    <input type="submit"/>
</form>
</body>
</html>