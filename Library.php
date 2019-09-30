<?php


class Library
{
   const MAX_BOOKS = '10';
   private $name;
   private $address;
   private $max;
   private $array = array(Book);


   public function __construct()
   {
   }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return array
     */
    public function getArray()
    {
        return $this->array;
    }

    /**
     * @return mixed
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @param array $array
     */
    public function setArray($array)
    {
        $this->array = $array;
    }

    /**
     * @param mixed $max
     */
    public function setMax($max)
    {
        $this->max = $max;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function Show()
    {
        for($i =1;$i< $this->array;$i++)
        {
            getArray() . PHP_EOL;
        }


    }

    public function add()
    {
        if(getMax() < MAX_BOOKS)
        {
            echo '+1 livre' . PHP_EOL;
            $this->setMax(max +1);
        }
        else
        {
            echo 'PLEIN' . PHP_EOL . '<br /> .';
        }
    }

    public function delete()
    {

    }

}