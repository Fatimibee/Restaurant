<?php
include('include/header.php') ;
?>


<?php
session_start(); // Start the session

// Display success or error messages
if (isset($_SESSION['error'])) {
    echo '<div style="color: red;">' . $_SESSION['error'] . '</div>';
    unset($_SESSION['error']); // Clear the error message after displaying it
}

if (isset($_SESSION['success'])) {
    echo '<div style="color: green;">' . $_SESSION['success'] . '</div>';
    unset($_SESSION['success']); // Clear the success message after displaying it
}
?>


<div>
	<div class="container-fluid">
	<img src="public/assest/images/book.webp" class="book-img">
	<div class="adt text-darkblack">
		<h2 class=" text-warning">ADDRESS AND TIME</h2>
		<p class="add m-1">Ramnagriya road,near the Swami keshvanand institute of technology and Gramothan,jaipur,Rajasthan</p>
		<h4>Time:</h4>
		<h5>Monday to Saturday - 9:00AM to 12:00 PM and 2:00 PM to 10:00 PM </h5>
		     <h5>SUNDAY - 8:00 AM to 1:00 PM and 3:00 PM to 12:00 AM</h5>
    </div>

</div>
 
    <div class="container-fluid mt-3 mb-3">
	<div class="row bg-warning">
		<h2 style="text-align:center;" class="mt-3">Book a Table</h2>
		<div class="col-md-6 offset-3">
			<form method="post" action="controllor/controllor.php" enctype="multipart/form-data">
				<div class="form-group mb-3 mt-3">
					<label>Full Name</label>
					<input type="text" name="name" class="form-control" placeholder="Enter your name">
				</div>
				<div class="form-group mb-3 mt-3">
					<label>Contact Number</label>
					<input type="tel" name="contact" class="form-control" placeholder="Enter your contact number">
				</div>
				<div class="form-group mb-3 mt-3">
					<label>Email</label>
					<input type="email" name="email" class="form-control" placeholder="Enter  your email id">
				</div>
				<div class="form-group mb-3 mt-3">
					<label>Members</label>
					<input type="text" name="member" class="form-control" placeholder="Enter your member number">
				</div>
				<div class="form-group mb-3 mt-3">
					<label>Number of tables</label>
					<input type="text" name="table" class="form-control" placeholder="Enter your table number">
				</div>
				<div class="form-group mb-3 mt-3">
					<label>Date of Booking</label>
					<input type="date" name="dat" class="form-control" placeholder="Enter your BOOKING date">
				</div>
				<div class="form-group mb-3 mt-3">
					<button type="submit"  name="book" class="btn btn-danger btn-lg w-100">Book</button>
				</div>
			</form>
		</div>
	</div>
</div>
          

 		

 		


</div>
<?php
include('include/footer.php');
?>