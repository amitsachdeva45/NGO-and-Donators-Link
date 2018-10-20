<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
$pages = $db_handle->runQuery("SELECT * FROM pages  ");

if(!empty($pages)) {//if
?>
<?php 
foreach($pages as $page) { ?>
<h3><?php echo $page['title'];?></h3>
<div><?php echo $page['content'];?></div>
<div><a href="<?php echo $page['url'];?>">PLZ</a></div>
<?php }?>
<?php } ?>

