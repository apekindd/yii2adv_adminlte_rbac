<?php

use yii\db\Migration;

class m161130_090206_add_admin_role extends Migration
{
    public function up()
    {
        $this->insert('user',[
            'id' => 1,
            'username' => 'admin',
            'username' => Yii::$app->security->generatePasswordHash('admin'),
            'email' => 'no_email@no_email.com'
        ]);
    }

    public function down()
    {
        $this->delete('user', 'id=1');
    }

}
