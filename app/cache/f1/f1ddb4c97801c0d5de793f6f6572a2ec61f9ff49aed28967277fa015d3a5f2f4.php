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

/* Minha-conta.html */
class __TwigTemplate_4844dcbfe8f2a5cd2a9108934811b435c29b22648330e201eeb2fb76324e0e78 extends \Twig\Template
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
    <meta name=\"keywords\" content=\"\">
    <meta name=\"description\" content=\"\">
    <meta name=\"page_type\" content=\"np-template-header-footer-from-plugin\">
    <title>Minha conta</title>
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "assets/css/nicepage.css\" media=\"screen\">
<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "assets/css/Minha-conta.css\" media=\"screen\">
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
    <meta property=\"og:title\" content=\"Minha conta\">
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
        // line 54
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "\" style=\"padding: 10px 0px;\">Pagina Principal</a>
</li><li class=\"u-nav-item\"><a class=\"u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "index/sobre\" style=\"padding: 10px 0px;\">Sobre Nós</a>
</li><li class=\"u-nav-item\"><a class=\"u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90\" href=\"";
        // line 56
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "\" style=\"padding: 10px 0px;\">SAIR</a>
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
    <section class=\"u-align-center-lg u-align-center-md u-align-center-xl u-align-left-sm u-align-left-xs u-clearfix u-image u-section-1\" id=\"carousel_dd42\">
      <div class=\"u-clearfix u-sheet u-sheet-1\">
        <h2 class=\"u-align-left u-subtitle u-text u-text-1\">Bem vinde de volta!</h2>
        <div class=\"u-clearfix u-gutter-32 u-layout-wrap u-layout-wrap-1\">
          <div class=\"u-gutter-0 u-layout\">
            <div class=\"u-layout-row\">
              <div class=\"u-size-10\">
                <div class=\"u-layout-col\">
                  <div class=\"u-container-style u-layout-cell u-shape-rectangle u-size-60 u-layout-cell-1\">
                    <div class=\"u-container-layout u-valign-middle u-container-layout-1\">
                      <div alt=\"\" class=\"u-image u-image-circle u-image-1\" data-image-width=\"1000\" data-image-height=\"1500\">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"u-size-50\">
                <div class=\"u-layout-col\">
                  <div class=\"u-container-style u-layout-cell u-size-60 u-layout-cell-2\">
                    <div class=\"u-container-layout u-valign-bottom u-container-layout-2\">
                    ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["user"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 94
            echo "                      <h2 class=\"u-text u-text-2\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "apelido", [], "any", false, false, false, 94), "html", null, true);
            echo "</h2>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "                      <p class=\"u-text u-text-3\">Entusiasta, amo contribuir positivamente no local de trabalho<br>Sempre gostei de interagir com todes meus amigos<br> e posso garantir que minha relação interpessoal é excelente</p>
                      <h2 class=\"u-text u-text-4\">Pontos acumulados</h2>
                    ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["user"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 99
            echo "                      <h1 class=\"u-text u-text-5\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "pontos", [], "any", false, false, false, 99), "html", null, true);
            echo "</h1>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                      <a href=\"#\" class=\"u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-1\">EXTRAIR O MEU RELATÓRIO&nbsp;DE PERFIL DISC</a><br><br><br>
                      <a href=\"https://game-sandy.vercel.app/\" class=\"u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-1\">FAZER TESTE DE SOFTSKILLS (GAME)</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class=\"u-align-center u-clearfix u-section-2\" id=\"sec-c4f4\">
      <div class=\"u-clearfix u-sheet u-sheet-1\">
        <h1 class=\"u-align-left u-text u-text-1\">Cursos recomendados</h1>
        <div class=\"u-expanded-width u-list u-repeater u-list-1\">
          <div class=\"u-align-center u-container-style u-custom-background u-list-item u-palette-5-light-2 u-repeater-item u-video-cover u-list-item-1\">
            <div class=\"u-container-layout u-similar-container u-valign-bottom u-container-layout-1\"><span class=\"u-icon u-icon-circle u-text-palette-1-base u-icon-1\"><svg class=\"u-svg-link\" preserveAspectRatio=\"xMidYMin slice\" viewBox=\"0 0 60 60\" style=\"\"><use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"#svg-bf72\"></use></svg><svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.1\" xml:space=\"preserve\" class=\"u-svg-content\" viewBox=\"0 0 60 60\" x=\"0px\" y=\"0px\" id=\"svg-bf72\" style=\"enable-background:new 0 0 60 60;\"><g><path d=\"M28.404,7.758c-0.975-0.552-2.131-0.534-3.09,0.044c-0.046,0.027-0.09,0.059-0.13,0.093L11.634,19.358H1   c-0.553,0-1,0.447-1,1v19c0,0.266,0.105,0.52,0.293,0.707S0.734,40.358,1,40.358l10.61-0.005l13.543,12.44   c0.05,0.046,0.104,0.086,0.161,0.12c0.492,0.297,1.037,0.446,1.582,0.446c0.517-0.001,1.033-0.134,1.508-0.402   C29.403,52.393,30,51.363,30,50.201V10.514C30,9.353,29.403,8.323,28.404,7.758z M28,50.201c0,0.431-0.217,0.81-0.579,1.015   c-0.155,0.087-0.548,0.255-1,0.026L13,38.913v-4.556c0-0.553-0.447-1-1-1s-1,0.447-1,1v3.996l-9,0.004v-17h9v4c0,0.553,0.447,1,1,1   s1-0.447,1-1v-4.536l13.405-11.34c0.461-0.242,0.861-0.07,1.016,0.018C27.783,9.704,28,10.083,28,10.514V50.201z\"></path><path d=\"M52.026,29.858c0-8.347-5.316-15.76-13.229-18.447c-0.522-0.177-1.091,0.103-1.269,0.626   c-0.177,0.522,0.103,1.091,0.626,1.269c7.101,2.411,11.872,9.063,11.872,16.553c0,7.483-4.762,14.136-11.849,16.554   c-0.522,0.178-0.802,0.746-0.623,1.27c0.142,0.415,0.53,0.677,0.946,0.677c0.107,0,0.216-0.017,0.323-0.054   C46.721,45.611,52.026,38.198,52.026,29.858z\"></path><path d=\"M44.453,6.374c-0.508-0.213-1.095,0.021-1.312,0.53C42.926,7.413,43.163,8,43.672,8.216C52.376,11.909,58,20.405,58,29.858   c0,9.777-5.894,18.38-15.015,21.914c-0.515,0.2-0.771,0.779-0.571,1.294c0.153,0.396,0.532,0.639,0.933,0.639   c0.12,0,0.242-0.021,0.361-0.067C53.605,49.801,60,40.467,60,29.858C60,19.6,53.897,10.382,44.453,6.374z\"></path><path d=\"M43.026,29.858c0-5.972-4.009-11.302-9.749-12.962c-0.53-0.151-1.084,0.152-1.238,0.684   c-0.153,0.53,0.152,1.085,0.684,1.238c4.889,1.413,8.304,5.953,8.304,11.04s-3.415,9.627-8.304,11.04   c-0.531,0.153-0.837,0.708-0.684,1.238c0.127,0.438,0.526,0.723,0.961,0.723c0.092,0,0.185-0.013,0.277-0.039   C39.018,41.159,43.026,35.829,43.026,29.858z\"></path>
</g></svg>
            
            
          </span>
              <h3 class=\"u-text u-text-2\">Oratória</h3>
              <p class=\"u-text u-text-3\">Oferecido por Aproximar LTDA</p>
              <p class=\"u-text u-text-4\">500 pontos<span style=\"font-weight: 700;\"></span>
              </p>
            </div>
          </div>
          <div class=\"u-align-center u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-2\">
            <div class=\"u-container-layout u-similar-container u-valign-bottom u-container-layout-2\"><span class=\"u-icon u-icon-circle u-text-palette-1-base u-icon-2\"><svg class=\"u-svg-link\" preserveAspectRatio=\"xMidYMin slice\" viewBox=\"0 0 60 60\" style=\"\"><use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"#svg-4491\"></use></svg><svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.1\" xml:space=\"preserve\" class=\"u-svg-content\" viewBox=\"0 0 60 60\" x=\"0px\" y=\"0px\" id=\"svg-4491\" style=\"enable-background:new 0 0 60 60;\"><g><path d=\"M57.015,0h-4.029C51.339,0,50,1.339,50,2.985V7v6v37.266l4,7V59c0,0.553,0.447,1,1,1s1-0.447,1-1v-1.734l4-7V13V7V2.985   C60,1.339,58.661,0,57.015,0z M52,9h6v2h-6V9z M55,54.984L52.723,51h4.554L55,54.984z M58,49h-6V13h6V49z M52,7V2.985   C52,2.442,52.442,2,52.985,2h4.029C57.558,2,58,2.442,58,2.985V7H52z\"></path><path d=\"M0,0v60h10h36V0H10H0z M2,58V2h6v56H2z M44,2v56H10V2H44z\"></path><path d=\"M39,24V10H15v14H39z M17,12h20v10H17V12z\"></path><rect x=\"20\" y=\"14\" width=\"14\" height=\"2\"></rect><rect x=\"20\" y=\"18\" width=\"14\" height=\"2\"></rect>
</g></svg>
            
            
          </span>
              <h3 class=\"u-text u-text-5\">Inglês</h3>
              <p class=\"u-text u-text-6\">Oferecido por ONG Dias martins</p>
              <p class=\"u-text u-text-7\">100 pontos</p>
            </div>
          </div>
          <div class=\"u-align-center u-container-style u-list-item u-repeater-item u-white u-list-item-3\">
            <div class=\"u-container-layout u-similar-container u-valign-bottom u-container-layout-3\"><span class=\"u-icon u-icon-circle u-text-palette-1-base u-icon-3\"><svg class=\"u-svg-link\" preserveAspectRatio=\"xMidYMin slice\" viewBox=\"0 0 60 60\" style=\"\"><use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"#svg-47c0\"></use></svg><svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.1\" xml:space=\"preserve\" class=\"u-svg-content\" viewBox=\"0 0 60 60\" x=\"0px\" y=\"0px\" id=\"svg-47c0\" style=\"enable-background:new 0 0 60 60;\"><g><path d=\"M52.29,44.29C52.109,44.479,52,44.74,52,45s0.1,0.52,0.29,0.71C52.479,45.89,52.74,46,53,46s0.52-0.11,0.71-0.29   C53.89,45.52,54,45.26,54,45s-0.11-0.521-0.29-0.71C53.34,43.93,52.67,43.92,52.29,44.29z\"></path><path d=\"M23.638,42.263L20,40.405v-0.387c1.628-0.889,2.773-2.354,3.412-4.365C24.381,35.14,25,34.14,25,33.018v-1   c0-0.927-0.431-1.786-1.151-2.35c-0.624-3.78-3.262-5.696-7.849-5.696c-0.217,0-0.429,0.009-0.636,0.025   c-0.865,0.067-2.129-0.003-3.224-0.741c-0.41-0.276-0.719-0.544-0.917-0.796c-0.336-0.428-0.901-0.577-1.401-0.369   c-0.501,0.206-0.796,0.708-0.733,1.248c0.042,0.372,0.105,0.808,0.2,1.285c0.193,0.975,0.193,0.975-0.078,1.558   c-0.102,0.221-0.228,0.49-0.376,0.853c-0.331,0.81-0.566,1.697-0.701,2.646C7.424,30.245,7,31.1,7,32.018v1   c0,1.122,0.619,2.122,1.588,2.636c0.639,2.012,1.784,3.477,3.412,4.365v0.376l-3.77,1.857C6.854,43.003,6,44.443,6,46.011v1.324   c0,0.803,0,2.683,10,2.683s10-1.88,10-2.683v-1.244C26,44.461,25.095,42.994,23.638,42.263z M24,47.109   c-0.623,0.379-3.161,0.908-8,0.908s-7.377-0.529-8-0.908v-1.099c0-0.835,0.456-1.603,1.151-1.983l3.858-1.9   C13.611,41.833,14,41.21,14,40.539v-1.804l-0.604-0.261c-1.517-0.652-2.503-1.899-3.015-3.814l-0.143-0.532l-0.526-0.164   C9.293,33.834,9,33.444,9,33.018v-1c0-0.363,0.207-0.699,0.541-0.877l0.469-0.25l0.055-0.528c0.099-0.939,0.308-1.804,0.622-2.57   c0.133-0.325,0.246-0.568,0.338-0.767c0.339-0.729,0.462-1.105,0.377-1.876c1.175,0.672,2.587,0.959,4.122,0.842   c0.155-0.013,0.314-0.02,0.477-0.02c3.744,0,5.572,1.356,5.929,4.399l0.062,0.523l0.466,0.245C22.792,31.316,23,31.652,23,32.018v1   c0,0.427-0.293,0.816-0.712,0.946l-0.526,0.164l-0.143,0.532c-0.512,1.915-1.498,3.162-3.015,3.814L18,38.735v1.812   c0,0.666,0.369,1.27,0.964,1.575l3.768,1.924l0.007,0.004C23.517,44.439,24,45.222,24,46.091V47.109z\"></path><path d=\"M31,29.018h10c0.553,0,1-0.447,1-1s-0.447-1-1-1H31c-0.553,0-1,0.447-1,1S30.447,29.018,31,29.018z\"></path><path d=\"M32,44.018h-1c-0.553,0-1,0.447-1,1s0.447,1,1,1h1c0.553,0,1-0.447,1-1S32.553,44.018,32,44.018z\"></path><path d=\"M38,44.018h-2c-0.553,0-1,0.447-1,1s0.447,1,1,1h2c0.553,0,1-0.447,1-1S38.553,44.018,38,44.018z\"></path><path d=\"M43,44.018h-1c-0.553,0-1,0.447-1,1s0.447,1,1,1h1c0.553,0,1-0.447,1-1S43.553,44.018,43,44.018z\"></path><path d=\"M49,44.018h-2c-0.553,0-1,0.447-1,1s0.447,1,1,1h2c0.553,0,1-0.447,1-1S49.553,44.018,49,44.018z\"></path><path d=\"M53,33.018H31c-0.553,0-1,0.447-1,1s0.447,1,1,1h22c0.553,0,1-0.447,1-1S53.553,33.018,53,33.018z\"></path><path d=\"M53,39.018H31c-0.553,0-1,0.447-1,1s0.447,1,1,1h22c0.553,0,1-0.447,1-1S53.553,39.018,53,39.018z\"></path><path d=\"M55.322,14H37V6.313C37,5.037,35.963,4,34.687,4h-9.375C24.037,4,23,5.037,23,6.313V14H4.678C2.099,14,0,16.099,0,18.678   v32.645C0,53.901,2.099,56,4.678,56h50.645C57.901,56,60,53.901,60,51.322V18.678C60,16.099,57.901,14,55.322,14z M25,6.313   C25,6.141,25.141,6,25.312,6h9.375C34.859,6,35,6.141,35,6.313V14v5.688C35,19.859,34.859,20,34.687,20h-9.375   C25.141,20,25,19.859,25,19.688V14V6.313z M58,51.322C58,52.799,56.799,54,55.322,54H4.678C3.201,54,2,52.799,2,51.322V18.678   C2,17.201,3.201,16,4.678,16H23v3.688C23,20.963,24.037,22,25.312,22h9.375C35.963,22,37,20.963,37,19.688V16h18.322   C56.799,16,58,17.201,58,18.678V51.322z\"></path><path d=\"M30,15c2.206,0,4-1.794,4-4s-1.794-4-4-4s-4,1.794-4,4S27.794,15,30,15z M30,9c1.103,0,2,0.897,2,2s-0.897,2-2,2   s-2-0.897-2-2S28.897,9,30,9z\"></path>
</g></svg>
            
            
          </span>
              <h3 class=\"u-text u-text-8\">Marketing</h3>
              <p class=\"u-text u-text-9\">Oferecido por ONG Protetora</p>
              <p class=\"u-text u-text-10\">50 pontos</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class=\"u-clearfix u-grey-10 u-section-3\" id=\"sec-6bcf\">
      <div class=\"u-clearfix u-sheet u-sheet-1\">
        <h1 class=\"u-text u-text-1\">Cursos finalizados</h1>
        <div class=\"u-list u-repeater u-list-1\">
          <div class=\"u-container-style u-list-item u-repeater-item\">
            <div class=\"u-container-layout u-similar-container u-container-layout-1\"><span class=\"u-icon u-icon-circle u-text-palette-1-base u-icon-1\">
            <svg class=\"u-svg-link\" preserveAspectRatio=\"xMidYMin slice\" viewBox=\"0 0 515.556 515.556\" style=\"\"><use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"#svg-c319\"></use></svg>
            <svg xmlns=\"http://www.w3.org/2000/svg\" id=\"svg-c319\" enable-background=\"new 0 0 515.556 515.556\" viewBox=\"0 0 515.556 515.556\" class=\"u-svg-content\"><path d=\"m0 274.226 176.549 176.886 339.007-338.672-48.67-47.997-290.337 290-128.553-128.552z\"></path></svg>
          </span>
              <a href=\"https://nicepage.com/templates\" class=\"u-border-2 u-border-hover-palette-1-base u-border-palette-1-base u-btn u-btn-round u-button-style u-hover-palette-1-base u-radius-50 u-btn-1\">Certificado<br>
              </a>
              <h3 class=\"u-text u-text-2\">RELAÇÃO INTERPESSOAL</h3>
            </div>
          </div>
          <div class=\"u-container-style u-list-item u-repeater-item\">
            <div class=\"u-container-layout u-similar-container u-container-layout-2\"><span class=\"u-icon u-icon-circle u-text-palette-1-base u-icon-2\">
            <svg class=\"u-svg-link\" preserveAspectRatio=\"xMidYMin slice\" viewBox=\"0 0 515.556 515.556\" style=\"\"><use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"#svg-c319\"></use></svg>
            <svg xmlns=\"http://www.w3.org/2000/svg\" id=\"svg-c319\" enable-background=\"new 0 0 515.556 515.556\" viewBox=\"0 0 515.556 515.556\" class=\"u-svg-content\"><path d=\"m0 274.226 176.549 176.886 339.007-338.672-48.67-47.997-290.337 290-128.553-128.552z\"></path></svg>
          </span>
              <a href=\"https://nicepage.com/templates\" class=\"u-border-2 u-border-hover-palette-1-base u-border-palette-1-base u-btn u-btn-round u-button-style u-hover-palette-1-base u-radius-50 u-btn-2\">CERTIFICADO</a>
              <h3 class=\"u-text u-text-3\">INGLÊS AVANÇADO</h3>
            </div>
          </div>
          <div class=\"u-container-style u-list-item u-repeater-item\">
            <div class=\"u-container-layout u-similar-container u-container-layout-3\"><span class=\"u-icon u-icon-circle u-text-palette-1-base u-icon-3\">
            <svg class=\"u-svg-link\" preserveAspectRatio=\"xMidYMin slice\" viewBox=\"0 0 515.556 515.556\" style=\"\"><use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"#svg-c319\"></use></svg>
            <svg xmlns=\"http://www.w3.org/2000/svg\" id=\"svg-c319\" enable-background=\"new 0 0 515.556 515.556\" viewBox=\"0 0 515.556 515.556\" class=\"u-svg-content\"><path d=\"m0 274.226 176.549 176.886 339.007-338.672-48.67-47.997-290.337 290-128.553-128.552z\"></path></svg>
          </span>
              <a href=\"https://nicepage.com/templates\" class=\"u-border-2 u-border-hover-palette-1-base u-border-palette-1-base u-btn u-btn-round u-button-style u-hover-palette-1-base u-radius-50 u-btn-3\">CERTIFICADO</a>
              <h3 class=\"u-text u-text-4\">ESPANHOL BÁSICO</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class=\"u-align-center u-clearfix u-white u-section-4\" id=\"sec-f5da\">
      <div class=\"u-clearfix u-sheet u-sheet-1\">
        <h1 class=\"u-align-left u-text u-text-1\">Minha caixa de mensagens</h1>
        <div class=\"u-expanded-width u-tab-links-align-justify u-tabs u-tabs-1\">
          <ul class=\"u-tab-list u-unstyled\" role=\"tablist\">
            <li class=\"u-tab-item\" role=\"presentation\">
              <a class=\"active u-active-white u-border-2 u-border-active-palette-2-base u-border-grey-15 u-border-hover-grey-15 u-border-no-bottom u-border-no-left u-border-no-right u-button-style u-grey-10 u-hover-grey-10 u-tab-link u-tab-link-1\" id=\"link-tab-0da5\" href=\"#tab-0da5\" role=\"tab\" aria-controls=\"tab-0da5\" aria-selected=\"true\">Contato mais recente</a>
            </li>
            <li class=\"u-tab-item\" role=\"presentation\">
              <a class=\"u-active-white u-border-2 u-border-active-palette-2-base u-border-grey-15 u-border-hover-grey-15 u-border-no-bottom u-border-no-left u-border-no-right u-button-style u-grey-10 u-hover-grey-10 u-tab-link u-tab-link-2\" id=\"link-tab-14b7\" href=\"#tab-14b7\" role=\"tab\" aria-controls=\"tab-14b7\" aria-selected=\"false\">STARTUPS</a>
            </li>
            <li class=\"u-tab-item\" role=\"presentation\">
              <a class=\"u-active-white u-border-2 u-border-active-palette-2-base u-border-grey-15 u-border-hover-grey-15 u-border-no-bottom u-border-no-left u-border-no-right u-button-style u-grey-10 u-hover-grey-10 u-tab-link u-tab-link-3\" id=\"link-tab-2917\" href=\"#tab-2917\" role=\"tab\" aria-controls=\"tab-2917\" aria-selected=\"false\">ONGS</a>
            </li>
            <li class=\"u-tab-item u-tab-item-4\" role=\"presentation\">
              <a class=\"u-active-white u-border-2 u-border-active-palette-2-base u-border-grey-15 u-border-hover-grey-15 u-border-no-bottom u-border-no-left u-border-no-right u-button-style u-grey-10 u-hover-grey-10 u-tab-link u-tab-link-4\" id=\"tab-6ff1\" href=\"#link-tab-6ff1\" role=\"tab\" aria-controls=\"link-tab-6ff1\" aria-selected=\"false\">MULTINACIONAIS</a>
            </li>
          </ul>
          <div class=\"u-tab-content\">
            <div class=\"u-container-style u-tab-active u-tab-pane u-white u-tab-pane-1\" id=\"tab-0da5\" role=\"tabpanel\" aria-labelledby=\"link-tab-0da5\">
              <div class=\"u-container-layout u-container-layout-1\">
                <p class=\"u-text u-text-2\">Olá! Gostamos muito do seu perfil e temos interesse em conversar mais com você, podemos entrar em contato?<br>
                  <br>
                  <br>
                  <br>
                    <a href=\"#\" class=\"u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-1\">RETORNAR CONTATO</a>
                    <br>
                    <br>
                    <br>
                </p>
                <div class=\"u-table u-table-responsive u-table-1\">
                  <table class=\"u-table-entity\">
                    <colgroup>
                      <col width=\"50%\">
                      <col width=\"50%\">
                    </colgroup>
                    <tbody class=\"u-table-body\">
                      <tr style=\"height: 55px;\">
                        <td class=\"u-border-2 u-border-grey-10 u-border-no-left u-border-no-right u-table-cell u-table-cell-1\">NOME DA EMPRESA</td>
                        <td class=\"u-border-2 u-border-grey-10 u-border-no-left u-border-no-right u-table-cell\">Aproximar LTDA</td>
                      </tr>
                    </tbody>
                  </table>
                </div><span class=\"u-icon u-icon-circle u-text-palette-1-base u-icon-1\"><svg class=\"u-svg-link\" preserveAspectRatio=\"xMidYMin slice\" viewBox=\"0 0 511.998 511.998\" style=\"\"><use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"#svg-f060\"></use></svg><svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.1\" xml:space=\"preserve\" class=\"u-svg-content\" viewBox=\"0 0 511.998 511.998\" id=\"svg-f060\"><g><path d=\"m431.665 139.258v-122.04h-351.332v122.04l-80.333 57.38v298.142h511.998v-298.142zm-249.673 202.811-151.992 108.564v-217.128zm74.007-15.994 194.191 138.705h-388.382zm74.007 15.994 151.992-108.564v217.127zm141.185-137.712-39.526 28.232v-56.464zm-69.526-157.139v206.8l-97.466 69.618-48.2-34.428-48.2 34.428-97.466-69.618v-206.8zm-321.332 185.372-39.526-28.232 39.526-28.232z\"></path><path d=\"m152.716 86.074h103.283v30h-103.283z\"></path><path d=\"m152.716 154.929h206.566v30h-206.566z\"></path><path d=\"m152.716 223.785h206.566v30h-206.566z\"></path>
</g></svg></span>
              </div>
            </div>
            <div class=\"u-align-left u-container-style u-tab-pane u-white u-tab-pane-2\" id=\"tab-14b7\" role=\"tabpanel\" aria-labelledby=\"link-tab-14b7\">
              <div class=\"u-container-layout u-container-layout-2\"><span class=\"u-icon u-icon-circle u-text-palette-1-base u-icon-2\"><svg class=\"u-svg-link\" preserveAspectRatio=\"xMidYMin slice\" viewBox=\"0 0 58 58\" style=\"\"><use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"#svg-6174\"></use></svg><svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.1\" xml:space=\"preserve\" class=\"u-svg-content\" viewBox=\"0 0 58 58\" x=\"0px\" y=\"0px\" id=\"svg-6174\" style=\"enable-background:new 0 0 58 58;\"><g><rect x=\"9\" y=\"12\" width=\"40\" height=\"2\"></rect><rect x=\"9\" y=\"28\" width=\"40\" height=\"2\"></rect><rect x=\"9\" y=\"44\" width=\"40\" height=\"2\"></rect><path d=\"M0,0v58h58V0H0z M56,56H2V2h54V56z\"></path>
</g></svg></span>
                <h2 class=\"u-text u-text-3\">Você não tem outras mensagens (AINDA)<br>
                </h2>
                <p class=\"u-text u-text-4\">Mas não desanime! Estamos trabalhando para que mais empresas parceiras se juntem ao processo e encontre quem ela estava procurando (você)</p>
              </div>
            </div>
            <div class=\"u-container-style u-tab-pane u-white u-tab-pane-3\" id=\"tab-2917\" role=\"tabpanel\" aria-labelledby=\"link-tab-2917\">
              <div class=\"u-container-layout u-container-layout-3\"></div>
            </div>
            <div class=\"u-container-style u-tab-pane u-white u-tab-pane-4\" id=\"link-tab-6ff1\" role=\"tabpanel\" aria-labelledby=\"tab-6ff1\">
              <div class=\"u-container-layout u-container-layout-4\"></div>
            </div>
          </div>
        </div><span class=\"u-icon u-icon-circle u-palette-1-base u-spacing-10 u-icon-3\"><svg class=\"u-svg-link\" preserveAspectRatio=\"xMidYMin slice\" viewBox=\"0 0 60 60\" style=\"\"><use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"#svg-5304\"></use></svg><svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.1\" xml:space=\"preserve\" class=\"u-svg-content\" viewBox=\"0 0 60 60\" x=\"0px\" y=\"0px\" id=\"svg-5304\" style=\"enable-background:new 0 0 60 60;\"><g><path d=\"M30,16c4.411,0,8-3.589,8-8s-3.589-8-8-8s-8,3.589-8,8S25.589,16,30,16z M30,2c3.309,0,6,2.691,6,6s-2.691,6-6,6   s-6-2.691-6-6S26.691,2,30,2z\"></path><path d=\"M30,44c-4.411,0-8,3.589-8,8s3.589,8,8,8s8-3.589,8-8S34.411,44,30,44z M30,58c-3.309,0-6-2.691-6-6s2.691-6,6-6   s6,2.691,6,6S33.309,58,30,58z\"></path><path d=\"M30,22c-4.411,0-8,3.589-8,8s3.589,8,8,8s8-3.589,8-8S34.411,22,30,22z M30,36c-3.309,0-6-2.691-6-6s2.691-6,6-6   s6,2.691,6,6S33.309,36,30,36z\"></path>
</g></svg></span>
      </div>
    </section>
    
    
    <footer class=\"u-align-left u-clearfix u-footer u-grey-80 u-footer\" id=\"sec-e6a2\"><div class=\"u-container-layout u-valign-middle-xs u-container-layout-1\">
        <h1 class=\"u-text u-text-1\">A parceira certa, no momento certo</h1>
        <p class=\"u-text u-text-2\">APROXIMAR Inc.</p>
      </div></footer>
    </section>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "Minha-conta.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 101,  173 => 99,  169 => 98,  165 => 96,  156 => 94,  152 => 93,  112 => 56,  108 => 55,  104 => 54,  60 => 13,  56 => 12,  52 => 11,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Minha-conta.html", "C:\\xampp\\htdocs\\Aproximar\\app\\view\\Minha-conta.html");
    }
}
