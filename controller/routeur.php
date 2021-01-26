<?php

//Require of all the controller
require (File::build_path(array(
    'controller',
    'Controller.php'
)));

require (File::build_path(array(
    'controller',
    'ControllerMission.php'
)));

require (File::build_path(array(
    'controller',
    'ControllerMeteo.php'
)));

require (File::build_path(array(
    'controller',
    'ControllerInventaire.php'
)));


require (File::build_path(array(
    'controller',
    'ControllerGPS.php'
)));

require (File::build_path(array(
    'controller',
    'ControllerCanvas.php'
)));

require (File::build_path(array(
    'controller',
    'ControllerNotification.php'
)));

ControllerInventaire::initInventaire();

$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$error = null;


if (count($_GET) == 0) { //No action or controller = Accueil

    $controller = 'global';
    $view = 'accueil';
    $pagetitle = "Accueil";

    require_once (File::build_path(array(
        'view',
        'global',
        'view.php'
    )));
    
} else if (isset($_GET['controller'])) {
    $controller = $_GET['controller'];
    $controller_class = "Controller" . ucfirst($controller);
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
        if (class_exists($controller_class)) {

            $listMethod = get_class_methods($controller_class);
            if (in_array($action, $listMethod)) {
                $controller_class::$action();
            } else {
                $error = "Method $action not found in $controller_class <br> $actual_link";
            }
        } else {
            $error = "Controller $controller_class not require || not found $actual_link";
        }
    } else {
        $error = "Controller without action" . $actual_link;
    }
}

//if error raise
if (! is_null($error)) {

    $controller = 'global';
    $view = 'error';
    $pagetitle = "Erreur $error";

    require (File::build_path(array(
        'view',
        'global',
        'view.php'
    )));
}
?>
