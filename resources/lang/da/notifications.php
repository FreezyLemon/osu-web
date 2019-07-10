<?php

/**
 *    Copyright (c) ppy Pty Ltd <contact@ppy.sh>.
 *
 *    This file is part of osu!web. osu!web is distributed with the hope of
 *    attracting more community contributions to the core ecosystem of osu!.
 *
 *    osu!web is free software: you can redistribute it and/or modify
 *    it under the terms of the Affero GNU General Public License version 3
 *    as published by the Free Software Foundation.
 *
 *    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
 *    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *    See the GNU Affero General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public License
 *    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
 */

return [
    'all_read' => 'Alle notifikationer læst!',
    'mark_all_read' => 'Ryd alt',
    'message_multi' => '',

    'item' => [
        'beatmapset' => [
            '_' => 'Beatmap',

            'beatmapset_discussion' => [
                '_' => 'Beatmap diskussion',
                'beatmapset_discussion_lock' => '',
                'beatmapset_discussion_post_new' => ':username har indsendt en ny besked i ":title" beatmap diskussion.',
                'beatmapset_discussion_unlock' => '',
            ],

            'beatmapset_state' => [
                '_' => 'Beatmap status ændret',
                'beatmapset_disqualify' => 'Beatmap ":title" er blevet diskvalificeret af :username.',
                'beatmapset_love' => 'Beatmap ":title" er blevet forfremmet som elsket af :username.',
                'beatmapset_nominate' => 'Beatmap ":title" er blevet nomineret af :username.',
                'beatmapset_qualify' => '',
                'beatmapset_reset_nominations' => '',
            ],
        ],

        'forum_topic' => [
            '_' => 'Forum emne',

            'forum_topic_reply' => [
                '_' => 'Nyt forum svar',
                'forum_topic_reply' => ':username svarede til forum emne ":title".',
            ],
        ],

        'legacy_pm' => [
            '_' => '',

            'legacy_pm' => [
                '_' => '',
                'legacy_pm' => '',
            ],
        ],
    ],
];
