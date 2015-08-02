<?php


$installer = $this;
$installer->startSetup();
$installer->run(" CREATE TABLE {$this->getTable('vendorm/table_ven')} (
        `id` int NOT NULL AUTO_INCREMENT,
        `name` varchar(100),
        `code` varchar(100),
        `account` float(5,2),
        `status` boolean DEFAULT false,
        `description` text,
         PRIMARY KEY(`id`)) ENGINE=InnoDB CHARSET=utf8 AUTO_INCREMENT=1;" );
$installer->endSetup();



