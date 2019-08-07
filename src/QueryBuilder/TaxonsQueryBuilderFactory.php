<?php

declare(strict_types=1);

namespace Webgriffe\SyliusClerkPlugin\QueryBuilder;

use Doctrine\ORM\QueryBuilder;
use Sylius\Component\Core\Model\ChannelInterface;
use Sylius\Component\Taxonomy\Repository\TaxonRepositoryInterface;

final class TaxonsQueryBuilderFactory implements QueryBuilderFactoryInterface
{
    /**
     * @var TaxonRepositoryInterface
     */
    private $taxonRepository;

    public function __construct(TaxonRepositoryInterface $taxonRepository)
    {
        $this->taxonRepository = $taxonRepository;
    }

    public function createQueryBuilder(ChannelInterface $channel): QueryBuilder
    {
        return $this->taxonRepository->createListQueryBuilder();
    }
}
