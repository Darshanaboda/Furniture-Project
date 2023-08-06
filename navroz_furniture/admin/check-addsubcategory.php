<?php include "dbconect.php"; ?>
<?php 
$cname = $_POST['scname']; 
$category = $_POST['category'];
$sql = "INSERT INTO subcategory (name,categoryid)
VALUES ('$cname','$category')";
 
if ($conn->query($sql) === TRUE) {
    $message = "Sub Category added successfully";
    setcookie("addusermessage", $message, time()+5*60);
    header("Location: subcategory.php");
} 
else {

    $message = "Sub Category not added";
    setcookie("message", $message, time()+5*60);
    header("Location: addsubcategory.php");
}
?>