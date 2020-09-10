<?php

/*
 * This file is part of Flarum.
 *
 * For detailed copyright and license information, please view the
 * LICENSE file that was distributed with this source code.
 */

use Flarum\Database\Schema;
use Flarum\Database\Migration;

if (Schema::hasColumn('post_mentions_user', 'mentions_id')) {
    return Migration::renameColumn('post_mentions_post', 'mentions_id', 'mentions_post_id');
}
