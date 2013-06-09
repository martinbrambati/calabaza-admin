<?php
/* Precio Fixture generated on: 2011-04-07 21:45:12 : 1302205512 */
class PrecioFixture extends CakeTestFixture {
	var $name = 'Precio';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'descripcion' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 1024, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'valor' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => '10,2'),
		'tipoprecio_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'descripcion' => 'Lorem ipsum dolor sit amet',
			'valor' => 1,
			'tipoprecio_id' => 1
		),
	);
}
?>