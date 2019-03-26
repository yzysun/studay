<?php

$dir="G:\phpStudy\PHPTutorial\WWW\zuan9\zk2";
my_dir($dir);

function my_dir($dir)
{
	$dh=opendir($dir);
	while(($file=readdir($dh))!=false)
	{
		if($file=='.' || $file=='..')
		{
			continue;
		}

		$path=$dir."".$file;
		if(is_file($path))
		{
			my_dir($path);
		}else{
			echo $path."\r\n";
		}
	}
	closedir($dh);

}

?>