<?php
require_once 'db.php';
require_once 'functions.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>MyTask_#2</title>
	</head>
		<body>
			<table>
				Classes:
				<?php 
					global $connect;
					$query_classes = "SELECT * FROM classes";
					$result_classes = mysqli_query($connect, $query_classes);
					while ($row_classes = mysqli_fetch_assoc($result_classes)) {
						echo "<tr><td>".$row_classes['id']." ".$row_classes['name']."</tr></td>";
					}

				?>
			</table><br>
				1. Calculate average students rating for all classes: <?php Average_Students_Rating_For_All_Classes(); ?><br>
				2. Calculate average students rating for a specific class: Rangers: <?php Average_Students_Rating_For_Rangers(); ?> Squirrels: <?php Average_Students_Rating_For_Squirrels(); ?> Cats: <?php Average_Students_Rating_For_Cats(); ?><br>
				3. Calculate average students rating for a specific task name: Math: <?php Average_Students_Rating_For_Math(); ?> Physics: <?php Average_Students_Rating_For_Physics(); ?> Science: <?php Average_Students_Rating_For_Science(); ?><br>
				4. Calculate the top 3 students by rating for each class: <?php Top_students_in_the_school_class(); ?> 
				5. Calculate the worst 3 students in the school: <?php Worst_students_in_the_school(); ?><br>
		</body>
</html>