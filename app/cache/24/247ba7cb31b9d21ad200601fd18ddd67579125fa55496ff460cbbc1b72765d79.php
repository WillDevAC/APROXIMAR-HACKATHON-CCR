<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Sobre-Nós.html */
class __TwigTemplate_ae43c6f6af5e99e45bc38e27306a2e606a38e69f070c418cf8cd844c030fe82e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html style=\"font-size: 16px;\" lang=\"pt-BR\">
  <head>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta charset=\"utf-8\">
    <meta name=\"keywords\" content=\"Growth Strategy, How We Work, Our Services, Our Team, Doing The Right Thing, At The Right Time\">
    <meta name=\"description\" content=\"\">
    <meta name=\"page_type\" content=\"np-template-header-footer-from-plugin\">
    <title>Sobre Nós</title>
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "assets/css/nicepage.css\" media=\"screen\">
<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "assets/css/Sobre-Nós.css\" media=\"screen\">
    <script class=\"u-script\" type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "assets/js/jquery.js\" defer=\"\"></script>
    <script class=\"u-script\" type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "assets/js/nicepage.js\" defer=\"\"></script>
    <meta name=\"generator\" content=\"Nicepage 3.3.3, nicepage.com\">
    <link id=\"u-theme-google-font\" rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i\">
    <link id=\"u-page-google-font\" rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Assistant:200,300,400,600,700,800\">
    <script type=\"application/ld+json\">{
\t\t\"@context\": \"http://schema.org\",
\t\t\"@type\": \"Organization\",
\t\t\"name\": \"Site2\",
\t\t\"url\": \"index.html\"
}</script>
    <meta property=\"og:title\" content=\"Sobre Nós\">
    <meta property=\"og:type\" content=\"website\">
    <meta name=\"theme-color\" content=\"#3a0e63\">
    <link rel=\"canonical\" href=\"index.html\">
    <meta property=\"og:url\" content=\"index.html\">
  </head>
  <body class=\"u-body\"><header class=\"u-clearfix u-header u-header\" id=\"sec-8ded\"><div class=\"u-clearfix u-sheet u-sheet-1\">
    <div vw class=\"enabled\">
        <div vw-access-button class=\"active\"></div>
        <div vw-plugin-wrapper>
          <div class=\"vw-plugin-top-wrapper\"></div>
        </div>
      </div>
      <script src=\"https://vlibras.gov.br/app/vlibras-plugin.js\"></script>
      <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
      </script>
        <nav class=\"u-align-left u-menu u-menu-dropdown u-nav-spacing-25 u-offcanvas u-menu-1\" data-responsive-from=\"LG\">
          <div class=\"menu-collapse u-custom-font\" style=\"font-size: 1rem; letter-spacing: 0px; text-transform: uppercase; font-weight: 700; font-family: Assistant;\">
            <a class=\"u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90\" href=\"#\" style=\"padding: 1px 0px; font-size: calc(1em + 2px);\">
              <svg class=\"u-svg-link\" preserveAspectRatio=\"xMidYMin slice\" viewBox=\"0 0 302 302\" style=\"undefined\"><use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"#svg-7b92\"></use></svg>
              <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.1\" id=\"svg-7b92\" x=\"0px\" y=\"0px\" viewBox=\"0 0 302 302\" style=\"enable-background:new 0 0 302 302;\" xml:space=\"preserve\" class=\"u-svg-content\"><g><rect y=\"36\" width=\"302\" height=\"30\"></rect><rect y=\"236\" width=\"302\" height=\"30\"></rect><rect y=\"136\" width=\"302\" height=\"30\"></rect>
</g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
            </a>
          </div>
          <div class=\"u-custom-menu u-nav-container\">
            <ul class=\"u-custom-font u-nav u-spacing-30 u-unstyled u-nav-1\"><li class=\"u-nav-item\"><a class=\"u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "\" style=\"padding: 10px 0px;\">PAGINA PRINCIPAL</a>
</li><li class=\"u-nav-item\"><a class=\"u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90\" href=\"\" style=\"padding: 10px 0px;\">SOBRE</a>
</li><li class=\"u-nav-item\"><a class=\"u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "index/cadastro\" style=\"padding: 10px 0px;\">Inscrever-se</a>
</li><li class=\"u-nav-item\"><a class=\"u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "index/login\" style=\"padding: 10px 0px;\">Login</a>
</li></ul>
          </div>
          <div class=\"u-custom-menu u-nav-container-collapse\">
            <div class=\"u-align-center u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav\">
              <div class=\"u-sidenav-overflow\">
                <div class=\"u-menu-close\"></div>
                <ul class=\"u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2\"><li class=\"u-nav-item\"><a class=\"u-button-style u-nav-link\" href=\"Index.html\" style=\"padding: 10px 0px;\">Index</a>
