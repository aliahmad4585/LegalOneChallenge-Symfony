<?php

namespace ContainerCLJZOJt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioApiDoc_Describers_ApiPlatformService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_api_doc.describers.api_platform' shared service.
     *
     * @return \Nelmio\ApiDocBundle\Describer\ApiPlatformDescriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'api-doc-bundle'.\DIRECTORY_SEPARATOR.'Describer'.\DIRECTORY_SEPARATOR.'DescriberInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'api-doc-bundle'.\DIRECTORY_SEPARATOR.'Describer'.\DIRECTORY_SEPARATOR.'ExternalDocDescriber.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'api-doc-bundle'.\DIRECTORY_SEPARATOR.'Describer'.\DIRECTORY_SEPARATOR.'ApiPlatformDescriber.php';

        return $container->privates['nelmio_api_doc.describers.api_platform'] = new \Nelmio\ApiDocBundle\Describer\ApiPlatformDescriber(($container->privates['nelmio_api_doc.describers.api_platform.documentation'] ?? $container->load('getNelmioApiDoc_Describers_ApiPlatform_DocumentationService')), ($container->privates['api_platform.swagger.normalizer.api_gateway'] ?? $container->getApiPlatform_Swagger_Normalizer_ApiGatewayService()));
    }
}