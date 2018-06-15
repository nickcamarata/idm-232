<?php
	require_once "includes/db.php"; //this includes the connection to the database
	  $id = isset($_GET['id']) ? $_GET['id'] : null; //this get's the id from the url, created in index
	  if (!$id) redirect_to('index.php'); //if there's no id, go back to index
	  else { //else
	    $query1 = 'SELECT * '; //select all data
	    $query1 .= 'FROM main '; //from main database
	    $query1 .= "WHERE id = '{$id}' "; //where the id is matches the url
	    $result1 = mysqli_query($connection, $query1);
	    if (!$result1) {
	      die('Database query failed.'.$query1); //if there's still problems, kill it
	    }
	    

	  }

	  require_once "includes/header.php";
      $details = mysqli_fetch_assoc($result1);

    $table2 = "ingredients";
    $query2 = "SELECT * FROM {$table2} WHERE keyo = '{$id}'";
    $result2 = mysqli_query($connection, $query2);
    if (!result2) {
        die("Database query failed.");
    }

    $table3 = "directions";
    $query3 = "SELECT * FROM {$table3} WHERE keyo = '{$id}'";
    $result3 = mysqli_query($connection, $query3);
    if (!result3) {
        die("Database query failed.");
    }
?>

<br><br><br>
            <div id="sheet">
                <br>
                    <h5><?php echo $details['title'] ?></h5>
                    <h3><?php echo $details['subtitle'] ?></h3> <br>
                    <p><?php echo $details['description'] ?> </p>
                    <br>
                <div id="onsheet">
                   
                <img src="assets/images/<?php echo $details['id'] ?>/<?php echo $details['ingredients_img'] ?>.png" alt="ingredients" width="300px">
                
                <ul>
                    <?php while ($row = mysqli_fetch_assoc($result2)) { ?>
                    <li><?php echo $row['ingredients'] ?></li>
                    <?php } ?> 
    </ul>


                <?php while ($row = mysqli_fetch_assoc($result3)) { ?>
                    
                    <img src="assets/images/<?php echo $id ?>/<?php echo $row['image_2_retina'] ?>.jpg" alt="<?php echo $row['image_2_retina'] ?>" width="300px">
                    <p><?php echo $row['direction'] ?></p>

                <?php } ?> 
                <br>
                
            </div>
                
                
            </div>
            

       <?php
	require_once "includes/footer.php";
        mysqli_close($connection);
?>