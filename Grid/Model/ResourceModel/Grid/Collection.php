<?php
namespace Codilar\Grid\Model\ResourceModel\Grid;

use Codilar\Grid\Model\Grid;
use Codilar\Grid\Model\ResourceModel\Grid as GridResourceModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
       
       $this->_init(Grid::class, GridResourceModel::class);
    }
}