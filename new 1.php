<?php
	$mongo = new MongoClient();
	$db = $mongo->test;
	$collection = $db->accounts;
	$array = $collection->find();
	foreach ($array as $a)
	{
		echo "Name: " . $a['name'] . ", e-mail: " . $a['email'] . "<br>";
	}
	exit();
?>
