<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\attribute\key\settings\settings$key][1]/ */
/* Type: array */
/* Expiration: 2023-07-08T23:16:28+05:30 */



$loaded = true;
$expiration = 1688838388;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\Id::__set_state(array(
  )),
  1 => 
  \Doctrine\ORM\Mapping\OneToOne::__set_state(array(
     'targetEntity' => '\\Concrete\\Core\\Entity\\Attribute\\Key\\Key',
     'mappedBy' => NULL,
     'inversedBy' => NULL,
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
  )),
  2 => 
  \Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'akID',
     'referencedColumnName' => 'akID',
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
$data['createdOn'] = 1688460838;
