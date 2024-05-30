<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\permission\ipaccesscontrolrange][1]/ */
/* Type: array */
/* Expiration: 2024-05-28T12:33:21+02:00 */



$loaded = true;
$expiration = 1716892401;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\Entity::__set_state(array(
     'repositoryClass' => NULL,
     'readOnly' => false,
  )),
  1 => 
  \Doctrine\ORM\Mapping\Table::__set_state(array(
     'name' => 'IpAccessControlRanges',
     'schema' => NULL,
     'indexes' => 
    array (
      0 => 
      \Doctrine\ORM\Mapping\Index::__set_state(array(
         'name' => 'IPIntervalExpiration',
         'columns' => 
        array (
          0 => 'iacrIpFrom',
          1 => 'iacrIpTo',
          2 => 'iacrExpiration',
        ),
         'fields' => NULL,
         'flags' => NULL,
         'options' => NULL,
      )),
    ),
     'uniqueConstraints' => NULL,
     'options' => 
    array (
      'comment' => 'List of IP Access Control Ranges',
    ),
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1716484251;