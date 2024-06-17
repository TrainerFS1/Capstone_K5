<?php

namespace Illuminate\Database;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Collection;

class DatabaseTransactionsManager
{
    /**
     * All of the committed transactions.
     *
     * @var \Illuminate\Support\Collection<int, \Illuminate\Database\DatabaseTransactionRecord>
     */
    protected $committedTransactions;

    /**
     * All of the pending transactions.
     *
     * @var \Illuminate\Support\Collection<int, \Illuminate\Database\DatabaseTransactionRecord>
     */
    protected $pendingTransactions;

    /**
     * The current transaction.
     *
     * @var array
     */
    protected $currentTransaction = [];
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
class DatabaseTransactionsManager
{
    /**
     * All of the recorded transactions.
     *
     * @var \Illuminate\Support\Collection
     */
    protected $transactions;

    /**
     * The database transaction that should be ignored by callbacks.
     *
     * @var \Illuminate\Database\DatabaseTransactionRecord
     */
    protected $callbacksShouldIgnore;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Create a new database transactions manager instance.
     *
     * @return void
     */
    public function __construct()
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $this->committedTransactions = new Collection;
        $this->pendingTransactions = new Collection;
=======
        $this->transactions = collect();
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        $this->transactions = collect();
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * Start a new database transaction.
     *
     * @param  string  $connection
     * @param  int  $level
     * @return void
     */
    public function begin($connection, $level)
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $this->pendingTransactions->push(
            $newTransaction = new DatabaseTransactionRecord(
                $connection,
                $level,
                $this->currentTransaction[$connection] ?? null
            )
        );

        $this->currentTransaction[$connection] = $newTransaction;
    }

    /**
     * Commit the root database transaction and execute callbacks.
     *
     * @param  string  $connection
     * @param  int  $levelBeingCommitted
     * @param  int  $newTransactionLevel
     * @return array
     */
    public function commit($connection, $levelBeingCommitted, $newTransactionLevel)
    {
        $this->stageTransactions($connection, $levelBeingCommitted);

        if (isset($this->currentTransaction[$connection])) {
            $this->currentTransaction[$connection] = $this->currentTransaction[$connection]->parent;
        }

        if (! $this->afterCommitCallbacksShouldBeExecuted($newTransactionLevel) &&
            $newTransactionLevel !== 0) {
            return [];
        }

        // This method is only called when the root database transaction is committed so there
        // shouldn't be any pending transactions, but going to clear them here anyways just
        // in case. This method could be refactored to receive a level in the future too.
        $this->pendingTransactions = $this->pendingTransactions->reject(
            fn ($transaction) => $transaction->connection === $connection &&
                $transaction->level >= $levelBeingCommitted
        )->values();

        [$forThisConnection, $forOtherConnections] = $this->committedTransactions->partition(
            fn ($transaction) => $transaction->connection == $connection
        );

        $this->committedTransactions = $forOtherConnections->values();

        $forThisConnection->map->executeCallbacks();

        return $forThisConnection;
    }

