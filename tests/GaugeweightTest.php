<?php
/**
 * Tests for GaugeWeight
 */

use PHPUnit\Framework\TestCase;
use Gaugeweight\Gaugeweight;

class GaugeweightTest extends TestCase {
    private Gaugeweight $instance;

    protected function setUp(): void {
        $this->instance = new Gaugeweight(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Gaugeweight::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
