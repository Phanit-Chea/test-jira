<?php
require '../../database/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['name']) and !empty($_POST['post_id'])) {
        require_once('../../models/project.model.php');
        createProject($_POST['name'], $_POST['post_id']);
        header('location: /project');
    }
}
