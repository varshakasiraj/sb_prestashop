{if $page.page_name == 'product'}
    {var_dump($id_product)}
    {var_dump("hi")}
 {/if}
 <script>
 localStorage.setItem('email',{$id_product} );  
 </script>
