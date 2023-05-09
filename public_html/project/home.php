<?php
require(__DIR__."/../../partials/nav.php");
?>
<h1>High Scores</h1>
<?php
if(is_logged_in()){
 flash("Welcome, " . get_username()); 
}
else{
  flash("You're not logged in");
}

//this is day which is the default
require(__DIR__ . "/../../partials/scores_table.php");
?>
<?php
$duration = "week";
require(__DIR__ . "/../../partials/scores_table.php");
?>
<?php
$duration = "month";
require(__DIR__ . "/../../partials/scores_table.php");
?>
<?php
$duration = "lifetime";
require(__DIR__ . "/../../partials/scores_table.php");

require(__DIR__ . "/../../partials/flash.php");
?>

<h1>Your Scores</h1>
        Best Score: <?php echo get_best_score(get_username()); ?>
        <?php
        $duration = "latest";
        require(__DIR__ . "/../../partials/scores_table.php");
        ?>