<?php
/**
 * Tests for MeshChain
 */

use PHPUnit\Framework\TestCase;
use Meshchain\Meshchain;

class MeshchainTest extends TestCase {
    private Meshchain $instance;

    protected function setUp(): void {
        $this->instance = new Meshchain(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Meshchain::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
