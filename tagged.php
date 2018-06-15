<?php
	require_once "includes/db.php";

    
    
    $tagged = isset($_GET['tag']) ? $_GET['tag'] : null;
    if (!$tagged) redirect_to('index.php'); 
    else {
        $table = "main";
        $table4 = "tags";
    $query = "SELECT {$table}.* FROM $table,$table4 WHERE (tag LIKE '$tagged') AND {$table4}.keyo = {$table}.id GROUP BY {$table}.id;";
    $result = mysqli_query($connection, $query);
    }

      
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
        mysqli_close($connection);
?>