<?php

declare(strict_types=1);

namespace TypistTech\WPContainedHook;

use Psr\Container\ContainerInterface;
use TypistTech\WPContainedHook\Exceptions\ContainerException;

interface ContainerAwareInterface
{
    /**
     * Set a container.
     *
     * @param ContainerInterface $container The container instance.
     *
     * @return void
     */
    public function setContainer(ContainerInterface $container): void;

    /**
     * Get the container.
     *
     * @throws ContainerException If no container implementation has been set.
     *
     * @return ContainerInterface
     */
    public function getContainer(): ContainerInterface;
}
