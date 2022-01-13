<?php
$title = "If Statement";
include 'includes/header.php';
?>
<?php

// if statement that will carry out an action based on the value of the variable

echo "<h2>If Statement</h2>";

$grade = 80;

if ($grade >= 50) {
    echo "<h3 style='color: green'>You have passed!</h3>";
} else {
    echo "<h3 style='color: red'>You have failed.</h3>";
}
$grade = 'd';
if ($grade == 'A') {
    echo "<h2>You are a superstar!</h2>";
} elseif ($grade == 'B') {
    echo "<h2>You did well!</h2>";
} else {
    echo "<h2>You have failed...</h2>";
}

?>
<?php require 'includes/footer.php'; ?>