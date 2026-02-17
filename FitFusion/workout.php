<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gym/Workout</title>
    <link rel="stylesheet" href="css/workout.css">
</head>
<body>

<?php include 'includes/header.php'; ?>

<section class="title-section">
    <h1>Gym/Workout</h1>
</section>

<section class="grid-container">

<?php
$workouts = [
    ["Bench Press", "images/BenchPress.png"],
    ["Chest Fly", "images/ChessFly.png"],  // using your file name
    ["Lat Pulldowns", "images/LatPulldowns.png"],
    ["Back Rows", "images/BackRows.png"],
    ["Lunges", "images/Lunges.png"],
    ["Squats", "images/Squats.png"],
];

foreach ($workouts as $workout) {
    echo "
    <div class='card'>
        <img src='{$workout[1]}' alt='{$workout[0]}'>
        <div class='overlay'>{$workout[0]}</div>
    </div>
    ";
}
?>

</section>

<?php include 'includes/footer.php'; ?>


</body>
</html>