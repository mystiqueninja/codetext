<?php 
	
	class FILE {
		//public static function create ($filename) {

		//} 
		//public static function delete ($filename) {

		//}
		public static function addto ($filename, $content) {
			if (static::exists($filename)) {
				$file = static::read($filename, 'a');
				fwrite($file, $content);
				fclose(); 
			}
			return false;
		}
		public static function open ($filename) {
			return (static::existst($filename)) ?
				static::read($filename, 'w') :
				false
		}
		public static function write ($filename, $contents) {
			$handle = static::open($filename);
			fwrite($handle, $contents);
			fclose($handle);
		}
		public function contents ($filename) {
			file_get_contents($filename);
		}
		public static function read ($filename, $mode = 'r') {
			return fopen($filename, $mode);
		}
		public static function exists ($filename) {
			return (file_exists($filename)) ? true : false;
		}
		public static function mkdir ($dirname, $permission, $recursive = true) {
			return (mkdir($dirname, $permission, $recursive)) ? true : false;
		}
	}

	if (isset($_POST['fileContent']) && isset($_POST['filePath'])) {
		$fileContent = $_POST['fileContent'];
		$filePath = $_POST['filePath'];
		$pathStructure = explode('/', $filePath);
		foreach ($pathStructure as $value) {
			if (strpos($value, '.') >= 1) {
				FILE::mkdir($value, 0777, false);
			} else {
				FILE::write($filePath, $filePath);
			}
		}
	} else {
		echo 'false';
	}
?>