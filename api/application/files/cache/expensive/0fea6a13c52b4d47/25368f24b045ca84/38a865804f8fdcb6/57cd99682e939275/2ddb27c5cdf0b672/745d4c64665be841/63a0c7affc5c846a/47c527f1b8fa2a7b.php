<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\attribute\category$types][1]/ */
/* Type: array */
/* Expiration: 2024-05-28T07:58:28+02:00 */



$loaded = true;
$expiration = 1716875908;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\ManyToMany::__set_state(array(
     'targetEntity' => 'Type',
     'mappedBy' => NULL,
     'inversedBy' => 'categories',
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
     'indexBy' => NULL,
  )),
  1 => 
  \Doctrine\ORM\Mapping\JoinTable::__set_state(array(
     'name' => 'AttributeTypeCategories',
     'schema' => NULL,
     'joinColumns' => 
    array (
      0 => 
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
    ),
     'inverseJoinColumns' => 
    array (
      0 => 
      \Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
         'name' => 'atID',
         'referencedColumnName' => 'atID',
         'unique' => false,
         'nullable' => true,
         'onDelete' => NULL,
         'columnDefinition' => NULL,
         'fieldName' => NULL,
         'options' => 
        array (
        ),
      )),
    ),
     'options' => 
    array (
    ),
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1716483905;
