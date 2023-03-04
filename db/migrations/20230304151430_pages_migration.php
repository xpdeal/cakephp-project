<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class PagesMigration extends AbstractMigration
{

    public function up(): void
    {
        $table = $this->table('pages', ['id' => 'user_id']);
        $table
            ->addColumn('slug', 'string')
            ->addColumn('title', 'string')
            ->addColumn('content', 'text')
            ->addColumn('created', 'datetime')
            ->addColumn('updated', 'datetime', ['null' => true])
            ->addColumn('deleted', 'datetime', ['null' => true])
            ->addIndex(['slug'], ['unique' => true])
            ->create();
    }

    public function down(): void
    {
        $this->table('pages')->drop()->save();
    }
}
