<?php

namespace Morozova\Test\Block\Product;

class ReviewRenderer extends \Magento\Review\Block\Product\Review
{
    /**
     * Set page title with count of product reviews
     */
    public function setPageTitleWithReviewsCount()
    {
        /** @var \Magento\Theme\Block\Html\Title $parentBlock */
       $parentBlock = $this->getParentBlock();
       $newTitle = $parentBlock->getPageTitle() . ' ' . $this->getCollectionSize();
       $parentBlock->setPageTitle($newTitle);
    }
}
