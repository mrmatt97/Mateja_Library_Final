<?php

return [

    /*
    | Default Hash Driver
    */

    'driver' => 'bcrypt',



    'bcrypt' => [
        'rounds' => env('BCRYPT_ROUNDS', 10),
    ],

    /*
    | Argon Options
    */

    'argon' => [
        'memory' => 1024,
        'threads' => 2,
        'time' => 2,
    ],

];
