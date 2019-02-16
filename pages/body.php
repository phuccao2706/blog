
<?php 
	require_once("commons/process/conn.php");
	$sql="select * from post";
	$temp = $pdo->prepare($sql);
	$temp->execute();
	$data = $temp->fetchAll(PDO::FETCH_OBJ);
 ?>
<div class="container">
	<?php foreach(array_reverse($data) as $d){?>
	<div class="post rounded mx-auto bg-light">
		<img src="assets/postImage/<?php echo $d->image ?>">
		<article class="py-2 caption">
			<?php echo $d->caption ?>
		</article> 
		<p class="date m-0 text-right py-2"><?php echo $d->date ?></p>
	</div>
	<?php } ?>
</div>

