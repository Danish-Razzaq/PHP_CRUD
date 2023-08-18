<!DOCTYPE html>
<html>

<head>
    <title>Deleted</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
<!-- Deletion successful, show SweetAlert -->
    <script>
        Swal.fire({
            title: "Are you sure?",
            text: "You won\'t be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    "Deleted!",
                    "Your file has been deleted.",
                    "success"
                ).then(function() {
                    window.location = "index.php"; // Redirect back to the main page after the SweetAlert is closed
                });
            } else {
                window.location = "index.php"; // Redirect back to the main page if deletion is not confirmed
            }
        });
    </script>;
</body>

</html>