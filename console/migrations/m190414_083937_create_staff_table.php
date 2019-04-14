<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%staff}}`.
 */
class m190414_083937_create_staff_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%staff}}', [
            'id' => $this->primaryKey(),
            'staff_no' => $this->string(5)->notNull(),
            'f_name' => $this->string(100),
            'l_name' => $this->string(100),
            'position' => $this->string(50),
            'sex' => $this->string(2),
            'd_o_b' => $this->date(),
            'salary'=> $this->float(7,2),
            'branch'=>$this->integer(11),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%staff}}');
    }
}
