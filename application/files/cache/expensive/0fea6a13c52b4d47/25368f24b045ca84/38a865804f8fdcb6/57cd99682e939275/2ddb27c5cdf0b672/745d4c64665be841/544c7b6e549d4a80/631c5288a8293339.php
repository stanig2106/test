<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\site\group\group$group_relations][1]/ */
/* Type: array */
/* Expiration: 2024-05-28T17:25:09+02:00 */



$loaded = true;
$expiration = 1716909909;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'group',
     'targetEntity' => 'Relation',
     'cascade' => 
    array (
      0 => 'all',
    ),
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
     'indexBy' => NULL,
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1716484001;
