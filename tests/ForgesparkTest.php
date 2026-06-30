<?php
/**
 * Tests for ForgeSpark
 */

use PHPUnit\Framework\TestCase;
use Forgespark\Forgespark;

class ForgesparkTest extends TestCase {
    private Forgespark $instance;

    protected function setUp(): void {
        $this->instance = new Forgespark(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Forgespark::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
