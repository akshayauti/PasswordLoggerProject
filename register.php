<!DOCTYPE html>
<html lang="en">
<head>
	<?php include'head.php';?>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
                <form class="login100-form validate-form flex-sb flex-w" action="back.php" method="post"enctype="multipart/form-data">
                <span class="login100-form-title p-b-53">
						Register With
					</span>
                <div class="p-t-31 p-b-9">
						<span class="txt1">
							First Name
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "First name is required" >
						<input class="input100" type="text" name="first_name" required >
						<span class="focus-input100"></span>
					</div>
					
					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Last Name
						</span>

						
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Last Name is required">
						<input class="input100" type="text" name="last_name" required>
						<span class="focus-input100"></span>
					</div>
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Username
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="username" required>
						<span class="focus-input100"></span>
					</div>
					
					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Password
						</span>

						
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" required >
						<span class="focus-input100"></span>
                    </div>
                    
                    <div class="p-t-13 p-b-9">
						<span class="txt1">
							Profile Picture
						</span>

						
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Profile Photo is required">
						<input class="input100" type="file" name="photo" required>
						<span class="focus-input100"></span>
					</div>


					<div class="container-login100-form-btn m-t-17">
						<input type="Submit" Name="register" class="login100-form-btn">
							
					</div>

					<div class="w-full text-center p-t-55">
						<span class="txt2">
							Already registered !
						</span>

						<a href="index.php" class="txt2 bo1">
							Sign In
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
<?php include "script.php"; ?>

</body>
</html>