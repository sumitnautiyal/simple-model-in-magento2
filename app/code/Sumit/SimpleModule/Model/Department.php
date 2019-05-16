<?php
/*A simple model class illustration used as per Magento 2.x*/

namespace Sumit\SimpleModule\Model;

/*The AbstractModel further extends \Magento\Framework\Object

$department->getData('employee_average_salary');
$department->getEmployeeAverageSalary();
$department->setData('employee_average_salary', 'theValue');
$department->setEmployeeAverageSalary('theValue');
$department->unsetData('employee_average_salary');
$department->unsEmployeeAverageSalary();
$department->hasData('employee_average_salary');
$department->hasEmployeeAverageSalary();*/

class Department extends \Magento\Framework\Model\AbstractModel
{
	protected function _construct()
	{
	$this-> _init('Sumit\SimpleModule\Model \ResourceModel\Department');
	}
}

?>