<?php
require '../../database/database.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!empty($_POST['name']) and !empty($_POST['post_id'])) {
        require_once('../../models/project.model.php');
        updateProject($_POST['name'], $_POST['post_id'], $_POST['id']);

        header('location: /project');
    }
}
