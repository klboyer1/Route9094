<?php

// Process Insert new Customer
require 'Config.php';

if (isset($_POST['Save'])) {
    $Number = $_POST['Number'];
    $Street = $_POST['Street'];
    $Unit = $_POST['Unit'];
    $Code = $_POST['Code'];
    $Papers = $_POST['Papers'];
    $TVGuide = $_POST['TVGuide'];
    $Path = $_POST['Path'];
    $Seq = $_POST['Seq'];
    $Delivery = $_POST['Delivery'];
    $TempStop = $_POST['TempStop'];
    $TSDate = $_POST['TSDate'];

    //
    $Conn->query("INSERT INTO Customers "
                    . "(Number,Street,Unit,Code,Papers,TVGuide,Path,Seq,Delivery,TempStop,TSDate) "
                    . "VALUES "
                    . "('$Number','$Street','$Unit','$Code','$Papers','$TVGuide','$Path','$Seq','$Delivery','$TempStop','$TSDate')") or
            die('Error ' . $Conn->error($Conn));
    // $ScreenMessage = "Customer Added Successfully";

    header('Location: insert.php');
    alert('Success!!');
}
if (isset($_POST['Cancel'])) {
    header('Location: index.php');
}
?>
