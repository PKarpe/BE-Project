<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\express\entity$entries][1]/ */
/* Type: array */
/* Expiration: 2023-07-08T22:30:52+05:30 */



$loaded = true;
$expiration = 1688835652;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'entity',
     'targetEntity' => 'Entry',
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
$data['createdOn'] = 1688461475;
