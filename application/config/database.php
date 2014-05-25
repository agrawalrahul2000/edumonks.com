<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if($_SERVER["HTTP_HOST"] == 'localhost') {

	$active_group = 'master';
	$active_record = TRUE;

	$db['master']['hostname'] = 'localhost';
	$db['master']['username'] = 'root';
	$db['master']['password'] = '';
	$db['master']['database'] = 'edumonks';
	$db['master']['dbdriver'] = 'mysql';
	$db['master']['dbprefix'] = '';
	$db['master']['pconnect'] = TRUE;
	$db['master']['db_debug'] = TRUE;
	$db['master']['cache_on'] = FALSE;
	$db['master']['cachedir'] = '';
	$db['master']['char_set'] = 'utf8';
	$db['master']['dbcollat'] = 'utf8_general_ci';
	$db['master']['swap_pre'] = '';
	$db['master']['autoinit'] = TRUE;
	$db['master']['stricton'] = FALSE;


	$db['slave']['hostname'] = 'localhost';
	$db['slave']['username'] = 'root';
	$db['slave']['password'] = '';
	$db['slave']['database'] = 'edumonks';
	$db['slave']['dbdriver'] = 'mysql';
	$db['slave']['dbprefix'] = '';
	$db['slave']['pconnect'] = TRUE;
	$db['slave']['db_debug'] = TRUE;
	$db['slave']['cache_on'] = FALSE;
	$db['slave']['cachedir'] = '';
	$db['slave']['char_set'] = 'utf8';
	$db['slave']['dbcollat'] = 'utf8_general_ci';
	$db['slave']['swap_pre'] = '';
	$db['slave']['autoinit'] = TRUE;
	$db['slave']['stricton'] = FALSE;

} else {

	$active_group = 'master';
	$active_record = TRUE;

	$db['master']['hostname'] = 'localhost';
	$db['master']['username'] = 'thismayh_user';
	$db['master']['password'] = 'adi19nit23sam30';
	$db['master']['database'] = 'thismayh_edumonks';
	$db['master']['dbdriver'] = 'mysql';
	$db['master']['dbprefix'] = '';
	$db['master']['pconnect'] = TRUE;
	$db['master']['db_debug'] = TRUE;
	$db['master']['cache_on'] = FALSE;
	$db['master']['cachedir'] = '';
	$db['master']['char_set'] = 'utf8';
	$db['master']['dbcollat'] = 'utf8_general_ci';
	$db['master']['swap_pre'] = '';
	$db['master']['autoinit'] = TRUE;
	$db['master']['stricton'] = FALSE;


	$db['slave']['hostname'] = 'localhost';
	$db['slave']['username'] = 'thismayh_user';
	$db['slave']['password'] = 'adi19nit23sam30';
	$db['slave']['database'] = 'thismayh_edumonks';
	$db['slave']['dbdriver'] = 'mysql';
	$db['slave']['dbprefix'] = '';
	$db['slave']['pconnect'] = TRUE;
	$db['slave']['db_debug'] = TRUE;
	$db['slave']['cache_on'] = FALSE;
	$db['slave']['cachedir'] = '';
	$db['slave']['char_set'] = 'utf8';
	$db['slave']['dbcollat'] = 'utf8_general_ci';
	$db['slave']['swap_pre'] = '';
	$db['slave']['autoinit'] = TRUE;
	$db['slave']['stricton'] = FALSE;
}

/* End of file database.php */
/* Location: ./application/config/database.php */