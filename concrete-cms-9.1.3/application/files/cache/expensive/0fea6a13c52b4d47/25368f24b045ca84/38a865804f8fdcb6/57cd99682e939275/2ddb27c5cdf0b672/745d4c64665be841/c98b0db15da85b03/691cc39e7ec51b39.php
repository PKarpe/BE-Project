<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\express\association$controls][1]/ */
/* Type: array */
/* Expiration: 2023-07-09T13:19:59+05:30 */



$loaded = true;
$expiration = 1688888999;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'association',
     'targetEntity' => '\\Concrete\\Core\\Entity\\Express\\Control\\AssociationControl',
     'cascade' => 
    array (
      0 => 'remove',
    ),
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
     'indexBy' => NULL,
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1688491051;
