<?php

function sum_the_time($time1, $time2) {
	$times = array($time1, $time2);
	$seconds = 0;
	foreach ($times as $time)
		{
		list($hour,$minute,$second) = explode(':', $time);
		$seconds += $hour*3600;
		$seconds += $minute*60;
		$seconds += $second;
		}
	$hours = floor($seconds/3600);
	$seconds -= $hours*3600;
	$minutes  = floor($seconds/60);
	$seconds -= $minutes*60;
	return sprintf('%02d:%02d:%02d', $hours, $minutes, $seconds);
}

if(isset($_REQUEST['usid'])){
	
	$user_id = $_REQUEST['usid'];

	if(($_REQUEST['fdate']!=NULL)AND($_REQUEST['sdate']!=NULL)){
	
		$fdate = $_REQUEST['fdate'];
		$sdate = $_REQUEST['sdate'];
		
 		$conn = new mysqli("localhost", "root", "", "attendance");
				
		$result = $conn->query("SELECT whours,date FROM user_time WHERE id_user= '$user_id' AND date > '$fdate' AND date < '$sdate'");

		$working_hours ='00:00:00';
		
		while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
			$worked_hours = $rs['whours'];
			$working_hours = sum_the_time($working_hours,$worked_hours);
			$worked_hours =0;
		}
		
		$conn->close(); 
		
		list($hours,$minutes,$seconds)  = explode(':', $working_hours);
		echo "The working hours for selected time period are : "  . $hours . ' Hours' . ' ' . $minutes . ' Minutes' . ' ' . $seconds . ' Seconds'; //$working_hours;
		
	}else{
		echo "<strong>Info!</strong> Select working time period for selected user";
	}
}
?> 