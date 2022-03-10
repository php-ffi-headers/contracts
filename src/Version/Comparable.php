<?php

/**
 * This file is part of FFI package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace FFI\Contracts\Headers\Version;

use FFI\Contracts\Headers\Version;
use FFI\Contracts\Headers\VersionInterface;

/**
 * @mixin ComparableInterface
 * @mixin VersionInterface
 *
 * @psalm-require-implements ComparableInterface
 * @psalm-require-implements VersionInterface
 *
 * @psalm-import-type VersionStringType from VersionInterface
 */
trait Comparable
{
    /**
     * @param VersionInterface|VersionStringType $version
     * @return VersionInterface
     */
    private function make(VersionInterface|string $version): VersionInterface
    {
        if ($version instanceof VersionInterface) {
            return $version;
        }

        return Version::fromString($version);
    }

    /**
     * {@inheritDoc}
     * @psalm-suppress ArgumentTypeCoercion
     */
    public function eq(VersionInterface|string $version): bool
    {
        return \version_compare($this->toString(), $this->make($version)->toString(), '=');
    }

    /**
     * {@inheritDoc}
     * @psalm-suppress ArgumentTypeCoercion
     */
    public function neq(VersionInterface|string $version): bool
    {
        return \version_compare($this->toString(), $this->make($version)->toString(), '<>');
    }

    /**
     * {@inheritDoc}
     * @psalm-suppress ArgumentTypeCoercion
     */
    public function gt(VersionInterface|string $version): bool
    {
        return \version_compare($this->toString(), $this->make($version)->toString(), '>');
    }

    /**
     * {@inheritDoc}
     * @psalm-suppress ArgumentTypeCoercion
     */
    public function gte(VersionInterface|string $version): bool
    {
        return \version_compare($this->toString(), $this->make($version)->toString(), '>=');
    }

    /**
     * {@inheritDoc}
     * @psalm-suppress ArgumentTypeCoercion
     */
    public function lt(VersionInterface|string $version): bool
    {
        return \version_compare($this->toString(), $this->make($version)->toString(), '<');
    }

    /**
     * {@inheritDoc}
     * @psalm-suppress ArgumentTypeCoercion
     */
    public function lte(VersionInterface|string $version): bool
    {
        return \version_compare($this->toString(), $this->make($version)->toString(), '<=');
    }

    /**
     * {@inheritDoc}
     */
    abstract public function toString(): string;
}
