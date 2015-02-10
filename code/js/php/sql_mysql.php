<?php
	
	if(!mysql_connect($config['host'], $config['username'], $config['password']))
		return array(
			'error'=>true,
			'type'=>'link',
			'desc'=>'connection-failed',
			'__debug'=>mysql_errno().':'.mysql_error()
		);
	
	if(!mysql_select_db())
		return array(
			'error'=>true,
			'type'=>'link',
			'desc'=>'connection-failed',
			'__debug'=>mysql_errno().':'.mysql_error()
		);
	
	$results = array();
	
	foreach($queries as $k=>$query)
	{
		if($result = mysql_query($query))
		{
			if($result === true)
			{
				$results[$k] = array(
					'error'=>false,
					'result'=>true,
					'insert_id'=>mysql_insert_id(),
					'affected'=>mysql_affected_rows()
				);
			}
			else
			{
				$results[$k] = array(
					'error'=>false,
					'num_rows'=>mysql_num_rows($result),
					'result'=>mysql_fetch_array($config['fetch_style'] ? $config['fetch_style'] : MYSQL_BOTH)
				);
			}
		}
		else
		{
			$results[$k] = array(
				'error'=>true,
				'result'=>false,
				'type'=>'query'
				'desc'=>'query-failed',
				'__debug'=>mysql_errno().':'.mysql_error()
			);
		}
		$results[$k]['query'] = $query;
	}
	
	return $results;
