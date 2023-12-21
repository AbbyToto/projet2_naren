<?php

abstract class Controller
{

    public function loadModel($model)
    {
        require_once ROOT . 'models/' . $model . '.php';
        $this->$model = new $model();
    }
    public function render($fichier, $data = [])
    {
        extract($data);
        ob_start();

        require_once ROOT . "views/" . strtolower(get_class($this)) . "/" . $fichier . ".php";

        $content = ob_get_clean();

        require_once(ROOT . 'views/layout/default.php');
    }

    public function render2($fichier, $data = [])
    {
        // require_once ROOT."views/films/index.php";

        ob_start();

        require_once ROOT . "views/" . $fichier . ".php";

        $content = ob_get_clean();

        require_once(ROOT . 'views/layout/default.php');
    }
}
