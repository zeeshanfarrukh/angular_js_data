<?php
$userList = simplexml_load_file( "Users.xml", "SimpleXMLElement",LIBXML_NOCDATA );
$e_user=array();
$i=0;
	foreach($userList as $k => $data)
	{
		if($k=='name')
		{
				array_push($e_user, strval($data));
		}
		else
		{
			continue;
		}
		$i++;

	}
echo json_encode($e_user);
?>