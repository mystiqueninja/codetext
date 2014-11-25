<?php 

$_root = "../";
$_dir = $_root . $_POST['filePath'];

if (file_exists($_dir)) {
	echo file_get_contents($_dir);
} else {
	echo "file: \"{$_dir}\", does not exist";
}

?>