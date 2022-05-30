<?php

use yii\db\Migration;

/**
 * Class m220530_115510_rename_wiewed_column_from_article_table
 */
class m220530_115510_rename_wiewed_column_from_article_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameColumn('article', 'wiewed', 'viewed');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220530_115510_rename_wiewed_column_from_article_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220530_115510_rename_wiewed_column_from_article_table cannot be reverted.\n";

        return false;
    }
    */
}
