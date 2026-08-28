<?php
/**
 * Tests for ZephyrState
 */

use PHPUnit\Framework\TestCase;
use Zephyrstate\Zephyrstate;

class ZephyrstateTest extends TestCase {
    private Zephyrstate $instance;

    protected function setUp(): void {
        $this->instance = new Zephyrstate(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Zephyrstate::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
