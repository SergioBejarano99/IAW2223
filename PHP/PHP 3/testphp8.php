<!DOCTYPE html>
<html>

<head>
</head>

<body>
	<?php
		// Defining variables
		$name = $email = $level = $review = "";

		// Checking for a POST request
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = test_input($_POST["name"]);
		$email = test_input($_POST["email"]);
		$review = test_input($_POST["review"]);
		$level = test_input($_POST["level"]);
		}

		// Removing the redundant HTML characters if any exist.
		function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
		}
		?>

		<h2>PHP Form Example: GFG Review</h2>
		<form method="post" action=
			"<?php echo htmlspecialchars($_SERVER[" PHP_SELF "]);?>">
			Name:
			<input type="text" name="name">
			<br>
			<br>
			E-mail:
			<input type="text" name="email">
			<br>
			<br>
			Review For GFG:
			<textarea name="review"
					rows="5" cols="40">
			</textarea>
			<br>
			<br>
			Satisfaction Level:
			<input type="radio" name="level"
				value="Bad">Bad
			<input type="radio" name="level"
				value="Average">Average
			<input type="radio" name="level"
				value="Good">Good
			<br>
			<br>
			<input type="submit" name="submit"
				value="Submit">
		</form>

		<?php
			echo "<h2>Your Input:</h2>";
			echo $name;
			echo "<br>";
			echo $email;
			echo "<br>";
			echo $review;
			echo "<br>";
			echo $level;
		?>
</body>

</html>
