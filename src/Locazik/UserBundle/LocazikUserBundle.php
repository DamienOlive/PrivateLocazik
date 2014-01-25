<?php

namespace Locazik\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class LocazikUserBundle extends Bundle
{
    public function getParent() 
    {
        return 'FOSUserBundle';
    }
}
