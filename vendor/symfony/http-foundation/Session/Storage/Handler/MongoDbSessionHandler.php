<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpFoundation\Session\Storage\Handler;

use MongoDB\BSON\Binary;
use MongoDB\BSON\UTCDateTime;
use MongoDB\Client;
<<<<<<< HEAD
<<<<<<< HEAD
use MongoDB\Driver\BulkWrite;
use MongoDB\Driver\Manager;
use MongoDB\Driver\Query;

/**
 * Session handler using the MongoDB driver extension.
 *
 * @author Markus Bachmann <markus.bachmann@bachi.biz>
 * @author Jérôme Tamarelle <jerome@tamarelle.net>
 *
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use MongoDB\Collection;

/**
 * Session handler using the mongodb/mongodb package and MongoDB driver extension.
 *
 * @author Markus Bachmann <markus.bachmann@bachi.biz>
 *
 * @see https://packagist.org/packages/mongodb/mongodb
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
 * @see https://php.net/mongodb
 */
class MongoDbSessionHandler extends AbstractSessionHandler
{
<<<<<<< HEAD
<<<<<<< HEAD
    private Manager $manager;
    private string $namespace;
=======
    private Client $mongo;
    private Collection $collection;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    private Client $mongo;
    private Collection $collection;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    private array $options;
    private int|\Closure|null $ttl;

