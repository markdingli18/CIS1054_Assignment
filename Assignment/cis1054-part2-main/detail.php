<?php

require_once __DIR__.'/bootstrap.php';
require_once __DIR__.'/database.php';

 //Read pet id passed in the URL – a is an arbitrary name that I decided upon. Could be anything – as long as it is used correctly in related links
 if(isset($_GET['item'])) 
 {
//     //Get db object
     $db = new Db();    
     $itemId = $db -> quote($_GET['item']); //makes param safe for use in query
     $result = $db -> select("SELECT item.*, t.name as category FROM items item inner join category t on item.category = t.id  WHERE item.id=". $itemId);

     if (count($result) > 0){
//         // Animal loaded from store
         $item = [
                 'id'                => $result[0]['id'],
                'category'   => $result[0]['category'],
                 'image'             => $result[0]['image'],
                 'name'              => $result[0]['name'],
                 'price'             => $result[0]['price'],
                 'ingredients'       => $result[0]['ingredients'],
                'description'       => $result[0]['description']
        ];
//         // Render view
        echo $twig->render('details.html', ['item' => $item] );
     }
 }

  //else
      //  echo $twig->render('404.html');
//}
//else
 //   echo $twig->render('404.html'); 

 
 	
    

	