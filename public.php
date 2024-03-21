<?php

require('model/database.php');
require('model/vehicles_db.php');
require('model/class_db.php');
require('model/make_db.php');
require('model/type_db.php');

$action = filter_input(INPUT_POST, 'action', FILTER_UNSAFE_RAW);
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action', FILTER_UNSAFE_RAW);
    if ($action == NULL) {
        $action = 'list_vehicles';
    }
}

if($action == 'list_vehicles') {
    $class_id = filter_input(INPUT_GET, 'class_id', FILTER_VALIDATE_INT);
    $make_id = filter_input(INPUT_GET, 'make_id', FILTER_VALIDATE_INT);
    $type_id = filter_input(INPUT_GET, 'type_id', FILTER_VALIDATE_INT);
    $sort_order = filter_input(INPUT_GET, 'sort_order', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if ($sort_order !== 'price_desc' && $sort_order !== 'year_desc') {
        $sort_order = 'price_desc';
    }

    $class_id = ($class_id === false || $class_id === null || $class_id == "all") ? null : $class_id;
    $make_id = ($make_id === false || $make_id === null || $make_id == "all") ? null : $make_id;
    $type_id = ($type_id === false || $type_id === null || $type_id == "all") ? null : $type_id;

    $class_name = ($class_id !== null) ? get_class_name($class_id) : null;
    $make_name = ($make_id !== null) ? get_make_name($make_id) : null;
    $type_name = ($type_id !== null) ? get_type_name($type_id) : null;

    $classes = list_classes();
    $makes = list_makes();
    $types = list_types();
    $vehicles = list_vehicles($make_id, $type_id, $class_id, $sort_order);
    include('view/public_vehicle_list.php');
}

?>
