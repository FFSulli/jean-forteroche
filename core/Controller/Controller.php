<?php 

namespace Core\Controller;

/**
 * Classe Controller principale
 */

class Controller {
    
    protected $viewPath;
    protected $template;

    /**
     * Permet d'afficher le rendu de la page
     *
     * @param string $view
     * @param array $variables
     */

    protected function render($view, $variables = []) {

        ob_start();
        extract($variables);
        require($this->viewPath . str_replace('.', '/', $view) . '.php'); 
        $content = ob_get_clean();
        require($this->viewPath . 'templates/' . $this->template . '.php');

    }

    /**
     * Fonction permettant d'afficher la page de refus d'accès
     */

    protected function forbidden() {

        header('HTTP/1.0 403 Forbidden');
        die('Accès interdit');

    }

    /**
     * Fonction permettant d'afficher la page de page introuvable
     */

    protected function notFound() {

        header('HTTP/1.0 404 Not Found');
        die('Page introuvable');

    }

}