<?php

    /** PHPUnit namespace */
    use PHPUnit\Framework\TestCase;

    final class testTest extends TestCase
    {
        public function testRunTest(): void
        {
            $new_instance = new \Project\App();

            $this->assertEquals(
                'bar',
                $new_instance->foo()
            );
        }
    }
