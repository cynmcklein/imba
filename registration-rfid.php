<?php require_once 'header-sidebar.php';
require_once 'includes/load.php';
//session_start()
$Write="<?php $" . "UIDresult=''; " . "echo $" . "UIDresult;" . " ?>";
	file_put_contents('UIDContainer.php',$Write);
?>

<html>
    <head>
        <script>
			$(document).ready(function(){
				 $("#getUID").load("UIDContainer.php");
				setInterval(function() {
					$("#getUID").load("UIDContainer.php");
				}, 500);
			});
		</script>
        
    </head>
<body>
            <div class="card-body">
			<br>
			<div class="center" style="margin: 0 auto; width:495px; border-style: solid; border-color: #f2f2f2;">
				<div class="card-title">
					<h3 align="center">Registration Form</h3>
				</div>
				<br>
				<form action="insertDB.php" method="post" >
                    <div class="col-md-12">
                         <label for="inputName5" class="form-label">UID</label>
                         <div class="col-md-12">
                         <a href="UIDContainer.php">Matias</a>
							<!-- <textarea name="id" id="getUID" placeholder="Please Scan your Card / Key Chain to display ID" required></textarea> -->
						 </div>
                    </div>
					
					<div class="col-md-12">
                         <label for="inputName5" class="form-label">Code</label>
                         <input type="text" name="code" class="form-control" id="getUID">
                    </div>
					
					<div class="col-md-12">
                         <label for="inputName5" class="form-label">Item Name</label>
                         <input type="text" name="name" class="form-control" id="getUID">
                    </div>
					
					<div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Material Type</label>
                    <div class="col-sm-10">
                        <select class="form-select" name="itemtype" aria-label="Default select example">
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
                         <input type="text" name="suppliername" class="form-control" id="getUID">
                    </div>
					
					<div class="form-actions">
						<button type="submit" class="btn btn-success">Save</button>
                    </div>
				</form>
				
			</div>               
		</div> <!-- /container -->	
        
        <div class="col-12">
    <div class="card recent-sales">


      <div class="filter">
        <a class="icon" href="#" data-bs-toggle="dropdown"><i></i></a>
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
          <li class="dropdown-header text-start">
            <h6>Filter</h6>
          </li>



          <li><a class="dropdown-item" href="#">Today</a></li>
          <li><a class="dropdown-item" href="#">This Month</a></li>
          <li><a class="dropdown-item" href="#">This Year</a></li>
        </ul>
      </div>


      <div class="card-body">
        <h5 class="card-title">Customer Overview <span>| Today</span></h5>

        <table class="table table-borderless datatable">

          <thead>
            <tr>

              <th scope="col">Company Name</th>
              <th scope="col">Email</th>
              <th scope="col">Contact</th>
              <th scope="col">Contact Person</th>
              <th scope="col">Address</th>
              <th scope="col">Agent</th>

            </tr>

          </thead>
          <tbody>
            <?php

            require_once 'conndb.php';

            $query = mysqli_query($data, "SELECT * FROM customer");
            while ($row = mysqli_fetch_array($query)) {


            ?>
              <tr>

                <td><?php echo $row['company']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['contact']; ?></td>
                <td><?php echo $row['conperson']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['agent_name']; ?></td>
                <td>
                  <!-- Call to action buttons -->



                  <a href="edit-customer.php?edit=<?php echo $row['id']; ?>"><button class="btn btn-success ri-contacts-fill" type="button" data-toggle="tooltip" data-placement="top" title="Edit"></button></a>
                  <a href='process-delete.php?delete=<?php echo $row['id']; ?>'><button class="btn btn-danger ri-delete-bin-6-line" name="btnDelete" type="button" data-toggle="tooltip" data-placement="top" title="Delete"></button></a>



                </td>

              </tr>
            <?php }
            mysqli_close($data) ?>


          </tbody>
        </table>

      </div>

    </div>
  </div>

</body>
</hmtl>