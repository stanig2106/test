<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\summary\template$fields][1]/ */
/* Type: array */
/* Expiration: 2024-05-28T10:25:12+02:00 */



$loaded = true;
$expiration = 1716884712;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'template',
     'targetEntity' => 'TemplateField',
     'cascade' => 
    array (
      0 => 'persist',
      1 => 'remove',
    ),
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
     'indexBy' => NULL,
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1716483905;
