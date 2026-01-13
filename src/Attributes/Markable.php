<?php

declare(strict_types=1);

namespace SKulich\Markable\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS | Attribute::IS_REPEATABLE)]
class Markable
{
    public function __construct(public string $type)
    {
        if (! preg_match('/^[a-zA-Z0-9]+$/', $type)) {
            throw new \InvalidArgumentException('Mark type can contain only letters and digits.');
        }
    }
}
