<?php
/**/
namespace Sumit\SimpleModule\Model\ResourceModel;
/*AbstractDb further extends Magento\Framework\Model\ResourceModel\AbstractResource*/
/*The resource class is the key to communicating to the database. All it takes is for us to
name the table and its primary key and our models can save, delete, and update entities.*/
class Department extends	\Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
	protected function _construct()
		{
		$this->_init('SimpleModule_Module_Department', 'entity_id');
		}
}

?>