</li><li class=\"u-nav-item\"><a class=\"u-button-style u-nav-link\" href=\"Sobre-Nós.html\" style=\"padding: 10px 0px;\">Sobre Nós</a>
</li><li class=\"u-nav-item\"><a class=\"u-button-style u-nav-link\" href=\"Inscrever-se.html\" style=\"padding: 10px 0px;\">Inscrever-se</a>
</li></ul>
              </div>
            </div>
            <div class=\"u-black u-menu-overlay u-opacity u-opacity-70\"></div>
          </div>
        </nav>
      </div></header> 
    <section class=\"u-align-center u-clearfix u-white u-section-1\" id=\"carousel_450e\">
      <div class=\"u-clearfix u-sheet u-valign-middle u-sheet-1\">
        <div class=\"u-clearfix u-layout-wrap u-layout-wrap-1\">
          <div class=\"u-layout\">
            <div class=\"u-layout-row\">
              <div class=\"u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1\">
                <div class=\"u-container-layout u-valign-middle u-container-layout-1\">
                  <h2 class=\"u-text u-text-1\">Sobre<br>nós :)
                  </h2>
                </div>
              </div>
              <div class=\"u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2\">
                <div class=\"u-container-layout u-valign-middle u-container-layout-2\">
                  <p class=\"u-custom-font u-heading-font u-text u-text-2\">A parceria certa pra você, empresa, a se atualizar com as demandas atuais de nossa geração e mercado e, para você, queride candidate, que começa conosco o seu futuro no mercado</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class=\"u-align-center u-clearfix u-palette-1-base u-section-2\" id=\"carousel_0667\">
      <div class=\"u-align-center u-container-style u-group u-group-1\">
        <div class=\"u-container-layout u-valign-middle u-container-layout-1\">
          <h1 class=\"u-text u-text-body-alt-color u-text-1\">Nossas qualidades</h1>
          <p class=\"u-text u-text-grey-30 u-text-2\">E O PORQUE DE VOCÊ ESCOLHER A APROXIMAR COMO PARCEIRA</p>
        </div>
      </div>
      <img class=\"u-expand-resize u-expanded-width-sm u-expanded-width-xs u-image u-image-1\" src=\"";
        // line 97
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "assets/images/sz.png\" data-image-width=\"757\" data-image-height=\"810\">
      <div class=\"u-list u-repeater u-list-1\">
        <div class=\"u-align-center u-container-style u-list-item u-repeater-item\">
          <div class=\"u-container-layout u-similar-container u-container-layout-2\"><span class=\"u-grey-15 u-icon u-icon-circle u-spacing-18 u-icon-1\"><svg class=\"u-svg-link\" preserveAspectRatio=\"xMidYMin slice\" viewBox=\"0 0 24 24\" style=\"\"><use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"#svg-d74e\"></use></svg><svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.1\" xml:space=\"preserve\" class=\"u-svg-content\" viewBox=\"0 0 24 24\" id=\"svg-d74e\"><path d=\"m18.5 24h-9c-.276 0-.5-.224-.5-.5v-3.325l-2.414.733c-.159.059-.365.092-.586.092-1.103 0-2-.897-2-2v-3h-2c-.561 0-1-.439-1-1 0-.188.055-.373.157-.536l2.336-3.708c.332-.526.507-1.132.507-1.753 0-4.965 4.037-9.003 9-9.003s9 4.038 9 9c0 1.858-.565 3.646-1.636 5.17-.892 1.269-1.364 2.758-1.364 4.305v5.025c0 .276-.224.5-.5.5zm-8.5-1h8v-4.525c0-1.754.534-3.441 1.546-4.88.951-1.354 1.454-2.943 1.454-4.595 0-4.411-3.589-8-8-8s-8 3.589-8 8c0 .813-.229 1.604-.661 2.289l-2.336 3.708 2.497.003c.276 0 .5.224.5.5v3.5c0 .552.448 1 1 1 .104 0 .196-.014.271-.041l3.084-.938c.152-.045.316-.017.443.077s.202.244.202.402z\"></path><path d=\"m14.5 16h-2c-.481 0-1-.369-1-1.18v-1.32c0-.586-.253-1.122-.676-1.433-1.17-.861-1.852-2.238-1.823-3.682.046-2.383 2.034-4.35 4.433-4.385 1.215-.04 2.369.443 3.235 1.296.858.847 1.331 1.975 1.331 3.176 0 1.422-.658 2.728-1.806 3.582-.434.323-.694.866-.694 1.453v1.493c0 .552-.448 1-1 1zm-1-11c-.018 0-.035 0-.053 0-1.833.026-3.412 1.585-3.446 3.404-.022 1.12.507 2.188 1.416 2.857.678.5 1.083 1.336 1.083 2.239v1.32c0 .149.036.198.036.198l1.964-.018v-1.493c0-.901.41-1.745 1.098-2.255.89-.664 1.402-1.677 1.402-2.78 0-.932-.367-1.806-1.033-2.463-.661-.652-1.535-1.009-2.467-1.009z\"></path><path d=\"m15 14h-3c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h3c.276 0 .5.224.5.5s-.224.5-.5.5z\"></path></svg></span>
            <h5 class=\"u-text u-text-body-alt-color u-text-3\">INSPIRAÇÃO</h5>
            <p class=\"u-text u-text-grey-50 u-text-4\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
        </div>
        <div class=\"u-align-center u-container-style u-list-item u-repeater-item\">
          <div class=\"u-container-layout u-similar-container u-container-layout-3\"><span class=\"u-grey-15 u-icon u-icon-circle u-spacing-18 u-icon-2\"><svg class=\"u-svg-link\" preserveAspectRatio=\"xMidYMin slice\" viewBox=\"0 0 512 512\" style=\"\"><use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"#svg-dde6\"></use></svg><svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.1\" xml:space=\"preserve\" class=\"u-svg-content\" viewBox=\"0 0 512 512\" id=\"svg-dde6\"><g><path d=\"m316.703 216.874 60.137-43.873c11.697-8.534 5.632-27.118-8.841-27.118h-74.267l-22.962-70.965c-4.463-13.788-24.071-13.816-28.543 0l-22.962 70.965h-74.267c-14.48 0-20.532 18.588-8.841 27.118l60.137 43.873-22.979 71.013c-4.464 13.797 11.405 25.277 23.112 16.736l60.07-43.825 60.07 43.825c11.638 8.488 27.587-2.907 23.112-16.736zm-31.886-1.098 12.091 37.367-31.567-23.031c-5.269-3.843-12.414-3.842-17.682 0l-31.567 23.031 12.091-37.367c1.995-6.166-.195-12.916-5.431-16.736l-31.741-23.157h39.168c6.505 0 12.269-4.193 14.271-10.382l12.05-37.24 12.05 37.24c2.003 6.188 7.767 10.382 14.271 10.382h39.168l-31.741 23.157c-5.236 3.82-7.426 10.57-5.431 16.736z\"></path><path d=\"m499.556 472.922-85.829-150.828c25.867-33.776 41.273-76.025 41.273-121.825-.001-110.429-89.496-200.269-199.501-200.269s-199.5 89.84-199.5 200.269c0 46.139 15.631 88.676 41.846 122.575l-85.404 150.081c-9.902 17.411 2.624 39.075 22.669 39.075h127.55c13.613 0 26.257-7.361 32.997-19.209l52.582-92.4c5.472.197 9.578.205 15.506-.038l52.596 92.437c6.741 11.85 19.385 19.211 32.998 19.211h127.55c20.022-.001 32.583-21.643 22.667-39.079zm-329.975 5.033c-1.419 2.495-4.071 4.045-6.922 4.045h-120.865l77.261-135.771c26.527 25.004 59.841 42.828 96.841 50.338zm-83.582-277.686c0-93.887 76.037-170.269 169.5-170.269s169.5 76.382 169.5 170.269-76.037 170.269-169.5 170.269-169.5-76.383-169.5-170.269zm263.34 281.731c-2.851 0-5.503-1.55-6.923-4.046l-46.413-81.569c36.942-7.678 70.176-25.643 96.594-50.766l77.607 136.381z\"></path>
