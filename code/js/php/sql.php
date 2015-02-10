<?
	if($_POST['query'])
	{
		$config = include 'sql_config.php';
		
		$queries = (array)include 'sql_factory.php';
		
		if( isset($queries['error']) )
			echo  '{"error":true,"error_type":"POST","desc":"wrong-data"}';
		else
			echo json_encode( include 'sql_'.$config['type'].'.php' );
	}
	else
	{
		echo '{"error":true,"error_type":"POST","desc":"no-data"}';
	}
?>
