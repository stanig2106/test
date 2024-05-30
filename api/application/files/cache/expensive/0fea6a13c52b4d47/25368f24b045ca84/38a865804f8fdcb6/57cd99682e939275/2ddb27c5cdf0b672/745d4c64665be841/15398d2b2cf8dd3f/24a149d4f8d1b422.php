<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\site\locale$site][1]/ */
/* Type: array */
/* Expiration: 2024-05-28T17:52:12+02:00 */



$loaded = true;
$expiration = 1716911532;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\ManyToOne::__set_state(array(
     'targetEntity' => 'Site',
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'inversedBy' => 'locales',
  )),
  1 => 
  \Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'siteID',
     'referencedColumnName' => 'siteID',
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
