<?php include("includes/header.php") ?>
<?php include("includes/nav.php") ?>

<?php if(loggedin()){

}
else {
	redirect('login.php');
} ?>

<?php
$email=clean($_SESSION['email']);
$sql="SELECT * FROM users WHERE email='".$email."'";
$result=query($sql);
$row=fetch_array($result);
$message=<<<DELIMETER
<div class="limiter">

	<div class="container-login100">
		<div class="wrap-login100">
			<div class="image-cropper js-tilt" data-tilt>
				<img src='{$row['img']}' alt="IMG" class="profile-pic" >
			</div>



			<form class="login100-form validate-form" method="post" role="form">
			<span class="login100-form-title">
			{$row['username']}
			</span>
			<span class="login100-form-title">
		email:	{$row['email']}
			</span>
			<span class="login100-form-title">
		contact:	{$row['contact']}
			</span>
			<span class="login100-form-title">
		work:	{$row['work']}
			</span>

			</form>
		</div>
		</div>
		</div>
DELIMETER;
echo $message;


 ?>














<?php include("includes/footer.php") ?>
