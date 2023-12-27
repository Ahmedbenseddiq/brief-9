<?php

spl_autoload_register(function ($class_name) {
    include 'model/' . $class_name . '.php';
});

// Determine controller and action based on URL parameters or routes
$controllerName = $_GET['controller'] ?? 'Bus'; 
$action = $_GET['action'] ?? 'index'; 

// Include the appropriate controller file
$controllerFileName = 'controllers/' . $controllerName . 'Controller.php';

if (file_exists($controllerFileName)) {
    include $controllerFileName;

    // Create the controller object
    $controllerClass = $controllerName . 'Controller';
    $controller = new $controllerClass();

    // Call the corresponding action on the controller if it exists
    if (method_exists($controller, $action)) {
        $busNumber = $_GET['busNumber'] ?? null;
        $controller->$action($busNumber); 
    } else {
       
        echo "Error: Action not found!";
    }
} else {
    // Handle error - Controller file not found
    echo "Error: Controller not found!";
}
?>
