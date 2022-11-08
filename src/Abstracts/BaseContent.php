<?php

namespace Rift\RiotApi\Abstracts;

use ReflectionClass;
use Rift\RiotApi\Interfaces\ContentInterface;

abstract class BaseContent implements ContentInterface
{
    public static function create(...$args): static
    {
        $self = new ReflectionClass(static::class);
        foreach ($self->getConstructor()->getParameters() as $param) {
            if ($param->getType()->isBuiltin()) {
                continue;
            }
            if (!($args[$param->getName()] ?? false) || !is_array($args[$param->getName()])) {
                continue;
            }
            $args[$param->getName()] = new ($param->getType()->getName())(...$args[$param->getName()]);
        }

        return new static(...$args);
    }
}
