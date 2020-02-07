<?php


namespace app\controllers;


class CursesController extends AppController
{
    public function viewAction(){
        $alias = $this->route['alias'];

        $category = \R::findAll('category');
        if (!$category){
            throw new \Exception('Страница не найдена', '404');
        }

        // хлебные крошки

        // связанные товары

        // запись в куки запрошенного товара

        // просмотренные товары

        // галерея

        // модификации

        $this->set(compact('category'));
    }
}