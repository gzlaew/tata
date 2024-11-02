<?php
@$aksi=$_GET['aksi'];

switch ($aksi) {

	case 'tampil':
		include "tampil.php";
		break;

	default:
		include "tampil.php";
		break;
}
 ?>