<?php
class LeandroRitter_Integration_Model_Resource_Queue_Colletion extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    protected function _construct()
    {
        $this->_init('leandroritter_integration/queue');
    }
}