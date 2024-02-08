<?php
require '../../database/database.php';

$id = $_GET["id"] ? $_GET["id"] : null;
if (isset($id)) {
    require "../../models/project.model.php";
    $project = getProject($id);
    require "../../views/project/project.edit.view.php";
}

