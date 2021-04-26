<?php
/*
* Template Name:Index
*/
get_header();
?>

<main class="container-fluid ">
    <?php get_template_part('parts/upper-jumbotron')?>
</main>

<div class="modal fade" id="popup-closure" tabindex="-1" role="dialog" aria-labelledby="popup-closure" aria-hidden="true" data-backdrop="static" data-keyboard="false" data-show="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body p-0">
        <div class="container-fluid">
					<div class="row position-relative p-0">
						<button id="modal-close-btn" type="button" class="text-right close close-button w-100" data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
						</button>
						<div class="col-12 col-lg-6 p-0">
							<img src="https://www.trivenetoassicura.it/wp-content/themes/triveneto-theme/media/home/popup-chiusura-2.jpg" class="img-fluid d-inline">
						</div>
						<div class="col-12 col-lg-6 pad-popup">
								<h1 class="bg-blue p-3">AVVISO ALLA CLIENTELA</h1>
								<p class="mt-3">
									Informiamo tutti i nostri clienti che da novembre i nostri uffici saranno <strong>CHIUSI</strong> il <strong>MERCOLEDÌ POMERIGGIO</strong>.
								</p>
								<p>
									Per qualsiasi informazione:<br>
									Sede di Mareno: 0438.492640<br>
									Sede di Codognè: 0438.793082 
								</p>
								<p>
									Grazie per la collaborazione,<br>
									Lo staff Triveneto Assicura
								</p>
						</div>
					</div>
				</div>
      </div>
    </div>
  </div>
</div>

<section id="index-chi-siamo" class="container scrvl1">
    <div class="row">
        <div class="col-12 col-lg-5 offset-lg-1">
            <h3>CHI SIAMO</h3>
            <h2>Il cliente al centro. Noi, i consulenti al suo fianco</h2>
            <p>Grazie al nostro metodo di lavoro, accompagniamo il cliente durante le varie fasi della sua vita con grande senso di responsabilità e nella piena consapevolezza dell’importante ruolo sociale che rivestiamo. </p>
        </div>
        <div class="col-12 col-lg-6 align-self-center">
            <img class="img-fluid round-border" src="<?php echo wp_get_upload_dir()['baseurl'] . '/chi-siamo.webp'?>" alt="">
        </div>
        <div class="col-12 col-lg-6" id="btn-last">
            <a href="<?php echo get_home_url() . '/chi-siamo'?>">Scopri</a>
        </div>
    </div>
</section>
<section class="container-fluid bg-grey jumbo scrvl2">
    <div class="row">
        <div class="col-12 col-lg-6">
            <p class="title title-5"> FUTURO SENZA SORPRESE</p>
            <h2>Un' analisi personalizzata, per un efficace tutela</h2>
            <p>
                Offriamo un servizio di consulenza innovativo, nato per individuare e quantificare tutti i rischi a maggior impatto, che possono generare una situazione di difficoltà economica per una persona o famiglia.
            </p>
            <div class="d-lg-block d-none">
                <img src="<?php echo wp_get_upload_dir()['baseurl'] . '/logo-futuro.webp' ?>" alt="">
                <img src="<?php echo wp_get_upload_dir()['baseurl'] . '/salvagente.webp'?>" alt="">
            </div>
        </div>
        <div class="col-lg-6 col-12 my-5 m-auto">
            <img class="img-fluid" src="<?php echo wp_get_upload_dir()['baseurl'] .'/analisi-futuro.webp'; ?>" alt="">
        </div>
        <div class="col-12">
            <div class="col-12 my-4  btn-white m-auto order-lg-2">
                <a href="<?php echo get_home_url() . '/servizi-assicurativi'?>">Scopri</a>
            </div>
            <div class="m-auto my-4 col-12" id="btn-last">
                <a href="#form-container"><i class="fas fa-mobile-alt mr-2"></i>Richiedi una consulenza</a>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid bg-grey scrvl2">
    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
        <div class="col p-5">
            <div class="card-num">1</div>
            <p class="card-text">
            ANALISI PERSONALIZZATA: comprenderai qual è la tua esposizione ai rischi e agli eventi di grande impatto economico.
            </p>
        </div>
        <div class="col p-5">
            <div class="card-num">1</div>
            <p class="card-text">
            ANALISI PERSONALIZZATA: comprenderai qual è la tua esposizione ai rischi e agli eventi di grande impatto economico.
            </p>
        </div>
        <div class="col p-5">
            <div class="card-num">1</div>
            <p class="card-text">
            ANALISI PERSONALIZZATA: comprenderai qual è la tua esposizione ai rischi e agli eventi di grande impatto economico.
            </p>
        </div>
        <div class="col p-5">
            <div class="card-num">1</div>
            <p class="card-text">
            ANALISI PERSONALIZZATA: comprenderai qual è la tua esposizione ai rischi e agli eventi di grande impatto economico.
            </p>
        </div>
    </div>
