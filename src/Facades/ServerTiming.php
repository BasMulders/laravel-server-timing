<?php

namespace BeyondCode\ServerTiming\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static addMetric(string $metric)
 * @method static hasStartedEvent(string $key): bool
 * @method static measure(string $key)
 * @method static start(string $key)
 * @method static stop(string $key)
 * @method static stopAllUnfinishedEvents()
 * @method static setDuration(string $key, $duration)
 * @method static getDuration(string $key)
 * @method static events(): array
 *
 * @see \BeyondCode\ServerTiming\ServerTiming
 */
class ServerTiming extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \BeyondCode\ServerTiming\ServerTiming::class;
    }
}
