 <?php


    include_once 'conndb.php';
    $id = $_GET['edit'];


    if (isset($_POST['save'])) {
        $name = $_POST['item_name'];
        $code = $_POST['code'];
        $itemtype = $_POST['item_type'];
        $suppliername = $_POST['supplier_name'];


        $sql = "UPDATE rfiddb SET itemname = '$name', code ='$code', item_type = '$itemtype', supplier_name = '$suppliername' WHERE id ='$id'";

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



             <form method="post">

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

         <?php }
        mysqli_close($data) ?>
         </main>

     </body>

     </html>