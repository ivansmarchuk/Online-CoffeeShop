<?php
/**
 * Created by PhpStorm.
 * User: Ivan Marchuk
 * Date: 10.05.2018
 */

namespace app\models;


use coffeeshop\App;

class Category extends AppModel
{
    public function getIds($id)
    {
        $cats = App::$app->getProperty('cats');
        $ids = null;
        foreach ($cats as $k => $v) {
            if ($v['parent_id'] == $id) {
                $ids .= $k . ',';
                $ids .= $this->getIds($k);
            }
        }
        return $ids;
    }
}