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
});

function stampa(data){
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
