<!DOCTYPE html>
<html lang="en">

<head>
	<title>The Cutting Board</title>
	<!-- META -->
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, width=device-width" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- CSS -->
	<link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="main.css">
    <style>
        @font-face{
            font-family: 'Pen';
            src: url('ChewedPenBB_ital.otf');}
        @font-face{
            font-family: 'Roboto';
            src: url('Roboto-Medium.ttf');}
    </style>
</head>

<body>
	<!-- PAGE CONTENT -->
	<div id="wrapper">
            <div id="title">
                <br>
            <a href="index.php"><h1>The Cutting Board</h1></a>
        </div>
        <div id="nav">
                <div id="tags"><a href="tagged.php?tag=oven"><h2>Oven Bake</h2></a></div>
                <div id="tags"><a href="tagged.php?tag=stir fry"><h2>Stir Fry</h2></a></div>
                <div id="tags"><a href="tagged.php?tag=roast"><h2>Roast</h2></a></div>
                <div id="tags"><a href="tagged.php?tag=stovetop"><h2>Stovetop</h2></a></div>
                <form action="result.php">
                <input id = "searchbutton" type="submit" value="Search">
                <input id= "search" type="text" size="20" name="search">                
                </form>
        </div> 