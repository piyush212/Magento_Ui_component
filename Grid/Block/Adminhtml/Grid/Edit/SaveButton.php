<?php
namespace Codilar\Grid\Block\Adminhtml\Grid\Edit;
use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;
class SaveButton  implements ButtonProviderInterface
{
	public function getButtonData()
	{
		return [
			'label' => __('Save Employee Data'),
			'class' => 'save primary',
			'data_attribute' => [
				'mage-init' => ['button' => ['event' => 'save']],
				'form-role' => 'save',
			],
			'sort_order' => 90,
		];
	}
}