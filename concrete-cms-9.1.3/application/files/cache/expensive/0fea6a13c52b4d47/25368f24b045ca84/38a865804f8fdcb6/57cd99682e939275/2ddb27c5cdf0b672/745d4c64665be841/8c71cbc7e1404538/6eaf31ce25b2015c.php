<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\user\user$attributes][1]/ */
/* Type: array */
/* Expiration: 2023-07-08T05:48:25+05:30 */



$loaded = true;
$expiration = 1688775505;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'user',
     'targetEntity' => '\\Concrete\\Core\\Entity\\Attribute\\Value\\UserValue',
     'cascade' => 
    array (
      0 => 'remove',
    ),
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
     'indexBy' => NULL,
  )),
  1 => 
  \Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'uID',
     'referencedColumnName' => 'uID',
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
$data['createdOn'] = 1688402222;
