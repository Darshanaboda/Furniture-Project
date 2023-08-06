
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
<div  style="padding-top: 50px;width: 100%;height: 601px;overflow: hidden;overflow-y: auto;">
<center>
    <div>
</div>
        <?php
            $records = mysqli_query($conn,"select * from gallary " ); 
            while($data = mysqli_fetch_array($records))
            { 
        ?>
            <div class="gallery-grid">
                <div class="gallery-frame">
                <img class="gallery-img" style="min-width: 230px;max-width: 230px;max-height: 300px;min-height: 300px;width:230px;height:300px"  src="./img/gallary/<?php echo $data['image']?>" alt="symbol image" title="symbol image">
                <a style="display: block;">Delete</a>
                </div> 
            </div> 

        <?php
            }
        ?> 
</center>
</div>
    <?php include "footer.php"; ?>
</body>
</html>