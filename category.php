<?php
	//system ('mkdir '+$k);
	if (count($argv) != 3) die ('USAGE: php category.php CAT_ID CAT_NAME'."\n");
	if (strrpos(file_get_contents('./header.html'), '<a href="/'.$argv[1].'">') === false) {
		file_put_contents('./header.html',
			str_replace("<!--INTERNAL-->", '<a href="/'.$argv[1].'">'.$argv[2].'</a><br />'."\n".'<!--INTERNAL-->',
				file_get_contents("./header.html")
			)
		);
		system ('mkdir ./'.$argv[1]);
		system ('cp -t ./'.$argv[1].'/ ./index.yaws');
		system ('cp -t ./'.$argv[1].'/ ./index.css');
	}
?>
