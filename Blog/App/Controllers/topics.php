<?php

include(ROOT_PATH . "/app/database/db.php");


$table = 'topics';

$id = '';
$name = '';
$description = '';

$topics = selectAll($table);

// create topics
if (isset($_POST['add-topic'])) {
	unset($_POST['add-topic']);
	$topic_id = create($table, $_POST);
	$_SESSION['message'] = 'Topic created successfully';
	$_SESSION['type'] = 'Success';
	header('location: ' . BASE_URL . '/admin/topics/index.php');
	exit();
}

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$topic = selectOne($table, ['id' => $id]);
	$id = $topic['id'];
	$name = $topic['name'];
	$description = $topic['description'];
}

// deleting topics
if (isset($_GET['del_id'])) {
	$id = $_GET['del_id'];
	$count = delete($table, $id);
}

// update topics
if (isset($_POST['update-btn'])) {
	$id = $_POST['id'];
	unset($_POST['update-btn'], $_POST['id']);
	$topic_id = update($table, $id, $_POST);
	$_SESSION['message'] = 'Topic updated successfully';
	$_SESSION['type'] = 'Success';
	header('location: ' . BASE_URL . '/admin/topics/index.php');
	exit();
}

