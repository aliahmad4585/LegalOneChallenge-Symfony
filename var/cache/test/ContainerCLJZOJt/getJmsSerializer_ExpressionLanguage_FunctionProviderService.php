<?php

namespace ContainerCLJZOJt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJmsSerializer_ExpressionLanguage_FunctionProviderService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'jms_serializer.expression_language.function_provider' shared service.
     *
     * @return \JMS\SerializerBundle\ExpressionLanguage\BasicSerializerFunctionsProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer-bundle'.\DIRECTORY_SEPARATOR.'ExpressionLanguage'.\DIRECTORY_SEPARATOR.'BasicSerializerFunctionsProvider.php';

        return $container->privates['jms_serializer.expression_language.function_provider'] = new \JMS\SerializerBundle\ExpressionLanguage\BasicSerializerFunctionsProvider();
    }
}