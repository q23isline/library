<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\SessionsController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\SessionsController Test Case
 *
 * @link \App\Controller\SessionsController
 */
class SessionsControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Sessions',
    ];

    /**
     * Test login method
     *
     * @return void
     * @link \App\Controller\SessionsController::login()
     */
    public function testLogin(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
