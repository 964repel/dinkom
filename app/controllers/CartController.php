<?php


namespace app\controllers;


use app\models\Cart;

class CartController extends AppController
{
    public function addAction(){
        $id = !empty($_GET['id'])?(int)$_GET['id']:null;
        $mod_id = !empty($_GET['mod'])?(int)$_GET['mod']:null;
        $mod = null;
        if ($id){
            $event = \R::findOne('events', 'id =?', [$id]);
            if (!$event){
                return false;
            }
            if ($mod_id){
                $mod = \R::findOne('modification', 'id = ? AND event_id = ?', [$mod_id, $id]);

            }
        }
        $cart = new Cart();
        $cart->addToCart($event, $mod);
        if ($this->isAjax()){
            $this->loadView('cart_modal');
        }
        redirect();
    }

    public function showAction(){
        $this->loadView('cart_modal');
    }

    public function deleteAction(){
        $id = !empty($_GET['id']) ? $_GET['id'] : null;
        if (isset($_SESSION['cart'][$id])){
            $cart = new Cart();
            $cart->deleteItem($id);
        }
        if ($this->isAjax()){
            $this->loadView('cart_modal');
        }
        redirect();
    }

    public function clearAction(){
        unset($_SESSION['cart']);
        unset($_SESSION['cart.sum']);
        $this->loadView('cart_modal');
    }
}