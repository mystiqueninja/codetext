<?php 
	
	class FILE {
		public static function create (filename) {

		} 
		public static function delete (filename) {

		}

	}

	$_root = "../../";
	$_dir = $_root . $_POST['filePath'].'.'.$_POST['fileType'];

	if (file_exists($_dir)) {
		file_put_contents($_dir, $_POST['fileContent']);
		echo file_get_contents($_dir);
	} else {
		$handle = fopen($_dir, 'w');
		fwrite($handle, $_POST['fileContent']);
		fclose($handle);
		echo file_get_contents($_dir);
	}


?>