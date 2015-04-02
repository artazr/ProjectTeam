<?php

/* ::baseb.html.twig */
class __TwigTemplate_46ba6f2e74df4de3c8a37d75ca0d666e9ecd04c9ab4234c4fbd676a3deb1e845 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 5
        echo "
            <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " - PROJECTeam</title>
                <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
                <meta name=\"description\" content=\"Site officiel de Projecteam organisé par Junior ISEP\" />
                <meta name=\"keywords\" content=\"\" />
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0,maximum-scale=1\">
                    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        

        ";
        // line 14
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 15
        echo "
                <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/flipclock.css"), "html", null, true);
        echo "\">
                <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/flipclock.js"), "html", null, true);
        echo "\"></script>
                    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" /> 
       
        <style type=\"text/css\">
            @font-face {
                font-family: \"Perso\";
                 src: url('";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("fonts/fontawesome-webfont.ttf"), "html", null, true);
        echo "');
                }

            #nav li{
                font-family: \"Perso\";
            }

            .clock{
                margin-left:25%;
                margin-right:25%;
            }
        </style>

    </head>

    <body class=\"homepage\">
        <!--Header -->
        <header>
            <div id=\"header-wrapper\">
                <div id=\"header\" class=\"container\">
                    <h1 id=\"logo\"><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("acme_core_backoffice");
        echo "\">PROJECTeam</a></h1>
                    <!-- Nav -->
                    <nav id=\"nav\">
                    <br />                
                        <ul>
                            <li><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("acme_core_modif");
        echo "\">Modifier les pages</a></li>
                            <li><a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("acme_core_entreprise");
        echo "\">Voir les entreprises inscrites</a></li>
                            <li><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("acme_core_inscrit");
        echo "\">voir les utilisateurs inscrits</a></li>
                            <li><a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("acme_core_feedbackuser");
        echo "\">Voir les feedback des utilisateurs</a>
                            <li style=\"float:right;\"> <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("acme_core_logout");
        echo "\">se déconnecter</a> </li>
                        </ul>
                    </nav>
                </div>
                <br />
                <!-- Countdown -->
                <div class=\"clock\"></div>
                    <script type=\"text/javascript\">
                        // Grab the current date
                             var currentDate = new Date();
                        // Set some date in the past. In this case, it's always been since Jan 1
                             var futureDate  = new Date(currentDate.getFullYear(2015), 4, 23);
                        // Calculate the difference in seconds between the future and current date
                             var diff = futureDate.getTime() / 1000 - currentDate.getTime() / 1000;
                         var clock = \$('.clock').FlipClock(diff, {
                         countdown: true,
                         clockFace: 'DailyCounter',
                        });
                    </script>
            </div>
        </header>
        <!-- contenu modifiable par page -->
        ";
        // line 75
        $this->displayBlock('body', $context, $blocks);
        // line 76
        echo "        <!--footer-->      
            <footer id=\"footer\">
                <div class=\"container\">
                    <div class=\"row double\">
                        <div class=\"6u\">
                            <div class=\"row collapse-at-2\">
                                <div class=\"6u\">
                                    <h3>Plan du site</h3>
                                    <ul class=\"alt\">
                                        <li><a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("acme_core_homepage");
        echo "\">Accueil</a></li>
                                        <li><a href=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("acme_core_description");
        echo "\">Description</a></li>
                                        <li><a href=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("acme_core_sponsor");
        echo "\">Nos Sponsors</a></li>
                                        <li><a href=\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("acme_core_contact");
        echo "\">Participer</a></li>
                                        <li><a href=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("acme_core_faq");
        echo "\">FAQ</a></li>
                                    </ul>
                                </div>
                                <div class=\"6u\">
                                    <h3>Nous suivre</h3>
                                    <ul class=\"alt\">
                                        <li><a href=\"https://facebook.com/JuniorISEP.PARIS\">Facebook</a></li>
                                        <li><a href=\"https://twitter.com/@juniorisep\">Twitter</a></li>
                                        <li><a href=\"http://www.juniorisep.com\">Junior ISEP</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"6u\">
                            <div class=\"row collapse-at-2\">
                                <div class=\"6u\">
                                    <h3>Contact</h3>
                                    <ul class=\"alt\">
                                        <li>ISEP <br />10 rue de Vanves <br/>92130 Issy les moulineaux</li>
                                        <li><a href=\"tel:+33142226744\">+ 33 1 42 22 67 44 </a></li>
                                        <li><a href=\"mailto:projecteam@juniorisep.com\">projecteam@juniorisep.com</a></li>
                                        <li><img src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/transport1.png"), "html", null, true);
        echo "\" alt=\"transport\"><br />A 3 minutes à pied de l'arrêt Corentin Celton</li>
                                    </ul>
                                </div>
                                <div class=\"6u\">
                                    <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2626.722378345169!2d2.27912331824646!3d48.82535825390707!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6707980bd3947%3A0xd54fb6c5e1933333!2s10+Rue+de+Vanves%2C+92170+Issy-les-Moulineaux!5e0!3m2!1sfr!2sfr!4v1427895007140\" width=\"300\" height=\"250\" frameborder=\"0\" style=\"border:0\"></iframe>  
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id=\"copyright\" class=\"copyright\">
                        <ul style=\"font-size: 0.9em;\">
                            <li>&copy; PROJECTeam. All rights reserved.</li>
                            <li>Design: <a href=\"http://html5up.net\">HTML5 UP</a></li>
                            <li><a href=\"";
        // line 124
        echo $this->env->getExtension('routing')->getPath("acme_core_homepage");
        echo "\">Mentions Legales</a></li>
                        </ul>
                    </div>
                </div>
            </footer>

        <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.dropotron.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/skel.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/skel-layers.min.js"), "html", null, true);
        echo "j\"></script>
        <script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/init.js"), "html", null, true);
        echo "\"></script>

    </body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
    }

    // line 14
    public function block_stylesheet($context, array $blocks = array())
    {
    }

    // line 75
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::baseb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 75,  254 => 14,  249 => 6,  244 => 4,  235 => 133,  231 => 132,  227 => 131,  223 => 130,  214 => 124,  197 => 110,  173 => 89,  169 => 88,  165 => 87,  161 => 86,  157 => 85,  146 => 76,  144 => 75,  119 => 53,  115 => 52,  111 => 51,  107 => 50,  103 => 49,  95 => 44,  72 => 24,  64 => 19,  60 => 18,  56 => 17,  52 => 16,  49 => 15,  47 => 14,  41 => 11,  33 => 6,  30 => 5,  28 => 4,  23 => 1,);
    }
}
