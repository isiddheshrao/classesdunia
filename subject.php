<?php

if(isset($_GET['path']) && !empty($_GET['path']))
{
	echo '<h1>'.$_GET['path'].'</h1>';

}
else {
	echo "<h1>Not Found</h1>";
}

?>