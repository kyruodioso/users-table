<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class User extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
          // create the table
          $table = $this->table('users');
          $table->addColumn('first_name', 'char')
                ->addColumn('last_name', 'char')
                ->addColumn('created', 'datetime')
                ->create();
    }
}
