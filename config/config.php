<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Additional Language Sources
    |--------------------------------------------------------------------------
    |
    | Here you may add paths of directories with language files that cannot
    | be auto-detected to this array. They will then be loaded as well.
    |
    */

    'additional_paths' => [
        // 'a/path/to/a/language/directory'
    ],

    /*
    |--------------------------------------------------------------------------
    | Additional Languages
    |--------------------------------------------------------------------------
    |
    | Here you may add the ISO codes of additional target languages that you
    | want to support, if they cannot be auto-detected (when they are new).
    |
    */

    'additional_languages' => [
        'de',
        'es',
        'fr',
    ],

    /*
    |--------------------------------------------------------------------------
    | Enable User Authentication
    |--------------------------------------------------------------------------
    |
    | Set this to true to enable user authentication, false otherwise
    |
    */

    'user_authentication' => false,

    /*
    |--------------------------------------------------------------------------
    | User Manager Class
    |--------------------------------------------------------------------------
    |
    | This is the full qualified name of the class that is used to build
    | the user manager object. If you want to use something else than
    | Laravel's default user system you have to write your own user
    | manager class and replace the default class with your class
    |
    */

    'user_manager' => \ChrisKonnertz\TranslationFactory\User\UserManager::class,

    /*
    |--------------------------------------------------------------------------
    | Translation Reader Class
    |--------------------------------------------------------------------------
    |
    | This is the full qualified name of the class that is used to build
    | the translation reader object. If you want to use something else
    | than Laravel's default translation system you have to write
    | your own user reader class and replace the current value
    |
    */

    'translation_reader' => \ChrisKonnertz\TranslationFactory\IO\TranslationReader::class,

    /*
    |--------------------------------------------------------------------------
    | Translation Writer Class
    |--------------------------------------------------------------------------
    |
    | This is the full qualified name of the class that is used to build
    | the translation writer object. If you want to use something else
    | than Laravel's default translation system you have to write
    | your own user writer class and replace the current value
    |
    */

    'translation_writer' => \ChrisKonnertz\TranslationFactory\IO\TranslationWriter::class,

    /*
    |--------------------------------------------------------------------------
    | Language Detector Class
    |--------------------------------------------------------------------------
    |
    | This is the full qualified name of the class that is used to build
    | the language detector object. If you want to use something else
    | you have to write your own class and store its name here
    |
    */

    'language_detector' => \ChrisKonnertz\TranslationFactory\IO\LanguageDetector::class,

];