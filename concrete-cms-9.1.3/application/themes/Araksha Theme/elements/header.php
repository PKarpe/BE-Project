<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- CONCRETE EDIT -->

    <?php View::element('header_required'); ?>

    <!-- OWL CAROUSAL -->

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
      integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
      integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- BOOTSTRAP 5.3 -->

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  



    <!-- GOOGLE FONTS -->

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lexend:wght@200;300;400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <!--  FONTAWESOME LINK FOR ICONS  -->

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    />

    <!-- CSS -->

    <link
      rel="stylesheet"
      href="<?= $view->getThemePath() ?>/styles/style.css"
      type="text/css"
    />
  </head>

  <body>
    <!--  HEADER     -->

    <header>
      <div class="container mt-3">
        <div class="row flex-nowrap py-4 align-items-center">
          <!--  LOGO     -->

          <div class="col">
            <?php $a = new GlobalArea('Site Logo');
          $a->display(); ?>
          </div>

          <!--  LANGUAGES, SEARCH     -->

          <div class="col-xxl-3 col col-lg-4 text-end">
            <div class="row justify-content-end">
              <div id="desktopSearch" class="d-none d-lg-block">
                <?php $a = new GlobalArea('Header Search');
              $a->display(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!--  NAVIGATION BAR  -->

    <nav class="navbar navheader nav-underline navbar-expand-lg">
      <div class="container">
        <div id="mobileSearch"></div>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarScroll"
          aria-controls="navbarScroll"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div
          class="collapse navbar-collapse pt-2 justify-content-center"
          id="navbarScroll"
        >
          <?php $a = new GlobalArea('Header Nav');
        $a->display(); ?>

        </div>
      </div>
    </nav>
 
