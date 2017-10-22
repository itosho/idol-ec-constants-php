<?php

namespace Itosho\IdolEcConstantsPhp;

use Yosymfony\Toml\Toml;

class ConstantsDictionary
{
    private $constants;

    public function __construct()
    {
        $this->constants = Toml::Parse(__DIR__ . '/../modules/constants/constants.toml');
    }

    public function getAll()
    {
        return $this->constants;
    }

    public function get($keyName)
    {
        return $this->constants[$keyName];
    }
}
