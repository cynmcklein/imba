<?php require_once 'header-sidebar.php';
require_once 'includes/load.php';
//session_start()

?>

<html>

<head>
  <!-- <script>
    $(document).ready(function() {
      $("#getUID").load("UIDContainer.php");
      setInterval(function() {
        $("#getUID").load("UIDContainer.php");
      }, 500);
    });
  </script> -->

</head>

<body>
<main id="main" class="main">
<div class="col-12">
    <div class="card recent-sales">
    <div class="card-body">
    <br>
    <div class="center" >
      <div class="card-title">
        <h3 align="center">Registration Form</h3>
      </div>
      <br>
      <form action="insertDB.php" method="post">

        <div class="col-md-12">
          <label for="inputName5" class="form-label">UID</label>
          <div class="col-md-12">
            <div class="col-sm-12">
              
              <input type="text" name="id" class="form-control" id="itemname" value="<?php require_once 'UIDContainer.php';
              ?>"></input>
            </div>
          </div>
        </div>

        <div class="col-md-12">
          <label for="inputName5" class="form-label">Code</label>
          <input type="text" name="code" class="form-control" id="companyName">
        </div>

        <div class="col-md-12">
          <label for="inputName5" class="form-label">Item Name</label>
          <input type="text" name="item_name" class="form-control" id="companyName">
        </div>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Material Type</label>
          <div class="col-sm-10">
            <select class="form-select" name="item_type" aria-label="Default select example">
              <option selected>Open this select menu</option>
              <option>Big Apple</option>
              <option>Pelletized PE</option>
              <option>Pelletized HD</option>
              <option>LDPE</option>
              <option>LLDPE</option>
              <option>HDPE</option>
              <option>PP</option>
            </select>
          </div>
        </div>

        <div class="col-md-12">
          <label for="inputName5" class="form-label">Supplier Name</label>
          <input type="text" name="supplier_name" class="form-control" id="companyName">
        </div>

        <div class="form-actions">
          <button type="submit" class="btn btn-success">Save</button>
        </div>
      </form>

    </div>
  </div> <!-- /container -->
  </div>
  </div>
  </main>
  

</body>
</hmtl>