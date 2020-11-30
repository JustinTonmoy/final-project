<?php
session_start();
?>

<html>
<head>
<title>Home page</title>
</head>
<body>
<a href="admin/logout.php">Logout</a>

<?php
header('location:../admin/admindash.php');
?>

</body>
</html>
