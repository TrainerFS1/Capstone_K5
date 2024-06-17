<?php

namespace Illuminate\Cache;

use Illuminate\Database\Connection;
use Illuminate\Database\QueryException;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Illuminate\Support\Carbon;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
use Illuminate\Support\Carbon;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

class DatabaseLock extends Lock
{
    /**
     * The database connection instance.
     *
     * @var \Illuminate\Database\Connection
     */
    protected $connection;

    /**
     * The database table name.
     *
     * @var string
     */
    protected $table;

    /**
     * The prune probability odds.
     *
     * @var array
     */
    protected $lottery;

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * The default number of seconds that a lock should be held.
     *
     * @var int
     */
    protected $defaultTimeoutInSeconds;

    /**
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * Create a new lock instance.
     *
     * @param  \Illuminate\Database\Connection  $connection
     * @param  string  $table
     * @param  string  $name
     * @param  int  $seconds
     * @param  string|null  $owner
     * @param  array  $lottery
     * @return void
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct(Connection $connection, $table, $name, $seconds, $owner = null, $lottery = [2, 100], $defaultTimeoutInSeconds = 86400)
=======
    public function __construct(Connection $connection, $table, $name, $seconds, $owner = null, $lottery = [2, 100])
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function __construct(Connection $connection, $table, $name, $seconds, $owner = null, $lottery = [2, 100])
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        parent::__construct($name, $seconds, $owner);

        $this->connection = $connection;
        $this->table = $table;
        $this->lottery = $lottery;
<<<<<<< HEAD
<<<<<<< HEAD
        $this->defaultTimeoutInSeconds = $defaultTimeoutInSeconds;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * Attempt to acquire the lock.
     *
     * @return bool
     */
    public function acquire()
    {
        try {
            $this->connection->table($this->table)->insert([
                'key' => $this->name,
                'owner' => $this->owner,
                'expiration' => $this->expiresAt(),
            ]);

            $acquired = true;
        } catch (QueryException) {
            $updated = $this->connection->table($this->table)
                ->where('key', $this->name)
                ->where(function ($query) {
                    return $query->where('owner', $this->owner)->orWhere('expiration', '<=', time());
                })->update([
                    'owner' => $this->owner,
                    'expiration' => $this->expiresAt(),
                ]);

            $acquired = $updated >= 1;
        }

        if (random_int(1, $this->lottery[1]) <= $this->lottery[0]) {
            $this->connection->table($this->table)->where('expiration', '<=', time())->delete();
        }

        return $acquired;
    }

    /**
     * Get the UNIX timestamp indicating when the lock should expire.
     *
     * @return int
     */
    protected function expiresAt()
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $lockTimeout = $this->seconds > 0 ? $this->seconds : $this->defaultTimeoutInSeconds;

        return time() + $lockTimeout;
=======
        return $this->seconds > 0 ? time() + $this->seconds : Carbon::now()->addDays(1)->getTimestamp();
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        return $this->seconds > 0 ? time() + $this->seconds : Carbon::now()->addDays(1)->getTimestamp();
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * Release the lock.
     *
     * @return bool
     */
    public function release()
    {
        if ($this->isOwnedByCurrentProcess()) {
            $this->connection->table($this->table)
                        ->where('key', $this->name)
                        ->where('owner', $this->owner)
                        ->delete();

            return true;
        }

        return false;
    }

    /**
     * Releases this lock in disregard of ownership.
     *
     * @return void
     */
    public function forceRelease()
    {
        $this->connection->table($this->table)
                    ->where('key', $this->name)
                    ->delete();
    }

    /**
     * Returns the owner value written into the driver for this lock.
     *
     * @return string
     */
    protected function getCurrentOwner()
    {
        return optional($this->connection->table($this->table)->where('key', $this->name)->first())->owner;
    }

    /**
     * Get the name of the database connection being used to manage the lock.
     *
     * @return string
     */
    public function getConnectionName()
    {
        return $this->connection->getName();
    }
}
