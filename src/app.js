// const jquery = require("jquery");
// const Handlebars = require("handlebars");

$(document).ready(function(){
  $.ajax(
    {
      'url': 'http://localhost/php-ajax-dischi/server.php',
      'method': 'GET',
      'success': function(risposta){
          stampa(risposta);
      }
    },
    {
      'error':function(){
        alert('errore!');
      }
    }
  );

  $(document).on('click', '#scelta', (function() {
       var author = $(this).val();
       if (author == 'All') {
           $('.cd').show();
       } else {
           $('.cd').hide();
           // $('.container').empty();
           ricerca(author);
       }
   }));
});


//FUNZIONI
function stampa(data){
  // $('.container').empty();
  var source = $('#entry-template').html();
  var template = Handlebars.compile(source);

  for (var i = 0; i < data.length; i++)  {
    var context = {
      title: data[i].title,
      poster: data[i].poster,
      author: data[i].author,
      year: data[i].year
    };

    var html = template(context);
    $('.container').append(html);
  }

}

//Nope
function ricerca(author) {
  $.ajax(
    {
      'url': 'http://localhost/php-ajax-dischi/server.php',
      'method': 'GET',
      'success': function(risposta){
          var source = $('#entry-template').html();
          var template = Handlebars.compile(source);

          for (var i = 0; i < risposta.length; i++)  {
            if (risposta[i].author == author) {
              var context = risposta[i];
              var html = template(context);
              $('.container').append(html);
            }
          }
      }
    },
    {
      'error':function(){
        alert('errore!');
      }
    }
  );
}
