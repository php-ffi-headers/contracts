<?php

/**
 * This file is part of FFI package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace FFI\Contracts\Headers;

interface ProvidesVersionInterface
{
    /**
     * Returns version.
     *
     * @return VersionInterface
     */
    public function getVersion(): VersionInterface;
}
