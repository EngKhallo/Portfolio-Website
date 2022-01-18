<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    </head>
<body>
    
</body>
</html>
<?php
require_once('../config/connection.php');

if(isset($_GET['msg'])):
    ?>
    <div class="modal" id="success" tabindex="-1">
  <div class="modal-dialog model-success">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Response</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Successfully Excecuted the query.</p>
      </div>
      <div class="modal-footer">
        <button type="button" id="closebtn" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script>
    $(document).ready(function(){
        $("#success").modal('show');
    })
</script>
<?php
endif;  
if(isset($_GET['error'])):
    ?>
    <div class="modal" id="error" tabindex="-1">
  <div class="modal-dialog model-success">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Response</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Query Failed.</p>
      </div>
      <div class="modal-footer">
        <button type="button" id="closebtn" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script>
    $(document).ready(function(){
        $("#error").modal('show');
    })
</script>
<?php
endif;
?>

<script>
  document.querySelector("#closebtn").addEventListener("click", function(){
    document.querySelector(".modal").style.display="none";
    document.querySelector(".modal").classList.toggle("show");
    document.querySelector(".modal-backdrop").style.display="none";
  })
</script>