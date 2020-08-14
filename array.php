<?php 




	$an_array = array("pakistan", "afghanistan", "iran", "turkey");
	
	$mixed_array = array("brown", 34, "pakistan", 23.32114, "orange", "burhan");

	echo "<br>";
	echo $an_array[0] . "<br>";
	echo $an_array[1] . "<br>";
	echo $an_array[2] . "<br>";
	echo $an_array[3] . "<br>";

	echo "<br>------------------------------------------------------------------------------";
	echo $mixed_array[0] . "<br>";
	echo $mixed_array[1] . "<br>";
	echo $mixed_array[2] . "<br>";
	echo $mixed_array[3] . "<br>";
	echo $mixed_array[4] . "<br>";
	echo "<br>------------------------------------------------------------------------------";

	//the funciton to print all the elements in the array, instead of echo multimple times
	print_r($mixed_array);
	
	echo "<br>";

	//we can do this for the readability of the php indexed arrays, 
	echo "<pre>";
	print_r($mixed_array);
	echo "</pre>";

	//function to print the array, instead of writing every time
	function print_array_arranged($array) {
		echo "<br><pre>";
		print_r($array);
		echo "</pre>";
	}

	//to print an array, using loop,
	function print_array_loop($array) {
		echo "<br>";
		for ($i = 0; $i < sizeof($array); $i++) {	//size of operator returns the size of array
			echo $array[$i] . "<br>";
		}
	}


	function print_array_loop_formatted($array) {
		//will behave like unordered list and all the items in list items
		echo "<br><ul>";	
		for ($i = 0; $i < sizeof($array); $i++) {
			echo "<li>" . $array[$i] . "</li>";		//each item will be use as list item
		}
		echo "</ul>";
	}

	// an array havning many elements , lets see
	$random_array = array("umar", "burhan", "jackson", "vlamdir", "mahatir", "erdogan", "fatima", "Ayesha", "qasim");

	//printing the array elements using <pre>
	print_array_arranged($random_array);


	//comments are important too
	print_array_loop($random_array);

	//call another funciton, 
	print_array_loop_formatted($random_array);


	//the array concept is very important, it will be used in php with mysql too , very important

















 ?>