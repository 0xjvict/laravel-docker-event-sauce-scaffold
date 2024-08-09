<?php

namespace Core\Abstractions;

use EventSauce\EventSourcing\AggregateRootId as EventSauceAggregateRootId;
use Ramsey\Uuid\Uuid;

abstract readonly class AggregateRootId implements EventSauceAggregateRootId
{
    private function __construct(private string $value)
    {
    }

    public static function generate(): static
    {
        return new static(Uuid::uuid4()->toString());
    }

    public static function fromString(string $aggregateRootId): static
    {
        return new static($aggregateRootId);
    }

    public function toString(): string
    {
        return $this->value;
    }
}
