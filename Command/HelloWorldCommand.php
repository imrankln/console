<?php
namespace Veriteworks\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputInterface;

/**
 * An Abstract class for Indexer related commands.
 */
class HelloWorldCommand extends Command
{

    protected function configure()
    {
        $this->setName('veriteworks:testcmd')->setDescription('Prints hello world.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Hello World!');
    }

}
