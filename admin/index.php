<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Event booking admin</title>

    <!-- Bootstrap core CSS -->
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../form-validation.css" rel="stylesheet">
  </head>

  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <h2>Create a Event</h2>
      </div>
<?php

   require_once '../classes/helper.php';

if ($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['btn_submit'])){
    $name=$_POST['name'];
    $title=$_POST['title'];
    $description=$_POST['description'];
    $event_date=$_POST['event_date'];

    if (empty($name) || empty($title) || empty($description) || empty($event_date)){
        $message='<p class="alert alert-danger"><strong>Error! </strong>Field must not be empty!</p>';
    }else{
        $query="INSERT INTO tbl_register(name,title,description,event_date,status)VALUES('$name','$title','$description','$event_date','0')";

        $insert= new helper();
        $result=$insert->Insert($query);
        if($result==true){
            $message='<p class="alert alert-success"><strong>Success! </strong>Your event added successful.</p>';
        }else{
            $message='<p class="alert alert-danger"><strong>Error! </strong>Your event added failed!</p>';
        }
    }
}
?>
      <div class="row">
        <div class="col-md-12 order-md-1">
            <?php
                if(isset($message)){
                    echo $message;
                }
            ?>
          <form method="post" enctype="multipart/form-data" class="needs-validation" novalidate>


            <div class="mb-3">
              <label for="email">Event Name <span class="text-muted"></span></label>
              <input type="text" name="name" class="form-control" id="email" placeholder="Enter event name" required>
              <div class="invalid-feedback">
                Please enter your even name.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Event Title</label>
              <input type="text" name="title" class="form-control" id="address" placeholder="Enter event title" required>
              <div class="invalid-feedback">
                Please enter your event title.
              </div>
            </div>
            <div class="mb-3">
              <label for="address">Data</label>
              <input type="date" name="event_date" class="form-control" id="address" placeholder="Enter event date" required>
              <div class="invalid-feedback">
                Please enter your event date.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Description</label>
              <textarea name="description" class="form-control" placeholder="Enter description"></textarea>
              <div class="invalid-feedback">
                Please enter description.
              </div>
            </div>

            <hr class="mb-4">
            <div class="text-center">
              <button name="btn_submit" class="btn text-center btn-primary btn-lg " type="submit">Continue to Register</button>
            </div>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017-2018 Company Name</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../assets/js/vendor/popper.min.js"></script>
    <script src="../dist/js/bootstrap.min.js"></script>
    <script src="../assets/js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>
