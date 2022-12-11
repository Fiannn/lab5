<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{

    private $user;
    protected function setUp(): void
    {
        $this->user = new App\Lab5\Models\User();
        $this->user->setAge(19);

    }

    protected function tearDown(): void
    {

    }

    public function testAge()
    {
        $this->assertEquals(19, $this->user->getAge());
    }

    public function testAge2()
    {
        $this->assertEquals(20, $this->user->getAge());
    }

    /**
     * @dataProvider userProvider
     */
    public function testAge3($age)
    {
        $this->assertEquals($age, $this->user->getAge());
    }

    public function userProvider(): array
    {
        return
        [
            'test with 1' => [1],
            'test with 17' => [17],
            'test with 18' => [18],
            'test with 19' => [19],
        ];
    }

    public function testUser()
    {
        $stub = $this->createMock(\App\Lab5\Models\User::class);

        $stub->method('getName')->willReturn('foo');
        $this->assertSame('foo', $stub->getName());
    }
}
