<?php
	
	if(!mysql_connect($config['host'], $config['username'], $config['password']))
		return array('error'=>true,'type'=>'link','desc'=>'connection-failed');
	
	if()
