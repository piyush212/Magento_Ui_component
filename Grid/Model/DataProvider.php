<?php
namespace Codilar\Grid\Model;
use Codilar\Grid\Model\ResourceModel\Grid\CollectionFactory;
class DataProvider extends \Magento\Ui\DataProvider\AbstractDataProvider
{
   
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        CollectionFactory $gridCollectionFactory,
        array $meta = [],
        array $data = []
    ) {
        $this->collection = $gridCollectionFactory->create();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }

    public function getData()
    {
        if (isset($this->loadedData)) {
            return $this->loadedData;
        }

        $items = $this->collection->getItems();
        $this->loadedData = array();
        /** @var Customer $customer */
        foreach ($items as $contact) {
            // notre fieldset s'apelle "contact" d'ou ce tableau pour que magento puisse retrouver ses datas :
            $this->loadedData[$contact->getId()]['contact'] = $contact->getData();
        }


        return $this->loadedData;

    }
}