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
            <h2 class="title">Type </h2>
            <a class="addlink" href="./addtype.php">
             <span > Add Type</span>
            </a>
            <table>
                <tr>
                    <th>Sr.No.</th>
                    <th>Name</th> 
                    <th>Action</th>
                </tr>

                <?php 
                $records = mysqli_query($conn,"select * from type"); // fetch data from database
                $i=0;
                while($data = mysqli_fetch_array($records))
                {
                    $i++;
                ?>
                <tr>
                    <td><?php echo $i?></td>
                    <td><?php echo $data['name']; ?></td> 
                    
                    <td>
                        <a href="./edittype.php?id=<?php echo $data['id']; ?>" style="margin-right:10px"> Edit </a>
                        <a href="./check-deletectype.php?id=<?php echo $data['id']; ?>"> Delete </a>

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