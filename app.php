<?php

    /**
     * Router File
     * Getting URL and Redirecting to the appropraite Views
     * Runs a check to see if the view/file exists in the views folder and then redirect to the appropraite view
     * Return a view not found Error if the view does not exist in the views folder
     */

    if(isset($_GET['id'])) {

        $health_id = $_GET['id'];

        $view = './public/views/' . $health_id . '.php';

        if(file_exists($view)) {
            header("location: " . $view);
            exit;
        } 
        else {
            echo "
                <h2 style='position: absolute; font-family: arial; font-weight: 500; font-size: 28px; top: 50%; left: 50%; transform: translate(-50%, -50%);'>
                    View Not Found! <a href='http://localhost/mytraks/'>Go Back</a>
                </h2>
            ";
            exit;
        } 

    } 