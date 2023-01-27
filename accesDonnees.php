<?php
require_once 'connection.php';

$select= 'SELECT nom, adresse, cp, ville, telephone, description FROM restaurants;';
$pstmt=$pdo->prepare($select);
$pstmt->execute();
$tabRestaurants=$pstmt->fetchAll();