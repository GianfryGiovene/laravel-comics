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
    <title>DC-Comics</title>
</head>
<body>
    <header>
        <div>
            <div class="container top">
                <div>DC POWER VISA</div>
                <div>ADDITIONAL DC SITES</div>
            </div>
        </div>
        <div>
            <div class="container bottom">
                <img src="{{asset("images/dc-logo.png")}}" alt="">
                <nav>
                    <ul>
                        <li><a href="">CHARACTERS</a></li>
                        <li><a href="">COMICS</a></li>
                        <li><a href="">MOVIES</a></li>
                        <li><a href="">TV</a></li>
                        <li><a href="">GAMES</a></li>
                        <li><a href="">COLLECTIBLES</a></li>
                        <li><a href="">VIDEOS</a></li>
                        <li><a href="">FANS</a></li>
                        <li><a href="">NEWS</a></li>
                        <li><a href="">SHOP</a></li>
                        <li><input type="text" name="" id="" placeholder="Search"></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div id="jumbo-tron">
            <img src="{{asset("images/jumbotron.jpg")}}" alt="">
        </div>
    </header>
    <main>
        <section>

        </section>
    </main>
    <footer>
        <div></div>
        <div></div>
    </footer>
</body>
</html>