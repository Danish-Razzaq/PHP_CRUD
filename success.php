<!DOCTYPE html>
<html>

<head>
    <title>Success</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body >
    <script >
        // Show the SweetAlert here
        Swal.fire({
            title: 'Data inserted successfully!',
            icon: 'success',
            showConfirmButton: false,
            timer: 1500
        }).then(function () {
            window.location = 'index.php'; // Redirect back to the main page after the SweetAlert is closed
        });
    </script>
</body>

</html>