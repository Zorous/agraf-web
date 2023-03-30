@extends('layout.layouts')

@section('title')
Agrtravis - Construction Et Amenagement 
@endsection

@section('content')

 <!-- ======= Hero Section ======= -->
 <section id="hero" class="hero">

<div class="info d-flex align-items-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 text-center">
        <h2 data-aos="fade-down">Bienvenue au <span>Agrtravis</span></h2>
        <p data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <a data-aos="fade-up" data-aos-delay="100" href="#get-started" class="btn-get-started">Commencer</a>
      </div>
    </div>
  </div>
</div>

<div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

  <div class="carousel-item active" style="background-image: url('/storage/assets/img/hero-carousel/hero-carousel-1.jpg')"></div>
  <div class="carousel-item" style="background-image: url('/storage/assets/img/hero-carousel/hero-carousel-2.jpg')"></div>
  <div class="carousel-item" style="background-image: url('/storage/assets/img/hero-carousel/hero-carousel-3.jpg')"></div>
  <div class="carousel-item" style="background-image: url('/storage/assets/img/hero-carousel/hero-carousel-4.jpg')"></div>
  <div class="carousel-item" style="background-image: url('/storage/assets/img/hero-carousel/hero-carousel-5.jpg')"></div>

  <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
  </a>

  <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
  </a>

</div>

</section><!-- End Hero Section -->

<main id="main">


