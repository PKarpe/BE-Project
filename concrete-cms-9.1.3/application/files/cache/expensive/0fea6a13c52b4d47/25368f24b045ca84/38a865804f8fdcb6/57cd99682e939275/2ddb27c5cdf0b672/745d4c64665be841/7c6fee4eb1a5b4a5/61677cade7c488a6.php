<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\summary\template$package][1]/ */
/* Type: array */
/* Expiration: 2023-07-08T19:43:13+05:30 */



$loaded = true;
$expiration = 1688825593;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\ManyToOne::__set_state(array(
     'targetEntity' => '\\Concrete\\Core\\Entity\\Package',
     'cascade' => 
    array (
      0 => 'persist',
    ),
     'fetch' => 'LAZY',
     'inversedBy' => NULL,
  )),
  1 => 
  \Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'pkgID',
     'referencedColumnName' => 'pkgID',
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
$data['createdOn'] = 1688449364;
