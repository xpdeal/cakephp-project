<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'username' => 'Lorem ipsum dolor sit amet',
                'rule_id' => 1,
                'password' => 'Lorem ipsum dolor sit amet',
                'password_salt' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'name' => 'Lorem ipsum dolor sit amet',
                'surname' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-03-04 15:50:17',
                'updated' => '2023-03-04 15:50:17',
                'deleted' => '2023-03-04 15:50:17',
            ],
        ];
        parent::init();
    }
}
