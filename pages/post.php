<form method="POST" enctype="multipart/form-data" action="commons/process/postProcess.php" class="container">
	<div class="mt-5">
		<textarea class="form-control" id="post_content" name="post_content" class="ckeditor" placeholder="Content"></textarea>
		<script>CKEDITOR.replace( 'post_content' );</script>
	</div>

	<div class="mt-1">
		<div class="float-left">
			<span class="btn btn-file postButton">Browse
				<input id="fileUpload" type="file" name="image" accept="image/*" onchange="getFileName()">
			</span>
			<div class="float-right" id="fileName"></div>
		</div>
		<button class='postButton btn float-right w-25' type="submit" name="post">Post</button>
	</div>
</form>

<script type="text/javascript">
	function getFileName(){
        document.getElementById('fileName').innerHTML = document.getElementById('fileUpload').files.item(0).name;
    }
</script>