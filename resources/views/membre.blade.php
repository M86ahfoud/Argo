<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  href="{{asset('css/app.css') }}" rel="stylesheet">
</head>
    <title>Document</title>
</head>
<body>
<header>
  <h1>
    <img src="https://www.wildcodeschool.com/assets/logo_main-e4f3f744c8e717f1b7df3858dce55a86c63d4766d5d9a7f454250145f097c2fe.png" alt="Wild Code School logo" />
    Les Argonautes
  </h1>
</header>

<!-- Main section -->
<main>
  
  <!-- New member form -->
  <h2>Ajouter un(e) Argonaute</h2>
  <form action="" method="POST" enctype="multipart/form-data" class="new-member-form">
  @csrf
  <label for="nombre">Nombre</label>
  <input type="number" name="nombre" id="nombre" >
  <label for="nom">Nom de l&apos;Argonaute</label>
  <input id="nom" name="nom" type="text" placeholder="Charalampos" />
    <button type="submit">Envoyer</button>
  </form>


  <!-- Member list -->
  <h2>Membres de l'équipage</h2>
  <section class="member-list">
    <div class="member-item">Eleftheria</div>
    <div class="member-item">Gennadios</div>
    <div class="member-item">Lysimachos</div>
  </section>
    @foreach ($membres as $membre)
    <p>{{$i++}}</p>
    <p>{{ $membre->nom }}</p>
    @endforeach

</main>

<footer>
  <p>Réalisé par Jason en Anthestérion de l'an 515 avant JC</p>
</footer>
</body>
</html>