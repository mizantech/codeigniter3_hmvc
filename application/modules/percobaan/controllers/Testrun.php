<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Testrun extends MX_Controller {

	public function index()
	{
		echo 'percobaan pake modules::run()<br>';
		$var1 = modules::run('percobaan/welkam/test_run', $param = 'ucing...');
		echo $var1;
	}
}

/* Testrun.php */