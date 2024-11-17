<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Hash Driver
    |--------------------------------------------------------------------------
    |
    | This option controls the default hash driver that will be used to hash
    | passwords for your application. By default, the bcrypt algorithm is
    | used; however, you remain free to modify this option if you wish.
    |
    | Supported: "bcrypt", "argon", "argon2id"
    |
    */

    'driver' => 'bcrypt',

    /*
    |--------------------------------------------------------------------------
    | Bcrypt Options
    |--------------------------------------------------------------------------
    |
    | Here you may specify the configuration options that should be used when
    | passwords are hashed using the Bcrypt algorithm. This will allow you
    | to control the amount of time it takes to hash the given password.
    |
    */

    'bcrypt' => [
<<<<<<< HEAD
        'rounds' => env('BCRYPT_ROUNDS', 12),
        'verify' => true,
=======
<<<<<<< HEAD
        'rounds' => env('BCRYPT_ROUNDS', 12),
        'verify' => true,
=======
        'rounds' => env('BCRYPT_ROUNDS', 10),
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
    ],

    /*
    |--------------------------------------------------------------------------
    | Argon Options
    |--------------------------------------------------------------------------
    |
    | Here you may specify the configuration options that should be used when
    | passwords are hashed using the Argon algorithm. These will allow you
    | to control the amount of time it takes to hash the given password.
    |
    */

    'argon' => [
        'memory' => 65536,
        'threads' => 1,
        'time' => 4,
<<<<<<< HEAD
        'verify' => true,
=======
<<<<<<< HEAD
        'verify' => true,
=======
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
    ],

];
