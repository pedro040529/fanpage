<?php

namespace ContainerBhx4fS1;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUx_LiveComponent_FingerprintCalculatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'ux.live_component.fingerprint_calculator' shared service.
     *
     * @return \Symfony\UX\LiveComponent\Util\FingerprintCalculator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-live-component'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Util'.\DIRECTORY_SEPARATOR.'FingerprintCalculator.php';

        return $container->privates['ux.live_component.fingerprint_calculator'] = new \Symfony\UX\LiveComponent\Util\FingerprintCalculator($container->getEnv('APP_SECRET'));
    }
}
