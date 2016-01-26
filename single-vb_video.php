<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="row" >
  <div id="slides">
    <ul class="slides-container">
      <li>
        <img src="<?= get_template_directory_uri()?>/gfx/carousel/imagefilme.jpg" alt="">
        <a href="#"><img src="<?= get_template_directory_uri(); ?>/gfx/vita-min-b-logo-300.png" class="vmb-logo preserve"></a>
        <div class="img-shadow"></div>
        <div class="slide-container">
          <div class="container-centered">
            <div class="container-heading">
              <h4><?php the_field('header_titel'); ?></h4>
              <p class="subtitle" style="font-size: 250%;">
                <?php the_field('header_untertitel'); ?>
              </p>
            </div>
            <p><a href="#" class="btn btn-primary btn-big"><?php the_field('header_button'); ?></a></p>
            <p class="slogan"><?php the_field('header_slogan'); ?></p>
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>
<div class="row">
  <div class="col-sm-3 col-md-6 col-lg-6 col-lg-offset-3">
    <div class="page-header col-lg-12">
      <h1>Imagefilm: fairwaltungskatalog</h1>
    </div>
    <article>
      <header class="entry-header">
        <!--<h1 class="title-post">Impressum</h1>	-->
      </header><!-- .entry-header -->

      <div class="entry-content">
        <div class="row">
          <div class="col-lg-4">
            <h2>Angaben gemäß § 5 TMG:</h2>
            <p>
              fairwaltungskatalog GmbH<br />
              Campus-Boulevard 57<br />
              52074 Aachen
            </p>
          </div>
          <div class="col-lg-4">
            <h2>Vertreten durch:</h2>
            <p>
              Dipl. Kaufmann (MBA)<br />
              Andreas Adams<br />
              Geschäftsführer
            </p>
          </div>
          <div class="col-lg-4">
            <h2>Kontakt:</h2>
            <table>
              <tbody>
                <tr>
                  <td>Telefon:</td>
                  <td>0241 &#8211; 477 05 669</td>
                </tr>
                <tr>
                  <td>Telefax:</td>
                  <td><span style="color: #ff6600;">0241 &#8211; 477 05 669</span></td>
                </tr>
                <tr>
                  <td>E-Mail:</td>
                  <td>info@fairwaltungskatalog.de</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <h2>Registereintrag:</h2>
            <p>
              Eintragung im Handelsregister.<br />
              Registergericht:Amtsgericht Aachen<br />
              Registernummer: HRB ???
            </p>
          </div>

          <div class="col-lg-4">
            <h2>Umsatzsteuer-ID:</h2>
            <p>
              Umsatzsteuer-Identifikationsnummer gemäß §27 a Umsatzsteuergesetz:<br />
              DE ???
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <h2>Haftungsausschluss (Disclaimer)</h2>
            <h3>Haftung für Inhalte</h3>
            <p>Als Diensteanbieter sind wir gemäß § 7 Abs.1 TMG für eigene Inhalte auf diesen Seiten nach den allgemeinen Gesetzen verantwortlich. Nach §§ 8 bis 10 TMG sind wir als Diensteanbieter jedoch nicht verpflichtet, übermittelte oder gespeicherte fremde Informationen zu überwachen oder nach Umständen zu forschen, die auf eine rechtswidrige Tätigkeit hinweisen. Verpflichtungen zur Entfernung oder Sperrung der Nutzung von Informationen nach den allgemeinen Gesetzen bleiben hiervon unberührt. Eine diesbezügliche Haftung ist jedoch erst ab dem Zeitpunkt der Kenntnis einer konkreten Rechtsverletzung möglich. Bei Bekanntwerden von entsprechenden Rechtsverletzungen werden wir diese Inhalte umgehend entfernen.</p>
            <h3>Haftung für Links</h3>
            <p>Unser Angebot enthält Links zu externen Webseiten Dritter, auf deren Inhalte wir keinen Einfluss haben. Deshalb können wir für diese fremden Inhalte auch keine Gewähr übernehmen. Für die Inhalte der verlinkten Seiten ist stets der jeweilige Anbieter oder Betreiber der Seiten verantwortlich. Die verlinkten Seiten wurden zum Zeitpunkt der Verlinkung auf mögliche Rechtsverstöße überprüft. Rechtswidrige Inhalte waren zum Zeitpunkt der Verlinkung nicht erkennbar. Eine permanente inhaltliche Kontrolle der verlinkten Seiten ist jedoch ohne konkrete Anhaltspunkte einer Rechtsverletzung nicht zumutbar. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Links umgehend entfernen.</p>
            <h3>Urheberrecht</h3>
            <p>Die durch die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten unterliegen dem deutschen Urheberrecht. Die Vervielfältigung, Bearbeitung, Verbreitung und jede Art der Verwertung außerhalb der Grenzen des Urheberrechtes bedürfen der schriftlichen Zustimmung des jeweiligen Autors bzw. Erstellers. Downloads und Kopien dieser Seite sind nur für den privaten, nicht kommerziellen Gebrauch gestattet. Soweit die Inhalte auf dieser Seite nicht vom Betreiber erstellt wurden, werden die Urheberrechte Dritter beachtet. Insbesondere werden Inhalte Dritter als solche gekennzeichnet. Sollten Sie trotzdem auf eine Urheberrechtsverletzung aufmerksam werden, bitten wir um einen entsprechenden Hinweis. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Inhalte umgehend entfernen.</p>
          </div>
        </div>
      </div><!-- .entry-content -->
      <footer class="entry-footer">
      </footer><!-- .entry-footer -->
    </article>
  </div>
</div>
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
