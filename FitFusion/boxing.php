<?php
$page_title = 'FitFusion - Boxing';
include 'includes/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Boxing</title>
    <link rel="stylesheet" href="css/boxing.css">
</head>
<body>


<section class="title-section">
    <h1>Boxing</h1>
</section>

<section class="grid-container">

<?php
$workouts = [
    ["Jump Rope", "images/JumpRope.png"],
    ["Jogging", "images/Jogging.png"],
    ["Shadow Boxing", "images/ShadowBoxing.png"],
    ["Bag Workout", "images/BagWorkout.png"],
    ["Abs Workout", "images/AbsWorkout.png"],
    ["Calisthenics", "images/Calisthenics.png"],
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