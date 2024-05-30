<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\page\container\instance$container][1]/ */
/* Type: array */
/* Expiration: 2024-05-28T09:45:16+02:00 */



$loaded = true;
$expiration = 1716882316;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\ManyToOne::__set_state(array(
     'targetEntity' => 'Concrete\\Core\\Entity\\Page\\Container',
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'inversedBy' => NULL,
  )),
  1 => 
  \Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'containerID',
     'referencedColumnName' => 'containerID',
     'unique' => false,
     'nullable' => true,
     'onDelete' => 'CASCADE',
     'columnDefinition' => NULL,
     'fieldName' => NULL,
     'options' => 
    array (
    ),
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1716483905;
