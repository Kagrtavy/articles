<?php

namespace App\Controllers;

use App\Lib\Controller;
use App\Lib\ArticlesModel;

class MainController extends Controller {
    public function handleRequest() {
        $model = new ArticlesModel();
        $articles = $model->getAllArticles();
        $this->render('common/general', ['articles' => $articles]);
    }
}