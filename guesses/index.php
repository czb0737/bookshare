<?php   
	include('header.php');
?>
	<div id="body">
		<div class="content">
			<div class="bg-top">
				<?php 
				     // session_start();
                     if( ! isset($_SESSION['view']) ) 
                     {
                     	echo "<a href=''  data-toggle='modal' data-target='#taici' title='添加你的台词'>
					<img src='images/plus.png' alt='taici' onclick=adddia('0')></a>";
                     }
                     else
                     {
                     	echo "<a href='#''  data-toggle='modal' data-target='#taici' title='添加你的台词'>
					<img src='images/plus.png' alt='taici' onclick=adddia('1')></a>";
                     }
				?>
				<!-- <a href="#"  data-toggle="modal" data-target="#taici" title="添加你的台词" onclick="adddia()">
					<img src="images/plus.png" alt="taici"></a> -->
			</div>
			<div>
				<span>
					<hr/>	
					<p>你们从住的地方到鸟巢，用了多久？有人很快，花了半小时，有人花了两小时，有人从很远的地方坐火车过来，花了三天，但是五月天花了13年</p>
					<div class="form-inline" >
						<input type="text"  name="word" class="form-control" placeholder="answer">	
						<button class="btn btn-default" onclick="checkans(this,'4')">OK</button>
						<label for=""></label>
					</div>
					<p class="author">Norcy</p>
				</span>
				<span>
					<hr/>	
					<p>你们从住的地方到鸟巢，用了多久？有人很快，花了半小时，有人花了两小时，有人从很远的地方坐火车过来，花了三天，但是五月天花了13年</p>
					<div class="form-inline" >
						<input type="text"  name="word" class="form-control" placeholder="answer">	
						<button class="btn btn-default" onclick="checkans(this,'4')">OK</button>
						<label for=""></label>
					</div>
					<p class="author">Norcy</p>
				</span>
				<span>
					<hr/>	
					<p>你们从住的地方到鸟巢，用了多久？有人很快，花了半小时，有人花了两小时，有人从很远的地方坐火车过来，花了三天，但是五月天花了13年</p>
					<div class="form-inline" >
						<input type="text"  name="word" class="form-control" placeholder="answer">	
						<button class="btn btn-default" onclick="checkans(this,'4')">OK</button>
						<label for=""></label>
					</div>
					<p class="author">Norcy</p>
				</span>
				<span>
					<hr/>	
					<p>你们从住的地方到鸟巢，用了多久？有人很快，花了半小时，有人花了两小时，有人从很远的地方坐火车过来，花了三天，但是五月天花了13年</p>
					<div class="form-inline" >
						<input type="text"  name="word" class="form-control" placeholder="answer">	
						<button class="btn btn-default" onclick="checkans(this,'4')">OK</button>
						<label for=""></label>
					</div>
					<p class="author">Norcy</p>
				</span>
				<span>
					<hr/>	
					<p>你们从住的地方到鸟巢，用了多久？有人很快，花了半小时，有人花了两小时，有人从很远的地方坐火车过来，花了三天，但是五月天花了13年</p>
					<div class="form-inline" >
						<input type="text"  name="word" class="form-control" placeholder="answer">	
						<button class="btn btn-default" onclick="checkans(this,'4')">OK</button>
						<label for=""></label>
					</div>
					<p class="author">Norcy</p>
				</span>
				<span>
					<hr/>	
					<p>你们从住的地方到鸟巢，用了多久？有人很快，花了半小时，有人花了两小时，有人从很远的地方坐火车过来，花了三天，但是五月天花了13年</p>
					<div class="form-inline" >
						<input type="text"  name="word" class="form-control" placeholder="answer">	
						<button class="btn btn-default" onclick="checkans(this,'4')">OK</button>
						<label for=""></label>
					</div>
					<p class="author">Norcy</p>
				</span>
				<span>
					<hr/>	
					<p>你们从住的地方到鸟巢，用了多久？有人很快，花了半小时，有人花了两小时，有人从很远的地方坐火车过来，花了三天，但是五月天花了13年</p>
					<div class="form-inline" >
						<input type="text"  name="word" class="form-control" placeholder="answer">	
						<button class="btn btn-default" onclick="checkans(this,'4')">OK</button>
						<label for=""></label>
					</div>
					<p class="author">Norcy</p>
				</span>
				<span>
					<hr/>	
					<p>你们从住的地方到鸟巢，用了多久？有人很快，花了半小时，有人花了两小时，有人从很远的地方坐火车过来，花了三天，但是五月天花了13年</p>
					<div class="form-inline" >
						<input type="text"  name="word" class="form-control" placeholder="answer">	
						<button class="btn btn-default" onclick="checkans(this,'4')">OK</button>
						<label for=""></label>
					</div>
					<p class="author">Norcy</p>
				</span>

				<span class="load">
					<button class="btn btn-default">加载更多</button>
				</span>
			</div>
			<div class="bg-bottom"></div>
		</div>
	</div>
<?php 
	 include('footer.php');
?>
