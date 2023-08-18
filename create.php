<?php
include('db.php');

if (isset($_POST['save'])) {
    $userName = $_POST['userName'];
    $userGrade = $_POST['userGrade'];

    // for images
    $filename = $_FILES["userImage"]["name"];
    $temname = $_FILES["userImage"]["tmp_name"];

    $folder = "images/" . $filename;
    move_uploaded_file($temname, $folder);

    //  echo ("<img src='$folder' height='100px' weight='100px'> ");

    // $userImage = $_POST['userImage'];

    $check_dublication = "SELECT * FROM student_crud WHERE NAME = '$userName'";
    $result_check_dublication = mysqli_query($conn, $check_dublication);

    if (mysqli_num_rows($result_check_dublication) == 0) {
        $sql = "INSERT INTO student_crud (NAME, GRADE, Image) VALUES ('$userName', '$userGrade', '$folder')";
        $result_sql = mysqli_query($conn, $sql);

        if ($result_sql) {
            header("Location: success.php"); // Redirect to another page after successful insertion
            exit();
        }

        header("Location: index.php"); // Redirect back to the main page if there was an error
        exit();
    } else {
        header("Location: error.php");
        // echo "Error: Student with the same name already exists. Plz TRY Again To Another Name";
    }
}
