<?php

/*
 * This file is part of Laravel Instagram.
 *
 * (c) Vincent Klaiber <hello@vinkla.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Default Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the connections below you wish to use as
    | your default connection for all work. Of course, you may use many
    | connections at once using the manager class.
    |
    */

    'default' => 'main',

    /*
    |--------------------------------------------------------------------------
    | Instagram Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the connections setup for your application. Example
    | configuration has been included, but you may add as many connections as
    | you would like.
    |
    */

    'connections' => [

        'main' => [
            'id' => '320730f3312b4c388f331765cff0f50f',
            'secret' => '6cd5097b41464707a8540eafe7859da5 ',
            'access_token' => '{ "access_token": "1243266622.320730f.659b024722194ad4a7de998b16b98ed3" }',
        ],

        'alternative' => [
            'id' => 'your-client-id',
            'secret' => 'your-client-secret',
            'access_token' => null,
        ],

    ],

];
