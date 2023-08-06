<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Index</title>
    <?php include "links.php"; ?>
    <?php include "header.php"; ?>
</head>
<body>
    <?php include "nav.php"; ?>
    <div id="id01" class="modal">
    <form class="modal-content animate" action="./check-addcategory.php" method="post"> 
        <div class="container"> 
        <h2 class="title" style="display:block;margin-bottom:30px">Add Category </h2>
        <?php 
            if(isset($_COOKIE["message"])) 
            {
                echo "<span style='color:red; font-weight: bold;'>  ".$_COOKIE["message"]."</span><br/><br/>";
                setcookie("message", "", time()-60);
            }
        ?>
        <label for="cname"><b>Category Name</b></label>
        <input type="text" placeholder="Enter Category Name" name="cname" required>   
        <button type="submit">Add Category</button> 
        </div> 
  </form>
</div>
    <?php include "footer.php"; ?>
</body>
</html>