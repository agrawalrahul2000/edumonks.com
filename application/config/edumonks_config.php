<?php
if(! defined('BASEPATH')) exit('No Direct Access allowed');

if($_SERVER['HTTP_HOST'] == 'localhost') {
	$config['base_url'] = 'http://localhost/edumonks.com/index.php/';
} else {
	$config['base_url'] = 'http://edumonks.com/';

}
?>