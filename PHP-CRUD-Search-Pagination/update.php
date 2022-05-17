<?php

    include 'model.php';


if(isset($_POST['update'])){
                
    if (isset($_POST['edit_name']) && isset($_POST['edit_email']) && isset($_POST['edit_mobile']) && isset($_POST['edit_id'])) {
     
        if (!empty($_POST['edit_name']) && !empty($_POST['edit_email']) && !empty($_POST['edit_mobile']) && !empty($_POST['edit_id'])) {
        
            $data['edit_id'] = $_POST['edit_id'];
            $data['edit_name'] = $_POST['edit_name'];
            $data['edit_email'] = $_POST['edit_email'];
            $data['edit_mobile'] = $_POST['edit_mobile'];
    
            $model = new Model();
            $update = $model->update($data);

        }else {
            echo "<script>swal('Empty!', 'Please fill out all fields!', 'warning');
                </script>";
        }

    }
}




?>