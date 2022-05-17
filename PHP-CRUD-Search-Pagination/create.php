<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">

    <title>CREATE RECORD</title>
  </head>
  <body>
      <div class="container">
          <div class="row">
              <div class="col-md-12 mt-5">
                  <h1 class="text-center">ADD NEW RECORD</h1>
              </div>
          </div>
          <div class="row">
              <div class="col-md-5 mx-auto">
                 <hr style="height: 1px;">
                 <div id="result"></div>
                  <form action="" method="POST" id="form">
                      <div class="form-group">
                          <label>NAME</label>
                          <input type="text" id="name" class="form-control">
                      </div>
                      <div class="form-group">
                          <label>EMAIL </label>
                          <input type="email" id="email" class="form-control">
                      </div>
                      <div class="form-group">
                          <label>MOBILE</label>
                          <input type="text" id="mobile" class="form-control">
                      </div>
                      <div class="form-group"><br>
                          <button type="submit" id="submit" class="btn btn-primary">Submit</button>
                          <a href="index.php" class="btn btn-warning">Back to records</a>
                      </div>
                  </form>
              </div>
          </div>
      </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <?php include_once 'ajax.php'; ?>


  </body>
</html>