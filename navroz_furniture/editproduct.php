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

    <div id="id01" class="modal" style="padding-top:0">
        <div class="model-responsiv">
    <form class="modal-content animate" action="./check-editproduct.php" method="post" enctype="multipart/form-data"> 
        <div class="container"> 
        <h2 class="title" style="display:block;margin-bottom:30px">Edit Product </h2>
        <?php 
            if(isset($_COOKIE["message"])) 
            {
                echo "<span style='color:red; font-weight: bold;'>  ".$_COOKIE["message"]."</span><br/><br/>";
                setcookie("message", "", time()-60);
            }

            $id = $_GET['id'];
            $query = "SELECT * FROM `product` WHERE `id`='" . $id . "'";
            $result = mysqli_query($conn,$query);
            $row = mysqli_fetch_array($result)

        ?>
        <input type="number"  name="id" value="<?php echo $row['id']?>"  style="display:none" >   
        <label for="name"><b>Product Name</b></label>
        <input type="text" placeholder="Enter Peoduct Name" value="<?php echo $row['name']?>" name="pname" required>  
        <label for="category"><b>Category</b></label>
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
        <label for="subcategory"><b>Sub Category</b></label>
        <select name="subcategory">
             <?php 
                    $records = mysqli_query($conn,"select * from subcategory");  
                    while($data = mysqli_fetch_array($records))
                    { 
            ?>
                <option value="<?php echo $data["id"]?>"  <?php if($data['id']==$row['subcategoryid']){ echo "selected";} else{ echo "";} ?>  ><?php echo $data["name"]?></option>
            <?php
                }
                ?> 
        </select>  
        <label for="type"><b>Type</b></label>
        <select name="type">
        <?php 
                    $records = mysqli_query($conn,"select * from type");  
                    while($data = mysqli_fetch_array($records))
                    { 
            ?>
                <option value="<?php echo $data["id"]?>" <?php if($data['id']==$row['typeid']){ echo "selected";} else{ echo "";} ?> > <?php echo $data["name"]?></option>
            <?php
                }
                ?> 
        </select>  
        <label for="color"><b>Color</b></label>
        <input type="text" placeholder="Enter Color" value="<?php echo $row['color']?>" name="color" required> 
        <label for="price"><b>Price</b></label>
        <input type="number" placeholder="Enter Price" value="<?php echo $row['price']?>" name="price" required>  
        <input type="text"  name="imageurl" value="<?php echo $row['image']?>"  style="display:none" >  
        <div class="file-upload-wrapper" data-text="<?php echo $row['image']?>" >
      <input name="image" type="file" class="file-upload-field" ></div>
            <button type="submit">Edit Product</button> 
        </div> 
  </form>
        </div>
</div>
    <?php include "footer.php"; ?>
</body>
</html>
<script>
   $(".file-upload-field").on("change", function(){ 
    $(this).parent(".file-upload-wrapper").attr("data-text", $(this).val().replace(/.*(\/|\\)/, '') );
});
    </script>