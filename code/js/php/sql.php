<?
	if($_POST['query'])
	{
		$config = include 'sql_config.php';
		
		echo json_encode( include 'sql_'.$config['type'].'.php' );
	}
	else
	{
		echo '{"error":true,"error_type":"POST","desc":"no-data"}';
	}
?>
