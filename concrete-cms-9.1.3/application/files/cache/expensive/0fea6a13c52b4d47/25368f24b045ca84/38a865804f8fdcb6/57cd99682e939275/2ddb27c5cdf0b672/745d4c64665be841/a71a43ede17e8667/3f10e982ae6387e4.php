<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\file\version$file][1]/ */
/* Type: array */
/* Expiration: 2023-07-08T08:37:47+05:30 */



$loaded = true;
$expiration = 1688785667;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\Id::__set_state(array(
  )),
  1 => 
  \Doctrine\ORM\Mapping\ManyToOne::__set_state(array(
     'targetEntity' => 'File',
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'inversedBy' => 'versions',
  )),
  2 => 
  \Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'fID',
     'referencedColumnName' => 'fID',
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
$data['createdOn'] = 1688402265;
