<?php
get_header();
?>

<!-- Egen CSS -->
<style>
  :root {}
  #striber {
    width: 100%;
    height: 500px;
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

.shroomiepic {
  -webkit-box-shadow: 0px 5px 10px -1px rgba(65,60,88,0.63); 
box-shadow: 0px 5px 10px -1px rgba(65,60,88,0.63);
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
    .h1, h1 {
font-size: 67px !important;
}
  }

</style>


<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- Indsæt font-link herunder -->

<body>

<section id="striber">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 m-5 p-5">
      <h1>Lidt om os</h1>
      <p>Vi er Shroomie, din nye roomie. Men vi er mere en bare en svampekasse, vi er et fællesskab med en mission. Vi vil gøre det lettere for dig, at træffe bæredygtige valg! </p>
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

<div class="col-sm-6 cols-2 p-5">
<h2>Vores mission</h2>
<p>Hos Shroomie er vi ikke fan af dystopiske verdenssyn og løftede pegefingre, når det kommer til bæredygtighed. Nej, vi tror på at kreativitet og fællesskab er vejen frem. Handlekraften og modet er langt større i det kollektive rum. Bliv en del af vores fællesskab og bliv inspireret til en mere bæredygtig livsstil. De små ting betyder meget i det store billede.</p>
<a href="https://moniquemariefunch.dk/kea/shroomie/vaer-med/" class="button item">Vær med →</a>
</div>

<div class="col-sm-6">
<img class="img-fluid shroomiepic" src="https://moniquemariefunch.dk/kea/shroomie/wp-content/themes/Divi-child/img/svampe.jpg" alt="mission"/>
</div>

</section>





    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

   <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/ScrollTrigger.min.js"></script>
   
    <!-- Egen Script -->
<script> 
    gsap.registerPlugin(ScrollTrigger);

const sections = document.querySelectorAll("section");

sections.forEach((section) => {
    const img = section.querySelectorAll("img");
  
  gsap
    .timeline({
      scrollTrigger: {
        trigger: section,
        start: "200% 200%",
        end: "+=250",
        scrub: true,
        // markers: true,
      },
    })
    .from(img, {
      opacity: 0.3,
      
    })
    .to(img, {
     opacity: 1,
   });
});

const buttons = gsap.utils.toArray(".cols-2");

buttons.forEach((element, index) => {
  let items = element.querySelector(".item");
  let distance = index % 2 == 0 ? 100 : -100;
  let tl = gsap.timeline({
    scrollTrigger: {
      trigger: element,
      start: "top 50%",
      toggleActions: "restart none none reverse",
        // markers: true,
    },
  });

  tl.from(items, {
    duration: 0.5,
    xPercent: gsap.utils.wrap([-distance, distance]),
  });
  tl.from(items, { opacity: 0, duration: 0.3 }, 0);
});

  </script>

</body>


<?php
get_footer();
?>
