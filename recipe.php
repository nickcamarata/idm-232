<?php
	require_once "includes/db.php";

    // Get the `id` from the URL parameter.
	  $id = isset($_GET['id']) ? $_GET['id'] : null;
	  // If no parameter is provided, redirect to the home page.
	  

	  


	  if (!$id) redirect_to('index.php');
	  else {
	    // Parameter is provided.
	    // Look for a matching ID in the database.
	    $query1 = 'SELECT * ';
	    $query1 .= 'FROM wines ';
	    $query1 .= "WHERE id = '{$id}' ";
	    $result1 = mysqli_query($connection, $query1);
	    if (!$result1) {
	      die('Database query failed.'.$query1);
	    }
	    

	  }

	  require_once "includes/header.php";
	  $details = mysqli_fetch_assoc($result1);

?>


            <div id="sheet">
                <br>
                    <h5>Honey-Butter Barramundi</h5>
                    <h3>with Za'atar Roasted Vegetables</h3>
                <div id="onsheet">
                    
                    <img src="assets/sample/0108_ING_FPF_AR_large_feature.png" width="300px">
                    <ul>
                    <li>4 Skin-On Barramundi Fillets </li>
                    <li>½ cup Plain Greek Yogurt </li>
                    <li>1⅛ lbs Yukon Gold Potatoes </li>
                    <li>1 Tbsp Za'atar Seasoning (Ground Sumac, Sesame Seeds, Salt, Ground Thyme, Whole Dried Oregano, &amp Crushed Aleppo Pepper) </li>
                    </ul>
                    <img src="assets/sample/0108_FPF_Barramundi_0216_WEB_high_feature.jpg" width="300px">
                    <div><h3>1) Prepare the ingredients:</h3>
                    <p>Remove the honey from the refrigerator to bring to room temperature. Place an oven rack in the center of the oven, then preheat to 450°F. Wash and dry the fresh produce. Halve the potatoes lengthwise; cut crosswise into 1/4inch pieces. Peel the carrots; halve lengthwise, then cut crosswise into 1/2inch pieces. Cut off and discard the ends of the radishes; quarter lengthwise, then halve crosswise. Quarter and deseed the lemon. Peel and finely chop the garlic; using the flat side of your knife, smash until it resembles a paste (or use a zester). Roughly chop the parsley leaves and stems.</p>
                    </div>
                    <img src="assets/sample/0108_FPF_Barramundi_0269_WEB_high_feature.jpg" width="300px">
                    <div><h3>2) Roast the vegetables:</h3>
                    <p>Place the sliced potatoes and carrot pieces on a sheet pan. Drizzle with 1 tablespoon of olive oil; season with salt, pepper, and the za’atar seasoning. Toss to coat. Arrange in an even layer on one side of the sheet pan. Roast 12 to 14 minutes, or until lightly browned. Leaving the oven on, remove from the oven. Place the radish pieces in a bowl. Drizzle with olive oil and season with salt and pepper; toss to coat. Carefully arrange on the other side of the sheet pan. Roast 10 to 12 minutes, or until tender when pierced with a fork. Remove from the oven. Evenly top with the juice of 2 lemon wedges.</p>
                </div><img src="assets/sample/0108_FPF_Barramundi_98216_WEB_high_feature.jpg" width="300px">
                    <div><h3>3) Make the yogurt sauce:</h3>
                    <p>While the vegetables roast, in a bowl, combine the yogurt, the juice of the remaining lemon wedges, 1 tablespoon of olive oil, and as much of the garlic paste as you’d like. Drizzle with olive oil and season with salt and pepper to taste.</p>
                </div><img src="assets/sample/0108_FPF_Barramundi_98243_WEB_high_feature.jpg" width="300px">
                    <p>Once the vegetables have roasted for about 10 minutes, pat the fish fillets dry with paper towels; season with salt and pepper on both sides. In a large pan (nonstick, if you have one), heat 1 tablespoon of olive oil on medium-high until hot. Add the seasoned fillets, skin side down. Cook 4 to 6 minutes on the first side, or until lightly browned. Flip and add the butter. Cook, frequently spooning the butter over the fillets, 2 to 3 minutes, or until the fish is cooked through. Leaving the melted butter and any browned bits (or fond) in the pan, transfer the cooked fillets to a plate.</p>
                    <img src="assets/sample/0108_FPF_Barramundi_98255_WEB_high_feature.jpg" width="300px"> 
                    <div><h3>5) Make the pan sauce:</h3>
                    <p>Add the honey (kneading the packet before opening) and 2 tablespoons of water to the pan of melted butter (be careful, as the liquid may splatter). Cook on medium-high, stirring frequently and scraping up any fond, 30 seconds to 1 minute, or until slightly thickened. Turn off the heat and season with salt and pepper to taste.</p>                
                </div><img src="assets/sample/0108_FPF_Barramundi_0290_WEB_high_feature.jpg" width="300px">
                    <p>Serve the cooked fish fillets and roasted vegetables with the yogurt sauce on the side. Top the fish with the pan sauce. Garnish with the chopped parsley. Enjoy!</p>
                    <!--<img src="assets/sample/0108_FPF_Barramundi_0304_WEB_SQ_hi_res.jpg" width="300px">-->
                </div>
            </div>


        </div>
</body>