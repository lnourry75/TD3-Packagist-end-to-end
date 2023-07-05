<?php

declare (strict_types=1);

namespace Lnourry75\Rendu1packagistendtoend;


class Api
{
    public function getRandomNumber() : int
    {
        return rand(0, 100);
    }
}