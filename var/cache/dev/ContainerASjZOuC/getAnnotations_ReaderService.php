<?php

namespace ContainerASjZOuC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAnnotations_ReaderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'annotations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Annotations'.\DIRECTORY_SEPARATOR.'Reader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'annotations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Annotations'.\DIRECTORY_SEPARATOR.'AnnotationReader.php';

        $container->privates['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $instance->addGlobalIgnoredName('required', NULL);

        return $instance;
    }
}