<!--

  <section id="constructions" class="constructions">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Constructions</h2>
        <p></p>
      </div>

      <div class="row gy-4">

        <div class="col-lg-6 fade-in" data-aos="fade-up" data-aos-delay="100">
          <div class="card-item">
            <div class="row">
              <div class="col-xl-5">
                <div class="card-bg" style="background-image: url('/storage/assets/img/etude.jpg'); aspect-ratio:auto; filter: contrast(1);"></div>
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">L'étude de sol.</h4>
                  <p>Fuga in dolorum et iste et culpa. Commodi possimus nesciunt modi voluptatem placeat deleniti adipisci. Cum delectus doloribus non veritatis. Officia temporibus illo magnam. Dolor eos et.</p>
                </div>
              </div>
            </div>
          </div>
        </div> 

        <div class="col-lg-6 fade-in" data-aos="fade-up" data-aos-delay="100">
          <div class="card-item">
            <div class="row">
              <div class="col-xl-5">
                <div class="card-bg" style="background-image: url('/storage/assets/img/Leterrassement.jpg'); aspect-ratio:auto; filter: contrast(1);"></div>
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">Le terrassement.</h4>
                  <p>Fuga in dolorum et iste et culpa. Commodi possimus nesciunt modi voluptatem placeat deleniti adipisci. Cum delectus doloribus non veritatis. Officia temporibus illo magnam. Dolor eos et.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 fade-in" data-aos="fade-up" data-aos-delay="200">
          <div class="card-item">
            <div class="row">
              <div class="col-xl-5">
                <div class="card-bg" style="background-image: url('/storage/assets/img/Lexcavation.jpg'); aspect-ratio:auto; filter: contrast(1);"></div>
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">L'excavation.</h4>
                  <p>Fuga in dolorum et iste et culpa. Commodi possimus nesciunt modi voluptatem placeat deleniti adipisci. Cum delectus doloribus non veritatis. Officia temporibus illo magnam. Dolor eos et.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 fade-in" data-aos="fade-up" data-aos-delay="200">
          <div class="card-item">
            <div class="row">
              <div class="col-xl-5">
                <div class="card-bg" style="background-image: url('/storage/assets/img/Lesfondations.jpg'); aspect-ratio:auto; filter: contrast(1);"></div>
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">Les fondations.</h4>
                  <p>Fuga in dolorum et iste et culpa. Commodi possimus nesciunt modi voluptatem placeat deleniti adipisci. Cum delectus doloribus non veritatis. Officia temporibus illo magnam. Dolor eos et.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 fade-in" data-aos="fade-up" data-aos-delay="300">
          <div class="card-item">
            <div class="row">
              <div class="col-xl-5">
                <div class="card-bg" style="background-image: url('/storage/assets/img/Lassainissement.jpg'); aspect-ratio:auto; filter: contrast(1);"></div>
              </div>
              <div class=" col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">L’assainissement.</h4>
                  <p>Fuga in dolorum et iste et culpa. Commodi possimus nesciunt modi voluptatem placeat deleniti adipisci. Cum delectus doloribus non veritatis. Officia temporibus illo magnam. Dolor eos et.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class=" col-lg-6 fade-in" data-aos="fade-up" data-aos-delay="300">
          <div class="card-item">
            <div class="row">
              <div class="col-xl-5">
                <div class="card-bg" style="background-image: url('/storage/assets/img/Lesoubassement.jpg'); aspect-ratio:auto; filter: contrast(1);"></div>
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">Le soubassement.</h4>
                  <p>Fuga in dolorum et iste et culpa. Commodi possimus nesciunt modi voluptatem placeat deleniti adipisci. Cum delectus doloribus non veritatis. Officia temporibus illo magnam. Dolor eos et.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 fade-in" data-aos="fade-up" data-aos-delay="400">
          <div class="card-item">
            <div class="row">
              <div class="col-xl-5">
                <div class="card-bg" style="background-image: url('/storage/assets/img/LePlancher.jpg'); aspect-ratio:auto; filter: contrast(1);"></div>
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">Le Plancher.</h4>
                  <p>Fuga in dolorum et iste et culpa. Commodi possimus nesciunt modi voluptatem placeat deleniti adipisci. Cum delectus doloribus non veritatis. Officia temporibus illo magnam. Dolor eos et.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 fade-in" data-aos="fade-up" data-aos-delay="400">
          <div class="card-item">
            <div class="row">
              <div class="col-xl-5">
                <div class="card-bg" style="background-image: url('/storage/assets/img/Lélévation.jpg'); aspect-ratio:auto; filter: contrast(1);"></div>
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">L'élévation.</h4>
                  <p>Fuga in dolorum et iste et culpa. Commodi possimus nesciunt modi voluptatem placeat deleniti adipisci. Cum delectus doloribus non veritatis. Officia temporibus illo magnam. Dolor eos et.</p>
                </div>
              </div>
            </div>
          </div>
        </div>



        <div class="col-lg-6 fade-in" data-aos="fade-up" data-aos-delay="500">
          <div class="card-item">
            <div class="row">
              <div class="col-xl-5">
                <div class="card-bg" style="background-image: url('/storage/assets/img/constructions-2.jpg'); aspect-ratio:auto; filter: contrast(1);"></div>
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">La charpente</h4>
                  <p>Sunt deserunt maiores voluptatem autem est rerum perferendis rerum blanditiis. Est laboriosam qui iste numquam laboriosam voluptatem architecto. Est laudantium sunt at quas aut hic. Eum dignissimos.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 fade-in" data-aos="fade-up" data-aos-delay="500">
          <div class="card-item">
            <div class="row">
              <div class="col-xl-5">
                <div class="card-bg" style="background-image: url('/storage/assets/img/constructions-3.jpg'); aspect-ratio:auto; filter: contrast(1);"></div>
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">La toiture</h4>
                  <p>Dicta porro nobis. Velit cum in. Nesciunt dignissimos enim molestiae facilis numquam quae quaerat ipsam omnis. Neque debitis ipsum at architecto officia laboriosam odit. Ut sunt temporibus nulla culpa.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 fade-in" data-aos="fade-up" data-aos-delay="600">
          <div class="card-item">
            <div class="row">
              <div class="col-xl-5">
                <div class="card-bg" style="background-image: url('/storage/assets/img/constructions-4.jpg'); aspect-ratio:auto; filter: contrast(1);"></div>
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">Les menuiseries extérieures</h4>
                  <p>Aut est quidem doloremque voluptatem magnam quis excepturi vero quia. Eum eos doloremque architecto illo at beatae dolore. Fugiat suscipit et sint ratione dolores. Aut aliquid ea dolores libero nobis.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>
 
-->

<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Services</h2>
      <p>Voluptatem quibusdam ut ullam perferendis repellat non ut consequuntur est eveniet deleniti fignissimos eos quam</p>
    </div>

    <div class="row gy-4">
