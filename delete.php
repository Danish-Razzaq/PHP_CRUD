<?php
include('db.php');

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $sql = "DELETE FROM `student_crud` WHERE ID=" . $id;
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo 'Data could not be deleted: ' . mysqli_error($conn);
    } else {
       
        //redirect ot confirm Alert page
        header("Location: ConfirmAlert.php");
    }
}
