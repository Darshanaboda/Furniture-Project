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
    
    <form class="modal-content animate" action="./check-edituser.php" method="post"> 
    
        <div class="container"> 
        <h2 class="title" style="display:block;margin-bottom:30px">Edit User </h2>
        <?php 
            if(isset($_COOKIE["message"])) 
            {
                echo "<span style='color:red; font-weight: bold;'>  ".$_COOKIE["message"]."</span><br/><br/>";
                setcookie("message", "", time()-60);
            }
            $id = $_GET['id'];
            $query = "SELECT * FROM `user` WHERE `id`='" . $id . "'";
            $result = mysqli_query($conn,$query);
            $row = mysqli_fetch_array($result)
        ?>
        <input type="number" value="<?php echo $row["id"]?>" style="display:none" name="id" > 
        <label for="name"><b>Name</b></label>
        <input type="text" value="<?php echo $row["name"]?>" placeholder="Enter Name" name="name" required>  
        <label for="mon"><b>Mobile No.</b></label>
        <input type="number" value="<?php echo $row["number"]?>" placeholder="Enter Mobile No." name="mon" required >  
        <label for="email"><b>Email</b></label>
        <input type="email" value="<?php echo $row["email"]?>" placeholder="Enter Email" name="email" required> 
        <label for="psw"><b>Password</b></label>
        <input type="password" value="<?php echo $row["password"]?>" placeholder="Enter Password" name="psw" required> 
        <button type="submit">Edit User</button> 
        </div> 
  </form>
</div>
    <?php include "footer.php"; ?>
</body>
</html>