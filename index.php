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
			text-decoration: none !important; /* Removes underline when hovering over */
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
		a#btn-modal-register, a#btn-modal-login {
			color: #ff5a5f;
			border: 1px solid #ff5a5f;
			border-radius:3px;
			padding: 10px 21px 5px 21px;
		}
		
		.signin-input {
			height: 64px;
			width: 80%;
			font-size: 16px;
			display:block;
			margin: 0px auto;
			padding: 10px;
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
				<li><a href="#" data-toggle="modal" data-target="#signupModal">회원가입</a></li>
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
<div class="modal fade" id="signupModal" role="dialog">
	
	<div class="modal-dialog">
    
		<!-- Modal content-->
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">회원 가입</h4>
			</div>
			
			<div class="modal-body">
				<div>
					<form action="" method="POST">
						<button type="submit" class="btn btn-primary" style="display: block; margin: auto; width: 85%; margin-bottom: 5px;">페이스북으로 회원 가입하기</button>
					</form>
				</div>
			
				<div>
					<form action="" method="POST">
						<button type="button" class="btn btn-danger" style="display: block; margin: auto; width: 85%">구글로 회원 가입하기</button>
					</form>
				</div>
			
			</div>
			
			<div class="modal-footer">
				<div>
					<span style="float: left;">이미 House Mate 계정이 있나요?</span>
					<span>
						<a style="text-decoration: none !important;" id="btn-modal-login" href="#" data-toggle="modal" data-target="#loginModal">로그인</a>
					</span>
				</div>
			</div>
			
        </div>

	</div>
</div>


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
				<button type="submit" class="btn btn-primary" style="display: block; margin: auto; width: 85%; margin-bottom: 5px;">페이스북으로 로그인하기</button>
			</form>
		  </div>
          <div>
			<form action="" method="POST">
				<button type="button" class="btn btn-danger" style="display: block; margin: auto; width: 85%">구글로 로그인하기</button>
			</form>
		  </div>
        </div>
		
		<form action="" method="POST">
		
			<div>
				<input style="margin-bottom: 5px;" class="signin-input" type="email" id="signin_email" name="email" placeholder="이메일 주소"/>
			</div>
		
			<div>
				<input style="margin-bottom: 8px;" class="signin-input" type="password" id="signin_passowrd" name="password" placeholder="비밀번호" />
			</div>
			
			<div>
				<a style="margin-left: 50px; margin-bottom: -25px; color: #484848;" href="/forgot_password" data-form="email">비밀번호가 생각나지 않으세요?</a>
			</div>
			
			<div>
				<button style="margin-bottom: 10px; width: 85%; margin: auto;" type="submit" class="btn btn-block signup-login-form__btn-xl btn-primary btn-large" id="user-login-btn">로그인</button>
			</div>
		</form>
		
		<br />
		
		<div class="modal-footer">
			<div>
				<span style="float: left;">House Mate 계정이 없으세요?</span>
				<span>
					<a style="text-decoration: none !important;" id="btn-modal-register" href="">회원 가입</a>
				</span>
			</div>
		</div>
		
        <!--<div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>-->
      </div>
      
    </div>
  </div>