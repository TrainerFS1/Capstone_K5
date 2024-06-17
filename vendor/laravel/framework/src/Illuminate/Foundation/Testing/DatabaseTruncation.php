<?php

namespace Illuminate\Foundation\Testing;

use Illuminate\Contracts\Console\Kernel;
use Illuminate\Database\ConnectionInterface;
use Illuminate\Foundation\Testing\Traits\CanConfigureMigrationCommands;

trait DatabaseTruncation
{
    use CanConfigureMigrationCommands;

    /**
     * The cached names of the database tables for each connection.
     *
     * @var array
     */
    protected static array $allTables;

    /**
     * Truncate the database tables for all configured connections.
     *
     * @return void
     */
    protected function truncateDatabaseTables(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $this->beforeTruncatingDatabase();

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        // Migrate and seed the database on first run...
        if (! RefreshDatabaseState::$migrated) {
            $this->artisan('migrate:fresh', $this->migrateFreshUsing());

            $this->app[Kernel::class]->setArtisan(null);

            RefreshDatabaseState::$migrated = true;

            return;
        }

        // Always clear any test data on subsequent runs...
        $this->truncateTablesForAllConnections();

        if ($seeder = $this->seeder()) {
            // Use a specific seeder class...
            $this->artisan('db:seed', ['--class' => $seeder]);
        } elseif ($this->shouldSeed()) {
            // Use the default seeder class...
            $this->artisan('db:seed');
        }
<<<<<<< HEAD
<<<<<<< HEAD

        $this->afterTruncatingDatabase();
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * Truncate the database tables for all configured connections.
     *
     * @return void
     */
    protected function truncateTablesForAllConnections(): void
    {
        $database = $this->app->make('db');

        collect($this->connectionsToTruncate())
            ->each(function ($name) use ($database) {
                $connection = $database->connection($name);

                $connection->getSchemaBuilder()->withoutForeignKeyConstraints(
                    fn () => $this->truncateTablesForConnection($connection, $name)
                );
            });
    }

    /**
     * Truncate the database tables for the given database connection.
     *
     * @param  \Illuminate\Database\ConnectionInterface  $connection
     * @param  string|null  $name
     * @return void
     */
    protected function truncateTablesForConnection(ConnectionInterface $connection, ?string $name): void
    {
        $dispatcher = $connection->getEventDispatcher();

        $connection->unsetEventDispatcher();

        collect(static::$allTables[$name] ??= $connection->getDoctrineSchemaManager()->listTableNames())
            ->when(
                property_exists($this, 'tablesToTruncate'),
                fn ($tables) => $tables->intersect($this->tablesToTruncate),
                fn ($tables) => $tables->diff($this->exceptTables($name))
            )
<<<<<<< HEAD
<<<<<<< HEAD
            ->filter(fn ($table) => $connection->table($this->withoutTablePrefix($connection, $table))->exists())
            ->each(fn ($table) => $connection->table($this->withoutTablePrefix($connection, $table))->truncate());
=======
            ->filter(fn ($table) => $connection->table($table)->exists())
            ->each(fn ($table) => $connection->table($table)->truncate());
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            ->filter(fn ($table) => $connection->table($table)->exists())
            ->each(fn ($table) => $connection->table($table)->truncate());
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        $connection->setEventDispatcher($dispatcher);
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * Remove the table prefix from a table name, if it exists.
     *
     * @param  \Illuminate\Database\ConnectionInterface  $connection
     * @param  string  $table
     * @return string
     */
    protected function withoutTablePrefix(ConnectionInterface $connection, string $table)
    {
        $prefix = $connection->getTablePrefix();

        return strpos($table, $prefix) === 0
            ? substr($table, strlen($prefix))
            : $table;
    }

    /**
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * The database connections that should have their tables truncated.
     *
     * @return array
     */
    protected function connectionsToTruncate(): array
    {
        return property_exists($this, 'connectionsToTruncate')
                    ? $this->connectionsToTruncate : [null];
    }

    /**
     * Get the tables that should not be truncated.
     *
     * @param  string|null  $connectionName
     * @return array
     */
    protected function exceptTables(?string $connectionName): array
    {
        if (property_exists($this, 'exceptTables')) {
<<<<<<< HEAD
<<<<<<< HEAD
            $migrationsTable = $this->app['config']->get('database.migrations');

            if (array_is_list($this->exceptTables ?? [])) {
                return array_merge(
                    $this->exceptTables ?? [],
                    [$migrationsTable],
                );
            }

            return array_merge(
                $this->exceptTables[$connectionName] ?? [],
                [$migrationsTable],
=======
            return array_merge(
                $this->exceptTables[$connectionName] ?? [],
                [$this->app['config']->get('database.migrations')]
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            return array_merge(
                $this->exceptTables[$connectionName] ?? [],
                [$this->app['config']->get('database.migrations')]
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }

        return [$this->app['config']->get('database.migrations')];
    }
<<<<<<< HEAD
<<<<<<< HEAD

    /**
     * Perform any work that should take place before the database has started truncating.
     *
     * @return void
     */
    protected function beforeTruncatingDatabase(): void
    {
        //
    }

    /**
     * Perform any work that should take place once the database has finished truncating.
     *
     * @return void
     */
    protected function afterTruncatingDatabase(): void
    {
        //
    }
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
