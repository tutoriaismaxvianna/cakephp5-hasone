<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TelephonesFixture
 */
class TelephonesFixture extends TestFixture
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
                'user_id' => 1,
                'phone_number' => 'Lorem ipsum dolor ',
                'created' => '2023-10-15 23:42:41',
                'modified' => '2023-10-15 23:42:41',
            ],
        ];
        parent::init();
    }
}
