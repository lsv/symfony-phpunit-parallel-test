<?php


namespace App;


class ReadEnv
{

    /**
     * @var string
     */
    private $variable;

    public function __construct(string $variable)
    {
        $this->variable = $variable;
    }

    public function readEnv(): string
    {
        return $this->variable;
    }
}
