<?php 
phpinfo();
var_dump(gd_info());
if(extension_loaded('gd')){echo 'GD carregado';}
if(extension_loaded('ffmpeg')){echo 'MPEG carregado';}
if(empty($ffmpeg)){echo 'ffmpeg not available';}else{echo 'ffmpeg available';}
?>
