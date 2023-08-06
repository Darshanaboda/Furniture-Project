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
    <form class="modal-content animate" action="./check-product.php" method="post" enctype="multipart/form-data"> 
        <div class="container"> 
        <h2 class="title" style="display:block;margin-bottom:30px">Add Product </h2>
        <?php 
            if(isset($_COOKIE["message"])) 
            {
                echo "<span style='color:red; font-weight: bold;'>  ".$_COOKIE["message"]."</span><br/><br/>";
                setcookie("message", "", time()-60);
            }

        ?>
        <label for="name"><b>Product Name</b></label>
        <input type="text" placeholder="Enter Peoduct Name" name="pname" required>  
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
        <label for="subcategory"><b>Sub Category</b></label>
        <select name="subcategory">
             <?php 
                    $records = mysqli_query($conn,"select * from subcategory");  
                    while($data = mysqli_fetch_array($records))
                    { 
            ?>
                <option value="<?php echo $data["id"]?>"><?php echo $data["name"]?></option>
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
                <option value="<?php echo $data["id"]?>"><?php echo $data["name"]?></option>
            <?php
                }
                ?> 
        </select>  
        <label for="color"><b>Color</b></label>
        <input type="text" placeholder="Enter Color" name="color" required> 
        <label for="price"><b>Price</b></label>
        <input type="number" placeholder="Enter Price" name="price" required>  
        <div class="file-upload-wrapper" data-text="Select your file!">
      <input name="image" type="file" class="file-upload-field" ></div>
            <button type="submit">Add Product</button> 
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