<?php

namespace EcampCourseAim;

use EcampCore\Plugin\AbstractStrategyFactory;

class StrategyFactory
    extends AbstractStrategyFactory
{
    public function createStrategy()
    {
        return new Strategy($this->serviceLocator, $this->entityManager);
    }
}
