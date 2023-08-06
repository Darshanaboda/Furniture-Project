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
    <?php include "dbconect.php"; ?>
    <div id="id01" class="modal">
    <form class="modal-content animate" action="./check-addsubcategory.php" method="post"> 
        <div class="container"> 
        <h2 class="title" style="display:block;margin-bottom:30px">Add Sub Category </h2>
        <?php 
            if(isset($_COOKIE["message"])) 
            {
                echo "<span style='color:red; font-weight: bold;'>  ".$_COOKIE["message"]."</span><br/><br/>";
                setcookie("message", "", time()-60);
            }
        ?>
        <label for="scname"><b>Sub Category Name</b></label>
        <input type="text" placeholder="Enter Sub Category Name" name="scname" required> 
        
        <label for="category"><b>Category</b></label>
        <select name="category">
            <?php 
                    $records = mysqli_query($conn,"select * from category");  
                    while($data = mysqli_fetch_array($records))
                    { 
            ?>
                <option value="<?php echo $data["id"]?>"><?php echo $data["name"]?></option>
            <?php
                }
                ?> 
        </select>  
        
        <button type="submit">Add Sub Category</button> 
        </div> 
  </form>
</div>
    <?php include "footer.php"; ?>
</body>
</html>