<!-- foreach -->
<?php
$array = array("田中","山田","田口","小林");
foreach ($array as $key => $value) {
?>
    <p><?php echo $value ?>さん</p>
<?php
}
?>

<!-- for -->
<?php
    for ($i=0; $i <10 ; $i++) { 
?>
    <p><?php echo $i ?></p>
<?php
    }
?>