<div class="col-xl-12">
  <h2 class="text-center">Construction</h2>
  <div class="d-flex justify-content-evenly align-items-center flex-wrap">
    <div class="col-lg-4 col-md-6 fade-in mx-3 my-3" data-aos="fade-up" data-aos-delay="100">
        <div class="service-item  position-relative">
          <div class="rounded-3  mx-auto">
            <img src="/storage/assets/img/services/image003.png" style="width:280px; height:150px" loading="lazy" alt="..." >
          </div>
          <h3>Terrassement</h3>
          <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
          <a href="#" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6 fade-in mx-3 my-3"" data-aos="fade-up" data-aos-delay="100">
        <div class="service-item position-relative">
          <div class="rounded-3 mx-auto">
            <img src="/storage/assets/img/services/image007.png" style="width:280px; height:150px" loading="lazy" alt="..." >
          </div>
          <h3>les Fondations</h3>
          <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
          <a href="#" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6 fade-in mx-3 my-3"" data-aos="fade-up" data-aos-delay="200">
        <div class="service-item position-relative">
          <div class="rounded-3 mx-auto">
            <img src="/storage/assets/img/services/image009.png" style="width:280px; height:150px" loading="lazy" alt="..." >
          </div>
          <h3>Dallages et Poteaux</h3>
          <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
          <a href="#" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6 fade-in mx-3 my-3"" data-aos="fade-up" data-aos-delay="200">
        <div class="service-item position-relative">
          <div class="rounded-3 mx-auto">
            <img src="/storage/assets/img/services/image015.png" style="width:280px; height:150px" loading="lazy" alt="..." >
          </div>
          <h3>Mur De Cloture et Cage d'escalier et Picsine </h3>
          <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
          <a href="#" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
  </div>
   
</div>
     
<div class="col-xl-12">
  <h2 class="text-center">Amenagement</h2>
<div class="d-flex justify-content-evenly align-items-center flex-wrap">
<div class="col-lg-4 col-md-6 fade-in mx-3 my-3"" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item position-relative">
          <div class="rounded-3 mx-auto">
            <img src="/storage/assets/img/services/image021.png" style="width:280px; height:150px" loading="lazy" alt="..." >
          </div>
          <h3>Carllage Et Marbre </h3>
          <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
          <a href="#" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6 fade-in mx-3 my-3"" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item position-relative">
          <div class="rounded-3 mx-auto">
            <img src="/storage/assets/img/services/image024.png" style="width:280px; height:150px" loading="lazy" alt="..." >
          </div>
          <h3>Plattre</h3>
          <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
          <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 fade-in mx-3 my-3"" data-aos="fade-up" data-aos-delay="400">
        <div class="service-item position-relative">
          <div class="rounded-3 mx-auto">
            <img src="/storage/assets/img/services/image030.png" style="width:280px; height:150px" loading="lazy" alt="..." >
          </div>
          <h3>Peinture</h3>
          <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
          <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 fade-in mx-3 my-3"" data-aos="fade-up" data-aos-delay="400">
        <div class="service-item position-relative">
          <div class="rounded-3 mx-auto">
            <img src="/storage/assets/img/services/image032.png" style="width:280px; height:150px" loading="lazy" alt="..." >
          </div>
          <h3>Menuiserie bois</h3>
          <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
          <a href="#" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 fade-in mx-3 my-3"" data-aos="fade-up" data-aos-delay="500">
        <div class="service-item position-relative">
          <div class="rounded-3 mx-auto">
            <img src="/storage/assets/img/services/image036.png" style="width:280px; height:150px" loading="lazy" alt="..." >
          </div>
          <h3>Menuiserie alluminuim</h3>
          <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
          <a href="#" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 fade-in mx-3 my-3"" data-aos="fade-up" data-aos-delay="500">
        <div class="service-item position-relative">
          <div class="rounded-3 mx-auto">
            <img src="/storage/assets/img/services/image040.png" style="width:280px; height:150px" loading="lazy" alt="..." >
          </div>
          <h3>Sanitaire</h3>
          <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
          <a href="#" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 fade-in mx-3 my-3"" data-aos="fade-up" data-aos-delay="600">
        <div class="service-item position-relative">
          <div class="rounded-3 mx-auto">
            <img src="/storage/assets/img/services/image044.png" style="width:240px; height:160px" loading="lazy" alt="..." >
          </div>
          <h3>Entretien et réparation </h3>
          <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
          <a href="#" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
