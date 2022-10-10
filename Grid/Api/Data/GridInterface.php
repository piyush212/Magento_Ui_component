<?php

namespace Codilar\Grid\Api\Data;

interface GridInterface
{
    const ID = 'id';
    const Name = 'Name';
    const Email = 'Email';
    const Mobile = 'Mobile';

   
    public function getId();

    public function getName();

   
    public function setName($Name);

    public function getEmail();

 
    public function setEmail($Email);

 
    public function getMobile();

  
    public function setMobile($Mobile);

   
}