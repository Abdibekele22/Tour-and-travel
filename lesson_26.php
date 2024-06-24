
<?php 
session_start();
if(!$_SESSION['username']){
header("location: loginn.php");
}


	// connect to the database
	$conn = mysqli_connect('localhost', 'root', '', 'data_db');

	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}

	// write query for all pizzas
	$sql = 'SELECT name,email,phone,address,location,guest,arrivals,leaving from data_tb ORDER BY name';

	// get the result set (set of rows)
	$result = mysqli_query($conn, $sql);

	// fetch the resulting rows as an array
	$booking_lists = mysqli_fetch_all($result, MYSQLI_ASSOC);

	// free the $result from memory (good practise)
	mysqli_free_result($result);

	// close connection
	mysqli_close($conn);

	//print_r($booking_lists);


?>

<!DOCTYPE html>
<html>
	
	<?php include('header.php'); ?>
    <h4 class="center grey-text">Customers!</h4>

	<div class="container">
		<div class="row">

			<?php foreach($booking_lists as $customers){ ?>

				<div class="col s6 md3">
					<div class="card z-depth-0">
						<div class="card-content center">
							<h6><?php echo htmlspecialchars($customers['name']); ?></h6>
							<div><?php echo htmlspecialchars($customers['email']); ?></div>
                            <div><?php echo htmlspecialchars($customers['phone']); ?></div>
                            <div><?php echo htmlspecialchars($customers['address']); ?></div>
                            <div><?php echo htmlspecialchars($customers['location']); ?></div>
							<div><?php echo htmlspecialchars($customers['guests']); ?></div>
                            <div><?php echo htmlspecialchars($customers['arrivals']); ?></div>
                            <div><?php echo htmlspecialchars($customers['leaving']); ?></div>
						</div>
						<div class="card-action right-align">
							<a class="brand-text" href="home.php">Back_To_HOme</a> 
						</div>
					</div>
				</div>

			<?php } ?>

		</div>
	</div>
	<?php  include('footer.php'); ?>
		 	
</html>