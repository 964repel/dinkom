<?php


namespace app\controllers;


use app\models\Breadcrumbs;
use app\models\Category;
use dinkom\App;
use dinkom\libs\Pagination;
use mysql_xdevapi\Exception;

class CategoryController extends AppController
{

        public function viewAction(){
            $alias = $this->route['alias'];
            $category = \R::findOne('category', 'alias = ?', [$alias]);
            if (!$category){
                throw new Exception('Страница не найдена', 404);
            }

            //х.крошки
            $breadcrumbs = Breadcrumbs::getBreadcrambs($category->id);

            $cat_model = new Category();
            $ids = $cat_model->getIds($category->id);
            $ids = !$ids ? $category->id : $ids . $category->id;

            //пагинация
            $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
            $perpage = App::$app->getProperty('pagination');
            $total = \R::count('events', "category_id IN ($ids)");
            $pagination = new Pagination($page, $perpage, $total);
            $start = $pagination->getStart();

            $events = \R::find('events', "category_id IN ($ids) LIMIT $start, $perpage");

            $this->setMeta($category->title, $category->description, $category->keywords);
            $this->set(compact('events', 'breadcrumbs', 'pagination', 'total'));

        }
}