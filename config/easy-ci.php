<?php

declare(strict_types=1);

use PHPStan\Rules\Rule;
use Rector\Core\Contract\Processor\FileProcessorInterface;
use Rector\Core\Contract\Rector\RectorInterface;
use Rector\Nette\Contract\FormControlTypeResolverInterface;
use Rector\Nette\FormControlTypeResolver\AssignedVariablesMethodCallsFormTypeResolver;
use Rector\Set\Contract\SetListInterface;
use Symfony\Component\Console\Command\Command;
use Symplify\EasyCI\Config\EasyCIConfig;

return static function (EasyCIConfig $easyCIConfig): void {
    $easyCIConfig->typesToSkip([
        RectorInterface::class,
        SetListInterface::class,
        FileProcessorInterface::class,
        // nette
        FormControlTypeResolverInterface::class,
        AssignedVariablesMethodCallsFormTypeResolver::class,
        // phpstan
        Rule::class,
        \PHPStan\Type\DynamicMethodReturnTypeExtension::class,
        \PHPStan\Type\DynamicFunctionReturnTypeExtension::class,
        // symfony
        Command::class,
    ]);
};
