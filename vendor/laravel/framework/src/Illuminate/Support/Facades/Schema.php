<?php

namespace Illuminate\Support\Facades;

/**
 * @method static void defaultStringLength(int $length)
 * @method static void defaultMorphKeyType(string $type)
 * @method static void morphUsingUuids()
 * @method static void morphUsingUlids()
 * @method static void useNativeSchemaOperationsIfPossible(bool $value = true)
 * @method static bool createDatabase(string $name)
 * @method static bool dropDatabaseIfExists(string $name)
 * @method static bool hasTable(string $table)
<<<<<<< HEAD
 * @method static bool hasView(string $view)
 * @method static array getTables()
 * @method static array getTableListing()
 * @method static array getViews()
 * @method static array getTypes()
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
 * @method static bool hasColumn(string $table, string $column)
 * @method static bool hasColumns(string $table, array $columns)
 * @method static void whenTableHasColumn(string $table, string $column, \Closure $callback)
 * @method static void whenTableDoesntHaveColumn(string $table, string $column, \Closure $callback)
<<<<<<< HEAD
 * @method static string getColumnType(string $table, string $column, bool $fullDefinition = false)
 * @method static array getColumnListing(string $table)
 * @method static array getColumns(string $table)
 * @method static array getIndexes(string $table)
 * @method static array getIndexListing(string $table)
 * @method static bool hasIndex(string $table, string|array $index, string|null $type = null)
 * @method static array getForeignKeys(string $table)
=======
 * @method static string getColumnType(string $table, string $column)
 * @method static array getColumnListing(string $table)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
 * @method static void table(string $table, \Closure $callback)
 * @method static void create(string $table, \Closure $callback)
 * @method static void drop(string $table)
 * @method static void dropIfExists(string $table)
 * @method static void dropColumns(string $table, string|array $columns)
 * @method static void dropAllTables()
 * @method static void dropAllViews()
 * @method static void dropAllTypes()
<<<<<<< HEAD
=======
 * @method static array getAllTables()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
 * @method static void rename(string $from, string $to)
 * @method static bool enableForeignKeyConstraints()
 * @method static bool disableForeignKeyConstraints()
 * @method static mixed withoutForeignKeyConstraints(\Closure $callback)
 * @method static \Illuminate\Database\Connection getConnection()
 * @method static \Illuminate\Database\Schema\Builder setConnection(\Illuminate\Database\Connection $connection)
 * @method static void blueprintResolver(\Closure $resolver)
<<<<<<< HEAD
 * @method static void macro(string $name, object|callable $macro)
 * @method static void mixin(object $mixin, bool $replace = true)
 * @method static bool hasMacro(string $name)
 * @method static void flushMacros()
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
 *
 * @see \Illuminate\Database\Schema\Builder
 */
class Schema extends Facade
{
    /**
     * Indicates if the resolved facade should be cached.
     *
     * @var bool
     */
    protected static $cached = false;

    /**
     * Get a schema builder instance for a connection.
     *
     * @param  string|null  $name
     * @return \Illuminate\Database\Schema\Builder
     */
    public static function connection($name)
    {
        return static::$app['db']->connection($name)->getSchemaBuilder();
    }

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'db.schema';
    }
}
