<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\page\container\instance$instanceareas][1]/ */
/* Type: array */
/* Expiration: 2024-05-28T10:41:16+02:00 */



$loaded = true;
$expiration = 1716885676;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'instance',
     'targetEntity' => 'InstanceArea',
     'cascade' => 
    array (
      0 => 'remove',
    ),
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
     'indexBy' => NULL,
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1716483905;
