
	<?php include ('header.php') ?>

	<?php 
		var_dump($_POST);

		$passwordClass = '';
		$userPassword = $_POST['password'];
		$emailClass = '';

		if($_POST['email'] == '') {
			$emailClass = "is-invalid";
		}

		if($userPassword !== $_POST['passwordConfirm']) {
			$passwordClass = 'is-invalid';
			echo "Passwords must be the same!";
		} else {
			if(strlen($userPassword)>6) {
				if (preg_match('/[^0-9a-zA-Z]/', $userPassword)) {
					$passwordClass = 'is-invalid';
					echo "not good";
				}
				if(!(preg_match('/\d/', $userPassword)) || !(preg_match('/[A-Z]/', $userPassword))){
					$passwordClass = 'is-invalid';
					echo "have not numbers and big leters";
				}
			} else {
				$passwordClass = 'is-invalid';
				echo "Password to small";
			}
		}

		
		
		
	?>

	<div class="container">
		<div class="row justify-content-center">
			<form class="registration-form col-5" method="post">
				<div class="form-group">
					<label for="new-email">Email address: <span class="text-danger">*</span></label>
					<input type="text" class="form-control <?php echo $emailClass; ?>" id="new-email" placeholder="Enter email" name="email" value="<?php echo $_POST['email']; ?>">
					<small id="email-help" class="form-text text-muted">We'll never share your email with anyone else.</small>
				</div>

				<div class="form-group">
					<label for="create-password">Password: <span class="text-danger">*</span></label>
					<input type="password" class="form-control <?php echo $passwordClass; ?>" id="create-password" placeholder="Password" name="password">
				</div>

				<div class="form-group">
					<label for="repeat-password">Repeat password: <span class="text-danger">*</span></label>
					<input type="password" class="form-control <?php echo $passwordClass; ?>" id="repeat-password" placeholder="Repeat password" name="passwordConfirm">
				</div>

				<div class="form-check">
					<input type="checkbox" class="form-check-input" id="check1">
					<label class="form-check-label" for="check1">I agree with site rules <span class="text-danger">*</span></label>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>

	<?php include ('footer.php') ?>





