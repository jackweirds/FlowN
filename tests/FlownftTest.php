<?php
/**
 * Tests for FlowNFT
 */

use PHPUnit\Framework\TestCase;
use Flownft\Flownft;

class FlownftTest extends TestCase {
    private Flownft $instance;

    protected function setUp(): void {
        $this->instance = new Flownft(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Flownft::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
