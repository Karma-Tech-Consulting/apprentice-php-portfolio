<?php
    $justins_portfolio_links = array(        
    array('image' => 'first image',
          'link' => 'first link') ,
    array('image' => 'second image',
          'link' => 'second link'),
    array('image' => 'third image',
          'link' => 'third link')
    );
    
    $J = 0;
    echo "<img src=\"{$justins_portfolio_links[$J]['image']}\" >\n";
    
    for($i = 0; $i < sizeof($justins_portfolio_links); $i++ ){
        echo "<img src=\"{$justins_portfolio_links[$i]['image']}\" >\n";
    }
?>