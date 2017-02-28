<?php
exec("gpio mode 7 out");
if (isset($_GET['tap']) && $_GET['tap'] == true) {
	$status = exec("gpio read 7");
	if ($status == 0) {
		exec("gpio write 7 1");
		echo json_encode("turn on");
	} else {
		exec("gpio write 7 0");
		echo json_encode("turn off");
	}
} else {
	echo json_encode("false");
}
?>
