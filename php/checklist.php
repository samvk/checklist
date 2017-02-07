<?php

//include dbconnection.php (well need to make that)
require_once 'checklistApi.php';

$action = $_POST['action'];

if ($action = 'add') {
	$item = trim($_POST['item']) ?? '';
	$tags = trim($_POST['tags']) ?? [];
	Checklist::addItem($item, $tags);
}

if ($action = 'delete') {
	$itemId = trim($_POST['itemId']) ?? '';
	Checklist::deleteItem($itemId);
}

if ($action = 'edit') {
	$itemId = trim($_POST['itemId']) ?? '';
	$newItem = trim($_POST['newItem']) ?? '';
	Checklist::editItem($itemId, $newItem);
}

exit;