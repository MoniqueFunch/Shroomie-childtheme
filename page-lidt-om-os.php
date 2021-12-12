<?php
get_header();
?>

<!-- Egen CSS -->
<style>
    :root {}
  #striber {
    width: 100%;
    height: 450px;
    background-image: url(https://moniquemariefunch.dk/kea/shroomie/wp-content/themes/Divi-child/img/striber.png);
    background-repeat: no-repeat;
    background-position: 15% 10%;
  }

#kontakt {
  background-color: #413C58;
  align-items: center;
}

  .kontaktos {
    color: #F4F0BA;
  }

  body {
    overflow-x: hidden;
  }

  .et-cart-info {
    text-decoration: none;
  }

  .h1, h1 {
    font-size: 67px !important;
}

.button{
background-color: none;
        border: none;
        color: #EC6959;
        padding-left: 180px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 20px;
        margin: 4px 2px;
        cursor: pointer;
       text-align: right;
        font-family: sofia-pro, sans-serif;
font-size: 22px;
      }
  

      .button:hover {
        color: #EC6959;
      }

  @media only screen and (min-width: 600px) {
    .button{
      padding-left: 400px;
    }

    #striber {
      background-position: right;
    }
  }

</style>


<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- Indsæt font-link herunder -->

<head>
<title>Lidt om os</title>
</head>
<body>

<section id="striber">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 m-5 p-5">
      <h1>Lidt om os</h1>
      <p>Vi er Shroomie, din nye roomie. Men vi er mere en bare en svampekasse, vi er et fællesskab med en mission. Vi vil gerne gøre det lettere for alle, uanset hvem du er og hvor du bor, at træffe bæredygtige valg. </p>
      </div>
    </div>
  </div>
</section>

<section id="kontakt">

<div class="container">
<div class="røw">

<div class="col-12 text-center p-4">
<h2 class="kontaktos">Kontakt os</h2>
<h4>Shroomie@gmail.com</h4>
<h4>+45 23 67 28 63</h4>
</div>

</div>
</div>

</section>

<section id="mission" class="row m-5">

<div class="col-sm-6 p-5">
<h2>Vores mission</h2>
<p>Hos Shroomie er vi ikke fan af dystopiske verdenssyn og løftede pegefingre, når det kommer til bæredygtighed. Nej, vi tror på at kreativitet og fællesskab er vejen frem. Handlekraften og modet er langt større i det kollektive rum. Bliv en del af vores fællesskab og bliv inspireret til en mere bæredygtig livsstil. De små ting betyder meget i det store billede.</p>
<a href="https://moniquemariefunch.dk/kea/shroomie/vaer-med/" class="button">Vær med →</a>
</div>

<div class="col-sm-6">
<img class="img-fluid" src="https://moniquemariefunch.dk/kea/shroomie/wp-content/themes/Divi-child/img/svampe.jpg" alt="mission"/>
</div>

</section>





    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Egen Script -->
    <script> 
  </script>

</body>


<?php
get_footer();
?>
