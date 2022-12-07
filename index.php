<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <!--<meta name=description content="This site was generated with Anima. www.animaapp.com"/>-->
    <!-- <link rel="shortcut icon" type=image/png href="https://animaproject.s3.amazonaws.com/home/favicon.png" /> -->
    <meta content="width=device-width, maximum-scale=1.0" name="viewport" />
    <link href="https://animaproject.s3.amazonaws.com/home/favicon.png" rel="shortcut icon" type="image/png" />
    <meta content="website" name="og:type" />
    <meta content="photo" name="twitter:card" />
    <link href="css/submenu-dropdown9.css" rel="stylesheet" type="text/css" />
    <link href="css/submenu-dropdown8.css" rel="stylesheet" type="text/css" />
    <link href="css/submenu-dropdown.css" rel="stylesheet" type="text/css" />
    <link href="css/submenu-dropdown2.css" rel="stylesheet" type="text/css" />
    <link href="css/submenu-dropdown6.css" rel="stylesheet" type="text/css" />
    <link href="css/submenu-dropdown11.css" rel="stylesheet" type="text/css" />
    <link href="css/submenu-dropdown4.css" rel="stylesheet" type="text/css" />
    <link href="css/pop-up-log.css" rel="stylesheet" type="text/css" />
    <link href="css/pop-up-mentions.css" rel="stylesheet" type="text/css" />
    <link href="css/index.css" rel="stylesheet" type="text/css" />
    <link href="css/pop-up-cart.css" rel="stylesheet" type="text/css" />
    <link href="css/submenu-dropdown12.css" rel="stylesheet" type="text/css" />
    <link href="css/submenu-dropdown-12.css" rel="stylesheet" type="text/css" />
    <link href="css/submenu-dropdown3.css" rel="stylesheet" type="text/css" />
    <link href="css/submenu-dropdown5.css" rel="stylesheet" type="text/css" />
    <link href="css/submenu-dropdown7.css" rel="stylesheet" type="text/css" />
    <link href="css/pop-up-contact.css" rel="stylesheet" type="text/css" />
    <link href="css/submenu-dropdown10.css" rel="stylesheet" type="text/css" />
    <link href="css/styleguide.css" rel="stylesheet" type="text/css" />
    <link href="css/globals.css" rel="stylesheet" type="text/css" />
    <!--Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+DW+Pica+SC&family=Source+Sans+Pro:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap" rel="stylesheet">

  </head>
  <body style="margin: 0">
    <input id="anPageName" name="page" type="hidden" value="index" />
    <div class="index screen">
      <div class="header">
        <div class="header_top">
          <img alt="icon-home" class="icon-home" src="img/header-top-div-left@2x.svg" />
          <h1 class="header_title">GUITARES EN FOLIE</h1>
          <div class="header_top_div_right">
            <a onclick="ShowOverlay('pop-up-log', 'animate-appear');">
              <img alt="icon_account" class="icon_account" src="img/icon-account@2x.svg" />
            </a>
            <a onclick="ShowOverlay('pop-up-cart', 'animate-appear');">
              <img alt="icon-cart" class="icon-cart" src="img/icon-cart@2x.svg" />
            </a>
          </div>
        </div>
        <div class="header_bottom">
          <div class="nav-items">
            <a class="nav-item item-niveau-1 sourcesanspro-bold-gallery-xxs" onclick="ShowOverlay('submenu-dropdown-12', 'animate-appear');">
                  GUITARES ACOUSTIQUES
            </a>
            <div class="nav-space"></div>
            <a class="nav-item item-niveau-1 sourcesanspro-bold-gallery-xxs" onclick="ShowOverlay('submenu-dropdown', 'animate-appear');">
                  G. &Eacute;LECTRO-ACOUSTIQUES
            </a>
            <div class="nav-space"></div>
            <a class="nav-item item-niveau-1 sourcesanspro-bold-gallery-xxs" onclick="ShowOverlay('submenu-dropdown2', 'animate-appear');">
                  GUITARES &Eacute;LECTRIQUES
            </a>
            <div class="nav-space"></div>
            <a class="nav-item item-niveau-1 sourcesanspro-bold-gallery-xxs" onclick="ShowOverlay('submenu-dropdown3', 'animate-appear');">
                  GUITARES SP&Eacute;CIALES
            </a>
            <div class="nav-space"></div>
            <a class="nav-item item-niveau-1 sourcesanspro-bold-gallery-xxs" onclick="ShowOverlay('submenu-dropdown5', 'animate-appear');">
              AUTRES INSTRUMENTS
            </a>
            <div class="nav-space"></div>
            <a class="nav-item item-niveau-1 sourcesanspro-bold-gallery-xxs" onclick="ShowOverlay('submenu-dropdown6', 'animate-appear');">
                  AMPLIFICATEURS
            </a>
          </div>
          <div class="nav-items-1">
            <a class="nav-item item-niveau-1-1 sourcesanspro-bold-gallery-xxs" onclick="ShowOverlay('submenu-dropdown7', 'animate-appear');">
                BASSES ACOUSTIQUES
            </a>
            <div class="nav-space"></div>
            <a class="nav-item item-niveau-1-1 sourcesanspro-bold-gallery-xxs" onclick="ShowOverlay('submenu-dropdown8', 'animate-appear');">
                B. &Eacute;LECTRO-ACOUSTIQUES
            </a>
            <div class="nav-space"></div>
            <a class="nav-item item-niveau-1-1 sourcesanspro-bold-gallery-xxs" onclick="ShowOverlay('submenu-dropdown10', 'animate-appear');">
                BASSES &Eacute;LECTRIQUES
            </a>
            <div class="nav-space"></div>
            <a class="nav-item item-niveau-1-1 sourcesanspro-bold-gallery-xxs" onclick="ShowOverlay('submenu-dropdown9', 'animate-appear');">
                ACCESSOIRES
            </a>
            <div class="nav-space"></div>
            <a class="nav-item item-niveau-1-1 sourcesanspro-bold-gallery-xxs" onclick="ShowOverlay('submenu-dropdown11', 'animate-appear');">
                RANGEMENT
            </a>
            <div class="nav-space"></div>
            <a class="nav-item item-niveau-1-1 sourcesanspro-bold-gallery-xxs" onclick="ShowOverlay('submenu-dropdown12', 'animate-appear');">
                HOME STUDIO
            </a>
            <div class="nav-space"></div>
            <a class="nav-item item-niveau-1-1 sourcesanspro-bold-gallery-xxs" onclick="ShowOverlay('submenu-dropdown4', 'animate-appear');">
                LIBRAIRIE
            </a>
          </div>
        </div>
      </div>
      <div class="body">
        <div class="body_top">
          <img alt="image_top" class="image_top" src="img/whatsapp-image-2022-10-23---13-10-1@1x.png" />
          <div class="announce_top">
            <div class="overlap-group">
              <p class="announce_top_title imfelldwpicasc-regular-normal-mine-shaft-32px">
                Notre site ouvre ses portes !
              </p>
              <p class="announce_top_text sourcesanspro-semi-bold-mine-shaft-24px">
                R&eacute;alis&eacute; par un passion&eacute; pour d&rsquo;autres passionn&eacute;s, nous nous tournons
                vers un choix de guitares plus restreint, mais &agrave; la qualit&eacute; exceptionnelle.
              </p>
              <img alt="icon_news" class="icon_news" src="img/icon-news@2x.svg" />
            </div>
          </div>
        </div>
        <div class="body_bottom">
          <div class="announce_bottom">
            <div class="overlap-group-1">
              <p class="announce_bottom_title imfelldwpicasc-regular-normal-mine-shaft-32px">
                Le meilleur de la gratte &agrave; port&eacute;e de cuticules !
              </p>
              <p class="announce_bottom_text sourcesanspro-semi-bold-mine-shaft-24px">
                Partagez vos r&ecirc;ves avec nous et nous vous orienterons vers la guitare qui vous permettra de les
                r&eacute;aliser...
              </p>
              <img alt="icon_philosophy" class="icon_philosophy" src="img/icon-philosophy@2x.svg" />
            </div>
          </div>
          <img alt="image_bottom" class="image_bottom" src="img/unsplash-6sjopr7sky4@1x.png" />
        </div>
      </div>
      <div class="footer">
        <div class="footer_div_left"></div>
        <div class="footer_div_center">
          <p class="footer_credits">Site cr&eacute;&eacute; par IOCHEM Johan &amp; ROUX Nicolas</p>
        </div>
        <div class="footer_div_right">
          <a onclick="ShowOverlay('pop-up-mentions', 'animate-appear');">
            <img alt="icon_balance" class="icon_balance" src="img/icon-balance@2x.svg" />
          </a>
          <a onclick="ShowOverlay('pop-up-contact', 'animate-appear');">
            <img alt="icon_contact" class="icon_contact" src="img/icon-contact@2x.svg" />
          </a>
        </div>
      </div>
    </div>
    <div class="overlay-base" id="overlay-pop-up-contact">
      <div class="pop-up-contact screen">
        <div class="pop_up_contact">
          <img alt="pop_up_1" class="pop_up_1" src="img/pop-up-1@2x.png" />
        </div>
      </div>
    </div>
    <div class="overlay-base" id="overlay-pop-up-log">
      <div class="pop-up-log screen">
        <div class="pop_up_log">
          <iframe class="pop_up_log" src="Client/log.php"></iframe>
        </div>
      </div>
    </div>
    <div class="overlay-base" id="overlay-pop-up-mentions">
      <div class="pop-up-mentions screen">
        <div class="pop_up_mentions">
          <img alt="pop_up_1" class="pop_up_1" src="img/pop-up-1@2x.png" />
        </div>
      </div>
    </div>
    <div class="overlay-base" id="overlay-pop-up-cart">
      <div class="pop-up-cart screen">
        <div class="pop_up_cart">
          <img alt="pop_up_1" class="pop_up_1" src="img/pop-up-1@2x.png" />
        </div>
      </div>
    </div>
    <div class="overlay-base" id="overlay-submenu-dropdown-12">
      <div class="submenu-dropdown-12 screen">
        <div class="submenu-dropdown">
          <div class="nav-item">
            <div class="item-niveau-2 sourcesanspro-bold-gallery-16px">CLASSIQUES</div>
          </div>
          <div class="nav-item">
            <div class="item-niveau-2 sourcesanspro-bold-gallery-16px">FOLKS</div>
          </div>
          <div class="nav-item">
            <div class="item-niveau-2 sourcesanspro-bold-gallery-16px">RESONATEURS</div>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay-base" id="overlay-submenu-dropdown">
      <div class="submenu-dropdown screen">
        <div class="submenu-dropdown-1">
          <div class="nav-item">
            <div class="item-niveau-2 sourcesanspro-bold-gallery-16px">FOLKS</div>
          </div>
          <div class="nav-item">
            <div class="item-niveau-2 sourcesanspro-bold-gallery-16px">RESONATEURS</div>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay-base" id="overlay-submenu-dropdown2">
      <div class="submenu-dropdown2 screen">
        <div class="submenu-dropdown">
          <div class="nav-item">
            <div class="item-niveau-2 sourcesanspro-bold-gallery-16px">STYLE ST</div>
          </div>
          <div class="nav-item">
            <div class="item-niveau-2 sourcesanspro-bold-gallery-16px">STYLE T</div>
          </div>
          <div class="nav-item">
            <div class="item-niveau-2 sourcesanspro-bold-gallery-16px">SINGLE CUT</div>
          </div>
          <div class="nav-item">
            <div class="item-niveau-2 sourcesanspro-bold-gallery-16px">DOUBLE CUT</div>
          </div>
          <div class="nav-item">
            <div class="item-niveau-2 sourcesanspro-bold-gallery-16px">HOLLOW-BODY</div>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay-base" id="overlay-submenu-dropdown3">
      <div class="submenu-dropdown3 screen">
        <div class="submenu-dropdown">
          <div class="nav-item">
            <div class="item-niveau-2 sourcesanspro-bold-gallery-16px">DOUBLE MANCHES</div>
          </div>
          <div class="nav-item">
            <div class="item-niveau-2 sourcesanspro-bold-gallery-16px">PLUS DE 6 CORDES</div>
          </div>
          <div class="nav-item">
            <div class="item-niveau-2 sourcesanspro-bold-gallery-16px">AUTRES</div>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay-base" id="overlay-submenu-dropdown4">
      <div class="submenu-dropdown4 screen">
        <div class="submenu-dropdown">
          <div class="nav-item">
            <div class="item-niveau-2 sourcesanspro-bold-gallery-16px">PARTITIONS</div>
          </div>
          <div class="nav-item">
            <div class="item-niveau-2 sourcesanspro-bold-gallery-16px">LIVRES</div>
          </div>
          <div class="nav-item">
            <div class="item-niveau-2 sourcesanspro-bold-gallery-16px">DISQUES</div>
          </div>
          <div class="nav-item">
            <div class="item-niveau-2 sourcesanspro-bold-gallery-16px">MAGAZINES</div>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay-base" id="overlay-submenu-dropdown5">
      <div class="submenu-dropdown5 screen">
        <div class="submenu-dropdown">
          <div class="nav-item">
            <div class="item-niveau-2 sourcesanspro-bold-gallery-16px">BANJOS</div>
          </div>
          <div class="nav-item">
            <div class="item-niveau-2 sourcesanspro-bold-gallery-16px">UKUL&Eacute;L&Eacute;S</div>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay-base" id="overlay-submenu-dropdown6">
      <div class="submenu-dropdown6 screen">
        <div class="submenu-dropdown">
          <div class="nav-item">
            <div class="item-niveau-2 sourcesanspro-bold-gallery-16px">TRANSISTORS</div>
          </div>
          <div class="nav-item">
            <div class="item-niveau-2 sourcesanspro-bold-gallery-16px">AMPOULES</div>
          </div>
          <div class="nav-item">
            <div class="item-niveau-2 sourcesanspro-bold-gallery-16px">PR&Eacute;-AMPLIFICATEURS</div>
          </div>
          <div class="nav-item">
            <div class="item-niveau-2 sourcesanspro-bold-gallery-16px">PEDALBOARDS</div>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay-base" id="overlay-submenu-dropdown7">
      <div class="submenu-dropdown7 screen">
        <div class="submenu-dropdown">
          <div class="nav-item">
            <div class="item-niveau-2 sourcesanspro-bold-gallery-16px">4 CORDES</div>
          </div>
          <div class="nav-item">
            <div class="item-niveau-2 sourcesanspro-bold-gallery-16px">5 CORDES</div>
          </div>
          <div class="nav-item">
            <div class="item-niveau-2 sourcesanspro-bold-gallery-16px">6 CORDES</div>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay-base" id="overlay-submenu-dropdown8">
      <div class="submenu-dropdown8 screen">
        <div class="submenu-dropdown">
          <div class="nav-item">
            <div class="item-niveau-2 sourcesanspro-bold-gallery-16px">4 CORDES</div>
          </div>
          <div class="nav-item">
            <div class="item-niveau-2 sourcesanspro-bold-gallery-16px">5 CORDES</div>
          </div>
          <div class="nav-item">
            <div class="item-niveau-2 sourcesanspro-bold-gallery-16px">6 CORDES</div>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay-base" id="overlay-submenu-dropdown9">
      <div class="submenu-dropdown9 screen">
        <div class="submenu-dropdown">
          <div class="nav-item">
            <div class="item-niveau-2 sourcesanspro-bold-gallery-16px">CORDES</div>
          </div>
          <div class="nav-item">
            <div class="item-niveau-2 sourcesanspro-bold-gallery-16px">M&Eacute;DIATORS</div>
          </div>
          <div class="nav-item">
            <div class="item-niveau-2 sourcesanspro-bold-gallery-16px">SANGLES</div>
          </div>
          <div class="nav-item">
            <div class="item-niveau-2 sourcesanspro-bold-gallery-16px">ACCORDEURS</div>
          </div>
          <div class="nav-item">
            <div class="item-niveau-2 sourcesanspro-bold-gallery-16px">CAPODASTRES</div>
          </div>
          <div class="nav-item">
            <div class="item-niveau-2 sourcesanspro-bold-gallery-16px">BOTTLENECKS</div>
          </div>
          <div class="nav-item">
            <div class="item-niveau-2 sourcesanspro-bold-gallery-16px">VIBRATOS</div>
          </div>
          <div class="nav-item">
            <div class="item-niveau-2 sourcesanspro-bold-gallery-16px">ARCHETS</div>
          </div>
          <div class="nav-item">
            <div class="item-niveau-2 sourcesanspro-bold-gallery-16px">STANDS</div>
          </div>
          <div class="nav-item">
            <div class="item-niveau-2 sourcesanspro-bold-gallery-16px">CHEVALETS</div>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay-base" id="overlay-submenu-dropdown10">
      <div class="submenu-dropdown10 screen">
        <div class="submenu-dropdown">
          <div class="nav-item">
            <div class="item-niveau-2 sourcesanspro-bold-gallery-16px">4 CORDES</div>
          </div>
          <div class="nav-item">
            <div class="item-niveau-2 sourcesanspro-bold-gallery-16px">5 CORDES</div>
          </div>
          <div class="nav-item">
            <div class="item-niveau-2 sourcesanspro-bold-gallery-16px">6 CORDES</div>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay-base" id="overlay-submenu-dropdown11">
      <div class="submenu-dropdown11 screen">
        <div class="submenu-dropdown">
          <div class="nav-item">
            <div class="item-niveau-2 sourcesanspro-bold-gallery-16px">HOUSSES</div>
          </div>
          <div class="nav-item">
            <div class="item-niveau-2 sourcesanspro-bold-gallery-16px">FLYCASES</div>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay-base" id="overlay-submenu-dropdown12">
      <div class="submenu-dropdown12 screen">
        <div class="submenu-dropdown">
          <div class="nav-item">
            <div class="item-niveau-2 sourcesanspro-bold-gallery-16px">C&Acirc;BLES</div>
          </div>
          <div class="nav-item">
            <div class="item-niveau-2 sourcesanspro-bold-gallery-16px">MICROPHONES</div>
          </div>
          <div class="nav-item">
            <div class="item-niveau-2 sourcesanspro-bold-gallery-16px">CARTES SON</div>
          </div>
          <div class="nav-item">
            <div class="item-niveau-2 sourcesanspro-bold-gallery-16px">CASQUES</div>
          </div>
          <div class="nav-item">
            <div class="item-niveau-2 sourcesanspro-bold-gallery-16px">LOGICIELS</div>
          </div>
        </div>
      </div>
    </div>
    <script>
      ShowOverlay = function (overlayName, animationName) {
        overlayName = "overlay-" + overlayName;
        var cssClasses = document.getElementById(overlayName).className.split(" ");
        var last = cssClasses.slice(-1)[0];
        if (last.lastIndexOf("animate") == -1) {
          document.getElementById(overlayName).className =
            document.getElementById(overlayName).className + " " + animationName;
        }
        if (window.loadAsyncSrc != undefined) {
          loadAsyncSrc();
        }
      };

      HideOverlay = function (overlayName, animationName) {
        overlayName = "overlay-" + overlayName;
        var cssClasses = document.getElementById(overlayName).className.split(" ");
        var last = cssClasses.slice(-1)[0];
        if (last.lastIndexOf("animate") != -1) {
          cssClasses.splice(-1);
          cssClasses.push(animationName);
          document.getElementById(overlayName).className = cssClasses.join(" ");

          cssClasses.splice(-1);
          setTimeout(function () {
            document.getElementById(overlayName).className = cssClasses.join(" ");
          }, 1100);
        }
        var vids = document.getElementsByTagName("video");
        if (vids) {
          for (var i = 0; i < vids.length; i++) {
            var video = vids.item(i);
            video.pause();
          }
        }
      };

      closeOutsideOverlay = function (overlay_slug) {
        var overlay_id = `overlay-${overlay_slug}`;
        const overlayElement = document.getElementById(overlay_id);
        overlayElement.addEventListener(
          `click`,
          function (event) {
            var overlay_id = `overlay-${overlay_slug}`;
            var e = event || window.event;
            var overlayContainer = overlayElement.getElementsByClassName(`${overlay_slug}`);
            if (e.target === overlayElement) {
              HideOverlay(`${overlay_slug}`, "animate-disappear");
            }
          },
          false
        );
      };

      CloseOnOverlayClick = function (overlay_slug) {
        var overlay_id = `overlay-${overlay_slug}`;
        document.getElementById(overlay_id).addEventListener(
          `click`,
          function (event) {
            {
              var overlay_id = `overlay-${overlay_slug}`;
              var e = event || window.event;
              var overlayElement = document.getElementById(overlay_id);
              var overlayContainer = overlayElement.getElementsByClassName(`${overlay_slug}`);
              var clickedDiv = e.toElement || e.target;
              var dismissButton = clickedDiv.parentElement.id == overlay_id;
              var clickOutsideOverlay = false;
              if (overlayContainer.length > 0) {
                {
                  clickOutsideOverlay = !overlayContainer[0].contains(clickedDiv) || overlayContainer[0] == clickedDiv;
                }
              }
              if (dismissButton || clickOutsideOverlay) {
                {
                  HideOverlay(`${overlay_slug}`, "animate-disappear");
                }
              }
            }
          },
          false
        );
      };
    </script>
    <script>
      closeOutsideOverlay("pop-up-contact");
    </script>
    <script>
      closeOutsideOverlay("pop-up-log");
    </script>
    <script>
      closeOutsideOverlay("pop-up-mentions");
    </script>
    <script>
      closeOutsideOverlay("pop-up-cart");
    </script>
    <script>
      closeOutsideOverlay("submenu-dropdown-12");
    </script>
    <script>
      closeOutsideOverlay("submenu-dropdown");
    </script>
    <script>
      closeOutsideOverlay("submenu-dropdown2");
    </script>
    <script>
      closeOutsideOverlay("submenu-dropdown3");
    </script>
    <script>
      closeOutsideOverlay("submenu-dropdown4");
    </script>
    <script>
      closeOutsideOverlay("submenu-dropdown5");
    </script>
    <script>
      closeOutsideOverlay("submenu-dropdown6");
    </script>
    <script>
      closeOutsideOverlay("submenu-dropdown7");
    </script>
    <script>
      closeOutsideOverlay("submenu-dropdown8");
    </script>
    <script>
      closeOutsideOverlay("submenu-dropdown9");
    </script>
    <script>
      closeOutsideOverlay("submenu-dropdown10");
    </script>
    <script>
      closeOutsideOverlay("submenu-dropdown11");
    </script>
    <script>
      closeOutsideOverlay("submenu-dropdown12");
    </script>
  </body>
</html>
