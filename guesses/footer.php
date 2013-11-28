<div id="footer">
		<div>
			<p>
				&#169; 2013 Vincween. All Rights Reserved.
			</p>
			<div class="contact">
				<a href="#">
					<img src="images/mail.png" alt="sorry">
				</a>
			</div>
		</div>
</div>
	<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog" style="margin:90px auto">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">注册</h4>
				</div>
				<div class="modal-body">
					<form class="form-horizontal" role="form" action="register.php" method="post" >
						<div class="form-group">
							<label for="Nick" class="col-sm-2 control-label">昵称</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" id="Nick" placeholder="NickName" name="name" onblur="check(this.value,'1')">
							</div>
							<p id="checkname"></p>
						</div>
						
						<div class="form-group">
							<label for="Passwd" class="col-sm-2 control-label">密码</label>
							<div class="col-sm-6">
								<input type="password" class="form-control" id="Passwd" placeholder="Password" name="passwd" onfocus="inputpw()">
							</div>
						</div>
						<div class="form-group">
							<label for="PasswdAgain" class="col-sm-2 control-label">重复密码</label>
							<div class="col-sm-6">
								<input type="password" class="form-control" id="PasswdAgain" placeholder="Password" name="passwdagain" onblur="checkpw(this.value)" onfocus="inputpw()">
							</div>
							<p id="checkpw"></p>
						</div>
						<input type="submit" id="forregister" class="btn btn-primary" style="display:none;">
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal"  data-toggle="modal" data-target="#login">登录</button>
					<label for="forregister" class="btn btn-primary">注册</label>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog" style="margin:90px auto">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">登录</h4>
				</div>
				<div class="modal-body">
					<form class="form-horizontal" role="form" action="login.php" method="post">
						<div class="form-group">
							<label for="Nick" class="col-sm-2 control-label">昵称</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" id="logname" placeholder="NickName" name="name" onblur="check(this.value,'0')">
							</div>
							<p id="showname"></p>
						</div>
						<div class="form-group">
							<label for="Passwd" class="col-sm-2 control-label">密码</label>
							<div class="col-sm-6">
								<input type="password" class="form-control" id="logpasswd" placeholder="Password" name="passwd" onfocus="inputpw()" onblur="check(this.value,'3')">
							</div>
							<p id="showpw"></p>
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
	<div class="modal fade" id="taici" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog" style="margin:90px auto">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">台词</h4>
				</div>
				<div class="modal-body">
					<form class="form-horizontal" role="form" action="taici.php" method="post" >
						<p style="margin:20px auto auto 30px;">分享你喜欢的台词吧.</p>
						<textarea id="wordid" class="form-control" rows="3" name="word" style="margin: 30px;width:90%;" placeholder="Don't be the same,be better." ></textarea>
						<div class="form-group">
							<div class="col-sm-6" style="margin-left:260px">
								<input id="wordans" type="text" class="form-control" id="ans" placeholder="Answer" name="answer">
							</div>
						</div>
						<input type="submit" id="fortaici" style="display:none;"></form>
				</div>
				<div class="modal-footer">
					<label for="fortaici"><button id="senddia" class="btn btn-primary">提交</button></label>
				</div>
			</div>
		</div>
	</div>
	<!-- <iframe id = "hideFrame" style = "display:none;width:0;height:0;"></iframe> -->
</body>
</html>