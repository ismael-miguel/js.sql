<?
	if($_POST['trans'])
	{
		$config = include 'sql_config.php';
		
		$queries = (array)include 'sql_factory.php';
		
		if( isset($queries['error']) )
			echo  '{"error":true,"error_type":"POST","desc":"wrong-data","__debug":',json_encode($queries['error']),'}';
		else
			echo json_encode( include 'sql_'.$config['type'].'.php' );
	}
	else
	{
		echo '{"error":true,"error_type":"POST","desc":"no-data"}';
	}
?>
