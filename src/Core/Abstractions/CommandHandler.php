<?php

namespace Core\Abstractions;

abstract class CommandHandler
{
    abstract public function handle(Command $command): void;
}
