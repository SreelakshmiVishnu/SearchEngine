<?php


namespace Sreelakshmi\SearchEngineCrawler\iterators;

class SearchResultsIterator extends AbstractResultIterator
{
    protected function populate(array $results)
    {
        $this->results = $results;
    }
}
