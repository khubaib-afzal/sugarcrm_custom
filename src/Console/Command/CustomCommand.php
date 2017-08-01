<?php

namespace Sugarcrm\Sugarcrm\custom\Console\Command;

use Sugarcrm\Sugarcrm\Console\CommandRegistry\Mode\InstanceModeInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CustomCommand extends Command implements InstanceModeInterface
{

    protected function configure()
    {
        $this
            ->setName('sugardev:helloworld')
            ->setDescription('Hello World')
            ->setHelp('This command accepts no paramters and returns "Hello World".')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("Hello world -> " . $this->getApplication()->getMode());
    }
}