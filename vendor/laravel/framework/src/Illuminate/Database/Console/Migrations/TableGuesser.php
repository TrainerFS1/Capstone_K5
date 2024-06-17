<?php

namespace Illuminate\Database\Console\Migrations;

class TableGuesser
{
    const CREATE_PATTERNS = [
        '/^create_(\w+)_table$/',
        '/^create_(\w+)$/',
    ];

    const CHANGE_PATTERNS = [
<<<<<<< HEAD
        '/.+_(to|from|in)_(\w+)_table$/',
        '/.+_(to|from|in)_(\w+)$/',
=======
        '/_(to|from|in)_(\w+)_table$/',
        '/_(to|from|in)_(\w+)$/',
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    ];

    /**
     * Attempt to guess the table name and "creation" status of the given migration.
     *
     * @param  string  $migration
     * @return array
     */
    public static function guess($migration)
    {
        foreach (self::CREATE_PATTERNS as $pattern) {
            if (preg_match($pattern, $migration, $matches)) {
                return [$matches[1], $create = true];
            }
        }

        foreach (self::CHANGE_PATTERNS as $pattern) {
            if (preg_match($pattern, $migration, $matches)) {
                return [$matches[2], $create = false];
            }
        }
    }
}
