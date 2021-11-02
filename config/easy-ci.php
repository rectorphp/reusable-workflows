<?php

declare(strict_types=1);

use PHPStan\Rules\Rule;
use Rector\Core\Contract\Processor\FileProcessorInterface;
use Rector\Core\Contract\Rector\RectorInterface;
use Rector\Nette\Contract\FormControlTypeResolverInterface;
use Rector\Nette\FormControlTypeResolver\AssignedVariablesMethodCallsFormTypeResolver;
use Rector\Set\Contract\SetListInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCI\ValueObject\Option;

return static function (ContainerConfigurator $containerConfigurator): void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(Option::TYPES_TO_SKIP, [
        RectorInterface::class,
        SetListInterface::class,
        FileProcessorInterface::class,
        // nette
        FormControlTypeResolverInterface::class,
        AssignedVariablesMethodCallsFormTypeResolver::class,
        // phpstan
        Rule::class,
        // symfony
        Command::class,
    ]);
};
