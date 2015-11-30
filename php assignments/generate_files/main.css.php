
<?php
 header('Content-type: text/css');
?>

<?php 

$colors = array("red", "blue", "green", "purple", "pink", "yellow", "orange", "turquoise");

$randomcolor = $colors[rand(0,7)];
$randomcolorp = $colors[rand(0,7)];

?> 


h1 { color: <?php echo $randomcolor; ?>}

p  { color: <?php echo $randomcolorp; ?> }

