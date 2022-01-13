<?php
$title = "Index";
include 'includes/header.php';
?>

<!-- Basic HTML -->
<h1>Hello World - PHP Primer</h1>
<br>
<?php
//Printing to HTML using echo
echo 'Hello PHP!';
echo '<br>';
echo 'Second Line';

// declare variable
$name = 'Miles Hollifield';
$age = 28;
echo '<br>';
// echo name
echo $name;
echo '<h1>My name is ' . $name . '</h1>';
echo '<h1>My age is ' . $age . '</h1>';

echo "<h1>My name is $name </h1>"

?>
<button type="button" class="btn btn-dark">CLICK ME!</button>
<button type="button" class="btn btn-primary">CLICK ME!</button>
<button type="button" class="btn btn-success">CLICK ME!</button>
<button type="button" class="btn btn-danger">Danger</button>
<a href="https://www.heroku.com" target="_blank" class="btn btn-info">Heroku.com</a>
<?php require 'includes/footer.php'; ?>