<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%client}}`.
 */
class m190414_083808_create_client_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%client}}', [
            'id' => $this->primaryKey(),
            'client_no' => $this->string(5)->notNull(), 
            'f_name' => $this->string(100),
            'l_name' => $this->string(100),
            'tel_no' => $this->string(11),
            'pref_type' => $this->string(50),
            'max_rent' => $this->float(7,2),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%client}}');
    }
}
