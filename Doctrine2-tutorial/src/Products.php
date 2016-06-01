<?php
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\GeneratedValue;/**
* @Entity @Table(name="Products")
**/
 class Products
{
   /** @Id @Column(type="integer") @GeneratedValue **/
   protected $id;
   /** @Column(type="string") **/
   protected $name;
/** @Column(type="string") **/
   protected $category;    public function getId()
   {
       return $this->id;
   }    public function getName()
   {
       return $this->name;
   }    public function setName($name)
   {
       $this->name = $name;
   }    public function getCategory()
   {
       return $this->category;
   }    public function setCategory($category)
   {
       $this->category = $category;
   }
}