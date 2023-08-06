<img src="./img/logo.png"  class="logo"  />
<div class="nav">
    <ul> 
        <?php if (isset($_SESSION['user'])): ?>
            <li>
                <a href="./user.php">User</a>
            </li>
            <li>
                <a href="./product.php">Product</a>
            </li>
            <li>
                <a href="./category.php">Category</a>
            </li>
            <li>
                <a href="./subcategory.php">Sub Category</a>
            </li>
            <li>
                <a href="./type.php">Type</a>
            </li>
            <li>
                <a href="#">Gallary</a>
            </li>
            <li>
                <a href="#">Feedback</a>
            </li> 
            <li>
                <a href="./logout.php">Log Out</a>
            </li>
        <?php else: ?>
            <li>
            <a href="./login.php" >Login</a>
            </li>
            <li>
            <a href="./registration.php">Signup</a>
            </li>
        <?php endif; ?>
    </ul>
</div>