    /**
     * Move relevant pending transactions to a committed state.
     *
     * @param  string  $connection
     * @param  int  $levelBeingCommitted
     * @return void
     */
    public function stageTransactions($connection, $levelBeingCommitted)
    {
        $this->committedTransactions = $this->committedTransactions->merge(
            $this->pendingTransactions->filter(
                fn ($transaction) => $transaction->connection === $connection &&
                                     $transaction->level >= $levelBeingCommitted
            )
        );

        $this->pendingTransactions = $this->pendingTransactions->reject(
            fn ($transaction) => $transaction->connection === $connection &&
                                 $transaction->level >= $levelBeingCommitted
=======
        $this->transactions->push(
            new DatabaseTransactionRecord($connection, $level)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        $this->transactions->push(
            new DatabaseTransactionRecord($connection, $level)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    /**
     * Rollback the active database transaction.
     *
     * @param  string  $connection
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  int  $newTransactionLevel
     * @return void
     */
    public function rollback($connection, $newTransactionLevel)
    {
        if ($newTransactionLevel === 0) {
            $this->removeAllTransactionsForConnection($connection);
        } else {
            $this->pendingTransactions = $this->pendingTransactions->reject(
                fn ($transaction) => $transaction->connection == $connection &&
                                     $transaction->level > $newTransactionLevel
            )->values();

            if ($this->currentTransaction) {
                do {
                    $this->removeCommittedTransactionsThatAreChildrenOf($this->currentTransaction[$connection]);

                    $this->currentTransaction[$connection] = $this->currentTransaction[$connection]->parent;
                } while (
                    isset($this->currentTransaction[$connection]) &&
                    $this->currentTransaction[$connection]->level > $newTransactionLevel
                );
            }
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @param  int  $level
     * @return void
     */
    public function rollback($connection, $level)
    {
        $this->transactions = $this->transactions->reject(
            fn ($transaction) => $transaction->connection == $connection && $transaction->level > $level
        )->values();

        if ($this->transactions->isEmpty()) {
            $this->callbacksShouldIgnore = null;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        }
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * Remove all pending, completed, and current transactions for the given connection name.
=======
     * Commit the active database transaction.
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * Commit the active database transaction.
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     *
     * @param  string  $connection
     * @return void
     */
<<<<<<< HEAD
<<<<<<< HEAD
    protected function removeAllTransactionsForConnection($connection)
    {
        $this->currentTransaction[$connection] = null;

        $this->pendingTransactions = $this->pendingTransactions->reject(
            fn ($transaction) => $transaction->connection == $connection
        )->values();

        $this->committedTransactions = $this->committedTransactions->reject(
            fn ($transaction) => $transaction->connection == $connection
        )->values();
    }

    /**
     * Remove all transactions that are children of the given transaction.
     *
     * @param  \Illuminate\Database\DatabaseTransactionRecord  $transaction
     * @return void
     */
    protected function removeCommittedTransactionsThatAreChildrenOf(DatabaseTransactionRecord $transaction)
    {
        [$removedTransactions, $this->committedTransactions] = $this->committedTransactions->partition(
            fn ($committed) => $committed->connection == $transaction->connection &&
                               $committed->parent === $transaction
        );

        // There may be multiple deeply nested transactions that have already committed that we
        // also need to remove. We will recurse down the children of all removed transaction
        // instances until there are no more deeply nested child transactions for removal.
        $removedTransactions->each(
            fn ($transaction) => $this->removeCommittedTransactionsThatAreChildrenOf($transaction)
        );
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function commit($connection)
    {
        [$forThisConnection, $forOtherConnections] = $this->transactions->partition(
            fn ($transaction) => $transaction->connection == $connection
        );

        $this->transactions = $forOtherConnections->values();

        $forThisConnection->map->executeCallbacks();

        if ($this->transactions->isEmpty()) {
            $this->callbacksShouldIgnore = null;
        }
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * Register a transaction callback.
     *
     * @param  callable  $callback
     * @return void
     */
    public function addCallback($callback)
    {
        if ($current = $this->callbackApplicableTransactions()->last()) {
            return $current->addCallback($callback);
        }

        $callback();
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * Get the transactions that are applicable to callbacks.
     *
     * @return \Illuminate\Support\Collection<int, \Illuminate\Database\DatabaseTransactionRecord>
     */
    public function callbackApplicableTransactions()
    {
        return $this->pendingTransactions;
    }

    /**
     * Determine if after commit callbacks should be executed for the given transaction level.
     *
     * @param  int  $level
     * @return bool
     */
    public function afterCommitCallbacksShouldBeExecuted($level)
    {
        return $level === 0;
    }

    /**
     * Get all of the pending transactions.
     *
     * @return \Illuminate\Support\Collection
     */
    public function getPendingTransactions()
    {
        return $this->pendingTransactions;
    }

    /**
     * Get all of the committed transactions.
     *
     * @return \Illuminate\Support\Collection
     */
    public function getCommittedTransactions()
    {
        return $this->committedTransactions;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * Specify that callbacks should ignore the given transaction when determining if they should be executed.
     *
     * @param  \Illuminate\Database\DatabaseTransactionRecord  $transaction
     * @return $this
     */
    public function callbacksShouldIgnore(DatabaseTransactionRecord $transaction)
    {
        $this->callbacksShouldIgnore = $transaction;

        return $this;
    }

    /**
     * Get the transactions that are applicable to callbacks.
     *
     * @return \Illuminate\Support\Collection
     */
    public function callbackApplicableTransactions()
    {
        return $this->transactions->reject(function ($transaction) {
            return $transaction === $this->callbacksShouldIgnore;
        })->values();
    }

    /**
     * Get all the transactions.
     *
     * @return \Illuminate\Support\Collection
     */
    public function getTransactions()
    {
        return $this->transactions;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }
}
