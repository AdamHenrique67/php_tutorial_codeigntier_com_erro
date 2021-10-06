< h2 > <? php  echo  $ title ;  ?> </ h2 >

<? php  foreach  ( $ news  as  $ news_item ) :  ?>

        < h3 > <? php  echo  $ news_item [ 'title' ];  ?> </ h3 > 
        < div  class = "main" > 
                <? php  echo  $ news_item [ 'text' ];  ?> 
        </ Div > 
        < p > < a  href = " <? Php  echo  site_url ( 'news /' . $ News_item [ 'bala' ]);  ?> " >Ver artigo </ a> </ p >

<? php  endforeach ;  ?>