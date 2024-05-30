<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\file\image\thumbnail\type\typefileset$ftfsthumbnailtype][1]/ */
/* Type: array */
/* Expiration: 2024-05-28T08:20:05+02:00 */



$loaded = true;
$expiration = 1716877205;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\Id::__set_state(array(
  )),
  1 => 
  \Doctrine\ORM\Mapping\ManyToOne::__set_state(array(
     'targetEntity' => 'Type',
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'inversedBy' => 'ftAssociatedFileSets',
  )),
  2 => 
  \Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'ftfsThumbnailType',
     'referencedColumnName' => 'ftTypeID',
     'unique' => false,
     'nullable' => false,
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
