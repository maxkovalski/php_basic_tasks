<?php
require "engine.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Calculator</h1>
</header>
<main>
    <form method="get">
        <input type="text" name="a" placeholder="Type first number...">
        <input type="text" name="b" placeholder="Type second number...">
        <br/>
        <input type="radio" name="operator" value="+" checked>"+"
        <input type="radio" name="operator" value="-">"-"<br/>
        <input type="radio" name="operator" value="*">"*"
        <input type="radio" name="operator" value="/">"/"
        <input type="radio" name="operator" value="%">"%"<br/>
        <input type="submit" value="Calculate">
        <textarea rows="1" disabled><?php echo $res; ?></textarea></main>
    </form>

<footer>
    09.12.2016
</footer>
</body>
</html>
