<header>
    <a href="index.php" class="logo">
        <h1 class="logo-text"><span>Andee</span>Rakotovao</h1>
    </a>
    <i class="fa fa-bars menu-toggle"></i>
    <ul class="nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>

        <?php if(isset($_SESSION['id'])): ?>
            <li><a href="#">
                <i class="fa fa-user"></i>
                <?php echo $_SESSION['username']; ?>
                <i class="fa fa-chevron-down" style="font-size: 10px;"></i></a>
                <ul>
                    <?php if($_SESSION['admin']): ?>
                        <li><a href="<?php echo '../admin/dashboard.php' ?>">Dashboard</a></li>
                    <?php endif; ?>
                    <li><a href="<?php echo 'logout.php' ?>" class="logout">Logout</a></li>
                </ul>
            </li>
        <?php else: ?>
            <li><a href="<?php echo 'register.php' ?>">Sign Up</a></li>
            <li><a href="<?php echo 'login.php' ?>">Login</a></li>
        <?php endif; ?>

    </ul>
</header>