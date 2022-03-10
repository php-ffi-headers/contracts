<?php

/**
 * This file is part of FFI package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace FFI\Contracts\Headers;

/**
 * @psalm-type VersionStringType = non-empty-string
 */
interface VersionInterface
{
    /**
     * Returns string representation of the version.
     *
     * @return VersionStringType
     */
    public function toString(): string;
}
