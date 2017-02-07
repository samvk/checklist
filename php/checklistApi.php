<?php

require_once 'dbconnection.php';

class Checklist {
	//Create
	public static function addItem($item, $tags) {
		global $db;

		$stmt = $db->prepare(
		'INSERT INTO checklist (`item`)
		VALUES (?)'
		);
		$stmt->execute([$item]);

	}
	//Delete
	public static function deleteItem($itemId) {
		global $db;

		$stmt = $db->prepare(
		'DELETE FROM checklist
		WHERE id = ?'
		);
		$stmt->execute([$itemId]);

	}
	//Update
	public static function editItem($itemId, $newItem) {
		global $db;

		$stmt = $db->prepare(
		'UPDATE checklist
		SET item = :newItem
		WHERE id = :id'
		);
		$stmt->execute([
			':newItem' => $newItem,
			':id' => $itemId
		]);

	}
}