<?php

namespace Astina\Bundle\RedirectManagerBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class ImportUrlsCommand
 *
 * @package Astina\Bundle\RedirectManagerBundle\Command
 */
class UpdateStatsCommand extends ContainerAwareCommand
{
    /**
     * Configures the command.
     */
    protected function configure()
    {
        $this
            ->setName('armb:update-stats')
            ->setDescription('Update redirect stats.')
        ;
    }

    /**
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('<info>Updating stats</info>');

        $statsManager = $this->getContainer()->get('armb.stats_manager');
        $statsManager->update();
    }
}
