<?php

declare(strict_types=1);

use Rector\Core\Contract\Rector\RectorInterface;
use Rector\Set\Contract\SetListInterface;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCI\ValueObject\Option;

return static function (ContainerConfigurator $containerConfigurator): void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(Option::TYPES_TO_SKIP, [
        RectorInterface::class,
        SetListInterface::class,
        \Rector\Core\Contract\Processor\FileProcessorInterface::class,
        \Rector\Nette\FormControlTypeResolver\AssignedVariablesMethodCallsFormTypeResolver::class,
    ]);
};
