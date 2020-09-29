<?php

namespace App\Templating;

use Contentful\Delivery\Resource\Entry;
use Netgen\Layouts\Contentful\Service\Contentful;

class GlobalVariable
{
    private $contentful;
    private $spaceId;
    private $siteInfoId;

    public function __construct(Contentful $contentful, string $spaceId, string $siteInfoId)
    {
        $this->contentful = $contentful;
        $this->spaceId = $spaceId;
        $this->siteInfoId = $siteInfoId;
    }

    public function getSiteInfo()
    {
        return $this->contentful->loadContentfulEntry($this->spaceId . "|" . $this->siteInfoId);
    }

    public function getObject(Entry $entry) {
        return $this->contentful->loadContentfulEntry($this->spaceId . "|" . $entry->getId());
    }

    public function getAsset(string $id) {
        return $this->contentful->loadContentfulAsset($this->spaceId . "|" . $id);
    }
}
