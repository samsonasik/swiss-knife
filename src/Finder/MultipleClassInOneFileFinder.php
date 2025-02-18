<?php

declare(strict_types=1);

namespace Rector\SwissKnife\Finder;

use Rector\SwissKnife\RobotLoader\PhpClassLoader;

final readonly class MultipleClassInOneFileFinder
{
    public function __construct(
        private PhpClassLoader $phpClassLoader
    ) {
    }

    /**
     * @param string[] $directories
     * @return array<string, string[]>
     */
    public function findInDirectories(array $directories): array
    {
        $fileByClasses = $this->phpClassLoader->load($directories);

        $classesByFile = [];
        foreach ($fileByClasses as $class => $filePath) {
            $classesByFile[$filePath][] = $class;
        }

        return array_filter($classesByFile, static fn (array $classes): bool => count($classes) >= 2);
    }
}
