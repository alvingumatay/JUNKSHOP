<?php
include './includes/db.php';

$get_id=$_REQUEST['book_id'];

$sql = "UPDATE booking SET status ='done' WHERE book_id = '$get_id' ";

$conn->exec($sql);
echo "<script>alert('Successfully  Done a Process!'); window.location='approve_booking.php'</script>";
?>