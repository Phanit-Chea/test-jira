<?php
require '../../database/database.php';
$id = $_GET['id'] ? $_GET['id'] : null;
if (isset($id))
{
    require '../../models/project.model.php';
    deleteProject($id);
    header('Location: /project');
}