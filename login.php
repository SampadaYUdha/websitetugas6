<?php 
session_start();

if (!isset($_SESSION['user_id']) && !isset($_SESSION['user_email'])) { 
	?>

	<!DOCTYPE html>
	<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>Login - Warisan Budaya Subak Jatilwuih</title>


		<!-- Google Font -->
		<link
		href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
		rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="./assets/vendor/styles/core.css" />
		<link
		rel="stylesheet"
		type="text/css"
		href="./assets/vendor/styles/icon-font.min.css"
		/>
		<link rel="stylesheet" type="text/css" href="./assets/vendor/styles/style.css" />

		
	</head>
	<body class="login-page">
		<div class="login-header box-shadow">
			<div
			class="container-fluid d-flex justify-content-between align-items-center"
			>
			<div class="brand-logo">
				<a href="login.php">
					<h3>Sistem Informasi Subak Jatiluwih</h3>
				</a>
			</div>
		</div>
	</div>
	<div
	class="login-wrap d-flex align-items-center flex-wrap justify-content-center"
	>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6 col-lg-7">
				<img src="./assets/vendor/images/login-page-img.png" alt="" />
			</div>
			<div class="col-md-6 col-lg-5">
				<div class="login-box bg-white box-shadow border-radius-10">
					<div class="login-title">
						<h2 class="text-center text-primary mb-4 mt-1">Login To Sistem Informasi Subak Jatiluwih</h2>

						<?php if (isset($_GET['error'])) { ?>
							<div class="alert alert-danger mb-0" role="alert">
								<?=htmlspecialchars($_GET['error'])?>
							</div>
						</div>
					<?php } ?>
					<form action="auth.php" method="post"> 

						<div class="input-group custom mt-2">
							<input
							type="email" name="email" 
							class="form-control form-control-lg"
							placeholder="Username"
							data-validate = "Username is required"
							value="<?php if(isset($_GET['email']))echo(htmlspecialchars($_GET['email'])) ?>"
							/>
							<div class="input-group-append custom">
								<span class="input-group-text"
								><i class="icon-copy dw dw-user1"></i
								></span>
							</div>
						</div>
						<div class="input-group custom">
							<input
							type="password"
							name="password"
							class="form-control form-control-lg"
							data-validate = "Password is required"
							placeholder="**********"
							/>
							<div class="input-group-append custom">
								<span class="input-group-text"
								><i class="dw dw-padlock1"></i
								></span>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12">
								<div class="input-group mb-0">
											<!--
											use code for form submit
											<input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
										-->
										<button type="submit" class="btn btn-primary btn-lg btn-block">
											LOGIN
										</button>
									</div>
									
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- welcome modal end -->
	<!-- js -->
	<script src="./assets/vendor/scripts/core.js"></script>
	<script src="./assets/vendor/scripts/script.min.js"></script>
	<script src="./assets/vendor/scripts/process.js"></script>
	<script src="./assets/vendor/scripts/layout-settings.js"></script>
</body>
</html>

<?php 
}else {
	header("Location: index.php");
}
?>
