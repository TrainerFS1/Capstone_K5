<?php

namespace Illuminate\Notifications;

use Illuminate\Database\Eloquent\Collection;

<<<<<<< HEAD
/**
 * @template TKey of array-key
 * @template TModel of DatabaseNotification
 *
 * @extends \Illuminate\Database\Eloquent\Collection<TKey, TModel>
 */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
class DatabaseNotificationCollection extends Collection
{
    /**
     * Mark all notifications as read.
     *
     * @return void
     */
    public function markAsRead()
    {
        $this->each->markAsRead();
    }

    /**
     * Mark all notifications as unread.
     *
     * @return void
     */
    public function markAsUnread()
    {
        $this->each->markAsUnread();
    }
}
