<?php include 'database.php' ?>

<?php

    //Create Select Query
    $query = "SELECT * FROM shouts ORDER BY id DESC";
    $shouts = mysqli_query($con, $query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SHOUT IT!</title>
    <link rel="stylesheet" href="css/style.css" class="rel" type="text/css" />

</head>
<body>
    <div class="container">
        <header>
            <h1>SHOUT IT</h1>
        </header>
        <div id="shouts">
            <ul>
                <?php while ($row = mysqli_fetch_assoc($shouts)) : ?>
                    <li class="shout">
                        <span><?php echo $row['time'] ?> - </span><b><?php echo $row['user'] ?></b>: <?php echo $row['message'] ?>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>
        <div id="input">
            <?php if(isset($_GET['error'])): ?>
                <div class="error"><?php echo $_GET['error']; ?></div>
            <?php endif; ?>
            <form action="process.php" method="post">
                <input type="text" name="user" placeholder="Enter Your Name" />
                <input type="text" name="message" placeholder="Enter A Message" />
                <br />
                <input type="submit" name="submit" value="Shout it out!" class="shout-btn">
            </form>

        </div>


    </div>
    <br>
    <footer class="footer">
        <div class="container" style="text-align: center">
            <span class="text-muted">© 2018 <a href="http://goncaloperes.com/" class="href">Gonçalo Peres</a>. All Rights Reserved</span>
        </div>
    </footer>
</body>
</html>