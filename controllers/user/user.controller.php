<?php

require 'models/user.model.php';

$users = getUsers();

require "views/user/user.view.php";