<?php 
 include "model\bus\busDAO.php" ;



class contoller_Bus {


    //affichage
    
    function getBus()  {
        
   $BusDAO = new BusDAO() ;
   $bus = $BusDAO-> get_bus();

   include "View\Book.php" ; 


    }

    function getBooksForm()  {
        
   $BusDAO = new BusDAO() ;
   $bus = $BusDAO-> get_bus();

 return $bus;


    }


    function afficheform()  {
        $isbn = "2345678901234"  ; 
        $BookDAO = new BookDAO() ;
        $book = $BookDAO->getBookByID($isbn) ;
  
        include "View\bookForm.php" ; 
    }
 


    function setBooks()  {
       $Title = $_POST["Title"] ; 
       $Genra = $_POST["Genra"] ; 
       $ISBN = $_POST["ISBN"] ; 

   $BookDAO = new BookDAO() ;
   $Book = new Book(  $ISBN  ,  $Title , $Genra , 15 , 150 , "kamal") ;


    $BookDAO->update_book($Book);

    include "View\bookForm.php"  ; 
       
    }


 


 




}