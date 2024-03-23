<?php

use yii\db\Migration;

class m240323_112648_Role extends Migration
{
    public function safeUp()
    {
        $auth = Yii::$app->authManager;
        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $auth->assign($admin, 1);
    }

    public function safeDown()
    {
        $auth = Yii::$app->authManager;
        $admin = $auth->getRole('admin');
        $auth->remove($admin);
    }
}
