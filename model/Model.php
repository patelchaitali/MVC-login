<?php
include 'Book.php';
class Model
{
    public function getbookdetails()
    {
        return array(
          "php" => new Book('php', 'phpauthor', 'phpdescription'),
          "java" => new Book('java', 'javaauthor', 'javadescription')
      );
    }
    public function getbook($title)
    {
        $allbooks = $this->getbookdetails();
        // echo "<pre>";
        // print_r($allbooks);
        // echo "</pre>";
        // exit;
        return $allbooks[$title];
    }
}
