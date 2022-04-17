<?php

declare (strict_types=1);
namespace Symplify\EasyCI\Psr4\ValueObjectFactory;

use EasyCI20220417\Nette\Utils\Strings;
use Symplify\EasyCI\Psr4\Configuration\Psr4SwitcherConfiguration;
use Symplify\EasyCI\Psr4\Utils\SymplifyStrings;
use Symplify\EasyCI\Psr4\ValueObject\Psr4NamespaceToPath;
/**
 * @see \Symplify\EasyCI\Tests\Psr4\ValueObjectFactory\Psr4NamespaceToPathFactory\Psr4NamespaceToPathFactoryTest
 */
final class Psr4NamespaceToPathFactory
{
    /**
     * @var \Symplify\EasyCI\Psr4\Utils\SymplifyStrings
     */
    private $symplifyStrings;
    /**
     * @var \Symplify\EasyCI\Psr4\Configuration\Psr4SwitcherConfiguration
     */
    private $psr4SwitcherConfiguration;
    public function __construct(\Symplify\EasyCI\Psr4\Utils\SymplifyStrings $symplifyStrings, \Symplify\EasyCI\Psr4\Configuration\Psr4SwitcherConfiguration $psr4SwitcherConfiguration)
    {
        $this->symplifyStrings = $symplifyStrings;
        $this->psr4SwitcherConfiguration = $psr4SwitcherConfiguration;
    }
    public function createFromClassAndFile(string $class, string $file) : ?\Symplify\EasyCI\Psr4\ValueObject\Psr4NamespaceToPath
    {
        $sharedSuffix = $this->symplifyStrings->findSharedSlashedSuffix([$class . '.php', $file]);
        $uniqueFilePath = $this->symplifyStrings->subtractFromRight($file, $sharedSuffix);
        $uniqueNamespace = $this->symplifyStrings->subtractFromRight($class . '.php', $sharedSuffix);
        // fallback for identical namespace + file directory
        if ($uniqueNamespace === '') {
            // shorten shared suffix by "Element/"
            $sharedSuffix = '/' . \EasyCI20220417\Nette\Utils\Strings::after($sharedSuffix, '/');
            $uniqueFilePath = $this->symplifyStrings->subtractFromRight($file, $sharedSuffix);
            $uniqueNamespace = $this->symplifyStrings->subtractFromRight($class . '.php', $sharedSuffix);
        }
        $uniqueNamespace = \rtrim($uniqueNamespace, '\\');
        $composerJsonPath = $this->psr4SwitcherConfiguration->getComposerJsonPath();
        $commonFilePathPrefix = \EasyCI20220417\Nette\Utils\Strings::findPrefix([$uniqueFilePath, $composerJsonPath]);
        $relativeDirectory = $this->symplifyStrings->subtractFromLeft($uniqueFilePath, $commonFilePathPrefix);
        $relativeDirectory = \rtrim($relativeDirectory, '/');
        if ($uniqueNamespace === '') {
            // skip
            return null;
        }
        if ($relativeDirectory === '') {
            // skip
            return null;
        }
        return new \Symplify\EasyCI\Psr4\ValueObject\Psr4NamespaceToPath($uniqueNamespace, $relativeDirectory);
    }
}
