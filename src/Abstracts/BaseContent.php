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
            $class = $param->getType()->getName();
            if (is_subclass_of($class, ContentInterface::class)) {
                $args[$param->getName()] = $class::create(...$args[$param->getName()]);
            } else {
                $args[$param->getName()] = new $class(...$args[$param->getName()]);
            }
        }

        return new static(...$args);
    }
}
