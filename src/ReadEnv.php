<?php


namespace App;


class ReadEnv
{

    public static function readEnv(): string
    {
        return getenv('TEST_ENV_VAR');
    }

}
