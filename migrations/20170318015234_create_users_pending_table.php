<?php

use Phinx\Migration\AbstractMigration;

class CreateUsersPendingTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     */
    public function change()
    {
        $users_pending = $this->table('users_pending');
        $users_pending->addColumn('token', 'string')->addColumn('user_id', 'integer')->addForeignKey('user_id', 'users', 'id', ['delete' => 'cascade', 'update' => 'cascade'])
            ->addColumn('created_at', 'datetime', ['default' => 'CURRENT_TIMESTAMP'])
            ->addCOlumn('updated_at', 'datetime', ['null' =>true])
            ->save();
    }
}
