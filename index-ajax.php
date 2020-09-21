<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/app.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script>
    <title>PHP Ajax Dischi</title>
  </head>
  <body>
    <header>
      <div class="top">
        <img class="top-img" src="https://developer.spotify.com/assets/branding-guidelines/icon3@2x.png" alt="logo">
        <div class="sele">
          <select id='scelta'name="">
              <option value="All">All</option>
              <option value="Bon Jovi">Bon Jovi</option>
              <option value="Queen">Queen</option>
              <option value="Sting">Sting</option>
              <option value="Steve Gadd Band">Steve Gadd Band</option>
              <option value="Iron Maiden">Iron Maiden</option>
              <option value="Eric Clapton">Eric Clapton</option>
          </select>
        </div>
      </div>
    </header>
    <main>


      <div class="container">




      </div>
    </main>

    <script id="entry-template" type="text/x-handlebars-template">

          <div class="cd">
            <img class="cd-poster" src="{{{poster}}}" alt="poster">
            <h3>{{{title}}}</h3>
            <span class="author">{{{author}}}</span><br>
            <span class="year">{{{year}}}</span>
          </div>

    </script>

    <script src="src/app.js" charset="utf-8"></script>
  </body>
</html>
