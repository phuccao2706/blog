  <form id="login-form" class="container mt-5">
      	<div class="form-group row">
      		<input class="form-control" type="text" id="usernamelogin" placeholder="Username">
      	</div>

      	<div class="form-group row">
      		<input class="form-control" type="password" id="passwordlogin" placeholder="Password">
      	</div>

      	<div class="form-group row">
      		<button class="btn btn-outline-success" name="signin" type="submit">Login</button>
      	</div>
  </form>
 <script type="text/javascript">
	$(document).ready(
		function(){
			$("#login-form").submit(function(event){
				event.preventDefault();
				$.ajax({
		            type: "post",
		            url: "/personalBlog/commons/process/signinProcess.php",
		            data: {'signin':1, 'passwordlogin': $("#passwordlogin").val()},
		            contentType: "application/x-www-form-urlencoded",
		            success: function(data) {
		            	console.log(data);
		            	if(data == "false"){
		            		alert("fail to login");
		            	}
		            	else if (data == "true"){
		            		alert("success");
		            		window.location.href = "<?php echo $base_url;?>index.php";
		            	}	                	
		            },
		            error: function(data) {
		                console.log(data);
		            }
		        })
			})
			
		})
</script>