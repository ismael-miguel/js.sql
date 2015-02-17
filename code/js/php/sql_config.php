<?
	return array(
		'type'=>'mysql',//accepts: mysql, mysqli, sqlite, pdo
		'mysql'=>array(
			'host'=>'localhost',
			'username'=>'root',
			'password'=>'',
			'post'=>3306,
			'db'=>'test'
		),
		'allowed'=>array(
			'tables'=>'*',
			'methods'=>array('select','insert','update','delete')
		)
	);
