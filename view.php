<?php include('db.php') ?>
<?php include('create.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Dataa</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
    integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">



  <style class="pb-4">
    body {

      background-image: url('https://i.pinimg.com/originals/2a/5b/54/2a5b5412db926b1796a2340ce302d101.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      font-family: "Asap", sans-serif;
    }
  </style>


</head>

<!-- <div></div> -->

<body>
  <!-- header -->
  <header>
    <div class="collapse bg-dark" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <h4 class="text-white">CRUD</h4>

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


  <!-- table -->
  <div class='container w-1/2 mt-10  '>
    <div>
      <div <h1 class="flex justify-center text-5xl mb-6 mt-12   font-extrabold"><span class="text-blue-600">P</span>HP
        <span class="text-pink-400 pl-4">C</span><span class="text-yellow-400">R</span> <span
          class="text-emerald-900">U</span> <span class="text-fuchsia-900 pr-4">D</span> ST<span
          class="text-green-500">Y</span>ST<span class="text-yellow-400">E</span><span class="text-emerald-600">M</span>
        </h1>
      </div>


      <div class=' bg-slate-400 mt-12'>
        <div class='flex s justify-between'>
          <div class=" flex items-center ml-2 font-bold text-[25px]"><span class='text-red-700'>R</span>EAD <span
              class='text-red-700 pl-1'> R</span>ECORD</div <!-- Back Button -->
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


      <?php

      if (isset($_GET['viewid'])) {
        $id = $_GET['viewid'];
        $sql = "SELECT * FROM `student_crud` WHERE ID=" . $id;

        $result = mysqli_query($conn, $sql);

        if ($result) {
          // Check if any rows were returned
          if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

          } else {
            echo 'No data found for the given ID';
          }
        } else {
          echo 'Error executing the query: ' . mysqli_error($conn);
        }
      } else {
        echo 'No ID provided in the URL';
      }

      ?>

      <div class="container border-4 border-red-700">
        <div class="row justify-content-center">
          <div class="card">

            <div class="card-body">
              <div class="row">

                <div class="col-md flex justify-center  flex-col  ">
                  <label for="" class="font-extrabold pl-1 text-[20px] text-gray-600"> ID </label>
                  <h5 class="border-gray-300 mb-3 border-4 p-2 w-full">
                    <span>
                      <?php echo $row['ID'] ?>
                    </span>
                  </h5>
                  <label for="" class="font-extrabold pl-1 text-[20px] text-gray-600"> Name </label>
                  <h5 class="border-gray-300 mb-3 border-4 p-2 w-full">
                    <span>
                      <?php echo $row['NAME'] ?>
                    </span>
                  </h5>
                  <label for="" class="font-extrabold pl-1 text-[20px] text-gray-600"> Grade </label>
                  <h5 class="border-gray-300 border-4 p-2 w-full">
                    <span>
                      <?php echo $row['GRADE'] ?>
                    </span>

                  </h5>
                </div>

                <div class='w-[250px] '>

                  <img src="<?php echo $row['Image'] ?>" alt="Not load"
                    class=" text-center  items-center rounded-full h-[230px] w-[250px]">
                </div>


              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
    integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
    crossorigin="anonymous"></script>
</body>

</html>