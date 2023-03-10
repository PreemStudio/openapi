<?php

declare(strict_types=1);

namespace PreemStudio\OpenApi\Data\Actions;

use PreemStudio\OpenApi\Reader;

final class MapFlatArray
{
    public static function execute(Reader $reader, mixed $items, array|string $class): mixed
    {
        if (empty($items)) {
            return null;
        }

        if (is_bool($items) && is_array($class) && in_array('bool', $class)) {
            return $items;
        }

        return MapProperty::execute($reader, $items, is_array($class) ? $class[1] : $class);
    }
}
