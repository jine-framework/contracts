<?php

declare(strict_types=1);

namespace Jine\Contracts\Service;

interface ActionInterface
{
    public function execute(): mixed;
}
