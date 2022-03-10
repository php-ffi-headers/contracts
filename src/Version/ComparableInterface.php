<?php

/**
 * This file is part of FFI package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace FFI\Contracts\Headers\Version;

use FFI\Contracts\Headers\VersionInterface;

/**
 * @psalm-import-type VersionStringType from VersionInterface
 */
interface ComparableInterface extends VersionInterface
{
    /**
     * @param VersionInterface|VersionStringType $version
     * @return bool
     */
    public function eq(VersionInterface|string $version): bool;

    /**
     * @param VersionInterface|VersionStringType $version
     * @return bool
     */
    public function neq(VersionInterface|string $version): bool;

    /**
     * @param VersionInterface|VersionStringType $version
     * @return bool
     */
    public function gt(VersionInterface|string $version): bool;

    /**
     * @param VersionInterface|VersionStringType $version
     * @return bool
     */
    public function gte(VersionInterface|string $version): bool;

    /**
     * @param VersionInterface|VersionStringType $version
     * @return bool
     */
    public function lt(VersionInterface|string $version): bool;

    /**
     * @param VersionInterface|VersionStringType $version
     * @return bool
     */
    public function lte(VersionInterface|string $version): bool;
}
