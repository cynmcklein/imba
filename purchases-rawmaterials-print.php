<!DOCTYPE html>
<?php
require 'conndb.php';


?>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
    <style>
        @media print {

            html,
            body {
                font-size: 9.5pt;
                margin: 0;
                padding: 0;
            }

            .page-break {
                page-break-before: always;
                width: auto;
                margin: auto;
            }
        }

        .page-break {
            width: 980px;
            margin: 0 auto;
        }

        .sale-head {
            margin: 40px 0;
            text-align: center;
        }

        .sale-head h1,
        .sale-head strong {
            padding: 10px 20px;
            display: block;
        }

        .sale-head h1 {
            margin: 0;
            border-bottom: 1px solid #212121;
        }

        .table>thead:first-child>tr:first-child>th {
            border-top: 1px solid #000;
        }

        table thead tr th {
            text-align: center;
            border: 1px solid #ededed;
        }

        table tbody tr td {
            vertical-align: middle;
        }

        .sale-head,
        table.table thead tr th,
        table tbody tr td,
        table tfoot tr td {
            border: 1px solid #212121;
            white-space: nowrap;
        }

        .sale-head h1,
        table thead tr th,
        table tfoot tr td {
            background-color: #f8f8f8;
        }

        tfoot {
            color: #000;
            text-transform: uppercase;
            font-weight: 500;
        }
    </style>
</head>

<body>
    <?php
    require 'conndb.php';

    $id = $_GET['print'];



    $query = mysqli_query($data, "SELECT * FROM purchaserawmaterials WHERE id=$id");

    //$data = mysqli_query($data, $query);


    while ($fetch = $query->fetch_array()) {

    ?>
        <h2>Big Apple Packaging Incorporated</h2>
        <h3>Purchase Order Details</h3>
        <br /> <br /> <br /> <br />
        <b style="color:blue;">Date Prepared:</b>
        <?php
        $date = date("Y-m-d", strtotime("+6 HOURS"));
        echo $date;
        ?>


        <div class="text align">
            <b class="font weight-bold">PO#</b>
            <?php
            $date = date("Y-m-d", strtotime("+6 HOURS"));
            echo $date;
            ?>
        </div>


        <br /><br />

        <table class="table table-border">
            <thead>
                <tr>
                    <th>Requestor</th>
                    <th>Vendor</th>
                    <th>P0 Number</th>
                    <th>Description</th>
                    <th>PO Date</th>
                    <th>Order Date</th>
                    <th>Receive Date</th>

                </tr>
            </thead>
            <tbody>


                <tr>
                    <td style="text-align:center;"><?php echo $fetch['Requestor'] ?></td>
                    <td style="text-align:center;"><?php echo $fetch['Vendor'] ?></td>

                    <td style="text-align:center;"><?php echo $fetch['PO#'] ?></td>
                    <td style="text-align:center;"><?php echo $fetch['Description'] ?></td>
                    <td style="text-align:center;"><?php echo $fetch['PO_Date'] ?></td>
                    <td style="text-align:center;"><?php echo $fetch['Order_Date'] ?></td>
                    <td style="text-align:center;"><?php echo $fetch['Recieve_Date'] ?></td>
                </tr>

            <?php
        }
            ?>
            </tbody>
        </table>
        <center><button id="PrintButton" onclick="PrintPage()">Print</button></center>
</body>
<script type="text/javascript">
    function PrintPage() {
        window.print();
    }
</script>

</html>