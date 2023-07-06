<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\site\site$locales][1]/ */
/* Type: array */
/* Expiration: 2023-07-08T06:09:48+05:30 */



$loaded = true;
$expiration = 1688776788;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'site',
     'targetEntity' => 'Locale',
     'cascade' => 
    array (
      0 => 'all',
    ),
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
     'indexBy' => NULL,
  )),
  1 => 
  \Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'siteLocaleID',
     'referencedColumnName' => 'siteLocaleID',
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
$data['createdOn'] = 1688402211;
