<?php

class LeandroRitter_Integration_indexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $model = Mage::getModel('leandroritter_integration/queue');
        $model->load(1);
        echo get_class($model);
    }

    public function insertAction()
    {
        $model = Mage::getModel('leandroritter_integration/queue');
        $model->setEvent('aew');
        $model->setIntegrationType('direta');
        $model->save();
        echo "salvou";
    }

    public function editAction()
    {
        $model = Mage::getModel('leandroritter_integration/queue');
        $model->load(1);
        $model->setIntegrationType('fila');
        $model->save();
        echo "editou";
    }

    public function deleteAction()
    {
        $model = Mage::getModel('leandroritter_integration/queue');
        $model->load(2);
        $model->delete();
        echo "deletou";
    }

    public function populationAction()
    {
        $helper = Mage::helper('leandroritter_integration');

        $model = Mage::getModel('leandroritter_integration/queue');

        $model->setEvent($helper->generateRandomString());
        $model->setIntegrationType($helper->generateRandomString());
        $model->setContent($helper->generateRandomString());
        $model->setCreatedAt(date('Ymd'));
        $model->save();
    }

    public function showLogsAction()
    {
        /** @var LeandroRitter_Integration_Model_Resource_Queue_Colletion $logs */
        $logs = Mage::getModel('leandroritter_integration/queue')->getCollection();

        foreach ($logs as $logEntry)
        {
            echo '<h2>' . $logEntry->getEvent() . '</h2>';
        }

    }
}