<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\permission\ipaccesscontrolcategory$ranges][1]/ */
/* Type: array */
/* Expiration: 2024-05-28T18:59:05+02:00 */



$loaded = true;
$expiration = 1716915545;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'category',
     'targetEntity' => 'Concrete\\Core\\Entity\\Permission\\IpAccessControlRange',
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
     'indexBy' => NULL,
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1716483965;
