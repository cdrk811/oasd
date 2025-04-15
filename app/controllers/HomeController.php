<?php

class HomeController extends Controller
{
    public function index() {
        ob_start();
        include __DIR__ . '/../views/home/index.php';
        $content = ob_get_clean();

        $this->renderLayout('layouts/main.php', ['content' => $content]);
    }

    private function renderLayout($layout, $data = []) {
        extract($data);
        include __DIR__ . '/../views/' . $layout;
    }
}
