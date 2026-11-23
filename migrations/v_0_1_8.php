<?php
/**
 *
 * GitHub Portfolio. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2026 MundoPHPBB
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace mundophpbb\githubportfolio\migrations;

class v_0_1_8 extends \phpbb\db\migration\migration
{
    public static function depends_on()
    {
        return ['\\mundophpbb\\githubportfolio\\migrations\\v_0_1_7'];
    }

    public function update_data()
    {
        return [
            ['config.add', ['mundophpbb_githubportfolio_sync_interval', 300]],
            ['config.add', ['mundophpbb_githubportfolio_sync_lock', '0', true]],
            ['config_text.add', ['mundophpbb_githubportfolio_sync_state', '{}']],
            ['if', [
                (int) $this->config['mundophpbb_githubportfolio_limit'] === 6,
                ['config.update', ['mundophpbb_githubportfolio_limit', 50]],
            ]],
        ];
    }

    public function revert_data()
    {
        return [
            ['config.remove', ['mundophpbb_githubportfolio_sync_interval']],
            ['config.remove', ['mundophpbb_githubportfolio_sync_lock']],
            ['config_text.remove', ['mundophpbb_githubportfolio_sync_state']],
        ];
    }
}
