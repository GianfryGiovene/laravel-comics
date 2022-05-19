{{--

Create un nuovo progetto Laravel, su cui lavoreremo sia oggi che domani.
Oggi concentratevi sul layout: create un file di layout in cui inserire la struttura comune di tutte le pagine del sito web (tag head, tag body, ...) 
eventualmente includendo header e footer tramite due partials.
Create poi una rotta per visualizzare la lista di tutti i fumetti recuperati da un file inserito nella cartella config e abbellite il tutto sfruttando Sass.
Bonus:
Create più pagine istituzionali che condividono lo stesso layout
aggiungete una rotta per la pagina di dettaglio che sarà raggiungibile al click su un fumetto. Non occorre che i dati del dettaglio siano dinamici: potete visualizzare 
sempre lo stesso dettaglio passandolo come "data" alla view. 

--}}


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <title>Laravel-DC-Comics - @yield('title')</title>
</head>
<body>
    @include('partials/header')
    <main>
        <section>
            @yield('series-content')
        </section>
        <section>
            
        </section>
    </main>
    @include('partials/footer')
</body>
</html>