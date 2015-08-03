<?php
    $justins_portfolio_links = array(        
    array('title' => 'first Title',
          'image' => 'first image',
          'link' => 'first link') ,
    array('title' => 'second Title',
          'image' => 'second image',
          'link' => 'second link'),
    array('title' => 'third Title',
          'image' => 'third image',
          'link' => 'third link')
    );
    
    $J = 0; // testing this .. think about using I in the loop in the same way
    echo "<h1>{$justins_portfolio_links[$J]['title']}</h1>";
    
    for($i = 0; $i < sizeof($justins_portfolio_links); $i++ ){
        echo "<img src=\"{$justins_portfolio_links[$i]['image']}\" >\n";
    }
?>
