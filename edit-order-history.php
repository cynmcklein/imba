 <?php


    include_once 'conndb.php';
    $id = $_GET['edit'];


    if (isset($_POST['save'])) {
        $prodname = $_POST['prodname'];
        $plastic_type = $_POST['plastic_type'];
        $numcolors = $_POST['numcolors'];
        $qty = $_POST['qty'];
        $customer = $_POST['customer'];


        $sql = "UPDATE order_history SET product_name = '$prodname', plastic_type = '$plastic_type', number_colors ='$numcolors', qty = '$qty', customer_id = '$customer' WHERE id ='$id'";

        //$data = mysqli_query($data, $sql);
        $data->query($sql) or die($data->error);



        header("Location: orders-history.php?edit=" . $id);
    }


    $query = mysqli_query($data, "SELECT * FROM order_history WHERE id= '$id'");
    while ($row = mysqli_fetch_array($query)) {

        include_once 'header-sidebar.php';
    ?>

     <!DOCTYPE html>
     <html lang=en>

     <head>

     </head>

     <body>
         <main id="main" class="main">

             <div class="pagetitle">
                 <h1>Edit Order History Data</h1>
                 <nav>
                     <ol class="breadcrumb">
                         <li class="breadcrumb-item"><a href="home.php">Dashboard</a></li>

                         <li class="breadcrumb-item active"><a href="orders-history.php">Orders history</a></li>

                         <li class="breadcrumb-item active"><a href="edit-order-history.php">Edit Data</a></li>

                     </ol>
                 </nav>
             </div><!-- End Page Title -->



             <form action="" method="POST">
                 <div class="row mb-3">
                     <label for="inputEmail" class="col-sm-2 col-form-label">Product Name</label>
                     <div class="col-sm-3">
                         <input type="text" name="prodname" class="form-control" id="prodname" value="<?php echo $row['product_name']; ?>">
                     </div>
                 </div>


                 <div class="row mb-3">
                     <label class="col-sm-2 col-form-label">Plastic Type</label>
                     <div class="col-sm-10">
                         <select class="form-select" name="plastic_type" aria-label="Default select example" id="plastic_type" value="<?php echo $row['plastic_type']; ?>">
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

                 <div class="row mb-3">
                     <label for="Supplier Name" class="col-sm-2 col-form-label">Number of Colors</label>
                     <div class="col-sm-10">
                         <input type="number" name="numcolors" class="form-control" id="plastic_type" value="<?php echo $row['number_colors']; ?>">
                     </div>
                 </div>

                 <div class="row mb-3">
                     <label for="Supplier Name" class="col-sm-2 col-form-label">Quantity</label>
                     <div class="col-sm-3">
                         <input type="number" name="qty" class="form-control" id="qty" value="<?php echo $row['qty']; ?>">
                     </div>
                 </div>


                 <div class="row mb-3">
                     <label class="col-sm-2 col-form-label"></label>
                     <div class="col-sm-10">
                         <button type="submit" name="save" class="btn btn-primary" data-bs-target="#basicmodal">Edit</button>
                     </div>
                 </div>

             </form>


         <?php }
        mysqli_close($data) ?>
         </main>

     </body>

     </html>