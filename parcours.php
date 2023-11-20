<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="style.css" /> -->
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="style.css">
    <script type="module" src="index.js"></script>
    <title>Mon portfolio</title>
</head>
<body>
<nav id="nav-bar">
        <i id="menu-button" class="fa-times"></i>
        <span class="brand"></span>
        <ul id="menu-closed" class="menu">
          <li>
            <a class="link" href="index.php">Acceuil</a>
          </li>
          <li>
            <a class="link" href="Perso.php">Un peu de moi</a>
          </li>
          <li>
            <a class="link" href="parcours.php">Parcours et compétence</a>
          </li>
           <li>
            <a class="link" href="contact.php">Contact</a>
          </li>
        </ul>
      </nav>
      <section id="services">
        <div class="container">
            <h1 class="text-center">Services</h1>
            <div class="row">
                <div class="col-lg-4 mt-4">
                    <div class="card servicesText">
                        <div class="card-body">
                            <i class="fas servicesIcon fa-clock"></i>
                            <h4 class="card-title mt-3"> css</h4>
                            <p class="card-text ">Avec nôtre professeur, Monsieur Legoff, nous avons appris à réaliser des animations en CSS, colorés nos textes, créer un portfolio, un CV et bien d'autres choses. Le Css est un language principale du Web Ouvert. 
                            </p>
                            
                        </div>
                    </div>  
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="card servicesText">
                        <div class="card-body">
                            <i class='fas servicesIcon fa-layer-group'></i>
                            <h4 class="card-title mt-3">Javascript</h4>
                            <p class="card-text "> Javascript est un language de programmation d'objet que nous utilisons assez souvent. Ce language permet de faciliter et de lisser les différentes actions et animations nécessaire, il améliore la dynamique du site et mets en valeur le Css utilisé.
                            </p>
                        </div>
                    </div>  
                </div>

                <div class="col-lg-4 mt-4">
                    <div class="card servicesText">
                        <div class="card-body">
                            <i class='far servicesIcon fa-check-circle'></i>
                            <h4 class="card-title mt-3">PHP</h4>
                            <p class="card-text ">PHP est un language de script généraliste et Open source. Il est facilement intégrable a du HTML. L'approfondissement du language est encore a peaufiner mais nous y arriverons
                            </p>
                        </div>
                    </div>  
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 mt-4">
                    <div class="card servicesText">
                        <div class="card-body">
                            <i class='fas servicesIcon fa-search'></i>
                            <h4 class="card-title mt-3">Node js</h4>
                            <p class="card-text ">Nous n'avons pas encore approfondit les informations sur Node Js cependant nous travaillons avec cet environnement Open Source lors de la conception de nôtre index.
                            </p>
                        </div>
                    </div>  
                </div>

               
            
            </div>
        </div>
    </section>

    <footer id="footer">
      <div class="container-fluid">
          <!-- social media icons -->
          <div class="social-icons mt-4">
              <a href="https://www.facebook.com/" target="_blank"> facebook<i class="fab fa-facebook"></i></a>
              <a href="https://www.instagram.com/" target="_blank">instagram<i class="fab fa-instagram"></i></a>
              <a href="https://www.twitter.com/" target="_blank">twitter<i class="fab fa-twitter"></i></a>
             
          </div>
      </div>
  </footer>
</body>

</html>