<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>  function openMenu() {
  let nav = document.querySelectorAll("nav")
  nav.forEach(element => {

      element.classList.toggle("open")
  });
} 
</script>
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="style.css">
    <script type="module" src="index.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ballet:opsz@16..72&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link rel=”stylesheet” href=”https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css”>
    <title>Mon portfolio</title>
    
</head>
<body>
  <div id="container" >
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
   

<div class="one" style="line-height:65px">  
<h1>
        <span
           class="txt-rotate "
           data-period="2000"
           data-rotate='[ " Hello!", " Hi!", " Bonjour!", "Hola!"," 안녕하십니까." ]'></span>
      </h1>
      <h2>Jocya Agon a.k.a Avany
      </h2>   
 
      <div id="reseau">
      <a href="https://www.facebook.fr" title="facebook icônes">
        <img src="/image/facebook.png" alt="">
      </a>
      <a href="https://www.instagram.fr" title="facebook icônes">
        <img src="/image/instagram.png" alt="">
      </a>
      <a href="https://fr.linkedin.com/" title="facebook icônes">
        <img src="/image/linkedin.png" alt="">
      </a>
      </div>      
</div>
</header>


</div>


</body>
</html>