</div>
  
</div>
      

    </div>

  </div>
</section><!-- End Services Section -->

<!-- ======= Alt Services Section ======= -->
<section id="alt-services" class="alt-services">
  <div class="container" data-aos="fade-up">

    <div class="row justify-content-around gy-4">
      <div class="col-lg-6 img-bg" style="background-image: url('/storage/assets/img/alt-services.jpg');" data-aos="zoom-in" data-aos-delay="100"></div>

      <div class="col-lg-5 d-flex flex-column justify-content-center">
        <h3>Enim quis est voluptatibus aliquid consequatur fugiat</h3>
        <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi</p>

        <div class="icon-box d-flex position-relative fade-in" data-aos="fade-up" data-aos-delay="100">
          <i class="bi bi-easel flex-shrink-0"></i>
          <div>
            <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
        </div><!-- End Icon Box -->

        <div class="icon-box d-flex position-relative fade-in" data-aos="fade-up" data-aos-delay="200">
          <i class="bi bi-patch-check flex-shrink-0"></i>
          <div>
            <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
        </div><!-- End Icon Box -->

        <div class="icon-box d-flex position-relative fade-in" data-aos="fade-up" data-aos-delay="300">
          <i class="bi bi-brightness-high flex-shrink-0"></i>
          <div>
            <h4><a href="" class="stretched-link">Dine Pad</a></h4>
            <p>Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p>
          </div>
        </div><!-- End Icon Box -->

        <div class="icon-box d-flex position-relative fade-in" data-aos="fade-up" data-aos-delay="400">
          <i class="bi bi-brightness-high flex-shrink-0"></i>
          <div>
            <h4><a href="" class="stretched-link">Tride clov</a></h4>
            <p>Est voluptatem labore deleniti quis a delectus et. Saepe dolorem libero sit non aspernatur odit amet. Et eligendi</p>
          </div>
        </div><!-- End Icon Box -->

      </div>
    </div>

  </div>
</section><!-- End Alt Services Section -->


