<?php
/**
 *
 * GitHub Portfolio. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2026 MundoPHPBB
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace mundophpbb\githubportfolio\cron\task;

use mundophpbb\githubportfolio\service\github_api;

class sync extends \phpbb\cron\task\base
{
    public function __construct(private github_api $github_api)
    {
    }

    public function is_runnable()
    {
        return $this->github_api->is_sync_enabled();
    }

    public function should_run()
    {
        return $this->github_api->is_sync_due();
    }

    public function run()
    {
        $this->github_api->sync_batch();
    }
}
