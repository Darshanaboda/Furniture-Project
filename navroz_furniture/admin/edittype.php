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
    <div id="id01" class="modal">
    
    <form class="modal-content animate" action="./check-edittype.php" method="post"> 
    
        <div class="container"> 
        <h2 class="title" style="display:block;margin-bottom:30px">Edit Type </h2>
        <?php 
            if(isset($_COOKIE["message"])) 
            {
                echo "<span style='color:red; font-weight: bold;'>  ".$_COOKIE["message"]."</span><br/><br/>";
                setcookie("message", "", time()-60);
            }
            $id = $_GET['id'];
            $query = "SELECT * FROM `type` WHERE `id`='" . $id . "'";
            $result = mysqli_query($conn,$query);
            $row = mysqli_fetch_array($result)
        ?>
        <input type="number" value="<?php echo $row["id"]?>" style="display:none" name="id" >  
        <label for="cname"><b>Type Name</b></label>
        <input type="text" value="<?php echo $row["name"]?>" placeholder="Enter Type Name" name="cname" required>    
        <button type="submit">Edit Type</button> 
        </div> 
  </form>
</div>
    <?php include "footer.php"; ?>
</body>
</html>