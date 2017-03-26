
        $(document).ready(function(){
           $("#recherche").keyup(function(){

               var recherche = $(this).val();
               var data = 'motclef='+ recherche;
               if(recherche.length>4){

                   $.ajax({
                      type : "GET",
                      url : url,
                      data : data,
                      success : function(data){
                          console.log(data.ventes[0]);
                      }
                  });

               }
           });
        });


