<?php
class LeandroRitter_Integration_Model_Resource_Queue extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('leandroritter_integration/queue','log_id');
    }
}