<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"> 
    <link  href="{{asset('css/app.css') }}" rel="stylesheet">
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
  
  <form class="row container text-center" action="" method="POST" enctype="multipart/form-data" >
  @csrf
  <label for="nom" >Nom de l&apos;Argonaute</label>
  <div class="row justify-content-center">

    <div class="col-auto ">
      <input id="nom" class="form-control" name="nom" type="text" placeholder="Charalampos" />
    </div >
    <div class="col-auto ">
      <button type="submit" class="btn btn-primary mb-3">Envoyer</button>
    </div>

  </div>
  </form>


  <!-- Member list -->
  <h2>Membres de l'équipage</h2>
  <section class="member-list container text-center">
    <table class=" table">
                    <thead>
                        <tr>
                            <th scope="col">Numéro</th>
                            <th scope="col" >Nom</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($membres as $membre)
                            <tr>
                                <th scope="row">{{ $i++ }}</th>
                                
                                <td>{{ $membre->nom }}</td>
                            </tr>
                    @endforeach
  
                    </tbody>
    </table>
    
  </section>
   
</main>

<footer>
  <p>Réalisé par Jason en Anthestérion de l'an 515 avant JC</p>
</footer>
</body>
</html>