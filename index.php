<?php
	require_once "includes/db.php";

    $table = "main";
    $query = "SELECT * FROM {$table} ";
    $query = "SELECT * FROM {$table}";
    $result = mysqli_query($connection, $query);
    
    if (!$result) {
        die("Database query failed.");
    }

    $table2 = "tags";
    $query2 = "SELECT * FROM {$table2} WHERE ";
    $result2 = mysqli_query($connection, $query);

    require_once "includes/header.php";
?>
<!-- Continue page body -->
<br><br>
        <div id="grid">
       <?php 
			while ($row = mysqli_fetch_assoc($result)) {
	    ?>
            <div id="recipe">
                <a href="recipe.php?id=<?php echo $row['id'] ?>">
                    <div id="dark">
                    <img id="placeholder" src="assets/images/<?php echo $row['id'] ?>/<?php echo $row['recipe_img'] ?>.jpg" alt="<?php echo $row['title'] ?>">
                    <div id="overlay"></div>
                    </div>
                    <div id="textbox">
                    <h3><?php echo $row['title'] ?></h3>
                    <h4><?php echo $row['subtitle'] ?></h4>
                    </div>
                </a>
            </div>
        <?php
        }
        ?>
        </div>

<?php
	require_once "includes/footer.php";
        mysqli_close($connection);
?>