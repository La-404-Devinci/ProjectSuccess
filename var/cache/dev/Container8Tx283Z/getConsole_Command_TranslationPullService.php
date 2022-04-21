<?php

namespace Container8Tx283Z;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_TranslationPullService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.translation_pull' shared service.
     *
     * @return \Symfony\Component\Translation\Command\TranslationPullCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Command/TranslationTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Command/TranslationPullCommand.php';

        $container->privates['console.command.translation_pull'] = $instance = new \Symfony\Component\Translation\Command\TranslationPullCommand(($container->privates['translation.provider_collection'] ?? $container->load('getTranslation_ProviderCollectionService')), ($container->privates['translation.writer'] ?? $container->load('getTranslation_WriterService')), ($container->privates['translation.reader'] ?? $container->load('getTranslation_ReaderService')), 'en', [], []);

        $instance->setName('translation:pull');
        $instance->setDescription('Pull translations from a given provider.');

        return $instance;
    }
}