</g></svg></span>
            <h5 class=\"u-text u-text-body-alt-color u-text-5\">TÍTULOS SOCIAIS</h5>
            <p class=\"u-text u-text-grey-50 u-text-6\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
        </div>
        <div class=\"u-align-center u-container-style u-list-item u-repeater-item\">
          <div class=\"u-container-layout u-similar-container u-container-layout-4\"><span class=\"u-grey-15 u-icon u-icon-circle u-spacing-18 u-icon-3\"><svg class=\"u-svg-link\" preserveAspectRatio=\"xMidYMin slice\" viewBox=\"0 0 512 512\" style=\"\"><use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"#svg-b7d0\"></use></svg><svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.1\" xml:space=\"preserve\" class=\"u-svg-content\" viewBox=\"0 0 512 512\" id=\"svg-b7d0\"><path d=\"m466.191406 410.421875-20.667968-7.175781c11.570312-9.164063 19.011718-23.320313 19.011718-39.191406v-15.148438c0-27.5625-22.425781-49.988281-49.988281-49.988281s-49.988281 22.425781-49.988281 49.988281v15.148438c0 15.871093 7.445312 30.027343 19.015625 39.191406l-20.671875 7.175781c-13.257813 4.605469-24.402344 13.050781-32.382813 23.820313h-55.835937v-22.035157c0-29.003906-18.410156-54.882812-45.808594-64.394531l-20.671875-7.175781c11.570313-9.164063 19.015625-23.320313 19.015625-39.191407v-15.148437c0-27.566406-22.425781-49.988281-49.988281-49.988281s-49.988281 22.425781-49.988281 49.988281v15.148437c0 15.871094 7.445312 30.027344 19.011718 39.191407l-20.667968 7.175781c-27.398438 9.511719-45.808594 35.390625-45.808594 64.394531v22.035157h-72.203125c-4.183594 0-7.574219 3.390624-7.574219 7.574218v62.609375c0 4.183594 3.390625 7.574219 7.574219 7.574219h315.078125c.339844 0 .675781-.03125 1.007812-.074219.332032.042969.667969.074219 1.011719.074219h179.753906c4.183594 0 7.574219-3.390625 7.574219-7.574219v-29.609375c0-29-18.40625-54.878906-45.808594-64.394531zm-86.484375-61.515625c0-19.210938 15.628907-34.839844 34.839844-34.839844s34.839844 15.628906 34.839844 34.839844v15.148438c0 19.210937-15.628907 34.839843-34.839844 34.839843s-34.839844-15.628906-34.839844-34.839843zm-237.316406-62.609375c0-19.210937 15.628906-34.839844 34.839844-34.839844 19.210937 0 34.839843 15.628907 34.839843 34.839844v15.148437c0 19.210938-15.628906 34.839844-34.839843 34.839844-19.210938 0-34.839844-15.628906-34.839844-34.839844zm50.730469 65.136719 7.359375 2.554687-23.25 40.339844-23.25-40.339844 7.359375-2.554687zm-98.195313 60.773437c0-22.558593 14.320313-42.6875 35.628907-50.085937l8.859374-3.074219 31.253907 54.234375c1.351562 2.347656 3.855469 3.792969 6.5625 3.792969s5.210937-1.445313 6.5625-3.792969l31.253906-54.234375 8.859375 3.074219c21.308594 7.398437 35.625 27.527344 35.625 50.085937v22.035157h-164.605469zm-79.777343 37.183594h306.882812c-3.195312 7.925781-4.933594 16.527344-4.933594 25.425781v22.035156h-301.949218zm481.703124 47.460937h-164.605468v-22.035156c0-22.558594 14.316406-42.683594 35.625-50.085937l30.785156-10.6875h31.78125l30.785156 10.6875c21.3125 7.402343 35.628906 27.527343 35.628906 50.085937zm0 0\"></path><path d=\"m464.03125 54.53125h-76.9375c-4.183594 0-7.574219 3.394531-7.574219 7.574219 0 4.183593 3.390625 7.574219 7.574219 7.574219h76.9375c18.097656 0 32.820312 14.722656 32.820312 32.824218v105.023438c0 18.097656-14.722656 32.820312-32.820312 32.820312h-104.015625c-4.183594 0-7.574219 3.390625-7.574219 7.574219v32.210937l-37.5625-37.566406c-1.421875-1.421875-3.347656-2.21875-5.355468-2.21875h-61.601563c-18.097656 0-32.824219-14.722656-32.824219-32.820312v-105.027344c0-18.097656 14.722656-32.820312 32.824219-32.820312h103.761719c4.183594 0 7.574218-3.390626 7.574218-7.574219 0-4.183594-3.390624-7.574219-7.574218-7.574219h-39.636719v-6.5625c0-26.449219-21.519531-47.96875-47.96875-47.96875h-216.109375c-26.449219 0-47.96875 21.519531-47.96875 47.96875v16.746094c0 4.183594 3.390625 7.574218 7.574219 7.574218 4.183593 0 7.574219-3.390624 7.574219-7.574218v-16.746094c0-18.097656 14.722656-32.820312 32.820312-32.820312h216.109375c18.097656 0 32.820313 14.722656 32.820313 32.820312v6.5625h-48.976563c-26.449219 0-47.96875 21.519531-47.96875 47.96875v83.3125h-79.273437c-4.183594 0-7.574219 3.390625-7.574219 7.574219v32.210937l-37.5625-37.566406c-1.421875-1.421875-3.347657-2.21875-5.355469-2.21875h-22.21875c-18.097656 0-32.820312-14.722656-32.820312-32.820312v-53.058594c0-4.183594-3.390626-7.574219-7.574219-7.574219-4.183594 0-7.574219 3.390625-7.574219 7.574219v53.058594c0 26.453124 21.519531 47.96875 47.96875 47.96875h19.078125l48.277344 48.277343c1.449219 1.449219 3.386719 2.21875 5.355469 2.214844.976562 0 1.960937-.1875 2.898437-.574219 2.828125-1.171875 4.675781-3.933594 4.675781-6.996094v-42.921874h71.699219v6.566406c0 26.449218 21.519531 47.964844 47.96875 47.964844h58.464844l48.273437 48.277343c1.449219 1.449219 3.386719 2.21875 5.355469 2.21875.976563 0 1.960937-.1875 2.898437-.578125 2.828126-1.171875 4.675782-3.933594 4.675782-6.996094v-42.921874h96.441406c26.449219 0 47.96875-21.515626 47.96875-47.964844v-105.027344c0-26.449219-21.519531-47.96875-47.96875-47.96875zm0 0\"></path></svg></span>
            <h5 class=\"u-text u-text-body-alt-color u-text-7\">beneficios a todos</h5>
            <p class=\"u-text u-text-grey-50 u-text-8\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
        </div>
        <div class=\"u-align-center u-container-style u-list-item u-repeater-item\">
          <div class=\"u-container-layout u-similar-container u-container-layout-5\"><span class=\"u-grey-15 u-icon u-icon-circle u-spacing-18 u-icon-4\"><svg class=\"u-svg-link\" preserveAspectRatio=\"xMidYMin slice\" viewBox=\"0 0 64 64\" style=\"\"><use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"#svg-fd7f\"></use></svg><svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.1\" xml:space=\"preserve\" class=\"u-svg-content\" viewBox=\"0 0 64 64\" id=\"svg-fd7f\"><circle cx=\"20\" cy=\"28\" r=\"2\"></circle><circle cx=\"32\" cy=\"28\" r=\"2\"></circle><path d=\"m26 37c-1.813 0-3.507-.839-4.77-2.362l1.539-1.276c.877 1.056 2.024 1.638 3.231 1.638s2.354-.582 3.23-1.638l1.539 1.276c-1.262 1.523-2.956 2.362-4.769 2.362z\"></path><path d=\"m61 29c-2.76 0-5 2.24-5 5v1h-4c-1.65 0-3 1.35-3 3 0 .77.29 1.47.77 2-.48.53-.77 1.23-.77 2s.29 1.47.77 2c-.48.53-.77 1.23-.77 2s.29 1.47.77 2c-.43.48-.71 1.09-.76 1.76-.42-1.31-.97-2.54-1.64-3.75-1.55-2.79-2.37-5.96-2.37-9.16v-14.85c0-10.48-8.52-19-19-19s-19 8.52-19 19v14.85c0 3.2-.82 6.37-2.37 9.16-1.72 3.1-2.63 6.6-2.63 10.14v4.85c0 .55.45 1 1 1h46c.55 0 1-.45 1-1v-4.85c0-1.5-.17-3-.48-4.46.54.79 1.45 1.31 2.48 1.31h1v8c0 .55.45 1 1 1h7c.55 0 1-.45 1-1v-31c0-.55-.45-1-1-1zm-15.37 17.99c1.11 1.99 1.84 4.18 2.17 6.44-1.2-1.38-2.84-2.4-4.74-2.85l-10.06-2.37v-3.95c4.5-2.38 7.65-6.99 7.97-12.35.75-.15 1.44-.47 2.03-.91v5.85c0 3.54.91 7.04 2.63 10.14zm-15.98-30.85c2.24 5.43 7.31 7.18 9.35 7.67v7.19c0 7.17-5.83 13-13 13s-13-5.83-13-13v-7.04c2.88-.2 11.26-1.32 16.65-7.82zm-16.65 5.8c.03-7.14 5.85-12.94 13-12.94 7.09 0 12.87 5.7 12.99 12.76-2.13-.58-6.63-2.45-8.02-8-.1-.39-.41-.68-.8-.75-.39-.06-.78.11-1 .44-4.65 6.96-13.25 8.26-16.17 8.49zm28 7.88v-5.64c1.16.41 2 1.52 2 2.82s-.84 2.41-2 2.82zm-32-7.82c0-9.37 7.63-17 17-17s17 7.63 17 17v1c-.58-.44-1.26-.75-2-.9v-.1c0-8.27-6.73-15-15-15s-15 6.73-15 15v.1c-.74.15-1.42.46-2 .9zm2 2.18v5.64c-1.16-.41-2-1.52-2-2.82s.84-2.41 2-2.82zm-4.63 22.81c1.72-3.1 2.63-6.6 2.63-10.14v-5.85c.59.44 1.28.76 2.03.91.32 5.36 3.47 9.97 7.97 12.35v3.95l-10.06 2.37c-1.9.45-3.54 1.47-4.74 2.85.33-2.26 1.06-4.45 2.17-6.44zm-2.37 13.01v-.66c0-3.27 2.22-6.07 5.4-6.82l2.19-.51 2.27 2.26-.81 2.41c-.16.49.07 1.02.54 1.23l4.7 2.09zm11.24-3.54.71-2.14c.12-.36.02-.76-.24-1.03l-1.83-1.83 5.39-1.26 2.26 9.05zm12.98 3.54h-4.44l-1.23-4.91c1.04.6 2.22.91 3.45.91s2.42-.32 3.45-.92zm-2.22-6c-1.34 0-2.59-.52-3.54-1.48-.31-.3-.59-.66-.81-1.05l-.01-.01-.64-2.58v-3.74c1.56.56 3.24.86 5 .86s3.44-.3 5-.86v3.74l-.64 2.56c-.88 1.59-2.55 2.56-4.36 2.56zm6.73-3.8 5.39 1.26-1.83 1.83c-.26.27-.36.67-.24 1.03l.71 2.14-6.29 2.79zm15.27 9.8h-14.29l4.7-2.09c.47-.21.7-.74.54-1.23l-.81-2.41 2.27-2.26 2.19.51c3.18.75 5.4 3.55 5.4 6.82zm12 0h-5v-8c0-.55-.45-1-1-1h-2c-.55 0-1-.45-1-1s.45-1 1-1 1-.45 1-1-.45-1-1-1-1-.45-1-1 .45-1 1-1 1-.45 1-1-.45-1-1-1-1-.45-1-1 .45-1 1-1 1-.45 1-1-.45-1-1-1-1-.45-1-1 .45-1 1-1h5c.55 0 1-.45 1-1v-2c0-1.3.84-2.42 2-2.83z\"></path></svg></span>
            <h5 class=\"u-text u-text-body-alt-color u-text-9\">DESENVOLVIMENTO DE PESSOAS</h5>
            <p class=\"u-text u-text-grey-50 u-text-10\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
        </div>
      </div>
    </section>
    <section class=\"u-clearfix u-section-3\" id=\"sec-b73c\">
      <div class=\"u-clearfix u-sheet u-sheet-1\">
        <div class=\"u-align-center u-container-style u-group u-group-1\">
          <div class=\"u-container-layout\">
            <h2 class=\"u-text u-text-1\">Objetivos de Desenvolvimento Sustentável</h2>
          </div>
        </div>
        <div class=\"u-clearfix u-expanded-width u-gutter-30 u-layout-wrap u-layout-wrap-1\">
          <div class=\"u-layout\">
            <div class=\"u-layout-row\">
              <div class=\"u-align-center u-container-style u-layout-cell u-left-cell u-size-15 u-size-30-md u-layout-cell-1\">
                <div class=\"u-container-layout\">
                  <img src=\"";
        // line 138
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "assets/images/ods4.png\" alt=\"\" class=\"u-expanded-width u-image u-image-contain u-image-default u-image-1\">
                  <h4 class=\"u-text u-text-2\">Educação de Qualidade</h4>
                </div>
              </div>
              <div class=\"u-container-style u-layout-cell u-size-15 u-size-30-md u-layout-cell-2\">
                <div class=\"u-container-layout\">
                  <img src=\"";
        // line 144
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "assets/images/ods5.png\" alt=\"\" class=\"u-expanded-width u-image u-image-contain u-image-default u-image-2\">
                  <h4 class=\"u-align-center u-text u-text-3\">Igualdade de gênero</h4>
                </div>
              </div>
              <div class=\"u-align-center u-container-style u-layout-cell u-size-15 u-size-30-md u-layout-cell-3\">
                <div class=\"u-container-layout\">
                  <img src=\"";
        // line 150
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "assets/images/ods8.png\" alt=\"\" class=\"u-expanded-width u-image u-image-contain u-image-default u-image-3\">
                  <h4 class=\"u-text u-text-4\">Emprego digno e crescimento econômico</h4>
                </div>
              </div>
              <div class=\"u-container-style u-layout-cell u-right-cell u-size-15 u-size-30-md u-layout-cell-4\">
                <div class=\"u-container-layout\">
                  <img src=\"";
        // line 156
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "assets/images/ods10.png\" alt=\"\" class=\"u-expanded-width u-image u-image-contain u-image-default u-image-4\">
                  <h4 class=\"u-align-center u-text u-text-5\">Redução das Desigualdades</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class=\"u-align-center u-clearfix u-palette-1-base u-section-4\" id=\"sec-0585\">
      <div class=\"u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-valign-middle-xs u-sheet-1\">
        <h2 class=\"u-text u-text-default u-text-1\">Como trabalhamos</h2>
        <p class=\"u-text u-text-default u-text-2\">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
        <div class=\"u-expanded-width u-list u-repeater u-list-1\">
          <div class=\"u-container-style u-list-item u-repeater-item\">
            <div class=\"u-container-layout u-similar-container u-container-layout-1\">
              <h2 class=\"u-align-center u-custom-font u-text u-text-default u-text-font u-text-palette-3-base u-text-3\">01</h2>
              <p class=\"u-align-left u-text u-text-4\">Um perfil com alternativas de acessibilidade com todes informações de nosses candidates</p>
            </div>
          </div>
          <div class=\"u-container-style u-list-item u-repeater-item\">
            <div class=\"u-container-layout u-similar-container u-container-layout-2\">
              <h2 class=\"u-align-center u-custom-font u-text u-text-default u-text-font u-text-palette-3-base u-text-5\">02</h2>
              <p class=\"u-align-left u-text u-text-6\">O JOGO cujas escolhas des candidates levará às soft skills adequadas a seu perfil</p>
            </div>
          </div>
          <div class=\"u-container-style u-list-item u-repeater-item\">
            <div class=\"u-container-layout u-similar-container u-container-layout-3\">
              <h2 class=\"u-align-center u-custom-font u-text u-text-default u-text-font u-text-palette-3-base u-text-7\">03</h2>
              <p class=\"u-align-left u-text u-text-8\">As empresas que cadastram a sua oferta são levadas ao perfil&nbsp;destes candidates para o melhor \"match\"</p>
            </div>
          </div>
        </div>
        <a href=\"https://nicepage.com/html-templates\" class=\"u-border-2 u-border-white u-btn u-btn-rectangle u-button-style u-none u-btn-1\">ENTRE EM CONTATO</a>
      </div>
    </section>
    <section class=\"u-clearfix u-section-5\" id=\"carousel_30a3\">
      <div class=\"u-container-style u-group u-palette-5-base u-shape-rectangle u-group-1\">
        <div class=\"u-container-layout u-valign-top u-container-layout-1\">
          <img src=\"";
        // line 195
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "assets/images/aproximargif.gif\" alt=\"\" class=\"u-expanded-width u-image u-image-default u-image-1\" data-image-width=\"615\" data-image-height=\"419\">
        </div>
      </div>
      <div class=\"u-list u-repeater u-list-1\">
        <div class=\"u-container-style u-list-item u-repeater-item\">
          <div class=\"u-container-layout u-similar-container u-container-layout-2\">
            <h5 class=\"u-text u-text-black u-text-1\">Abrace este movimento</h5>
            <p class=\"u-text u-text-2\">Sample text. Click to select the text box. Click again or double click to start editing the text.&nbsp;<a href=\"https://nicepage.com\" class=\"u-border-1 u-border-grey-75 u-btn u-button-style u-none u-text-body-color u-btn-1\">Duis aute irure dolor</a>. 
            </p>
          </div>
        </div>
        <div class=\"u-container-style u-list-item u-repeater-item\">
          <div class=\"u-container-layout u-similar-container u-container-layout-3\">
            <h5 class=\"u-text u-text-black u-text-3\">Transforme vidas</h5>
            <p class=\"u-text u-text-4\">Sample text. Click to select the text box. Click again or double click to start editing the text.&nbsp;Duis aute irure dolor. </p>
          </div>
        </div>
        <div class=\"u-container-style u-list-item u-repeater-item\">
          <div class=\"u-container-layout u-similar-container u-container-layout-4\">
            <h5 class=\"u-text u-text-black u-text-5\">Faça mais pelos seus investidores</h5>
            <p class=\"u-text u-text-6\">Sample text. Click to select the text box. Click again or double click to start editing the text.&nbsp;<br>Image from&nbsp;<a href=\"https://www.freepik.com/photos/business\" class=\"u-border-1 u-border-grey-75 u-btn u-button-style u-none u-text-body-color u-btn-2\" target=\"_blank\">Freepik</a>. 
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class=\"u-clearfix u-grey-10 u-section-6\" id=\"carousel_63f3\">
      <div class=\"u-clearfix u-sheet u-valign-middle u-sheet-1\">
        <div class=\"u-clearfix u-layout-wrap u-layout-wrap-1\">
          <div class=\"u-gutter-0 u-layout\">
            <div class=\"u-layout-row\">
              <div class=\"u-container-style u-layout-cell u-size-60 u-white u-layout-cell-1\">
                <div class=\"u-container-layout u-valign-middle u-container-layout-1\">
                  <p class=\"u-text u-text-1\">Contate-nos</p>
                  <div class=\"u-form u-form-1\">
                    <form action=\"#\" method=\"POST\" class=\"u-clearfix u-form-spacing-20 u-form-vertical u-inner-form\" style=\"padding: 0;\" source=\"custom\" name=\"form\">
                      <div class=\"u-form-group u-form-name u-form-partition-factor-2 u-form-group-1\">
                        <label for=\"name-d70e\" class=\"u-form-control-hidden u-label\">Name</label>
                        <input type=\"text\" placeholder=\"Seu nome\" id=\"name-d70e\" name=\"name\" class=\"u-border-1 u-border-grey-30 u-input u-input-rectangle u-white\" required=\"\">
                      </div>
                      <div class=\"u-form-email u-form-group u-form-partition-factor-2 u-form-group-2\">
                        <label for=\"email-d70e\" class=\"u-form-control-hidden u-label\">Email</label>
                        <input type=\"email\" placeholder=\"Entre com um endereço de e-mail válido\" id=\"email-d70e\" name=\"email\" class=\"u-border-1 u-border-grey-30 u-input u-input-rectangle u-white\" required=\"\">
                      </div>
                      <div class=\"u-form-address u-form-group u-form-group-3\">
                        <label for=\"address-2127\" class=\"u-form-control-hidden u-label\">Address</label>
                        <input type=\"text\" placeholder=\"Estado - Cidade\" id=\"address-2127\" name=\"address\" class=\"u-border-1 u-border-grey-30 u-input u-input-rectangle u-white\" required=\"\">
                      </div>
                      <div class=\"u-form-group u-form-message u-form-group-4\">
                        <label for=\"message-d70e\" class=\"u-form-control-hidden u-label\">Message</label>
                        <textarea placeholder=\"Digite aqui a sua mensagem\" rows=\"4\" cols=\"50\" id=\"message-d70e\" name=\"message\" class=\"u-border-1 u-border-grey-30 u-input u-input-rectangle u-white\" required=\"\"></textarea>
                      </div>
                      <div class=\"u-align-left u-form-group u-form-submit u-form-group-5\">
                        <a href=\"https://nicepage.com\" class=\"u-black u-btn u-btn-submit u-button-style u-btn-1\">Submit</a>
                        <input type=\"submit\" value=\"submit\" class=\"u-form-control-hidden\">
                      </div>
                      <div class=\"u-form-send-message u-form-send-success\"> Thank you! Your message has been sent. </div>
                      <div class=\"u-form-send-error u-form-send-message\"> Unable to send your message. Please fix errors then try again. </div>
                      <input type=\"hidden\" value=\"\" name=\"recaptchaResponse\">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <footer class=\"u-align-left u-clearfix u-footer u-grey-80 u-footer\" id=\"sec-e6a2\"><div class=\"u-container-layout u-valign-middle-xs u-container-layout-1\">
        <h1 class=\"u-text u-text-1\">A parceira certa, no momento certo</h1>
        <p class=\"u-text u-text-2\">APROXIMAR Inc.</p>
      </div></footer>
    <section class=\"u-backlink u-clearfix u-grey-80\">
    </section>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "Sobre-Nós.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 195,  227 => 156,  218 => 150,  209 => 144,  200 => 138,  156 => 97,  108 => 52,  104 => 51,  99 => 49,  60 => 13,  56 => 12,  52 => 11,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Sobre-Nós.html", "C:\\xampp\\htdocs\\Aproximar\\app\\view\\Sobre-Nós.html");
    }
}
