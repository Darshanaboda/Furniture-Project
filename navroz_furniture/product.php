 
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
            <h2 class="title">Product </h2>
            <a class="addlink" href="./addproduct.php">
             <span > Add Product</span>
            </a>
            <table>
                <tr>
                    <th>Sr.No.</th>
                    <th>Name</th>
                    <th> Color </th>
                    <th>Category</th> 
                    <th>Sub Category</th> 
                    <th>Type</th> 
                    <th>Price</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>

                <?php 
                $records = mysqli_query($conn,"
                select p.id,p.name ,p.color,p.price,p.image,c.name as cname,sc.name as scname,t.name as tname from product as p
                join category as c on p.categoryid=c.id
                join subcategory as sc on p.subcategoryid=sc.id 
                join type as t on p.typeid=t.id");
                $i=0;
                while($data = mysqli_fetch_array($records))
                {
                    $i++;
                ?>
                <tr>
                    <td><?php echo $i?></td>
                    <td><?php echo $data['name'];?></td>
                    <td><?php echo $data['color'];?></td>
                    <td><?php echo $data['cname'];?></td> 
                    <td><?php echo $data['scname'];?></td> 
                    <td><?php echo $data['tname'];?></td>
                    <td><?php echo $data['price'];?></td>
                    <td><img width="60px" height="60px" src="./img/product/<?php echo $data['image'];?>"/> </td>
                    
                    <td>
                        <a href="./editproduct.php?id=<?php echo $data['id'];?>" style="margin-right:10px"> Edit </a>
                        <a href="./check-deleteproduct.php?id=<?php echo $data['id'];?>"> Delete </a>

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
    if(isset($_SESSION['addproductmessege'])) 
    {
        echo "<script>alert('".$_SESSION['addproductmessege']."')</script>";
        unset($_SESSION['addproductmessege']);
    }
?>
</html>