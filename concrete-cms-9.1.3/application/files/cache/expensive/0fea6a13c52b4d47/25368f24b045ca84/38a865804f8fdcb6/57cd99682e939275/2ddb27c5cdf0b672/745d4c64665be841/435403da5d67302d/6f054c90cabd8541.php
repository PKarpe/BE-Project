<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\board\item][1]/ */
/* Type: array */
/* Expiration: 2023-07-09T15:00:24+05:30 */



$loaded = true;
$expiration = 1688895024;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\Entity::__set_state(array(
     'repositoryClass' => NULL,
     'readOnly' => false,
  )),
  1 => 
  \Doctrine\ORM\Mapping\Table::__set_state(array(
     'name' => 'BoardItems',
     'schema' => NULL,
     'indexes' => 
    array (
      0 => 
      \Doctrine\ORM\Mapping\Index::__set_state(array(
         'name' => 'uniqueItemId',
         'columns' => 
        array (
          0 => 'uniqueItemId',
        ),
         'fields' => NULL,
         'flags' => NULL,
         'options' => NULL,
      )),
    ),
     'uniqueConstraints' => NULL,
     'options' => 
    array (
    ),
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1688491073;
