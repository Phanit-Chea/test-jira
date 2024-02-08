<?php
require '../../database/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['email']) and !empty($_POST['password']) and !empty($_POST['phone'])) {
        require_once('../../models/user.model.php');
        createUser($_POST['email'], $_POST['password'],$_POST['phone']);
        header('location: /user');
    }
}
