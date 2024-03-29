<?php
session_start();
require('connect.php');

function dd($value){
	echo "<pre>", print_r($value, true), "</pre>";
	die();
}



function executeQuery($sql, $data){
	global $conn;
	$stmt = $conn->prepare($sql);
	$values = array_values($data);
	$types = str_repeat('s', count($values));
	$stmt->bind_param($types, ...$values);
	$stmt->execute();
	return $stmt;
}



//////////////// SELECT ALL FUNCTION //////////
function selectAll($table, $conditions = []){
	global $conn;
	$sql = "SELECT * FROM $table ";
	if (empty($conditions)) {
		
	}else{
		
		$i=0;
		foreach ($conditions as $key => $value) {
			if ($i===0) {
				$sql = $sql . " WHERE $key=?";
			}else{
				$sql = $sql . " AND $key=?";
			}
			$i++;

		}

		$stmt = execute($sql, $conditions);
		$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
		return $records;
	}
	
}



////////// SELECT ONE FUNCTION //////////
function selectOne($table, $conditions){
	global $conn;
	$sql = "SELECT * FROM $table ";

	$i = 0;
	foreach ($conditions as $key => $value) {
		if ($i===0) {
			$sql = $sql . " WHERE $key=?";
		}else{
			$sql = $sql . " AND $key=?";
		}
		$i++;
	}
	$sql = $sql . " LIMIT 1";
	$stmt = executeQuery($sql, $conditions);
	$records = $stmt->get_result()->fetch_assoc();
	return $records;
}


//////// CREATE FUNCTION ////////
function create($table, $data){
	global $conn;
	// sql = "INSERT INTO users SET username=?, admin=?, email=?, password=?";
	$sql = "INSERT INTO $table SET ";

	$i = 0;
	foreach ($data as $key => $value) {
		if ($i===0) {
			$sql = $sql . " $key=?";
		}else{
			$sql = $sql . ", $key=?";
		}
		$i++;
	}
	$stmt = executeQuery($sql, $data);
	$id = $stmt->insert_id;
	return $id;
}


//////// UPDATE FUNCTION ////////
function update($table, $id, $data){
	global $conn;
	// sql = "UPDATE INTO users SET username=?, admin=?, email=?, password=? WHERE id=?";
	$sql = "UPDATE $table SET ";

	$i = 0;
	foreach ($data as $key => $value) {
		if ($i===0) {
			$sql = $sql . " $key=?";
		}else{
			$sql = $sql . ", $key=?";
		}
		$i++;
	}

	$sql = $sql . " WHERE id=?";
	$data ['id'] = $id;
	$stmt = executeQuery($sql, $data);
	$id = $stmt->insert_id;
	return $stmt->affected_rows;
}


//////// DELETE FUNCTION ////////
function delete($table, $id){
	global $conn;
	$sql = "DELETE FROM $table WHERE id=?";

	$stmt = executeQuery($sql, ['id' => $id]);
	return $stmt->affected_rows;
}
