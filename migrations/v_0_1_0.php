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

class v_0_1_0 extends \phpbb\db\migration\migration
{
    public function effectively_installed()
    {
        return isset($this->config['mundophpbb_githubportfolio_enabled']);
    }

    public static function depends_on()
    {
        return ['\phpbb\db\migration\data\v33x\v331'];
    }

    public function update_data()
    {
        return [
            ['config.add', ['mundophpbb_githubportfolio_enabled', 1]],
            ['config.add', ['mundophpbb_githubportfolio_username', '']],
            ['config.add', ['mundophpbb_githubportfolio_token', '']],
            ['config.add', ['mundophpbb_githubportfolio_limit', 6]],
            ['config.add', ['mundophpbb_githubportfolio_cache_ttl', 1800]],
            ['config.add', ['mundophpbb_githubportfolio_hide_forks', 1]],
            ['config.add', ['mundophpbb_githubportfolio_hide_archived', 1]],
            ['config.add', ['mundophpbb_githubportfolio_show_portal_block', 1]],
            ['config.add', ['mundophpbb_githubportfolio_portal_title', '']],
            ['config.add', ['mundophpbb_githubportfolio_portal_limit', 4]],

            ['module.add', [
                'acp',
                'ACP_CAT_DOT_MODS',
                'ACP_GITHUBPORTFOLIO'
            ]],
            ['module.add', [
                'acp',
                'ACP_GITHUBPORTFOLIO',
                [
                    'module_basename' => '\mundophpbb\githubportfolio\acp\main_module',
                    'modes' => ['settings'],
                ],
            ]],
        ];
    }

    public function revert_data()
    {
        return [
            ['module.remove', [
                'acp',
                '\mundophpbb\githubportfolio\acp\main_module',
                'settings',
            ]],
            ['module.remove', [
                'acp',
                'ACP_GITHUBPORTFOLIO',
            ]],

            ['config.remove', ['mundophpbb_githubportfolio_enabled']],
            ['config.remove', ['mundophpbb_githubportfolio_username']],
            ['config.remove', ['mundophpbb_githubportfolio_token']],
            ['config.remove', ['mundophpbb_githubportfolio_limit']],
            ['config.remove', ['mundophpbb_githubportfolio_cache_ttl']],
            ['config.remove', ['mundophpbb_githubportfolio_hide_forks']],
            ['config.remove', ['mundophpbb_githubportfolio_hide_archived']],
            ['config.remove', ['mundophpbb_githubportfolio_show_portal_block']],
            ['config.remove', ['mundophpbb_githubportfolio_portal_title']],
            ['config.remove', ['mundophpbb_githubportfolio_portal_limit']],
        ];
    }
}
