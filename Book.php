<?php


class Book
{
   private $title;
   private $author;
   private $editor;
   private $pageNb;

   public function __construct()
   {
   }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @return mixed
     */
    public function getEditor()
    {
        return $this->editor;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getPageNb()
    {
        return $this->pageNb;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @param mixed $editor
     */
    public function setEditor($editor)
    {
        $this->editor = $editor;
    }

    /**
     * @param mixed $pageNb
     */
    public function setPageNb($pageNb)
    {
        $this->pageNb = $pageNb;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function __Show()
   {
       echo  'getTitle()' . PHP_EOL;
   }
}
