<?php

class Controller_Sample extends \Fuel\Core\Controller
{
    public function action_index()
    {
        //$file = DOCROOT . 'sample.php';

        //$content = file_get_contents($file);

        $view = View::forge('index');

        $view->set('title', 'ファイル表示プログラム');
        //$view->set('content', $content);


        return $view;
    }
}
