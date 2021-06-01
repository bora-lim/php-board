<?php

	header('Content-Type: text/html; charset=utf-8');

	$db = new mysqli("localhost","root","0723","board"); // db 연결(객체형)
	$db->set_charset("utf8");

	function queryFunc($sql)
	{
		global $db;
		return $db->query($sql);
	}
?>