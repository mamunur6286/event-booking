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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">




    <!-- Custom styles for this template -->
    <link href="../form-validation.css" rel="stylesheet">
  </head>

  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <h2>Your Event List
      </div>

      <div class="row">
        <div class="col-md-12 order-md-1">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
            <tr>
              <th>Sl No</th>
              <th>Name</th>
              <th>Title</th>
              <th>Date</th>
              <th>Description</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php

                    $query="SELECT * FROM tbl_register ORDER BY id DESC";
                    $helper= new helper();


                    $result=$helper->Select($query);
                $i=0;
                $sum=0;
                while ($data=$result->fetch_assoc()){
                $i++;
            ?>
            <tr>
                <td><?php echo $i;  ?></td>
                <td><?php echo $data['name']  ?></td>
                <td><?php echo $data['title']  ?></td>
                <td><?php echo  date( "d M Y", $data['event_date'])  ?></td>
                <td><?php echo $data['description']  ?></td>
            </tr>
                <?php } ?>
            </tbody>
            <tfoot>

            <tr>
                <th>Sl No</th>
                <th>Name</th>
                <th>Title</th>
                <th>Date</th>
                <th>Description</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </tfoot>
          </table>
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
    <script src=" https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js "></script>
    <script src=" https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js "></script>
    <script>

      $(document).ready(function() {
        $('#example').DataTable();
      } );


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
