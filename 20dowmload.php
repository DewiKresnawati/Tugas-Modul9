<?php
header("Content-Type:application/zip");
header("Content-Length:" . filesize($file));
header("Content-Disposition: attachment;flename=$file");
readfile($file)
?>
