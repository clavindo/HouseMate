<!DOCTYPE html>

<html>

<head>
	<title>House Mate</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<script>
		window.onload = function(){
			
		}
		
		function showLoginForm() {
			window.getElementById("loginForm").style.display = "inline";
		}
	</script>
	
	<style>
		body {
			font-family: Nanum-Gothic, sans-serif;
			margin: 0;
		}
		
		header {
			border-bottom: 3px solid silver;
		}
		
		ul {
			float: right;
		}
		li {
			list-style-type: none; /* Removes bullet points */
			display: inline;
			margin: 10px;
			float: left;
		}
		li:hover {
			border-bottom: 2px solid black;
		}
		li a {
			text-decoration: none;
			color: black;
		}
		div#content-menu {
			clear: both;
			margin-bottom: 5px;
			margin-left: 5px;
		}
		div#content-menu a {
			padding: 0 10px;
			text-decoration: none;
			color: #484848;
		}
		div#content-menu a:hover {
			color: #008489;
			border-bottom: 3px solid #008489;
		}
		a#btn-modal-register {
			color: #ff5a5f;
			border: 1px solid #ff5a5f;
			border-radius:3px;
			padding: 10px 21px 5px 21px;
		}
	</style>
</head>

<body>

<header>
	
	<div>
		<a href="/Project/HouseMate/index.php" >
			<img src="pic/logo-ex.jpg" width="15%" height="15%" style="left: -50px"/>
		</a>
	
		<ul>
			<li><a href="#">호스팅 하기</a></li>
			<li><a href="#">도움말</a></li>
			<li><a href="#">회원가입</a></li>
			<li><a href="#" data-toggle="modal" data-target="#loginModal">로그인</a></li>
		<ul>
	</div>
	
	<div id="content-menu">
		<a href="#">추천</a>
		<a href="#">숙소</a>
		<a href="#">트립</a>
		<a href="#">장소</a>
	</div>
	
</header>




</body>



</html>

<!-- Modal -->
  <div class="modal fade" id="loginModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
	  
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="text-align: center;">로그인 옵션</h4>
        </div>
        
		<div class="modal-body">
		  <div>
			<form action="" method="POST">
				<button type="submit" class="btn btn-primary" style="width: 100%; margin-bottom: 5px">페이스북으로 로그인하기</button>
			</form>
		  </div>
          <div>
			<form action="" method="POST">
				<button type="button" class="btn btn-danger" style="width: 100%">구글로 로그인하기</button>
			</form>
		  </div>
        </div>
		
		<div class="modal-footer">
			<div>
				<span style="float: left;">House Mate 계정이 없으세요?</span>
				<span>
					<a id="btn-modal-register" href="" >회원 가입</a>
				</span>
			</div>
		</div>
		
        <!--<div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>-->
      </div>
      
    </div>
  </div>