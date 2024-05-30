<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\attribute\key\key$category][1]/ */
/* Type: array */
/* Expiration: 2024-05-28T13:19:24+02:00 */



$loaded = true;
$expiration = 1716895164;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\ManyToOne::__set_state(array(
     'targetEntity' => '\\Concrete\\Core\\Entity\\Attribute\\Category',
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'inversedBy' => 'keys',
  )),
  1 => 
  \Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'akCategoryID',
     'referencedColumnName' => 'akCategoryID',
     'unique' => false,
     'nullable' => true,
     'onDelete' => NULL,
     'columnDefinition' => NULL,
     'fieldName' => NULL,
     'options' => 
    array (
    ),
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1716483905;
