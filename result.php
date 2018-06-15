<?php
	require_once "includes/db.php";


    $search = $_GET['search'];

    $table = "main";
    $table2 = "ingredients";
    $table3 = "directions";
    $table4 = "tags";
    $query = "SELECT {$table}.* FROM $table,$table2,$table3,$table4 WHERE (title LIKE '%$search%'
    OR subtitle LIKE '%$search%'
    OR description LIKE '%$search%'
    OR ingredients LIKE '%$search%'
    OR direction LIKE '%$search%'
    OR tag LIKE '%$search%'
    )
    AND {$table2}.keyo = {$table}.id
    AND {$table3}.keyo = {$table}.id
    AND {$table4}.keyo = {$table}.id
    GROUP BY {$table}.id;
    ";
    $result = mysqli_query($connection, $query);
    $row = mysqli_num_rows($result); 
    
    require_once "includes/header.php";

if (!$search){ ?>
    <br>
    <div id=error>Empty search!</div>;
    <?php } 
else if($row === 0){ ?>
<br><br><br><br>
    <div id=error>No results found!</div>;
<?php
}
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
                    <img id="placeholder" src="assets/images/<?php echo $row['id'] ?>/<?php echo $row['recipe_img'] ?>.jpg" alt="<?php echo $row['recipe_img'] ?>">
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