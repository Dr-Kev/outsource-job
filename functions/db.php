<?php
 function registry($query, $bindings, $conn){
 	$stmt = $conn->prepare($query);
 	$stmt->execute($bindings);
 }

// function block($query, $bindings, $conn){
//  	$stmt = $conn->prepare($query);
//  	$stmt->execute($bindings);
//  	return $stmt->fetchAll();
//  }

//  function get($table, $conn) {
//  	try{
//  		$result = $conn->query("SELECT * FROM $table");

//  		return ($result->rowCount() > 0 ) ? $result : false;
//  	} catch(Exception $e) {
//  		return false;
//  	}
//  }
