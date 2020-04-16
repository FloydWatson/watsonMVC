<?php
/*
* Base COntroller
* Loads Models and Views
*/

class Controller
{
    // Load Model
    public function model($model)
    {
        // require model file
        require_once '../app/models/' . $model . '.php';

        // Instantiate model
        return new $model();
    }

    // Load View
    public function view($view, $data = [])
    {
        // require view file
        if (file_exists('../app/views/' . $view . '.php')) {
            require_once '../app/views/' . $view . '.php';
        } else {
            // view does not exist
            die('View does not exist');
        }
    }
}
