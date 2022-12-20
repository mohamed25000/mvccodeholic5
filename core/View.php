<?php

namespace app\core;

class View
{
    public string $title = "";
    public function renderView(string $view, array $params = [])
    {
        $viewContent = $this->renderOnlyView($view, $params);
        $layoutContent = $this->layoutContent();

        return str_replace("{{content}}", $viewContent, $layoutContent);
        include_once Application::$ROOT_DIR . "/views/$view.php";
    }

    public function renderContent($viewContent)
    {
        $layoutContent = $this->layoutContent();
        return str_replace("{{content}}", $viewContent, $layoutContent);
        include_once Application::$ROOT_DIR . "/views/$view.php";
    }

    private function layoutContent()
    {
        $layout = Application::$app->layout;
        if(Application::$app->controller->layout) {
            $layout = Application::$app->controller->layout;
        }
        ob_start();
        include_once Application::$ROOT_DIR . "/views/layouts/$layout.php";
        return ob_get_clean();

    }

    protected function renderOnlyView($view, array $params = [])
    {
        foreach ($params as $key => $value) {
            $$key = $value;
        }
        ob_start();
        include_once Application::$ROOT_DIR . "/views/$view.php";
        return ob_get_clean();
    }
}