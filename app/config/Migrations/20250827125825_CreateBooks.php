<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateBooks extends BaseMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/migrations/4/en/migrations.html#the-change-method
     *
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('books');
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
            'comment' => '本の名前',
        ]);
        $table->addColumn('author', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
            'comment' => '著者',
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
            'comment' => '作成日',
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
            'comment' => '作成日',
        ]);
        $table->create();
    }
}
