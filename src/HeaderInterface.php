<?php

/**
 * This file is part of headers package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace FFI\Contracts\Headers;

interface HeaderInterface extends \Stringable
{
    /**
     * Returns header string representation.
     *
     * @return string
     */
    public function __toString(): string;
}
