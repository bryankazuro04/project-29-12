<!DOCTYPE html>
<html lang="zxx"  data-bs-theme="dark">

<head>
    <title>Home | Aratek</title>

    <!-- /SEO Ultimate -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="57x57" href="/assets/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/assets/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/assets/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/assets/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/assets/images/favicon/manifest.json">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/icons/aratek-logo.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/assets/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Latest compiled and minified CSS -->
    <link href="/assets/styles/bootstrap.min-4.3.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/scripts/bootstrap.min-4.3.js">
    <!-- Font Awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- StyleSheet link CSS -->
    <link href="/assets/styles/style-home.css" rel="stylesheet" type="text/css">
    <link href="/assets/styles/mediaqueries.css" rel="stylesheet" type="text/css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
  <!-- SUB BANNER SECTION -->
  <div class="sub-banner-section">
    <header>
      <div class="main_header">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg navbar-light p-0">
            <a class="navbar-brand" href="/">
              <figure class="mb-0 d-inline">
                <img src="/assets/images/icons/aratek-logo.png" alt="Aratek Logo" class="img-fluid" width="90">
              </figure>
              <h1 class="h2 d-inline">Aratek</h1>
            </a>

            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" 
                aria-expanded="false" 
                aria-label="Toggle navigation">

              <span class="navbar-toggler-icon"></span>
              <span class="navbar-toggler-icon"></span>
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse mt-4 mt-lg-0" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="#">Home</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#aerialSurvey">Aerial Survey</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#terestrialSurvey">Terestrial Survey</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#bim">BIM</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#aboutUs">About Us</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#ourClients">Our Clients</a>
                </li>
              </ul>
            </div>

            @if (auth()->user())
              <a href="/dashboard" class="btn btn-outline-secondary" role="button">Dashboard</a>
            @else
              <a href="/login" class="btn btn-outline-secondary" role="button">Dashboard</a>
            @endif
          </nav>
        </div>
      </div>
    </header>
  
    <section class="banner-section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-md-left text-center">
            <div class="banner-section-content">
              <h1 data-aos="fade-up">Aratek</h1>

              <p data-aos="fade-right">Perusahaan jasa kontruksi yang bergerak di bidang Jasa Survey, Pemetaan, BIM (Building Infomation Modelling), Analisa data spasial, Teknologi Informasi dan Pelatihan.</p>

              <div class="btn_wrapper">
                <a href="#aerialSurvey">
                  <span>Home </span>
                  <i class="fa-solid fa-angles-right" aria-hidden="true"></i>
                  <span class="sub_span"> More</span>
                </a>
              </div>

              <figure class="services_yellow_line mb-0">
                <img src="/assets/images/sub_banner_services_yellow_line.png" alt="" class="img-fluid">
              </figure>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="banner-section-image">
              <figure class="mb-0">
                <img src="/assets/images/services_banner_right_image.png" alt="" class="img-fluid">
              </figure> 
            </div>

            <figure class="sub-banner_yellow_green_icon mb-0">
              <img src="/assets/images/sub_banner_yellow_green_icon.png" alt="" class="img-fluid">
            </figure>
          </div>
        </div>

        <figure class="sub-banner_yellow_icon mb-0">
          <img src="/assets/images/sub_banner_yellow_icon.png" alt="" class="img-fluid">
        </figure>

        <figure class="sub-banner_va_icon mb-0">
          <img src="/assets/images/sub_banner_va_icon.png" alt="" class="img-fluid">
        </figure>

        <figure class="sub-banner_bottom_white_icon mb-0">
          <img src="/assets/images/sub_banner_bottom_white_icon.png" alt="" class="img-fluid">
        </figure>

        <figure class="sub-banner_right_top_icon mb-0">
          <img src="/assets/images/sub_banner_right_top_transparent_icon.png" alt="" class="img-fluid">
        </figure>

        <figure class="sub-banner_right_bottom_icon mb-0">
          <img src="/assets/images/sub_banner_right_bottom_icon.png" alt="" class="img-fluid">
        </figure>
      </div>
    </section>
  </div>

  <!-- AERIAL SURVEY SECTION -->
  <section class="aerial_survey-section" id="aerialSurvey">
    <div class="container">
      <div class="row" data-aos="fade-up">
        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
          <div class="aerial_survey_image">
            <figure class="mb-0">
              <img src="/assets/images/research_reports.png" alt="" class="img-fluid">
            </figure>

            <figure class="aerial_survey_logo mb-0">
              <img src="/assets/images/research_reports_logo_image.png" alt="" class="img-fluid">
            </figure>
          </div>
        </div>

        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
          <div class="aerial_survey_content">
            <h2>Aerial Survey</h2>

            <p>Aerial survey is a method of collecting geomatics or other imagery by using airplanes, helicopters, UAVs, balloons or other aerial methods.</p>

            <ul class="list-unstyled">
              <li>
                <i class="fa fa-check" aria-hidden="true"></i>Lidar
              </li>

              <li>
                <i class="fa fa-check" aria-hidden="true"></i>Fotogrametri
              </li>
            </ul>
          </div>
        </div>

        <figure class="aerial_survey_shape mb-0">
            <img src="/assets/images/research_reports_shape.png" alt="" class="img-fluid" data-aos="fade-up">
        </figure>
      </div>
    </div>
  </section>

  <!-- TERESTRIAL SURVEY SECTION -->
  <section class="terrestrial_surveying-section" id="terestrialSurvey">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" data-aos="fade-right">
          <div class="terrestrial_surveying_content">
            <h2>Terestrial Survey</h2>

            <p>Terrestrial surveying is the process of taking measurements and mapping the world around us with the help of mathematics and the latest technology.</p>

            <ul class="list-unstyled">
              <li>
                <i class="fa fa-check" aria-hidden="true"></i>Total Station Survey
              </li>

              <li>
                <i class="fa fa-check" aria-hidden="true"></i>GPS Survey
              </li>

              <li>
                <i class="fa fa-check" aria-hidden="true"></i>Laser Scanner
              </li>
            </ul>
          </div>
        </div>

        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
          <div class="terrestrial_surveying_image">
            <figure class="mb-0 float-right">
              <img src="/assets/images/expense_invoice_image.png" alt="" class="img-fluid">
            </figure>

            <figure class="terrestrial_surveying_logo mb-0">
              <img src="/assets/images/expense_invoice_logo_image.png" alt="" class="img-fluid">
            </figure>
          </div>
        </div>
      </div>
      
      <figure class="terrestrial_surveying_left_icon mb-0">
        <img src="/assets/images/expense_invoice_left_icon.png" alt="" class="img-fluid">
      </figure>
      
      <figure class="terrestrial_surveying_right_icon mb-0">
        <img src="/assets/images/expense_invoice_right_icon.png" alt="" class="img-fluid">
      </figure>
    </div>
  </section>

  <!-- BUILDING INFORMATION MODELLING SECTION -->
  <section class="bim-section" id="bim">
    <div class="container">
      <div class="row" data-aos="fade-up">
        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
            <div class="bim_image">
                <figure class="mb-0">
                    <img src="/assets/images/schedule_plan_image.png" alt="" class="img-fluid">
                </figure>
                <figure class="bim_logo mb-0">
                    <img src="/assets/images/schedule_plan_logo_image.png" alt="" class="img-fluid">
                </figure>
            </div>
        </div>

        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
          <div class="bim_content">
            <h2>BIM</h2>

            <p>Building information modeling (BIM) is a process supported by various tools, technologies and contracts involving the generation and management of digital representations of physical and functional characteristics of places.</p>
          </div>
        </div>

        <figure class="bim_shape mb-0">
          <img src="/assets/images/schedule_plan_shape.png" alt="" class="img-fluid" data-aos="fade-up">
        </figure>
      </div>
    </div>
  </section>

  <!-- ABOUT US SECTION -->
  <section class="about_us-section" id="aboutUs">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12">
          <h2>About Us</h2>
        </div>

        <div class="col-10" data-aos="fade-up">
          <p>PT. Arkana Ataram Teknologi merupakan perusahaan Jasa Kontruksi yang bergerak di bidang Jasa Survey, Pemetaan, BIM ( Building Infomation Modelling), Analisa data spasial, Teknologi Informasi dan Pelatihan. Praktisi dan Tenaga Ahli kami telah berkecimpung di dalam dunia jasa konsultan Survey dan Pemetaan sejak tahun 1992. Tim Kami berasal dari berbagai latar belakang perusahaan, dengan banyak pengalaman di berbagai macam proyek.</p>

          <p>Setelah melalui perjalanan panjang, kami berkomitmen untuk mengukuhkan diri menjadi sebuah perusahaan yang berbadan hukum pada tahun 2021. Sumber daya dan layanan kami berikan sangat lengkap dan terintegrasi untuk segala kebutuhan survey anda. Tenaga ahli yang kami miliki telah berpengalaman dalam bidang survey dan pemetaan di berbagai bidang seperti perencaan wilayah, pertambangan, pertanian, kontruksi, perkebunan, dan lain sebagainya.</p>

          <p>VISI kami adalah menjadi perusahaan survey terdepan dan terpercaya berbasis digital dengan spesialisasi di dunia kontruksi. MISI kami adalah dapat terus beradaptasi dengan perkembangan teknologi digital, sehingga dapat memberikan hasil survey yang berkualitas dengan nilai akurasi dan presisi yang tinggi.</p>
        </div>
      </div>

      <figure class="about_us_left_icon mb-0">
        <img src="/assets/images/marketing_socialmedia_left_icon.png" alt="" class="img-fluid">
      </figure>

      <figure class="about_us_right_icon mb-0">
        <img src="/assets/images/marketing_socialmedia_right_icon.png" alt="" class="img-fluid">
      </figure>
    </div>
  </section>
  
  <!-- OUR CLIENTS SECTION -->
  <section class="our_clients-section" id="ourClients">
    <div class="container">
      <h2 class="text-center">Our Clients</h2>

      <div class="row">
        <div class="col-6 col-md-4 col-lg-3" data-aos="flip-left">
          <a href="https://pulaumorotaikab.go.id" target="_blank" rel="noopener noreferrer">
            <img src="/assets/images/icons/pulau-morotai-logo.png" alt="Kabupaten Pulau Morotai Logo" class="w-100">
          </a>
        </div>
        
        <div class="col-6 col-md-4 col-lg-3" data-aos="flip-left">
          <a href="https://mamujukab.go.id" target="_blank" rel="noopener noreferrer">
            <img src="/assets/images/icons/mamuju-logo.png" alt="Pemerintah Kabupaten Mamuju Logo" class="w-100">
          </a>
        </div>
        
        <div class="col-6 col-md-4 col-lg-3" data-aos="flip-left">
          <a href="https://pulaumorotaikab.go.id" target="_blank" rel="noopener noreferrer">
            <img src="/assets/images/icons/pdp-logo.png" alt="Kabupaten Pulau Morotai Logo" class="w-100">
          </a>
        </div>
        
        <div class="col-6 col-md-4 col-lg-3" data-aos="flip-left">
          <a href="https://polmankab.go.id" target="_blank" rel="noopener noreferrer">
            <img src="/assets/images/icons/polman-logo.png" alt="Kabupaten Polewali Mandar Logo" class="w-100">
          </a>
        </div>

        <div class="col-6 col-md-4 col-lg-3" data-aos="flip-left">
          <a href="https://adhi.co.id" target="_blank" rel="noopener noreferrer">
            <img src="/assets/images/icons/adhi-logo.png" alt="Adhi" class="w-100">
          </a>
        </div>

        <div class="col-6 col-md-4 col-lg-3" data-aos="flip-left">
          <a href="https://hutamakarya.com/en" target="_blank" rel="noopener noreferrer">
            <img src="/assets/images/icons/hk-logo.png" alt="Hutama Karya" class="w-100">
          </a>
        </div>
        
        <div class="col-6 col-md-4 col-lg-3" data-aos="flip-left">
          <a href="https://inkindo-dki.org" target="_blank" rel="noopener noreferrer">
            <img src="/assets/images/icons/inkindo-logo.png" alt="Inkindo" class="w-100">
          </a>
        </div>
        
        <div class="col-6 col-md-4 col-lg-3" data-aos="flip-left">
          <a href="#" target="_blank" rel="noopener noreferrer">
            <img src="/assets/images/icons/jasa-marga-logo.png" alt="Jasa Marga" class="w-100">
          </a>
        </div>

        <div class="col-6 col-md-4 col-lg-3" data-aos="flip-left">
          <a href="https://instagram.com/laras_sembada/" target="_blank" rel="noopener noreferrer">
            <img src="/assets/images/icons/laras-sembada-logo.png" alt="Laras Sembada" class="w-100">
          </a>
        </div>

        <div class="col-6 col-md-4 col-lg-3" data-aos="flip-left">
          <a href="https://pupuk-kujang.co.id" target="_blank" rel="noopener noreferrer">
            <img src="/assets/images/icons/pkc-logo.png" alt="PT. Pupuk Kujang Logo" class="w-100">
          </a>
        </div>

        <div class="col-6 col-md-4 col-lg-3" data-aos="flip-left">
          <a href="https://ptpp.co.id" target="_blank" rel="noopener noreferrer">
            <img src="/assets/images/icons/pp-logo.png" alt="PT. PP Logo" class="w-100">
          </a>
        </div>
        
        
        <div class="col-6 col-md-4 col-lg-3" data-aos="flip-left">
          <a href="https://pu.go.id" target="_blank" rel="noopener noreferrer">
            <img src="/assets/images/icons/pupr-logo.png" alt="Kementerian Pekerjaan Umum dan Perumahan Rakyat Logo" class="w-100">
          </a>
        </div>
        
        <div class="col-6 col-md-4 col-lg-3" data-aos="flip-left">
          <a href="https://wika.co.id" target="_blank" rel="noopener noreferrer">
            <img src="/assets/images/icons/wika-logo.png" alt="PT. Wijaya Karya Logo" class="w-100">
          </a>
        </div>
        
        <div class="col-6 col-md-4 col-lg-3" data-aos="flip-left">
          <a href="https://sinarmas.com" target="_blank" rel="noopener noreferrer">
            <img src="/assets/images/icons/sinarmas-logo.png" alt="PT. Sinarmas Logo" class="w-100">
          </a>
        </div>
        
        <div class="col-6 col-md-4 col-lg-3" data-aos="flip-left">
          <a href="https://viramakarya.co.id/virama" target="_blank" rel="noopener noreferrer">
            <img src="/assets/images/icons/vk-logo.png" alt="PT. Virama Karya Logo" class="w-100">
          </a>
        </div>
        
        <div class="col-6 col-md-4 col-lg-3" data-aos="flip-left">
          <a href="https://www.linkedin.com/company/ptsmi/?originalSubdomain=id" target="_blank" rel="noopener noreferrer">
            <img src="/assets/images/icons/smi-logo.png" alt="PT. Sarana Multi Infastruktur Logo" class="w-100">
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER SECTION -->
  <section class="footer-section">
    <div class="container">
      <div class="middle-portion">
        <div class="row">
          <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12 d-lg-block d-none"></div>
          
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="about_col">
              <h4>About Us</h4>
              
              <ul class="list-unstyled">
                <li>
                  <p class="pp">Perusahaan jasa kontruksi yang bergerak di bidang Jasa Survey, Pemetaan, BIM (Building Infomation Modelling), Analisa data spasial, Teknologi Informasi dan Pelatihan.</p>
                </li>

                <li class="icons">
                  <a href="#"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i>
                  </a>
                </li>

                <li class="icons">
                  <a href="#"><i class="fa-brands fa-twitter" aria-hidden="true"></i>
                  </a>
                </li>

                <li class="icons">
                  <a href="#"><i class="fa-brands fa-linkedin-in mr-0" aria-hidden="true">
                    </i>
                  </a>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 d-lg-block d-none">
            <div class="explore_col">
              <h4>Explore</h4>
              
              <ul class="list-unstyled">
                <li><a href="#">Team</a></li>

                <li><a href="#">Virtual</a></li>

                <li><a href="#">Our Process</a></li>

                <li><a href="#">Case Studies</a></li>

                <li><a href="#">Testimonials</a></li>
              </ul>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="contact_col">
              <h4>Contact Info</h4>
              
              <ul class="list-unstyled">
                <li>
                  <i class="fa-solid fa-phone"></i>
                  <a href="tel:+6281267772797" class="text-decoration-none">+62 812 6777 2797</a>
                </li>

                <li>
                  <i class="fa-sharp fa-solid fa-envelope"></i>
                  <a href="mailto:arkanaataram@gmail.id" class="text-decoration-none">Info@instantva.om</a>
                </li>

                <li>
                  <i class="fa-solid fa-location-dot location"></i>
                  <a class="text-decoration-none">MTH SQUARE GROUND FLOOR A4 A / JL. LETJEN M.T. HARYONO KAV 10 RT.006 / RW.012 BIDARA CINA, JATINEGARA, JAKARTA TIMUR 13330</a>
                </li>

                <li class="mb-0">
                  <i class="fa-solid fa-location-dot location"></i>
                  <a class="text-decoration-none">JL. CIPINANG MUARA III RT.002 / RW.015 NO. 37C CIPINANG MUARA, JATINEGARA, JAKARTA TIMUR 13420</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="bottom-portion">
      <div class="copyright col-xl-12"> 
        <p>Copyright 2022, PT. Aratek All Rights Reserved.</p>
      </div>
    </div>

    <div class="footer_logo">
      <figure class="mb-0">
        <img src="/assets/images/footer_logo.png" alt="" class="img-fluid">
      </figure>
    </div>
  </section>

  <!-- Latest compiled JavaScript -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="/assets/scripts/jquery-3.6.0.min.js"></script>
  <script src="/assets/scripts/popper.min.js"></script>
  <script src="/assets/scripts/bootstrap.min-4.3.js"></script>
  <script src="/assets/scripts/custom.js"></script>
  <script src="/assets/scripts/counter.js"></script>
  <script src="/assets/scripts/animation.js"></script>
</body>
</html>