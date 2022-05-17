<?php
    include 'model.php';
    $model = new Model();
    $rows = $model->fetch();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css">
    <title>RECORDS</title>
  </head>
  <body>
      <div class="container">
          <div class="row">
              <div class="col-md-12 mt-5">
                  <h1 class="text-center">RECORD INFORMATION</h1>
                  <hr style="height: 1px;">
                  <a href="create.php" class="btn btn-primary">ADD RECORD</a>
              </div>
          </div><br>
          <div class="row">
             <div class="col-md-12 mx-auto">
                 <form action="" method="post">
                 <div id="show"></div>
                 <table class="table" id="datatableid">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>EMAIL</th>
                                <th>MOBILE</th>
                                <th>ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i = 1;
                                if(!empty($rows)){
                                        foreach($rows as $row){
                                    
                                    
                                            ?>
                                            <tr>
                                                <td><?php echo $i++; ?></td>
                                                <td><?php echo $row['name']; ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td><?php echo $row['mobile']; ?></td>
                                                <td>
                                                    <a href="#" id="read" name="read_id" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#readmodal" value="<?php echo $row['id']; ?>">READ</a>
                                                    <a href="#" id="edit" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModel" value="<?php echo $row['id']; ?>">UPDATE</a>
                                                    <a href="#" id="del" class="btn btn-danger" value="<?php echo $row['id']; ?>">DELETE</a>
                                                </td>
                                            </tr>
                                            <?php
                                    
                                        }
                            

                                }else {
                                    echo "<div class='alert alert-warning' role='alert'>
                                    NO DATA
                                  </div>";
                                }
                            
                            ?>
                        </tbody>
                </table>

                 </form>
             </div>
          </div>
      </div>


<!-- Add Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Record</h5>
        
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Update Modal -->
<div class="modal fade" id="exampleModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update record</h5>
        
      </div>
      <div class="modal-body">
        <div id="edit_data"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="update">Update</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Read Modal -->
<div class="modal fade" id="readmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Read record</h5>
        
      </div>
      <div class="modal-body">
        <div id="read_data"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
      
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap5.min.js"></script>
    <?php include_once 'ajax.php'; ?>


  </body>
</html>