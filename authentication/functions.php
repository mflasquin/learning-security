<?php

function connectDb()
{
    try {
        $conn = new PDO("mysql:host=127.0.0.1;dbname=authentication", 'root', '');
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        return null;
    }
}

function logUser($email, $password)
{
    $connexion = connectDb();
    $sql = 'SELECT * FROM users WHERE email = "' . $email . '"';
    $sqlmdp = 'SELECT password FROM users WHERE email = "' . $email . '"';
	$stmtmdp = $connexion->prepare($sqlmdp);
	$stmtmdp->execute();
	$result = $stmtmdp->fetch(PDO::FETCH_ASSOC);
	$passwordVerify = password_verify($password, $result["password"]);
	if ($passwordVerify) {
		$stmt = $connexion->prepare($sql);
		$stmt->execute();

		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}
	else {
		return null;
	}
}

function getUser($id) {
    $connexion = connectDb();
    $sql = 'SELECT * FROM users WHERE id = ' . $id;
    $stmt = $connexion->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_OBJ);
}

function saveUser($email, $username, $password) {
    $connexion = connectDb();
	$hashPass = password_hash($password, PASSWORD_DEFAULT);
	$username = htmlentities($username, ENT_QUOTES, 'UTF-8');
	$email = htmlentities($email, ENT_QUOTES, 'UTF-8');
    $sql = 'INSERT INTO users(username,email,password) VALUES("'.$email.'","'.$username.'","'.$hashPass.'")';
    $stmt = $connexion->prepare($sql);

    return $stmt->execute();
}