<?php

declare(strict_types=1);

/*
 * Copyright (C) 2013 Mailgun
 *
 * This software may be modified and distributed under the terms
 * of the MIT license. See the LICENSE file for details.
 */

namespace Mailgun\Exception;

use Mailgun\Exception;

/**
 * @author Radoje Albijanic <radoje.albijanic@gmail.com>
 */
final class FailedToOpenFileException extends \Exception implements Exception
{
    public static function create(): self
    {
        return new self("Unable to open file.");
    }

    public static function createWithMessage(string $message): self
    {
        return new self($message);
    }
}