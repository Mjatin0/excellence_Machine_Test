<?php include 'header.php';?>
<header>
	<div class="jumbotron">
		<h1 class="text-center text-capitalize">Self Assessment Form</h1>
		<button class="btn btn-danger"><a href="list.php" class="text-white">Users List</a></button>
	</div>
</header>
<main>
	<div class="container mt-4">
		<div class="row">
			<div class="col-md-11">
		<form action="process.php" method="post">
			<div class="form-group">
			<div class="row">
				<div class="col-md-6">
					<label>First Name</label>
					<input type="text" class="form-control" name="first_name" placeholder="Enter Your First Name" required="">
				</div>
				<div class="col-md-6">
					<label>Last Name</label>
					<input type="text" class="form-control" name="last_name" placeholder="Enter Your Last Name" required="">
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-6">
					<label>Email</label>
					<input type="email" class="form-control" name="email" placeholder="Enter Your Email" required="">
				</div>
				<div class="col-md-6">
					<label>Date of Birth</label>
					<input type="date" class="form-control" name="dob" id="dob" required="">
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-6">
					<label>Contact Number</label>
					<input type="number" class="form-control" name="contact_number" placeholder="Enter Your Contact Number" required="">
				</div>
				<div class="col-md-6">
					<label>Designation</label>
					<input type="text" class="form-control" name="designation" placeholder="Enter Your Designation" required="">
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-6">
					<label>Gender : </label><br>
					<label>
					<input type="radio" name="gender" value="male">
					<span>Male</span>
					</label>
					<label>
					<input type="radio" name="gender" value="female">
					<span>Female</span>
					</label>
					<label>
					<input type="radio" name="gender" value="other">
					<span>Other</span>
					</label>
				</div>
				<div class="col-md-6">
					<label>Hobbies : </label>
					<br>
					<label>
				<input type="checkbox" name="hobbies" value="dancing">
				<span>Dancing</span>
                 </label>
                 	<label>
				<input type="checkbox" name="hobbies" value="reading">
				<span>Reading</span>
                 </label>
                 	<label>
				<input type="checkbox" name="hobbies" value="cooking">
				<span>Cooking</span>
                 </label>
                 	<label>
				<input type="checkbox" name="hobbies" value="playing">
				<span>Playing</span>
                 </label>
				</div>
			</div>
		</div>
		<div class="text-center m">
			<button type="submit" value="submit" class="btn btn-dark">Submit</button>
		</div>
		</form>
	</div>
</div>
</div>
</main>
<?php include 'footer.php';?>