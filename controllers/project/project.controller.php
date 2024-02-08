<?php

require 'models/project.model.php';

$projects = getProjects();

require "views/project/project.view.php";