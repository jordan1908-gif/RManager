<?php


if (isset($_POST["usave"])) {

    include("conn.php");
    $orderid = $_POST['orderd'];
    $quantity = $_POST['equantity'];
    $amount = $_POST['eamount'];
    $orderdl = $_POST['orderdd'];


    $sql = "UPDATE order_detail SET quantity='$quantity', amount='$amount' WHERE orderdetail_ID ='$orderid'";

    if (mysqli_query($con, $sql)) {


        echo '<script>
        window.location.href="../edito.php?orderid='.$orderdl.'";
                </script>';
    } else {
        die('Error:' . mysqli_error($con));
        echo '<script>alert("Fail to update order.");
      </script>';
    }



    mysqli_close($con);
}
