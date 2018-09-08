<?php

use yii\db\Migration;

/**
 * Class m180906_172508_ttt_create
 */
class m180906_172508_ttt_create extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('c', array(
            'id' => $this->primaryKey(),
            'category_id' => $this->integer(),
            'amount' => $this->float(),
            'str' => $this->string(),
            'text' => $this->text()
        ));

//        $this->addColumn(
//            'ttt',
//            array(
//                'sss' => $this->double()
//            )
//        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('ttt');

        $this->dropColumn('ttt', '');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180906_172508_ttt_create cannot be reverted.\n";

        return false;
    }
    */
}
