<?php

    include 'model.php';
    $model = new Model();
    $row = $model->edit();

    if (!empty($row)) {
        
        ?>
        
        <form action="" method="POST" id="form">
            <div>
                <input type="hidden" id="edit_id" value="<?php echo $row['id']; ?>">
            </div>
                    <div class="form-group">
                          <label>NAME</label>
                          <input type="text" id="edit_name" class="form-control" value="<?php echo $row['name']; ?>">
                      </div>
                      <div class="form-group">
                          <label>EMAIL </label>
                          <input type="email" id="edit_email" class="form-control" value="<?php echo $row['email']; ?>">
                      </div>
                      <div class="form-group">
                          <label>MOBILE</label>
                          <input type="text" id="edit_mobile" class="form-control" value="<?php echo $row['mobile']; ?>">
                      </div>
                  </form>
        
        
        <?php

    }


?>