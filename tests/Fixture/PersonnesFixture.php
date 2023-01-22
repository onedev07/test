<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PersonnesFixture
 */
class PersonnesFixture extends TestFixture
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
                'nom' => 'Lorem ipsum dolor sit amet',
                'prenoms' => 'Lorem ipsum dolor sit amet',
                'tel' => 'Lorem ipsum',
                'email' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-01-22 21:48:59',
                'modified' => '2023-01-22 21:48:59',
            ],
        ];
        parent::init();
    }
}
