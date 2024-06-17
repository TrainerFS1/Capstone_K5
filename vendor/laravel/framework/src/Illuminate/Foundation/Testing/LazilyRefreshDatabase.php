<?php

namespace Illuminate\Foundation\Testing;

trait LazilyRefreshDatabase
{
    use RefreshDatabase {
        refreshDatabase as baseRefreshDatabase;
    }

    /**
     * Define hooks to migrate the database before and after each test.
     *
     * @return void
     */
    public function refreshDatabase()
    {
        $database = $this->app->make('db');

<<<<<<< HEAD
        $callback = function () {
=======
        $database->beforeExecuting(function () {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            if (RefreshDatabaseState::$lazilyRefreshed) {
                return;
            }

            RefreshDatabaseState::$lazilyRefreshed = true;

<<<<<<< HEAD
            $shouldMockOutput = $this->mockConsoleOutput;

            $this->mockConsoleOutput = false;

            $this->baseRefreshDatabase();

            $this->mockConsoleOutput = $shouldMockOutput;
        };

        $database->beforeStartingTransaction($callback);
        $database->beforeExecuting($callback);
=======
            $this->baseRefreshDatabase();
        });
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        $this->beforeApplicationDestroyed(function () {
            RefreshDatabaseState::$lazilyRefreshed = false;
        });
    }
}
