<?php
include('db.php');
include('create.php');
$upload_dir = 'uploads/';
$sql = "select * from student_crud";
$result = mysqli_query($conn, $sql);

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.72.0">
    <title>CRUD SYSTEM</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  

    <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/album/">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


    <style class="pb-4">
        body {

            background-image: url('https://www.freeppt.net/template/bubbles-powerpoint-templates-colourful.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            font-family: "Asap", sans-serif;
        }
    </style>

</head>

<body>

    <header>
        <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
                <div class="row">

                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">Contact</h4>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white">Follow on Twitter</a></li>
                            <li><a href="#" class="text-white">Like on Facebook</a></li>
                            <li><a href="#" class="text-white">Email me</a></li>
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
    <!-- <div> </div> -->

    <main class="w-1/2 justify-center ml-72 ">

        <div <h1 class="flex justify-center text-5xl mb-6 mt-12   font-extrabold"><span class="text-blue-600">P</span>HP
            <span class="text-pink-400 pl-4">C</span><span class="text-yellow-400">R</span> <span
                class="text-emerald-900">U</span> <span class="text-fuchsia-900 pr-4">D</span> ST<span
                class="text-orange-400">Y</span>ST<span class="text-green-400">E</span><span
                class="text-red-400">M</span> </h1>
        </div>

        <thead>
            <div class=' bg-slate-400 mt-12'>
                <div class='flex s justify-between'>
                    <div class=" flex items-center ml-2 font-bold text-[25px]"><span
                            class='text-red-700'>S</span>TUDENTS
                        <span class='text-red-700 pl-1'>R</span>ECORD
                    </div>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                        <div
                            class='w-12 h-12 bg-blue-500 hover:bg-blue-400 cursor-pointer flex justify-center items-center p-2  rounded-lg '>
                            <img src="https://www.svgrepo.com/show/146898/add-contact.svg" alt='Add Data' />
                        </div>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-2xl font-bold" id="staticBackdropLabel">Enter New Data
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="create.php" method='post' enctype="multipart/form-data">
                                        <div class="input_box">


                                            <input name='userName' id="userName" type="text"
                                                placeholder="Enter your Name" required />
                                            <i class="uil uil-envelope-alt email"></i>
                                        </div>

                                        <div class="input_box">
                                            <input name='userGrade' id="userGrade" type="text"
                                                placeholder="Enter your Grade" required />
                                            <i class="uil uil-lock password"></i>
                                            <i class="uil uil-eye-slash pw_hide"></i>
                                        </div>
                                        <div class=" mb-11">
                                            <label for="Image" class='text-gray-400 m-3 pl-3'>Insert Your Image</label>
                                            <div name='userImage' class="input-group pt-1">
                                                <label class="input-group-text  " for="inputGroupFile01">Upload</label>
                                                <input type="file" name="userImage" class="form-control"
                                                    id="inputGroupFile01" required />
                                            </div>

                                        </div>

                                        <div class="modal-footer">
                                            <button type="button"
                                                class="bg-gray-500 w-fit py-2 rounded-lg hover:bg-gray-400 px-3"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" name="save" id="save"
                                                class=" rounded-lg hover:bg-blue-500 bg-blue-600 px-2 py-2">Save</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </thead>


        <table class="table table-bordered border-primary border-collapse">
            <tr class=" text-center bg-pink-100 font-bold">
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Grade</th>
                <th>Oporation</th>
            </tr>
            <tr>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>

                    <td class=" text-center pt-3">
                        <?php echo $row['ID'] ?>
                    </td>

                    <td class=" text-center items-center ">
                        <div class="ml-6 pl-5">
                            <img src="<?php echo $row['Image'] ?>" alt="Not load"
                                class="w-16 h-16  text-center  items-center   ">
                        </div>
                    </td>

                    <td class=" text-center pt-3 ">
                        <?php echo $row['NAME'] ?>
                    </td>
                    <td class=" text-center   pt-3">
                        <?php echo $row['GRADE'] ?>
                    </td>
                    <td class="flex space-x-1 justify-center pb-4 ">
                        <a href="view.php">

                            <button class="data-bs-target=" #staticBackdrop">
                                <div class='w-12 h-12 bg-green-500 hover:bg-green-400 cursor-pointer flex justify-center items-center
                            p-2 rounded-sm '>
                                    <a href="view.php?viewid=<?php echo $row['ID'] ?>">

                                        <img src="https://www.svgrepo.com/show/7643/eye-close-up-visibility-button.svg"
                                            alt='Add Data' />
                                    </a>
                                </div>
                            </button>

                        </a>
                        <div
                            class='w-12 h-12 bg-yellow-500 hover:bg-yellow-400 cursor-pointer flex justify-center items-center p-2  rounded-sm '>
                            <a href="update.php?updateid=<?php echo $row['ID'] ?>">
                                <img src="https://www.svgrepo.com/show/73131/edit-button.svg" alt='Add Data' />
                            </a>
                        </div>
                        <div
                            class='w-12 h-12 bg-red-500 hover:bg-red-400 cursor-pointer flex justify-center items-center p-2  rounded-sm '>
                            <a href="delete.php?deleteid=<?php echo $row['ID'] ?>">
                                <img src="https://www.svgrepo.com/show/21045/delete-button.svg" alt='Add Data' />
                            </a>
                        </div>
                    </td>

                </tr>

                <?php
                }
                ?>
        </table>
    </main>

    <!-- Add more rows as needed -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>