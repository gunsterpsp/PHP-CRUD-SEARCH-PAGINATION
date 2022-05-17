<?php

    include 'model.php';
    $model = new Model();
    $row = $model->read();

    if (!empty($row)) {

        ?>
        
        <p>Name : <?php echo $row['name']; ?></p>
        <p>Email : <?php echo $row['email']; ?></p>
        <p>Phone : <?php echo $row['mobile']; ?></p>
        
        
        
        
        <?php    
        
    }

?>
