<?php
/**
 *
 * GitHub Portfolio. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2026 MundoPHPBB
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace mundophpbb\githubportfolio\acp;

class main_info
{
    public function module()
    {
        return [
            'filename'  => '\\mundophpbb\\githubportfolio\\acp\\main_module',
            'title'     => 'ACP_GITHUBPORTFOLIO',
            'modes'     => [
                'settings' => [
                    'title' => 'ACP_GITHUBPORTFOLIO_SETTINGS',
                    'auth'  => 'ext_mundophpbb/githubportfolio && acl_a_board',
                    'cat'   => ['ACP_GITHUBPORTFOLIO'],
                ],
            ],
        ];
    }

    public function install()
    {
    }

    public function uninstall()
    {
    }
}
