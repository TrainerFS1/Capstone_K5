<?php

namespace Illuminate\Database\Events;

use Illuminate\Contracts\Database\Events\MigrationEvent as MigrationEventContract;

class DatabaseRefreshed implements MigrationEventContract
{
<<<<<<< HEAD
    /**
     * Create a new event instance.
     *
     * @param  string|null  $database
     * @param  bool  seeding
     * @return void
     */
    public function __construct(
        public ?string $database = null,
        public bool $seeding = false
    ) {
        //
    }
=======
    //
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
