
<div class="row">
  <div class="col-md-12">
    <ul class="pagination center-block">
      <li class="first"><a href="#">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li class="current"><a href="#">4</a></li>
      <li><a href="#">5</a></li>
      <li class="middle"><a href="#">...</a></li>
      <li><a href="#">56</a></li>
      <li><a href="#">57</a></li>
      <li><a href="#">58</a></li>
      <li><a href="#">59</a></li>
      <li class="last"><a href="#">60</a></li>
    </ul>
  </div>
</div>

<?php for ($i=0; $i < 5; $i++):?>
<h1 class="entete">SOLDES</h1>
<div class="wrapper">
  <div class="container">
  <article class="articleNews row">
    <div class="col-md-12">
      <div class="news txt-justify">
        <?php if ($i%2 == 0): ?>
          <img class="img-responsive pull-left img-text img-txt" src="assets/img/400x400.jpg"/>
          <?php else: ?>
          <img class="img-responsive pull-right img-text img-txt" src="assets/img/400x400.jpg"/>
        <?php endif; ?>
        <p class="text_right">
          Les SOLDES d'été 2015 commencent le 24 juin et il y a des bandeaux spécialement dédiés à la mise en avant des soldes sur vos espaces publicitaires !
          Rendez-vous dans les bandeaux de pub > catégorie bannières génériques pour user et abuser des bandeaux SOLDES:
        </p>
        <p>
          Une page spéciale avec une sélection d'articles soldés est disponible sur votre boutique! Choisissez ce lien et proposez à vos visiteurs d'accéder directement aux SOLDES en dirigeant votre trafic sur la page Keywords !
        </p>
        <p>
          Le principe est le suivant, vous avez même la possibilité d'insérer un tracker pour mieux suivre vos ventes <i class="fa fa-smile-o"></i>
          Le mot clé est SOLDES-Ete-2015
        </p>
        <p>
          Le lien à utiliser avec les bannières est celui-ci:
          méthode url rewritée:
          http://www.mysexyshop.com/fr/keywords/SOLDES-Ete-2015/
        </p>
        <p>
          méthode url dynamique avec tracker:
          http://www.mysexyshop.com/?lang=fr&task=keywords&keywords=SOLDES-Ete-2015&tracker=tracker_au_choix
        </p>
        <p>
          * durée des soldes du 24 juin au 4 aout 2015.
        </p>
        <p>
          Pour contacter notre support cliquez ici. Bonnes ventes !
        </p>
      </div>
    </div>
  </article>
  </div>
</div>
<?php endfor; ?>
