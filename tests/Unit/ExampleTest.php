<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{

    public function is_majeur(int $age): bool
    {
        if($age >= 100){
            return false;
        }
        if($age >= 18) {
            return true;
        }
        return false;
    }

    public function test_gt_18()
    {
        $result = $this->is_majeur(18);
        $this->assertTrue($result);
        $result = $this->is_majeur(19);
        $this->assertTrue($result);
        $result = $this->is_majeur(30);
        $this->assertTrue($result);
        $result = $this->is_majeur(99);
        $this->assertTrue($result);
        $result = $this->is_majeur(100);
        $this->assertFalse($result);
        $result = $this->is_majeur(1000);
        $this->assertFalse($result);
    }

    public function test_lt_18()
    {
        $result = $this->is_majeur(17);
        $this->assertFalse($result);
        $result = $this->is_majeur(1);
        $this->assertFalse($result);
        $result = $this->is_majeur(-1);
        $this->assertFalse($result);
    }

    public function test_type()
    {
        $result = $this->is_majeur(-1);
        $this->assertIsBool($result);
        $result = $this->is_majeur(18);
        $this->assertIsBool($result);
        $result = $this->is_majeur(100);
        $this->assertIsBool($result);
        $result = $this->is_majeur(200);
        $this->assertIsBool($result);
    }

    // EXEMPLE TDD (Test Driven Development)

    public function is_mineur($age)
    {
        if($age == 18) {
            return False;
        }
        if($age == 17) {
            return True;
        }
    }

    public function test_is_mineur()
    {
        $age = 18;
        $result = $this->is_mineur($age);
        $this->assertFalse($result);
        $age = 17;
        $result = $this->is_mineur($age);
        $this->assertTrue($result);
        $age = -17;
        $result = $this->is_mineur($age);
        $this->assertFalse($result);
        $this->assertIsBool($result);
        $age = 12;
        $this->assertIsInt($age);
    }

}
