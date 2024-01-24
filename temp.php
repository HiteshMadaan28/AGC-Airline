<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Example SweetAlert Message Box</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
</head>
<body>

<?php
// Your PHP code here

echo "<script src='https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js'></script>";
echo "<script>
swal({
    title: 'Congratulation',
    text: 'Sign Up successfully',
    icon: 'success',
    button: 'OK'
});
</script>";
?>

</body>
</html>
