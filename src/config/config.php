<?php

return array (

	'webserviceUrl' => env('SMS_WEBSERVICE', 'http://api.payamak-panel.com/post/Send.asmx?wsdl'),
	'username'		=> env('SMS_USERNAME', '9123456789'),
	'password'		=> env('SMS_PASSWORD','****'),
	'from'			=> env('SMS_FROM','****'),
	'isflash'		=> false,
	'udh'			=> '',
	'recId'			=> array(0),
	'status'		=> '0x0',
);
