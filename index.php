<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

use KodeBlog\Controllers\ItemsController;

require './bootstrap/autoload.php';

$base_url = 'http://localhost/simplecrud/index.php';

if (!isset($_GET['action'])) {
    header("Location: $base_url?action=list");
}

$action = $_GET['action'];

switch ($action) {
case 'list':
    ItemsController::index();
    break;

case 'create':
    ItemsController::create();
    break;

case 'edit':
    $id = $_GET['id'];
    itemsController::edit($id);
    break;

case 'delete':
    $id = $_GET['id'];
    itemsController::delete($id);
    break;

}