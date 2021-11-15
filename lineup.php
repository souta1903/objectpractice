<?php
    class Product{
      private $name;
      private $price;
      private $image;
      private $ordercount = 0;

      public function __construct($name,$price,$image){
            $this->name=$name;
            $this->price=$price;
            $this->image=$image;
          }
      public function getName(){
        return $this->name;
      }
      public function getImage(){
        return $this->image;
      }
      public function gettaxinprice(){
        return floor($this->price *1.08);
      }
      public function getordercount(){
        return $this->ordercount;
      }
      public function getTotalprice(){
        return $this->gettaxinprice()*$this->ordercount;
      }
    }
?>