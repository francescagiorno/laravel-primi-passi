<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>laravel-Dischi</title>
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
      <div id="root">
        <div class="cds-container container">

           @foreach ($dischi['response'] as $disco)

              <div class="cd">
                <h1>{{$disco['title']}}</h1>
                <img src="{{$disco['poster']}}" alt="Immagine di copertina">
                <span class="author">{{$disco['author']}}</span>
                <span class="author">{{$disco['genre']}}</span>
                <span class="year">{{$disco['year']}}}</span>
             </div>

           @endforeach
        </div>
     </div>
    </body>
</html>