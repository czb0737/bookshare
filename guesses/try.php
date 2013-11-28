<!DOCTYPE html>
<html>
<head>
	<title>Vincween</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/function.js"></script>
</head>
<body>
	<a href="" data-toggle='modal' data-target='#login'>kkkk</a>
   <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog" style="margin:90px auto">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">登录</h4>
				</div>
				<div class="modal-body">
					<form class="form-horizontal" role="form" action="login.php" method="post">
						<div class="form-group input-group" style="margin:30px;">
							<span class="input-group-addon glyphicon glyphicon-user"></span>
							<input type="text" class="form-control" placeholder="Username" name="name" >
						</div>
						<div class="form-group input-group" style="margin:30px;">
							<span class="input-group-addon glyphicon-lock glyphicon "></span>
							<input type="password" class="form-control" placeholder="Passwd" name="passwd">						
						</div>
						<input type="submit" id="forlogin" class="btn btn-primary" value="登录" style="display:none;">
					</form>
					<p ></p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default"  data-dismiss="modal" data-toggle="modal" data-target="#register">注册</button>
					<label for="forlogin" class="btn btn-primary">登录</label>
				</div>
			</div>
		</div>
	</div>
</body>
</html>