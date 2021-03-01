<?php 
require_once 'db.php';


function Average_Students_Rating_For_All_Classes(){
	global $connect;
	$query_rating = "SELECT * FROM rating";
	$result_rating = mysqli_query($connect, $query_rating);
	$sum = 0;
	while($row_rating = mysqli_fetch_assoc($result_rating)){
		$a = $row_rating['Rating'];
		$sum+=$a;
	}
	$b = $sum / 30;
	echo $b;
}



function Average_Students_Rating_For_Rangers(){
	global $connect;
		$query_classes = "SELECT Rating FROM rating WHERE StudentId=2 OR StudentId=7 OR StudentId=8 OR StudentId=9";
		$result_classes = mysqli_query($connect, $query_classes);
		$sum = 0;
		while($row_classes = mysqli_fetch_assoc($result_classes)){
			$a = $row_classes['Rating'];
			$sum+=$a;
			$b = $sum / 3;
		}
		echo ($sum / 12);
	}


function Average_Students_Rating_For_Squirrels(){
	global $connect;
		$query_classes = "SELECT Rating FROM rating WHERE StudentId=3 OR StudentId=4 OR StudentId=10";
		$result_classes = mysqli_query($connect, $query_classes);
		$sum = 0;
		while($row_classes = mysqli_fetch_assoc($result_classes)){
			$a = $row_classes['Rating'];
			$sum+=$a;
			$b = $sum / 3;
		}
		echo ($sum / 9);
	}


function Average_Students_Rating_For_Cats(){
	global $connect;
		$query_classes = "SELECT Rating FROM rating WHERE StudentId=1 OR StudentId=5 OR StudentId=6";
		$result_classes = mysqli_query($connect, $query_classes);
		$sum = 0;
		while($row_classes = mysqli_fetch_assoc($result_classes)){
			$a = $row_classes['Rating'];
			$sum+=$a;
			$b = $sum / 3;
		}
		echo ($sum / 9);
	}



function Average_Students_Rating_For_Math(){
	global $connect;
		$query_classes = "SELECT Rating FROM rating WHERE TaskName='Math'";
		$result_classes = mysqli_query($connect, $query_classes);
		$sum = 0;
		while($row_classes = mysqli_fetch_assoc($result_classes)){
			$a = $row_classes['Rating'];
			$sum+=$a;
			$b = $sum / 10;
		}
		echo $b;
	}


function Average_Students_Rating_For_Science(){
	global $connect;
		$query_classes = "SELECT Rating FROM rating WHERE TaskName='science'";
		$result_classes = mysqli_query($connect, $query_classes);
		$sum = 0;
		while($row_classes = mysqli_fetch_assoc($result_classes)){
			$a = $row_classes['Rating'];
			$sum+=$a;
			$b = $sum / 10;
		}
		echo $b;
	}

function Average_Students_Rating_For_Physics(){
	global $connect;
		$query_classes = "SELECT Rating FROM rating WHERE TaskName='physics'";
		$result_classes = mysqli_query($connect, $query_classes);
		$sum = 0;
		while($row_classes = mysqli_fetch_assoc($result_classes)){
			$a = $row_classes['Rating'];
			$sum+=$a;
			$b = $sum / 10;
		}
		echo $b;
	}	

function Worst_students_in_the_school(){
	global $connect;
	$sum = 0;
	$top3 = [];
	$query = "SELECT * FROM ratings";
	$result = mysqli_query($connect, $query);
	foreach ($result as $row) {
		$sum = ($row['Math'] + $row['Science']  + $row['Physics'])/3 ."<br>";
		array_push($top3, $sum);
	} 
	sort($top3);
	echo $top3[0],$top3[1],$top3[2];

	
}

function Top_students_in_the_school_class(){
	global $connect;
	$sum = 0;
	$top3_rangers = [];
	$top3_squirrels = [];
	$top3_cats = [];
	$query = "SELECT * FROM ratings";
	$result = mysqli_query($connect, $query);
	foreach ($result as $row) {
		if($row['id'] == 2 OR $row['id'] == 7 OR $row['id'] == 8 OR $row['id'] == 9){
			$sum = ($row['Math'] + $row['Science']  + $row['Physics'])/3 ."<br>";
			array_push($top3_rangers, $sum);
		}
		if($row['id'] == 3 OR $row['id'] == 4 OR $row['id'] == 10){
			$sum = ($row['Math'] + $row['Science']  + $row['Physics'])/3 ."<br>";
			array_push($top3_squirrels, $sum);
		}
		if($row['id'] == 1 OR $row['id'] == 5 OR $row['id'] == 6){
			$sum = ($row['Math'] + $row['Science']  + $row['Physics'])/3 ."<br>";
			array_push($top3_cats, $sum);
		}
	} 
	rsort($top3_rangers);
	rsort($top3_squirrels);
	rsort($top3_cats);
	echo "Rangers: <br>" . $top3_rangers[0],$top3_rangers[1],$top3_rangers[2];
	echo "Squirrels: <br>" .$top3_squirrels[0],$top3_squirrels[1],$top3_squirrels[2];
	echo "Cats: <br>" .$top3_cats[0],$top3_cats[1],$top3_cats[2];

	
}

