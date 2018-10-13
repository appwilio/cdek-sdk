<?php

/**
 * This file is part of Cdek SDK package.
 *
 * © Appwilio (http://appwilio.com), greabock (https://github.com/greabock), JhaoDa (https://github.com/jhaoda)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Appwilio\CdekSDK\Responses\Types;

class Message
{
    /** @var string */
    protected $text;

    /** @var string|null */
    protected $errorCode;

    public function __construct(string $text, ?string $errorCode = null)
    {
        $this->text = $text;
        $this->errorCode = $errorCode;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function isError(): bool
    {
        return (bool) $this->errorCode;
    }
}
