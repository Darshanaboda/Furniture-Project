<?php include "dbconect.php"; ?>
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
    
    <form class="modal-content animate" action="./check-editsubcategory.php" method="post"> 
    
        <div class="container"> 
        <h2 class="title" style="display:block;margin-bottom:30px">Edit Sub Category </h2>
        <?php 
            if(isset($_COOKIE["message"])) 
            {
                echo "<span style='color:red; font-weight: bold;'>  ".$_COOKIE["message"]."</span><br/><br/>";
                setcookie("message", "", time()-60);
            }
            $id = $_GET['id'];
            $query = "SELECT * FROM `subcategory` WHERE `id`='" . $id . "'";
            $result = mysqli_query($conn,$query);
            $row = mysqli_fetch_array($result)
        ?>
        <input type="number" value="<?php echo $row["id"]?>" style="display:none" name="id" >  
        <label for="scname"><b>Sub Category Name</b></label>
        <input type="text" value="<?php echo $row["name"]?>" placeholder="Enter Sub Category Name" name="scname" required>    
        <select name="category">
            <?php 
                    $records = mysqli_query($conn,"select * from category");  
                    while($data = mysqli_fetch_array($records))
                    { 
            ?>
                <option value="<?php echo $data["id"]?>" <?php if($data['id']==$row['categoryid']){ echo "selected";} else{ echo "";} ?>  ><?php echo $data["name"]?></option>
            <?php
                }
                ?> 
        </select>  
        <button type="submit">Edit Sub Category</button> 
        </div> 
  </form>
</div>
    <?php include "footer.php"; ?>
</body>
</html>