<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class MyNewUsers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void
    {
        $users = $this->table('users');
        $users->addColumn('username', 'string', ['limit' => 30])
            ->addColumn('password', 'string', ['limit' => 40])
            ->addColumn('password_salt', 'string', ['limit' => 40])
            ->addColumn('email', 'string', ['limit' => 100])
            ->addColumn('first_name', 'string', ['limit' => 30])
            ->addColumn('last_name', 'string', ['limit' => 30])
            ->addColumn('created', 'datetime')
            ->addColumn('updated', 'datetime', ['null' => true])
            ->addColumn('deleted', 'datetime', ['null' => true])
            ->addIndex(['username', 'email'], ['unique' => true])
            ->create();
    }
}
