<?php
    $file = $_FILES['file'];

    if(isset($file['tmp_name']) && !empty($file['tmp_name']))
    {
        //print_r($file);
        move_uploaded_file($file['tmp_name'], 'test/'.$file['name']);
    }
    //need to fix permission to mode file
?>