<?php

define("HOST", "localhost");
define("DB", "onlineshop");
define("UID", "root");
define("PWD", "");

function load($sql) {
	$cn = new mysqli(HOST, UID, PWD, DB);
	if ($cn->connect_errno) {
	    die("FAILED");
	}

	$cn->query("set names 'utf8'");
	$rs = $cn->query($sql);
	return $rs;
}

function write($sql) {
	$cn = new mysqli(HOST, UID, PWD, DB);
	if ($cn->connect_errno) {
	    die("FAILED");
	}

	$cn->query("set names 'utf8'");
	$rs=$cn->query($sql);
	return $rs;
}

