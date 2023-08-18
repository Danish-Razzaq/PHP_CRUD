<?php include('db.php') ?>
<?php include('create.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">




    <style class="pb-4">
        body {

            background-image: url('https://i.pinimg.com/736x/11/15/6d/11156d10e37e66bc56f6011fc8089743.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            font-family: "Asap", sans-serif;
        }
    </style>



</head>



<body>

    <?php

    if (isset($_GET['updateid'])) {
        $id = $_GET['updateid'];

        $sql = "SELECT * FROM `student_crud` WHERE id=$id";

        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

    } else {
        die(mysqli_error($conn));
    }

    ?>


    <!-- header -->
    <header>
        <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-white">CRUD</h4>
                        <h4 class="text-white">Contact</h4>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white">Follow on Twitter</a></li>
                            <li><a href="#" class="text-white">Like on Facebook</a></li>
                            <li><a href="#" class="text-white ">Email me</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2"
                        viewBox="0 0 24 24">
                        <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
                        <circle cx="12" cy="13" r="4" />
                    </svg>
                    <strong>CRUD</strong>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader"
                    aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>


    <!-- boody -->
    <div class='container w-1/2 mt-10 border-[12px] border-gray-400  '>
        <div <h1 class="flex justify-center text-4xl mb-6 mt-12   font-extrabold"><span class="text-blue-600">P</span>HP
            <span class="text-pink-400 pl-3">C</span><span class="text-yellow-400">R</span> <span
                class="text-emerald-900">U</span> <span class="text-fuchsia-900 pr-3">D</span> ST<span
                class="text-orange-400">Y</span>ST<span class="text-green-400">E</span><span
                class="text-red-400">M</span> </h1>
        </div>

        <div class=' bg-green-400 mt-6'>
            <div class='flex s justify-between'>
                <div class=" flex items-center ml-2 font-bold text-[25px]"><span class='text-red-700 '> U</span>PDATE
                    <span class='text-red-700 pl-1'>R</span>ECORD
                </div>

                <!-- MODAL -->
                <!-- Button trigger modal -->
                <button type="button" class=" m-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="">
                    <div
                        class='w-12 h-12 bg-red-700 hover:bg-red-600 hover:shadow-black hover:shadow-2xl cursor-pointer flex justify-center items-center p-2  rounded-lg '>
                        <a href="index.php">

                            <img src="https://static.thenounproject.com/png/97635-200.png" alt='Add Data' />
                        </a>
                    </div>
                </button>

            </div>
        </div>

        <div class="modal-body">
            <form action="" method='post' enctype="multipart/form-data">
                <div class="input_box p-6">
                    <label for="userName" class='text-[20px] font-semibold '>Name:</label>
                    <input name='userName' id="userName"
                        class="w-full h-10  border-2 border-gray-400 pl-3 text-gray-600  text-2xl"
                        value="<?php echo ($row['NAME']) ?>" type="text" placeholder="Enter your Name" required />
                    <i class="uil uil-envelope-alt email"></i>
                </div>

                <div class="input_box p-6">
                    <label for="userGrade" class='text-[20px] font-semibold '>Grade:</label>
                    <input name='userGrade' class='w-full h-10 text-2xl text-gray-600 border-2 border-gray-400 pl-3  '
                        value="<?php echo ($row['GRADE']) ?>" id="userGrade" type="text" placeholder="Enter your Grade"
                        required />
                    <i class="uil uil-lock password"></i>
                    <i class="uil uil-eye-slash pw_hide"></i>
                </div>
                <div class=" mb-2 ml-3 mr-6">

                    <label for="Image" class=' pb-2 font-semibold  text-2xl  '>Insert Your Image:</label></br>

                    <input type="file" class='w-full h-10    text-2xl text-gray-600 border-2  border-gray-400   '
                        name="userImage" required><br>
                    <div class='mt-3'>

                        <img src="<?php echo ($row['Image']) ?>" alt="Existing Image" width="200"><br>
                    </div>


                </div>

                <div class="modal-footer">
                    <button type="button" class="bg-gray-500 w-fit py-2 rounded-lg hover:bg-gray-400 px-3"
                        data-bs-dismiss="modal">Close</button>
                    <button type="update" name="update" id="save"
                        class=" rounded-lg hover:bg-blue-500 bg-blue-600 px-2 py-2">Update</button>
                </div>
            </form>

        </div>


    </div>

    <?php
    if (isset($_POST['update'])) {

        $name = $_POST['userName'];
        $grade = $_POST['userGrade'];
        $filename = $_FILES["userImage"]["name"];
        $temname = $_FILES["userImage"]["tmp_name"];

        $folder = "images/" . $filename;
        move_uploaded_file($temname, $folder);

        $updatequery = "UPDATE `student_crud` SET NAME='$name', GRADE='$grade', Image='$folder' WHERE ID=$id";
        $result = mysqli_query($conn, $updatequery);

        if ($result) {
            ?>
            <script>
                // Show the SweetAlert here
                Swal.fire({
                    title: 'Data Updated Successfully!',
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 1500
                }).then(function () {
                    window.location = 'index.php'; // Redirect back to the main page after the SweetAlert is closed
                });
            </script>
            <?php
        } else {
            ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!',
                    footer: '<a href="">Why do I have this issue? Data Already Existing</a>'
                })

            </script>
            <?php
        }

        echo ($name);
    }
    ?>






    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous"></script>
</body>

</html>