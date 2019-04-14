<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%property_for_rent}}`.
 */
class m190414_083858_create_property_for_rent_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%property_for_rent}}', [
            'id' => $this->primaryKey(),
            'property_no' => $this->string(5)->notNull(),
            'street' => $this->text(),
            'city' => $this->text(),
            'postcode' => $this->string(10),
            'type' => $this->string(50),
            'rooms' => $this->integer(5),
            'rent' => $this->float(7,2),
            'owner_id'=> $this->integer(11),
            'staff_id'=>$this->integer(11),
            'branch_id'=>$this->integer(11),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%property_for_rent}}');
    }
}
