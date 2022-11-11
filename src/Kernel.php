<?php

namespace App;

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\Config\Definition\Processor;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;

class Kernel extends BaseKernel implements CompilerPassInterface
{
    use MicroKernelTrait;

    public function process(ContainerBuilder $container)
    {
//        $configs = $container->getExtensionConfig('framework');
//
//        $frameworkExtension = $container->getExtension('framework');
//        $configuration = $frameworkExtension->getConfiguration($configs, $container);
//
//        $processor = new Processor();
//        $config = $processor->processConfiguration($configuration, $configs);
//
//        $container->setParameter('workflows.configuration', $config['workflows']['workflows'] ?? []);
    }
}