<!-- ======= Our Projects Section ======= -->
<section id="projects" class="projects">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Our Projects</h2>
      <p>Consequatur libero assumenda est voluptatem est quidem illum et officia imilique qui vel architecto accusamus fugit aut qui distinctio</p>
    </div>

    <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

      <ul class="portfolio-flters fade-in" data-aos="fade-up" data-aos-delay="100">
        <li data-filter="*" class="filter-active">All</li>
        <li data-filter=".filter-remodeling">Remodeling</li>
        <li data-filter=".filter-construction">Construction</li>
        <li data-filter=".filter-repairs">Repairs</li>
        <li data-filter=".filter-design">Design</li>
      </ul><!-- End Projects Filters -->

      <div class="row gy-4 portfolio-container fade-in" data-aos="fade-up" data-aos-delay="100">

        <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
          <div class="portfolio-content h-100">
            <img src="/storage/assets/img/projects/remodeling-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Remodeling 1</h4>
              <p>Lorem ipsum, dolor sit amet consectetur</p>
              <a href="/storage/assets/img/projects/remodeling-1.jpg" title="Remodeling 1" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div>
        </div><!-- End Projects Item -->

        <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
          <div class="portfolio-content h-100">
            <img src="/storage/assets/img/projects/construction-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Construction 1</h4>
              <p>Lorem ipsum, dolor sit amet consectetur</p>
              <a href="/storage/assets/img/projects/construction-1.jpg" title="Construction 1" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div>
        </div><!-- End Projects Item -->

        <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
          <div class="portfolio-content h-100">
            <img src="/storage/assets/img/projects/repairs-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Repairs 1</h4>
              <p>Lorem ipsum, dolor sit amet consectetur</p>
              <a href="/storage/assets/img/projects/repairs-1.jpg" title="Repairs 1" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div>
        </div><!-- End Projects Item -->

        <div class="col-lg-4 col-md-6 portfolio-item filter-design">
          <div class="portfolio-content h-100">
            <img src="/storage/assets/img/projects/design-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Design 1</h4>
              <p>Lorem ipsum, dolor sit amet consectetur</p>
              <a href="/storage/assets/img/projects/design-1.jpg" title="Repairs 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div>
        </div><!-- End Projects Item -->

        <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
          <div class="portfolio-content h-100">
            <img src="/storage/assets/img/projects/remodeling-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Remodeling 2</h4>
              <p>Lorem ipsum, dolor sit amet consectetur</p>
              <a href="/storage/assets/img/projects/remodeling-2.jpg" title="Remodeling 2" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div>
        </div><!-- End Projects Item -->

        <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
          <div class="portfolio-content h-100">
            <img src="/storage/assets/img/projects/construction-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Construction 2</h4>
              <p>Lorem ipsum, dolor sit amet consectetur</p>
              <a href="/storage/assets/img/projects/construction-2.jpg" title="Construction 2" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div>
        </div><!-- End Projects Item -->

        <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
          <div class="portfolio-content h-100">
            <img src="/storage/assets/img/projects/repairs-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Repairs 2</h4>
              <p>Lorem ipsum, dolor sit amet consectetur</p>
              <a href="/storage/assets/img/projects/repairs-2.jpg" title="Repairs 2" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div>
        </div><!-- End Projects Item -->

        <div class="col-lg-4 col-md-6 portfolio-item filter-design">
          <div class="portfolio-content h-100">
            <img src="/storage/assets/img/projects/design-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Design 2</h4>
              <p>Lorem ipsum, dolor sit amet consectetur</p>
              <a href="/storage/assets/img/projects/design-2.jpg" title="Repairs 2" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div>
        </div><!-- End Projects Item -->

        <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
          <div class="portfolio-content h-100">
            <img src="/storage/assets/img/projects/remodeling-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Remodeling 3</h4>
              <p>Lorem ipsum, dolor sit amet consectetur</p>
              <a href="/storage/assets/img/projects/remodeling-3.jpg" title="Remodeling 3" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div>
        </div><!-- End Projects Item -->

        <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
          <div class="portfolio-content h-100">
            <img src="/storage/assets/img/projects/construction-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Construction 3</h4>
              <p>Lorem ipsum, dolor sit amet consectetur</p>
              <a href="/storage/assets/img/projects/construction-3.jpg" title="Construction 3" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div>
        </div><!-- End Projects Item -->

        <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
          <div class="portfolio-content h-100">
            <img src="/storage/assets/img/projects/repairs-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Repairs 3</h4>
              <p>Lorem ipsum, dolor sit amet consectetur</p>
              <a href="/storage/assets/img/projects/repairs-3.jpg" title="Repairs 2" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div>
        </div><!-- End Projects Item -->

        <div class="col-lg-4 col-md-6 portfolio-item filter-design">
          <div class="portfolio-content h-100">
            <img src="/storage/assets/img/projects/design-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Design 3</h4>
              <p>Lorem ipsum, dolor sit amet consectetur</p>
              <a href="/storage/assets/img/projects/design-3.jpg" title="Repairs 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div>
        </div><!-- End Projects Item -->

      </div><!-- End Projects Container -->

    </div>

  </div>
</section><!-- End Our Projects Section -->

<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Testimonials</h2>
      <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia reprehenderit sunt deleniti</p>
    </div>

    <div class="slides-2 swiper">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="/storage/assets/img/testimonials/anonym.jpg" class="testimonial-img" alt="">
              <h3>Rachid</h3>
              <h4>l'Entrepreneur</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="/storage/assets/img/testimonials/anonym.jpg" class="testimonial-img" alt="">
              <h3>#######</h3>
              <h4>Designer</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="/storage/assets/img/testimonials/anonym.jpg" class="testimonial-img" alt="">
              <h3>########</h3>
              <h4>Store Owner</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="/storage/assets/img/testimonials/anonym.jpg" class="testimonial-img" alt="">
              <h3>#######</h3>
              <h4>Freelancer</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div>
        </div><!-- End testimonial item -->

      

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>
</section><!-- End Testimonials Section -->



</main><!-- End #main -->
@endsection

