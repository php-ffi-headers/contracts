<?php

/**
 * This file is part of FFI package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace FFI\Contracts\Headers\Tests;

use FFI\Contracts\Headers\Version;

class VersionTestCase extends TestCase
{
    public function testVersionRendering(): void
    {
        $version = Version::fromString('1.2.3');

        $this->assertSame('1.2.3', $version->toString());
    }

    public function testEq(): void
    {
        $this->assertTrue(
            Version::fromString('1.2.3')
                ->eq(Version::fromString('1.2.3'))
        );

        $this->assertTrue(
            Version::fromString('1.2.3')
                ->eq('1.2.3')
        );
    }

    public function testNotEq(): void
    {
        $this->assertFalse(
            Version::fromString('1.2.3')
                ->eq(Version::fromString('1.2.1'))
        );
    }

    public function testNeq(): void
    {
        $this->assertTrue(
            Version::fromString('1.2.3')
                ->neq(Version::fromString('3.2.1'))
        );

        $this->assertTrue(
            Version::fromString('1.2.3')
                ->neq('3.2.1')
        );
    }

    public function testNotNeq(): void
    {
        $this->assertFalse(
            Version::fromString('1.2.3')
                ->neq(Version::fromString('1.2.3'))
        );
    }

    public function testLt(): void
    {
        $this->assertTrue(
            Version::fromString('1.2.3')
                ->lt(Version::fromString('2.0.0'))
        );

        $this->assertTrue(
            Version::fromString('1.2.3')
                ->lt('2.0.0')
        );
    }

    public function testNotLt(): void
    {
        $this->assertFalse(
            Version::fromString('1.2.3')
                ->lt(Version::fromString('1.0.0'))
        );

        $this->assertFalse(
            Version::fromString('1.2.3')
                ->lt(Version::fromString('1.2.3'))
        );
    }

    public function testGt(): void
    {
        $this->assertTrue(
            Version::fromString('1.2.3')
                ->gt(Version::fromString('1.0.0'))
        );

        $this->assertTrue(
            Version::fromString('1.2.3')
                ->gt('1.0.0')
        );
    }

    public function testNotGt(): void
    {
        $this->assertFalse(
            Version::fromString('1.2.3')
                ->gt(Version::fromString('2.0.0'))
        );

        $this->assertFalse(
            Version::fromString('1.2.3')
                ->gt(Version::fromString('1.2.3'))
        );
    }

    public function testLte(): void
    {
        $this->assertTrue(
            Version::fromString('1.2.3')
                ->lte(Version::fromString('2.0.0'))
        );

        $this->assertTrue(
            Version::fromString('1.2.3')
                ->lte('2.0.0')
        );

        $this->assertTrue(
            Version::fromString('1.2.3')
                ->lte(Version::fromString('1.2.3'))
        );

        $this->assertTrue(
            Version::fromString('1.2.3')
                ->lte('1.2.3')
        );
    }

    public function testNotLte(): void
    {
        $this->assertFalse(
            Version::fromString('1.2.3')
                ->lte(Version::fromString('1.0.0'))
        );
    }

    public function testGte(): void
    {
        $this->assertTrue(
            Version::fromString('1.2.3')
                ->gte(Version::fromString('1.0.0'))
        );

        $this->assertTrue(
            Version::fromString('1.2.3')
                ->gte('1.0.0')
        );

        $this->assertTrue(
            Version::fromString('1.2.3')
                ->gte(Version::fromString('1.2.3'))
        );

        $this->assertTrue(
            Version::fromString('1.2.3')
                ->gte('1.2.3')
        );
    }

    public function testNotGte(): void
    {
        $this->assertFalse(
            Version::fromString('1.2.3')
                ->gte(Version::fromString('2.0.0'))
        );
    }
}