</section>
<section class="container scrvl2">
    <div class="row">
        <div class="m-auto col-12 col-lg-8 text-center">
            <h3>SERVIZI ASSICURATIVI</h3>
            <h2>Generare consapevolezza, per un futuro più sicuro</h2>
            <p>La nostra realtà assicurativa è specializzata in servizi rivolti a privati, imprese e liberi professionisti.</p>
        </div>
        
        <div class="col-12 col-lg-6" id="btn-last">
            <a href="<?php echo get_home_url() . '/servizi-assicurativi'?>">Scopri</a>
        </div>
    </div>
    <div class="row justify-content-between text-center">
        <div class="card-body col-12 col-lg-6 col-xl-5 m-auto">
            <img src="<?php echo wp_get_upload_dir()['baseurl'] . '/icona-privati.svg' ?>" alt="">
            <h1>PRIVATI</h1>
            <p class="card-text text-center">Accompagnare le persone nel loro percorso, consigliando loro le soluzioni migliori per un futuro più sicuro</p>
        </div>
        <div class="card-body">
            <img src="<?php echo wp_get_upload_dir()['baseurl'] . '/icona-imprese.svg' ?>" alt="">
            <h1>Imprese e Liberi Professionisti</h1>
            <p class="card-text text-center">Imparare a gestire i rischi e le incertezze per tutelare la propria attività con un'assistenza su misura</p>
        </div>
    </div>
</section>
<section class="bg-grey container-fluid scrvl2">
    <div class="row m-auto">
        <div class="col-12 col-lg-5">
            <h3>SUPPORTO</h3>
            <h2>Hai bisogno di informazioni? Scrivici su whatsapp!</h2>
            <p>Per fornire un servizio ancora più puntuale e attento alle esigenze del cliente, abbiamo attivato la messaggistica WhatsApp Business. Non esitare a contattarci!</p>
            <div class="col-12 col-lg-6" id="btn-last">
                <a href="whatsapp://send?phone=3453097250&text=Ho%20bisogno%20di%20informazioni%20riguardo%20ai%20vostri%20servizi">Scopri</a>
            </div>
        </div>
        <div class="col-12 col-lg-5 offset-lg-1">
            <img class="img-fluid w-100 " src="<?php echo wp_get_upload_dir()['baseurl'] . '/whatsapp.webp'  ?>" alt="">
        </div>
    </div>
</section>
<section class="container scrvl2">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-9 m-auto">
            <div class="text-center">
                <p class="title title-5">NOVITA'</p>
                <h2 class="title title-2">Rimani aggiornato sulle novità in tema assicurativo</h2>
                <div class="col-12 col-lg-6" id="btn-last">
                    <a href="<?php echo get_home_url() . '/news'?>">Tutte le novità</a>
                </div>
            </div>
        </div>
            <?php
            $args = array(
                'post_type' => 'news',
                'posts_per_page' => 3
            );
            $loop = new WP_Query($args);
            while($loop -> have_posts()) : $loop -> the_post();
            $preview = substr(get_the_excerpt(), 0 , 250) . '....';
            ?>
                <div class="col-lg-4 col-12">
                    <a href="<?php the_permalink()?>">
                        <img class="round-border img-fluid" src="<?php echo the_post_thumbnail_url('full');?>" alt="">
                    </a>
                    <span><?php echo strtoupper(get_post_meta(get_the_ID() , 'category' ,true ));?></h1>
                    <a href="<?php the_permalink();?>">
                        <h3 class="title title-3 text-left"><?php the_title();?></h3>
                    </a>
                    <?php echo $preview;?>
                    <a href="<?php the_permalink();?>">
                        <i class="fas fa-arrow-right"></i> <span>Scopri</span>
                    </a>
                </div>
                

            <?php endwhile; ?>
    </div>
</section>
<section id="form" class="scrvl2 mt-4 round-border">
    <?php get_template_part('parts/contact-form')?>
</section>

<?php get_footer();?>
