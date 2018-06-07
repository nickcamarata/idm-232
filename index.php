<?php
	require_once "includes/db.php";

    $table = "recipes";
    $query = "SELECT * FROM {$table} ORDER BY `price`;";
    $result = mysqli_query($connection, $query);
    
    if (!result) {
        die("Database query failed.");
    }

    require_once "includes/header.php"

?>
<!-- Continue page body -->
        <div id="grid">
        <div id="recipe">
                <a href="sample.html">
                    <div id="dark">
                    <img id="placeholder" src="assets/sample.jpg" alt="PLACEHOLDER">
                    <div id="overlay"></div>
                    </div>
                    <div id="textbox">
                    <h3>Honey-Butter Barramundi</h3>
                    <h4>with Za'atar Roasted Vegetables</h4>
                    </div>
                </a>
            </div>
        <div id="recipe">
            <a href="sample.html">
                <div id="dark">
                <img id="placeholder" src="assets/holder.jpg" alt="PLACEHOLDER">
                <div id="overlay"></div>
                </div>
                <div id="textbox">
                <h3>The Recipe Title Goes Here</h3>
                <h4>The Recipe Sub Title Goes Here</h4>
                </div>
            </a>
        </div>
        <div id="recipe">
                <a href="sample.html">
                    <div id="dark">
                    <img id="placeholder" src="assets/holder.jpg" alt="PLACEHOLDER">
                    <div id="overlay"></div>
                    </div>
                    <div id="textbox">
                    <h3>The Recipe Title Goes Here</h3>
                    <h4>The Recipe Sub Title Goes Here</h4>
                    </div>
                </a>
            </div>
            <div id="recipe">
                    <a href="sample.html">
                        <div id="dark">
                        <img id="placeholder" src="assets/holder.jpg" alt="PLACEHOLDER">
                        <div id="overlay"></div>
                        </div>
                        <div id="textbox">
                        <h3>The Recipe Title Goes Here</h3>
                        <h4>The Recipe Sub Title Goes Here</h4>
                        </div>
                    </a>
                </div>
                <div id="recipe">
                        <a href="sample.html">
                            <div id="dark">
                            <img id="placeholder" src="assets/holder.jpg" alt="PLACEHOLDER">
                            <div id="overlay"></div>
                            </div>
                            <div id="textbox">
                            <h3>The Recipe Title Goes Here</h3>
                            <h4>The Recipe Sub Title Goes Here</h4>
                            </div>
                        </a>
                    </div>
                    <div id="recipe">
                            <a href="sample.html">
                                <div id="dark">
                                <img id="placeholder" src="assets/holder.jpg" alt="PLACEHOLDER">
                                <div id="overlay"></div>
                                </div>
                                <div id="textbox">
                                <h3>The Recipe Title Goes Here</h3>
                                <h4>The Recipe Sub Title Goes Here</h4>
                                </div>
                            </a>
                        </div>

                        <div id="recipe">
                                <a href="sample.html">
                                    <div id="dark">
                                    <img id="placeholder" src="assets/holder.jpg" alt="PLACEHOLDER">
                                    <div id="overlay"></div>
                                    </div>
                                    <div id="textbox">
                                    <h3>The Recipe Title Goes Here</h3>
                                    <h4>The Recipe Sub Title Goes Here</h4>
                                    </div>
                                </a>
                            </div>
                            <div id="recipe">
                                    <a href="sample.html">
                                        <div id="dark">
                                        <img id="placeholder" src="assets/holder.jpg" alt="PLACEHOLDER">
                                        <div id="overlay"></div>
                                        </div>
                                        <div id="textbox">
                                        <h3>The Recipe Title Goes Here</h3>
                                        <h4>The Recipe Sub Title Goes Here</h4>
                                        </div>
                                    </a>
                                </div>
        </div>
	</div>
	<!-- JAVASCRIPT-->
	<script src="main.js"></script>
</body>

</html>