    /**
     * Constructor.
     *
     * List of available options:
     *  * database: The name of the database [required]
     *  * collection: The name of the collection [required]
     *  * id_field: The field name for storing the session id [default: _id]
     *  * data_field: The field name for storing the session data [default: data]
     *  * time_field: The field name for storing the timestamp [default: time]
     *  * expiry_field: The field name for storing the expiry-timestamp [default: expires_at]
     *  * ttl: The time to live in seconds.
     *
     * It is strongly recommended to put an index on the `expiry_field` for
     * garbage-collection. Alternatively it's possible to automatically expire
     * the sessions in the database as described below:
     *
     * A TTL collections can be used on MongoDB 2.2+ to cleanup expired sessions
     * automatically. Such an index can for example look like this:
     *
     *     db.<session-collection>.createIndex(
     *         { "<expiry-field>": 1 },
     *         { "expireAfterSeconds": 0 }
     *     )
     *
     * More details on: https://docs.mongodb.org/manual/tutorial/expire-data/
     *
     * If you use such an index, you can drop `gc_probability` to 0 since
     * no garbage-collection is required.
     *
     * @throws \InvalidArgumentException When "database" or "collection" not provided
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct(Client|Manager $mongo, array $options)
=======
    public function __construct(Client $mongo, array $options)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function __construct(Client $mongo, array $options)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        if (!isset($options['database']) || !isset($options['collection'])) {
            throw new \InvalidArgumentException('You must provide the "database" and "collection" option for MongoDBSessionHandler.');
        }

<<<<<<< HEAD
<<<<<<< HEAD
        if ($mongo instanceof Client) {
            $mongo = $mongo->getManager();
        }

        $this->manager = $mongo;
        $this->namespace = $options['database'].'.'.$options['collection'];
=======
        $this->mongo = $mongo;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        $this->mongo = $mongo;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        $this->options = array_merge([
            'id_field' => '_id',
            'data_field' => 'data',
            'time_field' => 'time',
            'expiry_field' => 'expires_at',
        ], $options);
        $this->ttl = $this->options['ttl'] ?? null;
    }

    public function close(): bool
    {
        return true;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    protected function doDestroy(#[\SensitiveParameter] string $sessionId): bool
    {
        $write = new BulkWrite();
        $write->delete(
            [$this->options['id_field'] => $sessionId],
            ['limit' => 1]
        );

        $this->manager->executeBulkWrite($this->namespace, $write);
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    protected function doDestroy(string $sessionId): bool
    {
        $this->getCollection()->deleteOne([
            $this->options['id_field'] => $sessionId,
        ]);
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        return true;
    }

    public function gc(int $maxlifetime): int|false
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $write = new BulkWrite();
        $write->delete(
            [$this->options['expiry_field'] => ['$lt' => $this->getUTCDateTime()]],
        );
        $result = $this->manager->executeBulkWrite($this->namespace, $write);

        return $result->getDeletedCount() ?? false;
    }

    protected function doWrite(#[\SensitiveParameter] string $sessionId, string $data): bool
    {
        $ttl = ($this->ttl instanceof \Closure ? ($this->ttl)() : $this->ttl) ?? \ini_get('session.gc_maxlifetime');
        $expiry = $this->getUTCDateTime($ttl);

        $fields = [
            $this->options['time_field'] => $this->getUTCDateTime(),
            $this->options['expiry_field'] => $expiry,
            $this->options['data_field'] => new Binary($data, Binary::TYPE_GENERIC),
        ];

        $write = new BulkWrite();
        $write->update(
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return $this->getCollection()->deleteMany([
            $this->options['expiry_field'] => ['$lt' => new UTCDateTime()],
        ])->getDeletedCount();
    }

    protected function doWrite(string $sessionId, string $data): bool
    {
        $ttl = ($this->ttl instanceof \Closure ? ($this->ttl)() : $this->ttl) ?? \ini_get('session.gc_maxlifetime');
        $expiry = new UTCDateTime((time() + (int) $ttl) * 1000);

        $fields = [
            $this->options['time_field'] => new UTCDateTime(),
            $this->options['expiry_field'] => $expiry,
            $this->options['data_field'] => new Binary($data, Binary::TYPE_OLD_BINARY),
        ];

        $this->getCollection()->updateOne(
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            [$this->options['id_field'] => $sessionId],
            ['$set' => $fields],
            ['upsert' => true]
        );

<<<<<<< HEAD
<<<<<<< HEAD
        $this->manager->executeBulkWrite($this->namespace, $write);

        return true;
    }

    public function updateTimestamp(#[\SensitiveParameter] string $sessionId, string $data): bool
    {
        $ttl = ($this->ttl instanceof \Closure ? ($this->ttl)() : $this->ttl) ?? \ini_get('session.gc_maxlifetime');
        $expiry = $this->getUTCDateTime($ttl);

        $write = new BulkWrite();
        $write->update(
            [$this->options['id_field'] => $sessionId],
            ['$set' => [
                $this->options['time_field'] => $this->getUTCDateTime(),
                $this->options['expiry_field'] => $expiry,
            ]],
            ['multi' => false],
        );

        $this->manager->executeBulkWrite($this->namespace, $write);

        return true;
    }

    protected function doRead(#[\SensitiveParameter] string $sessionId): string
    {
        $cursor = $this->manager->executeQuery($this->namespace, new Query([
            $this->options['id_field'] => $sessionId,
            $this->options['expiry_field'] => ['$gte' => $this->getUTCDateTime()],
        ], [
            'projection' => [
                '_id' => false,
                $this->options['data_field'] => true,
            ],
            'limit' => 1,
        ]));

        foreach ($cursor as $document) {
            return (string) $document->{$this->options['data_field']} ?? '';
        }

        // Not found
        return '';
    }

    private function getUTCDateTime(int $additionalSeconds = 0): UTCDateTime
    {
        return new UTCDateTime((time() + $additionalSeconds) * 1000);
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return true;
    }

    public function updateTimestamp(string $sessionId, string $data): bool
    {
        $ttl = ($this->ttl instanceof \Closure ? ($this->ttl)() : $this->ttl) ?? \ini_get('session.gc_maxlifetime');
        $expiry = new UTCDateTime((time() + (int) $ttl) * 1000);

        $this->getCollection()->updateOne(
            [$this->options['id_field'] => $sessionId],
            ['$set' => [
                $this->options['time_field'] => new UTCDateTime(),
                $this->options['expiry_field'] => $expiry,
            ]]
        );

        return true;
    }

    protected function doRead(string $sessionId): string
    {
        $dbData = $this->getCollection()->findOne([
            $this->options['id_field'] => $sessionId,
            $this->options['expiry_field'] => ['$gte' => new UTCDateTime()],
        ]);

        if (null === $dbData) {
            return '';
        }

        return $dbData[$this->options['data_field']]->getData();
    }

    private function getCollection(): Collection
    {
        return $this->collection ??= $this->mongo->selectCollection($this->options['database'], $this->options['collection']);
    }

    protected function getMongo(): Client
    {
        return $this->mongo;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }
}
