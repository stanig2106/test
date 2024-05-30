<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\file\image\thumbnail\type\type$ftassociatedfilesets][1]/ */
/* Type: array */
/* Expiration: 2024-05-28T13:31:16+02:00 */



$loaded = true;
$expiration = 1716895876;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'ftfsThumbnailType',
     'targetEntity' => 'TypeFileSet',
     'cascade' => 
    array (
      0 => 'all',
    ),
     'fetch' => 'LAZY',
     'orphanRemoval' => true,
     'indexBy' => NULL,
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1716483905;
