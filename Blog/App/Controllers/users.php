<?php

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validateUsers.php");

$errors = array();
$username = '';
$email = '';
$password = '';
$passwordConf = '';
$table = 'users';

function LoginUser($user)
{
	$_SESSION['id'] = $user['id'];
	$_SESSION['username'] = $user['username'];
	$_SESSION['admin'] = $user['admin'];
	$_SESSION['message'] = 'You are now logged in';
	$_SESSION['type'] = 'success';

	if ($_SESSION['admin']) {
		header('location: ' . BASE_URL . '/admin/dashboard.php');
	}else{
		header('location: ' . BASE_URL . '/index.php');
	}

	exit();
}

if (isset($_POST['register-btn'])) {
	$errors = validateUsers($_POST);

	if (count($errors) === 0) {
		unset($_POST['register-btn'], $_POST['passwordConf']);
		$_POST['admin'] = 0;

		$_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

		$user_id = create($table, $_POST);
		$user = selectOne($table, ['id' => $user_id]);

		LoginUser($user);


	} else{
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$passwordConf = $_POST['passwordConf'];

	}

}

//Login functions

if (isset($_POST['login-btn'])) {
	$errors = validateLogin($_POST);

	if (count($errors) === 0) {
		$user = selectOne($table, ['username' => $_POST['username']]);

		if ($user && password_verify($_POST['password'], $user['password'])) {
			//Login, redirect

			// Log user in
			LoginUser($user);
			
		}else{
			array_push($errors, 'Wrong credentials');
		}
	}
	$username = $_POST['username'];
	$password = $_POST['password'];
}