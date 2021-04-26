<?php

namespace Tests\Unit\User;

use PHPUnit\Framework\TestCase;
use App\User;

class UserTest extends TestCase
{
    /** @test */
    public function check_if_user_columns_is_correct()
    {
        $user = new User();
        $expected = ['name', 'email', 'password', 'picture' ,'role_id'];
        $arrayCompared = array_diff($expected, $user->getFillable());
        $this->assertEquals(0, count($arrayCompared));
    }
}
