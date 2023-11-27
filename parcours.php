<!DOCTYPE html>
<html lang="en">
<head>
<script>  function openMenu() {
  let nav = document.querySelectorAll("nav")
  nav.forEach(element => {

      element.classList.toggle("open")
  });
} 
</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="style.css" /> -->
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ephesis&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link rel=”stylesheet” href=”https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css”>
    <link rel="stylesheet" href="style.css">
    <script type="module" src="index.js"></script>
    <title>Mon portfolio</title>
</head>
<body>

<header>
<nav>
        <i onclick="openMenu()" class="fa-solid fa-bars"></i>
  
        <ul class="liste">
          <li>
            <a class="link" href="index.php">Acceuil</a>
          </li>
          <li>
            <a class="link" href="Perso.php">A propos</a>
          </li>
          <li>
            <a class="link" href="parcours.php">Parcours et compétence</a>
          </li>
           <li>
            <a class="link" href="contact.php">Contact</a>
          </li>
        </ul>
      </nav>
      <nav class="mobile">
      <div class="header-nav-mobile">
        <i onclick="openMenu()" class="fa-solid fa-xmark""></i>
  
        <ul class="liste">
          <li>
            <a class="link" href="index.php">Acceuil</a>
          </li>
          <li>
            <a class="link" href="Perso.php">A propos</a>
          </li>
          <li>
            <a class="link" href="parcours.php">Parcours et compétence</a>
          </li>
           <li>
            <a class="link" href="contact.php">Contact</a>
          </li>
        </ul>
      </nav>
    </header>

 <div class="ag-format-container">

  <div class="ag-courses_box">
  <section>
    <div class="ag-courses_item">
      <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
         Javascript
        </div>

        <div class="ag-courses-item_text-box">
        langage de script léger, orienté objet, principalement connu comme le langage de script des pages web.
       
        </div>
      </a>
    </div>

    <div class="ag-courses_item">
      <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
         HTML
        </div>

        <div class="ag-courses-item_text-box">
        « HyperText Markup Language » qu'on peut traduire par « langage de balises pour l'hypertexte »
         
        </div>
      </a>
    </div>

    <div class="ag-courses_item">
      <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
        CSS
        </div>

        <div class="ag-courses-item_text-box">
        CSS (Cascading Style Sheets en anglais, ou « feuilles de style en cascade ») sont le code utilisé pour mettre en forme une page web. 
         
        </div>
      </a>
    </div>
  </section>

  <section>
    <div class="ag-courses_item">
      <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
          PHP
        </div>

        <div class="ag-courses-item_text-box">
        langage de scripts généraliste et Open Source, spécialement conçu pour le développement d'applications web.
         
        </div>
      </a>
    </div>

    <div class="ag-courses_item">
      <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
         Figma
        </div>

        <div class="ag-courses-item_text-box">
        Figma est un outil de design graphique collaboratif basé sur le Cloud.
        </div>
      </a>
    </div>
    <div class="ag-courses_item">
      <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
         Node Js
        </div>

        <div class="ag-courses-item_text-box">
        Node.js est un environnement permettant d’exécuter du Javascript côté serveur.
          
        </div>
      </a>
    </div>
  </section>

  </div>
</div>
</body>

</html>