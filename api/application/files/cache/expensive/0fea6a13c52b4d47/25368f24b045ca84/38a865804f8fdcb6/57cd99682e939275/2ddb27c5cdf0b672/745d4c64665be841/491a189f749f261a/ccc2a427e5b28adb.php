<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\express\entry$associations][1]/ */
/* Type: array */
/* Expiration: 2024-05-28T18:44:24+02:00 */



$loaded = true;
$expiration = 1716914664;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'entry',
     'targetEntity' => '\\Concrete\\Core\\Entity\\Express\\Entry\\Association',
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
$data['createdOn'] = 1716483905;
