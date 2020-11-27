<?php

declare(strict_types=1);

namespace Jine\Contracts;

interface ActionInterface
{
    public function execute(): mixed;
}
