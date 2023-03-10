<?php

declare(strict_types=1);

namespace PreemStudio\OpenApi\Data;

use PreemStudio\OpenApi\Data\Actions\MapArray;
use PreemStudio\OpenApi\Reader;
use Spatie\LaravelData\Data;

/**
 * @see https://github.com/OAI/OpenAPI-Specification/blob/main/versions/3.1.0.md#responses-object
 */
final class Responses extends Data
{
    public function __construct(
        /** @var Response[] | Reference[] */
        public array $items,
    ) {
        //
    }

    public static function fromReader(Reader $reader, array $data): self
    {
        return new self(
            items: MapArray::execute($reader, $data, Response::class),
        );
    }
}
