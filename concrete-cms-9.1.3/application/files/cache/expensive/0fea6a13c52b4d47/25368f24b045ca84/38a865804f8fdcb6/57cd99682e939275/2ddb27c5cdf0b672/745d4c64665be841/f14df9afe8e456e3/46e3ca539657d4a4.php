<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\summary\template$fields][1]/ */
/* Type: array */
/* Expiration: 2023-07-09T01:06:13+05:30 */



$loaded = true;
$expiration = 1688844973;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'template',
     'targetEntity' => 'TemplateField',
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
$data['createdOn'] = 1688449364;
