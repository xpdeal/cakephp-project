<?php

declare(strict_types=1);

use App\Services\UserService;
use Phinx\Migration\AbstractMigration;

final class UsersMigration extends AbstractMigration
{

    public function up(): void
    {
        $users = $this->table('users');
        $users->addColumn('username', 'string', ['limit' => 30])
            ->addColumn('rule_id', 'integer', ['default' => UserService::USER_RULE_DEFAULT])
            ->addColumn('password', 'string', ['limit' => 40])
            ->addColumn('password_salt', 'string', ['limit' => 40])
            ->addColumn('email', 'string', ['limit' => 100])
            ->addColumn('name', 'string', ['limit' => 30])
            ->addColumn('surname', 'string', ['limit' => 30])
            ->addColumn('created', 'datetime')
            ->addColumn('updated', 'datetime', ['null' => true])
            ->addColumn('deleted', 'datetime', ['null' => true])
            ->addIndex(['username', 'email'], ['unique' => true])
            ->create();
    }

    public function down()
    {
        $this->table('users')->drop()->save();
    }
}
