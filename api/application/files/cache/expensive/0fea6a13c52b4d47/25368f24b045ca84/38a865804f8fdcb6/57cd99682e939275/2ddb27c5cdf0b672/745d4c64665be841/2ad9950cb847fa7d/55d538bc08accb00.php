<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\user\user][1]/ */
/* Type: array */
/* Expiration: 2024-05-28T17:12:11+02:00 */



$loaded = true;
$expiration = 1716909131;

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
     'name' => 'Users',
     'schema' => NULL,
     'indexes' => 
    array (
      0 => 
      \Doctrine\ORM\Mapping\Index::__set_state(array(
         'name' => 'uEmail',
         'columns' => 
        array (
          0 => 'uEmail',
        ),
         'fields' => NULL,
         'flags' => NULL,
         'options' => NULL,
      )),
    ),
     'uniqueConstraints' => NULL,
     'options' => 
    array (
    ),
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1716484251;
