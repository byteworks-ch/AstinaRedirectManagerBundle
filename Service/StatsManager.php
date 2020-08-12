<?php
namespace Astina\Bundle\RedirectManagerBundle\Service;

use Astina\Bundle\RedirectManagerBundle\Entity\MapStats;
use Astina\Bundle\RedirectManagerBundle\Validator\MapValidator;
use Astina\Bundle\RedirectManagerBundle\Entity\Map;
use Astina\Bundle\RedirectManagerBundle\Service\Exception\CsvImporterException;
use Doctrine\ORM\EntityManager;

/**
 * Class StatsManager
 *
 * @package Astina\Bundle\RedirectManagerBundle\Service
 */
class StatsManager extends BaseService
{
    /**
     * @var EntityManager
     */
    private $entityManager;


    /**
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @throws \Exception
     */
    public function update()
    {
        $now = new \DateTime();

        foreach ($this->entityManager->getRepository('AstinaRedirectManagerBundle:Map')->findBy(['countRedirects' => 1]) as $map) {
            $mapStats = new MapStats();
            $mapStats
                ->setMap($map)
                ->setCount($map->getCount())
                ->setDate($now)
            ;

            $this->entityManager->persist($mapStats);
        }

        $this->entityManager->flush();
    }
}
