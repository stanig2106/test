<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\command\taskprocess][1]/ */
/* Type: array */
/* Expiration: 2024-05-28T13:57:23+02:00 */



$loaded = true;
$expiration = 1716897443;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\Entity::__set_state(array(
     'repositoryClass' => NULL,
     'readOnly' => false,
  )),
  1 => 
  \Doctrine\ORM\Mapping\InheritanceType::__set_state(array(
     'value' => 'JOINED',
  )),
  2 => 
  \Doctrine\ORM\Mapping\DiscriminatorColumn::__set_state(array(
     'name' => 'processType',
     'type' => 'string',
     'length' => NULL,
     'columnDefinition' => NULL,
     'enumType' => NULL,
  )),
  3 => 
  \Doctrine\ORM\Mapping\Table::__set_state(array(
     'name' => 'MessengerTaskProcesses',
     'schema' => NULL,
     'indexes' => NULL,
     'uniqueConstraints' => NULL,
     'options' => 
    array (
    ),
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1716484251;
