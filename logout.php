<?php
require_once 'section/Header.php';

session_destroy();

header('Location: index.php');

require_once 'section/Header.php';

