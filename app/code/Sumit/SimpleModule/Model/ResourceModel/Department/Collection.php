<?php
namespace Sumit\SimpleModule\Model\ResourceModel\Department;

/*The collection class extends from
\Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection and,
similar to the model and resource classes*/
/*AbstractCollection implements
Magento\Framework\App\ResourceConnection\SourceProviderInterface, and extends
\Magento\Framework\Data\Collection\AbstractDb. AbstractDb further extends
\Magento\Framework\Data\Collection.*/
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected function _construct()
		{
		$this->_init('Sumit\SimpleModule\Model\Department', 'Sumit\SimpleModule\Model\ResourceModel\Department');
		}
}
?>