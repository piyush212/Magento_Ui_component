<?php
namespace Codilar\Grid\Model;

use Codilar\Grid\Api\Data\GridInterface;

class Grid extends \Magento\Framework\Model\AbstractModel implements GridInterface
{
   
    const CACHE_TAG = 'employee_data';

   
    protected $_cacheTag = 'employee_data';

 
    protected $_eventPrefix = 'employee_data';

   
    protected function _construct()
    {
        $this->_init('Codilar\Grid\Model\ResourceModel\Grid');
    }
  
    public function getId()
    {
        return $this->getData(self::ID);
    }

    
    public function getName()
    {
        return $this->getData();
    }

    public function setName($Name)
    {
        return $this->setData(TITLE, $Name);
    }

   
    public function getEmail()
    {
        return $this->getData();
    }

 
    public function setEmail($Email)
    {
        return $this->setData(self::CONTENT, $Email);
    }


    public function getMobile()
    {
        return $this->getData();
    }

    public function setMobile($Mobile)
    {
        return $this->setData(self::PUBLISH_DATE, $Mobile);
    }
}