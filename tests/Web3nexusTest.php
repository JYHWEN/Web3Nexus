<?php
/**
 * Tests for Web3Nexus
 */

use PHPUnit\Framework\TestCase;
use Web3nexus\Web3nexus;

class Web3nexusTest extends TestCase {
    private Web3nexus $instance;

    protected function setUp(): void {
        $this->instance = new Web3nexus(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Web3nexus::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
