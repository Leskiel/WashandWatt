<?php

namespace ContainerER5HNtr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getValidator_WhenService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'validator.when' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\WhenValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Constraints/WhenValidator.php';

        return $container->privates['validator.when'] = new \Symfony\Component\Validator\Constraints\WhenValidator(($container->privates['validator.expression_language'] ?? $container->load('getValidator_ExpressionLanguageService')));
    }
}
