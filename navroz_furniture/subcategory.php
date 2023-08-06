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
    <div class="custom-container">
        
        <div style="width:60%">
            <h2 class="title">Sub Category </h2>
            <a class="addlink" href="./addsubcategory.php">
             <span > Add Sub Category</span>
            </a>
            <table>
                <tr>
                    <th>Sr.No.</th>
                    <th>Name</th> 
                    <th>Category Name</th> 
                    <th>Action</th>
                </tr>

                <?php 
                $records = mysqli_query($conn,"
                select sc.name,sc.id,c.name as cname from subcategory as sc
                join category as c on c.id=sc.categoryid
                "); // fetch data from database
                $i=0;
                while($data = mysqli_fetch_array($records))
                {
                    $i++;
                ?>
                <tr>
                    <td><?php echo $i?></td>
                    <td><?php echo $data['name']; ?></td> 
                    <td><?php echo $data['cname']; ?></td> 
                    
                    <td>
                        <a href="./editsubcategory.php?id=<?php echo $data['id']; ?>" style="margin-right:10px"> Edit </a>
                        <a href="./check-deletesubcategory.php?id=<?php echo $data['id']; ?>"> Delete </a>

                    </td>
                </tr>	
                <?php
                }
                ?> 
            </table>
        </div>
    </div>
    <?php include "footer.php"; ?>
</body>
<?php 
    if(isset($_COOKIE["addusermessage"])) 
    {
        echo "<script>alert('".$_COOKIE["addusermessage"]."')</script>";
        setcookie("addusermessage", "", time()-60);
    }
?>
</html>