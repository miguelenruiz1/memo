<?php

/* themes/custom/trasinv/templates/system/html.html.twig */
class __TwigTemplate_4da4f307a5491b929a1f84d5c45bc56f9f965993507504bee28dba97de7b1514 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 48);
        $filters = array("clean_class" => 50, "raw" => 61, "safe_join" => 62);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set'),
                array('clean_class', 'raw', 'safe_join'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 48
        $context["body_classes"] = array(0 => ((        // line 49
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), 1 => (( !        // line 50
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass(($context["root_path"] ?? null))))), 2 => ((        // line 51
($context["node_type"] ?? null)) ? (("page-node-type-" . \Drupal\Component\Utility\Html::getClass(($context["node_type"] ?? null)))) : ("")), 3 => ((        // line 52
($context["db_offline"] ?? null)) ? ("db-offline") : ("")), 4 => (($this->getAttribute($this->getAttribute(        // line 53
($context["theme"] ?? null), "settings", array()), "navbar_position", array())) ? (("navbar-is-" . $this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", array()), "navbar_position", array()))) : ("")), 5 => (($this->getAttribute(        // line 54
($context["theme"] ?? null), "has_glyphicons", array())) ? ("has-glyphicons") : ("")));
        // line 57
        echo "<!DOCTYPE html>
<html ";
        // line 58
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["html_attributes"] ?? null), "html", null, true));
        echo "> 

  <head>
     <head-placeholder token=\"";
        // line 61
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["placeholder_token"] ?? null)));
        echo "\">
    <title>";
        // line 62
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->safeJoin($this->env, ($context["head_title"] ?? null), " | ")));
        echo "</title>
    <css-placeholder token=\"";
        // line 63
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["placeholder_token"] ?? null)));
        echo "\">
    <js-placeholder token=\"";
        // line 64
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["placeholder_token"] ?? null)));
        echo "\">


    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

   

    <!-- Bootstrap core CSS -->
    <link href=\"themes/custom/trasinv/web/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom fonts for this template -->
    <link href=\"themes/custom/trasinv/fonts/fontawesome-free/css/all.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href=\"themes/custom/trasinv/web/css/agency.css\" rel=\"stylesheet\">

  </head>

  <body id=\"page-top\" ";
        // line 89
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["body_classes"] ?? null)), "method"), "html", null, true));
        echo ">

    <!-- Navigation -->
    <nav class=\"navbar navbar-expand-lg navbar-dark fixed-top\" id=\"mainNav\">
      <div class=\"container\">
        <a class=\"navbar-brand js-scroll-trigger\" href=\"#page-top\">Start Bootstrap</a>
        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          Menu
          <i class=\"fas fa-bars\"></i>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
          <ul class=\"navbar-nav text-uppercase ml-auto\">
            <li class=\"nav-item\">
              <a class=\"nav-link js-scroll-trigger\" href=\"#services\">Services</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link js-scroll-trigger\" href=\"#portfolio\">Portfolio</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link js-scroll-trigger\" href=\"#about\">About</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link js-scroll-trigger\" href=\"#team\">Team</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link js-scroll-trigger\" href=\"#contact\">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class=\"masthead\">
      <div class=\"container\">
        <div class=\"intro-text\">
          <div class=\"intro-lead-in\">Welcome To Our Studio!</div>
          <div class=\"intro-heading text-uppercase\">It's Nice To Meet You</div>
          <a class=\"btn btn-primary btn-xl text-uppercase js-scroll-trigger\" href=\"#services\">Tell Me More</a>
        </div>
      </div>
    </header>



    <!-- Services -->
    <section id=\"services\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12 text-center\">
            <h2 class=\"section-heading text-uppercase\">Services</h2>
            <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class=\"row text-center\">
          <div class=\"col-md-4\">
            <span class=\"fa-stack fa-4x\">
              <i class=\"fas fa-circle fa-stack-2x text-primary\"></i>
              <i class=\"fas fa-shopping-cart fa-stack-1x fa-inverse\"></i>
            </span>
            <h4 class=\"service-heading\">E-Commerce</h4>
            <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
          </div>
          <div class=\"col-md-4\">
            <span class=\"fa-stack fa-4x\">
              <i class=\"fas fa-circle fa-stack-2x text-primary\"></i>
              <i class=\"fas fa-laptop fa-stack-1x fa-inverse\"></i>
            </span>
            <h4 class=\"service-heading\">Responsive Design</h4>
            <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
          </div>
          <div class=\"col-md-4\">
            <span class=\"fa-stack fa-4x\">
              <i class=\"fas fa-circle fa-stack-2x text-primary\"></i>
              <i class=\"fas fa-lock fa-stack-1x fa-inverse\"></i>
            </span>
            <h4 class=\"service-heading\">Web Security</h4>
            <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Portfolio Grid -->
    <section class=\"bg-light\" id=\"portfolio\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12 text-center\">
            <h2 class=\"section-heading text-uppercase\">Portfolio</h2>
            <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-md-4 col-sm-6 portfolio-item\">
            <a class=\"portfolio-link\" data-toggle=\"modal\" href=\"#portfolioModal1\">
              <div class=\"portfolio-hover\">
                <div class=\"portfolio-hover-content\">
                  <i class=\"fas fa-plus fa-3x\"></i>
                </div>
              </div>
              <img class=\"img-fluid\" src=\"themes/custom/trasinv/img/portfolio/01-thumbnail.jpg\" alt=\"\">
            </a>
            <div class=\"portfolio-caption\">
              <h4>Threads</h4>
              <p class=\"text-muted\">Illustration</p>
            </div>
          </div>
          <div class=\"col-md-4 col-sm-6 portfolio-item\">
            <a class=\"portfolio-link\" data-toggle=\"modal\" href=\"#portfolioModal2\">
              <div class=\"portfolio-hover\">
                <div class=\"portfolio-hover-content\">
                  <i class=\"fas fa-plus fa-3x\"></i>
                </div>
              </div>
              <img class=\"img-fluid\" src=\"themes/custom/trasinv/img/portfolio/02-thumbnail.jpg\" alt=\"\">
            </a>
            <div class=\"portfolio-caption\">
              <h4>Explore</h4>
              <p class=\"text-muted\">Graphic Design</p>
            </div>
          </div>
          <div class=\"col-md-4 col-sm-6 portfolio-item\">
            <a class=\"portfolio-link\" data-toggle=\"modal\" href=\"#portfolioModal3\">
              <div class=\"portfolio-hover\">
                <div class=\"portfolio-hover-content\">
                  <i class=\"fas fa-plus fa-3x\"></i>
                </div>
              </div>
              <img class=\"img-fluid\" src=\"themes/custom/trasinv/img/portfolio/03-thumbnail.jpg\" alt=\"\">
            </a>
            <div class=\"portfolio-caption\">
              <h4>Finish</h4>
              <p class=\"text-muted\">Identity</p>
            </div>
          </div>
          <div class=\"col-md-4 col-sm-6 portfolio-item\">
            <a class=\"portfolio-link\" data-toggle=\"modal\" href=\"#portfolioModal4\">
              <div class=\"portfolio-hover\">
                <div class=\"portfolio-hover-content\">
                  <i class=\"fas fa-plus fa-3x\"></i>
                </div>
              </div>
              <img class=\"img-fluid\" src=\"themes/custom/trasinv/img/portfolio/04-thumbnail.jpg\" alt=\"\">
            </a>
            <div class=\"portfolio-caption\">
              <h4>Lines</h4>
              <p class=\"text-muted\">Branding</p>
            </div>
          </div>
          <div class=\"col-md-4 col-sm-6 portfolio-item\">
            <a class=\"portfolio-link\" data-toggle=\"modal\" href=\"#portfolioModal5\">
              <div class=\"portfolio-hover\">
                <div class=\"portfolio-hover-content\">
                  <i class=\"fas fa-plus fa-3x\"></i>
                </div>
              </div>
              <img class=\"img-fluid\" src=\"themes/custom/trasinv/img/portfolio/05-thumbnail.jpg\" alt=\"\">
            </a>
            <div class=\"portfolio-caption\">
              <h4>Southwest</h4>
              <p class=\"text-muted\">Website Design</p>
            </div>
          </div>
          <div class=\"col-md-4 col-sm-6 portfolio-item\">
            <a class=\"portfolio-link\" data-toggle=\"modal\" href=\"#portfolioModal6\">
              <div class=\"portfolio-hover\">
                <div class=\"portfolio-hover-content\">
                  <i class=\"fas fa-plus fa-3x\"></i>
                </div>
              </div>
              <img class=\"img-fluid\" src=\"themes/custom/trasinv/img/portfolio/06-thumbnail.jpg\" alt=\"\">
            </a>
            <div class=\"portfolio-caption\">
              <h4>Window</h4>
              <p class=\"text-muted\">Photography</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About -->
    <section id=\"about\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12 text-center\">
            <h2 class=\"section-heading text-uppercase\">About</h2>
            <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-lg-12\">
            <ul class=\"timeline\">
              <li>
                <div class=\"timeline-image\">
                  <img class=\"rounded-circle img-fluid\" src=\"themes/custom/trasinv/img/about/1.jpg\" alt=\"\">
                </div>
                <div class=\"timeline-panel\">
                  <div class=\"timeline-heading\">
                    <h4>2009-2011</h4>
                    <h4 class=\"subheading\">Our Humble Beginnings</h4>
                  </div>
                  <div class=\"timeline-body\">
                    <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
              <li class=\"timeline-inverted\">
                <div class=\"timeline-image\">
                  <img class=\"rounded-circle img-fluid\" src=\"themes/custom/trasinv/img/about/2.jpg\" alt=\"\">
                </div>
                <div class=\"timeline-panel\">
                  <div class=\"timeline-heading\">
                    <h4>March 2011</h4>
                    <h4 class=\"subheading\">An Agency is Born</h4>
                  </div>
                  <div class=\"timeline-body\">
                    <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
              <li>
                <div class=\"timeline-image\">
                  <img class=\"rounded-circle img-fluid\" src=\"themes/custom/trasinv/img/about/3.jpg\" alt=\"\">
                </div>
                <div class=\"timeline-panel\">
                  <div class=\"timeline-heading\">
                    <h4>December 2012</h4>
                    <h4 class=\"subheading\">Transition to Full Service</h4>
                  </div>
                  <div class=\"timeline-body\">
                    <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
              <li class=\"timeline-inverted\">
                <div class=\"timeline-image\">
                  <img class=\"rounded-circle img-fluid\" src=\"themes/custom/trasinv/img/about/4.jpg\" alt=\"\">
                </div>
                <div class=\"timeline-panel\">
                  <div class=\"timeline-heading\">
                    <h4>July 2014</h4>
                    <h4 class=\"subheading\">Phase Two Expansion</h4>
                  </div>
                  <div class=\"timeline-body\">
                    <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
              <li class=\"timeline-inverted\">
                <div class=\"timeline-image\">
                  <h4>Be Part
                    <br>Of Our
                    <br>Story!</h4>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Team -->
    <section class=\"bg-light\" id=\"team\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12 text-center\">
            <h2 class=\"section-heading text-uppercase\">Our Amazing Team</h2>
            <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-sm-4\">
            <div class=\"team-member\">
              <img class=\"mx-auto rounded-circle\" src=\"themes/custom/trasinv/img/team/1.jpg\" alt=\"\">
              <h4>Kay Garland</h4>
              <p class=\"text-muted\">Lead Designer</p>
              <ul class=\"list-inline social-buttons\">
                <li class=\"list-inline-item\">
                  <a href=\"#\">
                    <i class=\"fab fa-twitter\"></i>
                  </a>
                </li>
                <li class=\"list-inline-item\">
                  <a href=\"#\">
                    <i class=\"fab fa-facebook-f\"></i>
                  </a>
                </li>
                <li class=\"list-inline-item\">
                  <a href=\"#\">
                    <i class=\"fab fa-linkedin-in\"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class=\"col-sm-4\">
            <div class=\"team-member\">
              <img class=\"mx-auto rounded-circle\" src=\"themes/custom/trasinv/img/team/2.jpg\" alt=\"\">
              <h4>Larry Parker</h4>
              <p class=\"text-muted\">Lead Marketer</p>
              <ul class=\"list-inline social-buttons\">
                <li class=\"list-inline-item\">
                  <a href=\"#\">
                    <i class=\"fab fa-twitter\"></i>
                  </a>
                </li>
                <li class=\"list-inline-item\">
                  <a href=\"#\">
                    <i class=\"fab fa-facebook-f\"></i>
                  </a>
                </li>
                <li class=\"list-inline-item\">
                  <a href=\"#\">
                    <i class=\"fab fa-linkedin-in\"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class=\"col-sm-4\">
            <div class=\"team-member\">
              <img class=\"mx-auto rounded-circle\" src=\"themes/custom/trasinv/img/team/3.jpg\" alt=\"\">
              <h4>Diana Pertersen</h4>
              <p class=\"text-muted\">Lead Developer</p>
              <ul class=\"list-inline social-buttons\">
                <li class=\"list-inline-item\">
                  <a href=\"#\">
                    <i class=\"fab fa-twitter\"></i>
                  </a>
                </li>
                <li class=\"list-inline-item\">
                  <a href=\"#\">
                    <i class=\"fab fa-facebook-f\"></i>
                  </a>
                </li>
                <li class=\"list-inline-item\">
                  <a href=\"#\">
                    <i class=\"fab fa-linkedin-in\"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-lg-8 mx-auto text-center\">
            <p class=\"large text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Clients -->
    <section class=\"py-5\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-3 col-sm-6\">
            <a href=\"#\">
              <img class=\"img-fluid d-block mx-auto\" src=\"themes/custom/trasinv/img/logos/envato.jpg\" alt=\"\">
            </a>
          </div>
          <div class=\"col-md-3 col-sm-6\">
            <a href=\"#\">
              <img class=\"img-fluid d-block mx-auto\" src=\"themes/custom/trasinv/img/logos/designmodo.jpg\" alt=\"\">
            </a>
          </div>
          <div class=\"col-md-3 col-sm-6\">
            <a href=\"#\">
              <img class=\"img-fluid d-block mx-auto\" src=\"themes/custom/trasinv/img/logos/themeforest.jpg\" alt=\"\">
            </a>
          </div>
          <div class=\"col-md-3 col-sm-6\">
            <a href=\"#\">
              <img class=\"img-fluid d-block mx-auto\" src=\"themes/custom/trasinv/img/logos/creative-market.jpg\" alt=\"\">
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact -->
    <section id=\"contact\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12 text-center\">
            <h2 class=\"section-heading text-uppercase\">Contact Us</h2>
            <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-lg-12\">
            <form id=\"contactForm\" name=\"sentMessage\" novalidate=\"novalidate\">
              <div class=\"row\">
                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                    <input class=\"form-control\" id=\"name\" type=\"text\" placeholder=\"Your Name *\" required=\"required\" data-validation-required-message=\"Please enter your name.\">
                    <p class=\"help-block text-danger\"></p>
                  </div>
                  <div class=\"form-group\">
                    <input class=\"form-control\" id=\"email\" type=\"email\" placeholder=\"Your Email *\" required=\"required\" data-validation-required-message=\"Please enter your email address.\">
                    <p class=\"help-block text-danger\"></p>
                  </div>
                  <div class=\"form-group\">
                    <input class=\"form-control\" id=\"phone\" type=\"tel\" placeholder=\"Your Phone *\" required=\"required\" data-validation-required-message=\"Please enter your phone number.\">
                    <p class=\"help-block text-danger\"></p>
                  </div>
                </div>
                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                    <textarea class=\"form-control\" id=\"message\" placeholder=\"Your Message *\" required=\"required\" data-validation-required-message=\"Please enter a message.\"></textarea>
                    <p class=\"help-block text-danger\"></p>
                  </div>
                </div>
                <div class=\"clearfix\"></div>
                <div class=\"col-lg-12 text-center\">
                  <div id=\"success\"></div>
                  <button id=\"sendMessageButton\" class=\"btn btn-primary btn-xl text-uppercase\" type=\"submit\">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-4\">
            <span class=\"copyright\">Copyright &copy; Your Website 2018</span>
          </div>
          <div class=\"col-md-4\">
            <ul class=\"list-inline social-buttons\">
              <li class=\"list-inline-item\">
                <a href=\"#\">
                  <i class=\"fab fa-twitter\"></i>
                </a>
              </li>
              <li class=\"list-inline-item\">
                <a href=\"#\">
                  <i class=\"fab fa-facebook-f\"></i>
                </a>
              </li>
              <li class=\"list-inline-item\">
                <a href=\"#\">
                  <i class=\"fab fa-linkedin-in\"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class=\"col-md-4\">
            <ul class=\"list-inline quicklinks\">
              <li class=\"list-inline-item\">
                <a href=\"#\">Privacy Policy</a>
              </li>
              <li class=\"list-inline-item\">
                <a href=\"#\">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Portfolio Modals -->

    <!-- Modal 1 -->
    <div class=\"portfolio-modal modal fade\" id=\"portfolioModal1\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"close-modal\" data-dismiss=\"modal\">
            <div class=\"lr\">
              <div class=\"rl\"></div>
            </div>
          </div>
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-lg-8 mx-auto\">
                <div class=\"modal-body\">
                  <!-- Project Details Go Here -->
                  <h2 class=\"text-uppercase\">Project Name</h2>
                  <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class=\"img-fluid d-block mx-auto\" src=\"themes/custom/trasinv/img/portfolio/01-full.jpg\" alt=\"\">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class=\"list-inline\">
                    <li>Date: January 2017</li>
                    <li>Client: Threads</li>
                    <li>Category: Illustration</li>
                  </ul>
                  <button class=\"btn btn-primary\" data-dismiss=\"modal\" type=\"button\">
                    <i class=\"fas fa-times\"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 -->
    <div class=\"portfolio-modal modal fade\" id=\"portfolioModal2\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"close-modal\" data-dismiss=\"modal\">
            <div class=\"lr\">
              <div class=\"rl\"></div>
            </div>
          </div>
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-lg-8 mx-auto\">
                <div class=\"modal-body\">
                  <!-- Project Details Go Here -->
                  <h2 class=\"text-uppercase\">Project Name</h2>
                  <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class=\"img-fluid d-block mx-auto\" src=\"themes/custom/trasinv/img/portfolio/02-full.jpg\" alt=\"\">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class=\"list-inline\">
                    <li>Date: January 2017</li>
                    <li>Client: Explore</li>
                    <li>Category: Graphic Design</li>
                  </ul>
                  <button class=\"btn btn-primary\" data-dismiss=\"modal\" type=\"button\">
                    <i class=\"fas fa-times\"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 3 -->
    <div class=\"portfolio-modal modal fade\" id=\"portfolioModal3\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"close-modal\" data-dismiss=\"modal\">
            <div class=\"lr\">
              <div class=\"rl\"></div>
            </div>
          </div>
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-lg-8 mx-auto\">
                <div class=\"modal-body\">
                  <!-- Project Details Go Here -->
                  <h2 class=\"text-uppercase\">Project Name</h2>
                  <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class=\"img-fluid d-block mx-auto\" src=\"themes/custom/trasinv/img/portfolio/03-full.jpg\" alt=\"\">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class=\"list-inline\">
                    <li>Date: January 2017</li>
                    <li>Client: Finish</li>
                    <li>Category: Identity</li>
                  </ul>
                  <button class=\"btn btn-primary\" data-dismiss=\"modal\" type=\"button\">
                    <i class=\"fas fa-times\"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 4 -->
    <div class=\"portfolio-modal modal fade\" id=\"portfolioModal4\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"close-modal\" data-dismiss=\"modal\">
            <div class=\"lr\">
              <div class=\"rl\"></div>
            </div>
          </div>
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-lg-8 mx-auto\">
                <div class=\"modal-body\">
                  <!-- Project Details Go Here -->
                  <h2 class=\"text-uppercase\">Project Name</h2>
                  <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class=\"img-fluid d-block mx-auto\" src=\"themes/custom/trasinv/img/portfolio/04-full.jpg\" alt=\"\">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class=\"list-inline\">
                    <li>Date: January 2017</li>
                    <li>Client: Lines</li>
                    <li>Category: Branding</li>
                  </ul>
                  <button class=\"btn btn-primary\" data-dismiss=\"modal\" type=\"button\">
                    <i class=\"fas fa-times\"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 5 -->
    <div class=\"portfolio-modal modal fade\" id=\"portfolioModal5\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"close-modal\" data-dismiss=\"modal\">
            <div class=\"lr\">
              <div class=\"rl\"></div>
            </div>
          </div>
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-lg-8 mx-auto\">
                <div class=\"modal-body\">
                  <!-- Project Details Go Here -->
                  <h2 class=\"text-uppercase\">Project Name</h2>
                  <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class=\"img-fluid d-block mx-auto\" src=\"themes/custom/trasinv/img/portfolio/05-full.jpg\" alt=\"\">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class=\"list-inline\">
                    <li>Date: January 2017</li>
                    <li>Client: Southwest</li>
                    <li>Category: Website Design</li>
                  </ul>
                  <button class=\"btn btn-primary\" data-dismiss=\"modal\" type=\"button\">
                    <i class=\"fas fa-times\"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 6 -->
    <div class=\"portfolio-modal modal fade\" id=\"portfolioModal6\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"close-modal\" data-dismiss=\"modal\">
            <div class=\"lr\">
              <div class=\"rl\"></div>
            </div>
          </div>
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-lg-8 mx-auto\">
                <div class=\"modal-body\">
                  <!-- Project Details Go Here -->
                  <h2 class=\"text-uppercase\">Project Name</h2>
                  <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class=\"img-fluid d-block mx-auto\" src=\"themes/custom/trasinv/img/portfolio/06-full.jpg\" alt=\"\">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class=\"list-inline\">
                    <li>Date: January 2017</li>
                    <li>Client: Window</li>
                    <li>Category: Photography</li>
                  </ul>
                  <button class=\"btn btn-primary\" data-dismiss=\"modal\" type=\"button\">
                    <i class=\"fas fa-times\"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src=\"themes/custom/trasinv/web/jquery/jquery.min.js\"></script>
    <script src=\"themes/custom/trasinv/web/bootstrap/js/bootstrap.bundle.min.js\"></script>

    <!-- Plugin JavaScript -->
    <script src=\"themes/custom/trasinv/web/jquery-easing/jquery.easing.min.js\"></script>

    <!-- Contact form JavaScript -->
    <script src=\"themes/custom/trasinv/web/js/jqBootstrapValidation.js\"></script>
    <script src=\"themes/custom/trasinv/web/js/contact_me.js\"></script>

    <!-- Custom scripts for this template -->
    <script src=\"themes/custom/trasinv/web/js/agency.min.js\"></script>

  </body>

</html>

";
    }

    public function getTemplateName()
    {
        return "themes/custom/trasinv/templates/system/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 89,  72 => 64,  68 => 63,  64 => 62,  60 => 61,  54 => 58,  51 => 57,  49 => 54,  48 => 53,  47 => 52,  46 => 51,  45 => 50,  44 => 49,  43 => 48,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - \$css: An array of CSS files for the current page.
 * - \$language: (object) The language the site is being displayed in.
 *   \$language->language contains its textual representation.
 *   \$language->dir contains the language direction. It will either be 'ltr' or
 *   'rtl'.
 * - \$rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - \$grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - \$head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - \$head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the \$head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - \$head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - \$styles: Style tags necessary to import all CSS files for the page.
 * - \$scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - \$page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - \$page: The rendered page content.
 * - \$page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - \$classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @ingroup templates
 *
 * @see bootstrap_preprocess_html()
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 */
#}
{%
  set body_classes = [
    logged_in ? 'user-logged-in',
    not root_path ? 'path-frontpage' : 'path-' ~ root_path|clean_class,
    node_type ? 'page-node-type-' ~ node_type|clean_class,
    db_offline ? 'db-offline',
    theme.settings.navbar_position ? 'navbar-is-' ~ theme.settings.navbar_position,
    theme.has_glyphicons ? 'has-glyphicons',
  ]
%}
<!DOCTYPE html>
<html {{ html_attributes }}> 

  <head>
     <head-placeholder token=\"{{ placeholder_token|raw }}\">
    <title>{{ head_title|safe_join(' | ') }}</title>
    <css-placeholder token=\"{{ placeholder_token|raw }}\">
    <js-placeholder token=\"{{ placeholder_token|raw }}\">


    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

   

    <!-- Bootstrap core CSS -->
    <link href=\"themes/custom/trasinv/web/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom fonts for this template -->
    <link href=\"themes/custom/trasinv/fonts/fontawesome-free/css/all.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href=\"themes/custom/trasinv/web/css/agency.css\" rel=\"stylesheet\">

  </head>

  <body id=\"page-top\" {{ attributes.addClass(body_classes) }}>

    <!-- Navigation -->
    <nav class=\"navbar navbar-expand-lg navbar-dark fixed-top\" id=\"mainNav\">
      <div class=\"container\">
        <a class=\"navbar-brand js-scroll-trigger\" href=\"#page-top\">Start Bootstrap</a>
        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          Menu
          <i class=\"fas fa-bars\"></i>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
          <ul class=\"navbar-nav text-uppercase ml-auto\">
            <li class=\"nav-item\">
              <a class=\"nav-link js-scroll-trigger\" href=\"#services\">Services</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link js-scroll-trigger\" href=\"#portfolio\">Portfolio</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link js-scroll-trigger\" href=\"#about\">About</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link js-scroll-trigger\" href=\"#team\">Team</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link js-scroll-trigger\" href=\"#contact\">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class=\"masthead\">
      <div class=\"container\">
        <div class=\"intro-text\">
          <div class=\"intro-lead-in\">Welcome To Our Studio!</div>
          <div class=\"intro-heading text-uppercase\">It's Nice To Meet You</div>
          <a class=\"btn btn-primary btn-xl text-uppercase js-scroll-trigger\" href=\"#services\">Tell Me More</a>
        </div>
      </div>
    </header>



    <!-- Services -->
    <section id=\"services\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12 text-center\">
            <h2 class=\"section-heading text-uppercase\">Services</h2>
            <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class=\"row text-center\">
          <div class=\"col-md-4\">
            <span class=\"fa-stack fa-4x\">
              <i class=\"fas fa-circle fa-stack-2x text-primary\"></i>
              <i class=\"fas fa-shopping-cart fa-stack-1x fa-inverse\"></i>
            </span>
            <h4 class=\"service-heading\">E-Commerce</h4>
            <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
          </div>
          <div class=\"col-md-4\">
            <span class=\"fa-stack fa-4x\">
              <i class=\"fas fa-circle fa-stack-2x text-primary\"></i>
              <i class=\"fas fa-laptop fa-stack-1x fa-inverse\"></i>
            </span>
            <h4 class=\"service-heading\">Responsive Design</h4>
            <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
          </div>
          <div class=\"col-md-4\">
            <span class=\"fa-stack fa-4x\">
              <i class=\"fas fa-circle fa-stack-2x text-primary\"></i>
              <i class=\"fas fa-lock fa-stack-1x fa-inverse\"></i>
            </span>
            <h4 class=\"service-heading\">Web Security</h4>
            <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Portfolio Grid -->
    <section class=\"bg-light\" id=\"portfolio\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12 text-center\">
            <h2 class=\"section-heading text-uppercase\">Portfolio</h2>
            <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-md-4 col-sm-6 portfolio-item\">
            <a class=\"portfolio-link\" data-toggle=\"modal\" href=\"#portfolioModal1\">
              <div class=\"portfolio-hover\">
                <div class=\"portfolio-hover-content\">
                  <i class=\"fas fa-plus fa-3x\"></i>
                </div>
              </div>
              <img class=\"img-fluid\" src=\"themes/custom/trasinv/img/portfolio/01-thumbnail.jpg\" alt=\"\">
            </a>
            <div class=\"portfolio-caption\">
              <h4>Threads</h4>
              <p class=\"text-muted\">Illustration</p>
            </div>
          </div>
          <div class=\"col-md-4 col-sm-6 portfolio-item\">
            <a class=\"portfolio-link\" data-toggle=\"modal\" href=\"#portfolioModal2\">
              <div class=\"portfolio-hover\">
                <div class=\"portfolio-hover-content\">
                  <i class=\"fas fa-plus fa-3x\"></i>
                </div>
              </div>
              <img class=\"img-fluid\" src=\"themes/custom/trasinv/img/portfolio/02-thumbnail.jpg\" alt=\"\">
            </a>
            <div class=\"portfolio-caption\">
              <h4>Explore</h4>
              <p class=\"text-muted\">Graphic Design</p>
            </div>
          </div>
          <div class=\"col-md-4 col-sm-6 portfolio-item\">
            <a class=\"portfolio-link\" data-toggle=\"modal\" href=\"#portfolioModal3\">
              <div class=\"portfolio-hover\">
                <div class=\"portfolio-hover-content\">
                  <i class=\"fas fa-plus fa-3x\"></i>
                </div>
              </div>
              <img class=\"img-fluid\" src=\"themes/custom/trasinv/img/portfolio/03-thumbnail.jpg\" alt=\"\">
            </a>
            <div class=\"portfolio-caption\">
              <h4>Finish</h4>
              <p class=\"text-muted\">Identity</p>
            </div>
          </div>
          <div class=\"col-md-4 col-sm-6 portfolio-item\">
            <a class=\"portfolio-link\" data-toggle=\"modal\" href=\"#portfolioModal4\">
              <div class=\"portfolio-hover\">
                <div class=\"portfolio-hover-content\">
                  <i class=\"fas fa-plus fa-3x\"></i>
                </div>
              </div>
              <img class=\"img-fluid\" src=\"themes/custom/trasinv/img/portfolio/04-thumbnail.jpg\" alt=\"\">
            </a>
            <div class=\"portfolio-caption\">
              <h4>Lines</h4>
              <p class=\"text-muted\">Branding</p>
            </div>
          </div>
          <div class=\"col-md-4 col-sm-6 portfolio-item\">
            <a class=\"portfolio-link\" data-toggle=\"modal\" href=\"#portfolioModal5\">
              <div class=\"portfolio-hover\">
                <div class=\"portfolio-hover-content\">
                  <i class=\"fas fa-plus fa-3x\"></i>
                </div>
              </div>
              <img class=\"img-fluid\" src=\"themes/custom/trasinv/img/portfolio/05-thumbnail.jpg\" alt=\"\">
            </a>
            <div class=\"portfolio-caption\">
              <h4>Southwest</h4>
              <p class=\"text-muted\">Website Design</p>
            </div>
          </div>
          <div class=\"col-md-4 col-sm-6 portfolio-item\">
            <a class=\"portfolio-link\" data-toggle=\"modal\" href=\"#portfolioModal6\">
              <div class=\"portfolio-hover\">
                <div class=\"portfolio-hover-content\">
                  <i class=\"fas fa-plus fa-3x\"></i>
                </div>
              </div>
              <img class=\"img-fluid\" src=\"themes/custom/trasinv/img/portfolio/06-thumbnail.jpg\" alt=\"\">
            </a>
            <div class=\"portfolio-caption\">
              <h4>Window</h4>
              <p class=\"text-muted\">Photography</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About -->
    <section id=\"about\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12 text-center\">
            <h2 class=\"section-heading text-uppercase\">About</h2>
            <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-lg-12\">
            <ul class=\"timeline\">
              <li>
                <div class=\"timeline-image\">
                  <img class=\"rounded-circle img-fluid\" src=\"themes/custom/trasinv/img/about/1.jpg\" alt=\"\">
                </div>
                <div class=\"timeline-panel\">
                  <div class=\"timeline-heading\">
                    <h4>2009-2011</h4>
                    <h4 class=\"subheading\">Our Humble Beginnings</h4>
                  </div>
                  <div class=\"timeline-body\">
                    <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
              <li class=\"timeline-inverted\">
                <div class=\"timeline-image\">
                  <img class=\"rounded-circle img-fluid\" src=\"themes/custom/trasinv/img/about/2.jpg\" alt=\"\">
                </div>
                <div class=\"timeline-panel\">
                  <div class=\"timeline-heading\">
                    <h4>March 2011</h4>
                    <h4 class=\"subheading\">An Agency is Born</h4>
                  </div>
                  <div class=\"timeline-body\">
                    <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
              <li>
                <div class=\"timeline-image\">
                  <img class=\"rounded-circle img-fluid\" src=\"themes/custom/trasinv/img/about/3.jpg\" alt=\"\">
                </div>
                <div class=\"timeline-panel\">
                  <div class=\"timeline-heading\">
                    <h4>December 2012</h4>
                    <h4 class=\"subheading\">Transition to Full Service</h4>
                  </div>
                  <div class=\"timeline-body\">
                    <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
              <li class=\"timeline-inverted\">
                <div class=\"timeline-image\">
                  <img class=\"rounded-circle img-fluid\" src=\"themes/custom/trasinv/img/about/4.jpg\" alt=\"\">
                </div>
                <div class=\"timeline-panel\">
                  <div class=\"timeline-heading\">
                    <h4>July 2014</h4>
                    <h4 class=\"subheading\">Phase Two Expansion</h4>
                  </div>
                  <div class=\"timeline-body\">
                    <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
              <li class=\"timeline-inverted\">
                <div class=\"timeline-image\">
                  <h4>Be Part
                    <br>Of Our
                    <br>Story!</h4>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Team -->
    <section class=\"bg-light\" id=\"team\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12 text-center\">
            <h2 class=\"section-heading text-uppercase\">Our Amazing Team</h2>
            <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-sm-4\">
            <div class=\"team-member\">
              <img class=\"mx-auto rounded-circle\" src=\"themes/custom/trasinv/img/team/1.jpg\" alt=\"\">
              <h4>Kay Garland</h4>
              <p class=\"text-muted\">Lead Designer</p>
              <ul class=\"list-inline social-buttons\">
                <li class=\"list-inline-item\">
                  <a href=\"#\">
                    <i class=\"fab fa-twitter\"></i>
                  </a>
                </li>
                <li class=\"list-inline-item\">
                  <a href=\"#\">
                    <i class=\"fab fa-facebook-f\"></i>
                  </a>
                </li>
                <li class=\"list-inline-item\">
                  <a href=\"#\">
                    <i class=\"fab fa-linkedin-in\"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class=\"col-sm-4\">
            <div class=\"team-member\">
              <img class=\"mx-auto rounded-circle\" src=\"themes/custom/trasinv/img/team/2.jpg\" alt=\"\">
              <h4>Larry Parker</h4>
              <p class=\"text-muted\">Lead Marketer</p>
              <ul class=\"list-inline social-buttons\">
                <li class=\"list-inline-item\">
                  <a href=\"#\">
                    <i class=\"fab fa-twitter\"></i>
                  </a>
                </li>
                <li class=\"list-inline-item\">
                  <a href=\"#\">
                    <i class=\"fab fa-facebook-f\"></i>
                  </a>
                </li>
                <li class=\"list-inline-item\">
                  <a href=\"#\">
                    <i class=\"fab fa-linkedin-in\"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class=\"col-sm-4\">
            <div class=\"team-member\">
              <img class=\"mx-auto rounded-circle\" src=\"themes/custom/trasinv/img/team/3.jpg\" alt=\"\">
              <h4>Diana Pertersen</h4>
              <p class=\"text-muted\">Lead Developer</p>
              <ul class=\"list-inline social-buttons\">
                <li class=\"list-inline-item\">
                  <a href=\"#\">
                    <i class=\"fab fa-twitter\"></i>
                  </a>
                </li>
                <li class=\"list-inline-item\">
                  <a href=\"#\">
                    <i class=\"fab fa-facebook-f\"></i>
                  </a>
                </li>
                <li class=\"list-inline-item\">
                  <a href=\"#\">
                    <i class=\"fab fa-linkedin-in\"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-lg-8 mx-auto text-center\">
            <p class=\"large text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Clients -->
    <section class=\"py-5\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-3 col-sm-6\">
            <a href=\"#\">
              <img class=\"img-fluid d-block mx-auto\" src=\"themes/custom/trasinv/img/logos/envato.jpg\" alt=\"\">
            </a>
          </div>
          <div class=\"col-md-3 col-sm-6\">
            <a href=\"#\">
              <img class=\"img-fluid d-block mx-auto\" src=\"themes/custom/trasinv/img/logos/designmodo.jpg\" alt=\"\">
            </a>
          </div>
          <div class=\"col-md-3 col-sm-6\">
            <a href=\"#\">
              <img class=\"img-fluid d-block mx-auto\" src=\"themes/custom/trasinv/img/logos/themeforest.jpg\" alt=\"\">
            </a>
          </div>
          <div class=\"col-md-3 col-sm-6\">
            <a href=\"#\">
              <img class=\"img-fluid d-block mx-auto\" src=\"themes/custom/trasinv/img/logos/creative-market.jpg\" alt=\"\">
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact -->
    <section id=\"contact\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12 text-center\">
            <h2 class=\"section-heading text-uppercase\">Contact Us</h2>
            <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-lg-12\">
            <form id=\"contactForm\" name=\"sentMessage\" novalidate=\"novalidate\">
              <div class=\"row\">
                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                    <input class=\"form-control\" id=\"name\" type=\"text\" placeholder=\"Your Name *\" required=\"required\" data-validation-required-message=\"Please enter your name.\">
                    <p class=\"help-block text-danger\"></p>
                  </div>
                  <div class=\"form-group\">
                    <input class=\"form-control\" id=\"email\" type=\"email\" placeholder=\"Your Email *\" required=\"required\" data-validation-required-message=\"Please enter your email address.\">
                    <p class=\"help-block text-danger\"></p>
                  </div>
                  <div class=\"form-group\">
                    <input class=\"form-control\" id=\"phone\" type=\"tel\" placeholder=\"Your Phone *\" required=\"required\" data-validation-required-message=\"Please enter your phone number.\">
                    <p class=\"help-block text-danger\"></p>
                  </div>
                </div>
                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                    <textarea class=\"form-control\" id=\"message\" placeholder=\"Your Message *\" required=\"required\" data-validation-required-message=\"Please enter a message.\"></textarea>
                    <p class=\"help-block text-danger\"></p>
                  </div>
                </div>
                <div class=\"clearfix\"></div>
                <div class=\"col-lg-12 text-center\">
                  <div id=\"success\"></div>
                  <button id=\"sendMessageButton\" class=\"btn btn-primary btn-xl text-uppercase\" type=\"submit\">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-4\">
            <span class=\"copyright\">Copyright &copy; Your Website 2018</span>
          </div>
          <div class=\"col-md-4\">
            <ul class=\"list-inline social-buttons\">
              <li class=\"list-inline-item\">
                <a href=\"#\">
                  <i class=\"fab fa-twitter\"></i>
                </a>
              </li>
              <li class=\"list-inline-item\">
                <a href=\"#\">
                  <i class=\"fab fa-facebook-f\"></i>
                </a>
              </li>
              <li class=\"list-inline-item\">
                <a href=\"#\">
                  <i class=\"fab fa-linkedin-in\"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class=\"col-md-4\">
            <ul class=\"list-inline quicklinks\">
              <li class=\"list-inline-item\">
                <a href=\"#\">Privacy Policy</a>
              </li>
              <li class=\"list-inline-item\">
                <a href=\"#\">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Portfolio Modals -->

    <!-- Modal 1 -->
    <div class=\"portfolio-modal modal fade\" id=\"portfolioModal1\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"close-modal\" data-dismiss=\"modal\">
            <div class=\"lr\">
              <div class=\"rl\"></div>
            </div>
          </div>
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-lg-8 mx-auto\">
                <div class=\"modal-body\">
                  <!-- Project Details Go Here -->
                  <h2 class=\"text-uppercase\">Project Name</h2>
                  <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class=\"img-fluid d-block mx-auto\" src=\"themes/custom/trasinv/img/portfolio/01-full.jpg\" alt=\"\">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class=\"list-inline\">
                    <li>Date: January 2017</li>
                    <li>Client: Threads</li>
                    <li>Category: Illustration</li>
                  </ul>
                  <button class=\"btn btn-primary\" data-dismiss=\"modal\" type=\"button\">
                    <i class=\"fas fa-times\"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 -->
    <div class=\"portfolio-modal modal fade\" id=\"portfolioModal2\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"close-modal\" data-dismiss=\"modal\">
            <div class=\"lr\">
              <div class=\"rl\"></div>
            </div>
          </div>
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-lg-8 mx-auto\">
                <div class=\"modal-body\">
                  <!-- Project Details Go Here -->
                  <h2 class=\"text-uppercase\">Project Name</h2>
                  <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class=\"img-fluid d-block mx-auto\" src=\"themes/custom/trasinv/img/portfolio/02-full.jpg\" alt=\"\">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class=\"list-inline\">
                    <li>Date: January 2017</li>
                    <li>Client: Explore</li>
                    <li>Category: Graphic Design</li>
                  </ul>
                  <button class=\"btn btn-primary\" data-dismiss=\"modal\" type=\"button\">
                    <i class=\"fas fa-times\"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 3 -->
    <div class=\"portfolio-modal modal fade\" id=\"portfolioModal3\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"close-modal\" data-dismiss=\"modal\">
            <div class=\"lr\">
              <div class=\"rl\"></div>
            </div>
          </div>
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-lg-8 mx-auto\">
                <div class=\"modal-body\">
                  <!-- Project Details Go Here -->
                  <h2 class=\"text-uppercase\">Project Name</h2>
                  <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class=\"img-fluid d-block mx-auto\" src=\"themes/custom/trasinv/img/portfolio/03-full.jpg\" alt=\"\">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class=\"list-inline\">
                    <li>Date: January 2017</li>
                    <li>Client: Finish</li>
                    <li>Category: Identity</li>
                  </ul>
                  <button class=\"btn btn-primary\" data-dismiss=\"modal\" type=\"button\">
                    <i class=\"fas fa-times\"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 4 -->
    <div class=\"portfolio-modal modal fade\" id=\"portfolioModal4\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"close-modal\" data-dismiss=\"modal\">
            <div class=\"lr\">
              <div class=\"rl\"></div>
            </div>
          </div>
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-lg-8 mx-auto\">
                <div class=\"modal-body\">
                  <!-- Project Details Go Here -->
                  <h2 class=\"text-uppercase\">Project Name</h2>
                  <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class=\"img-fluid d-block mx-auto\" src=\"themes/custom/trasinv/img/portfolio/04-full.jpg\" alt=\"\">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class=\"list-inline\">
                    <li>Date: January 2017</li>
                    <li>Client: Lines</li>
                    <li>Category: Branding</li>
                  </ul>
                  <button class=\"btn btn-primary\" data-dismiss=\"modal\" type=\"button\">
                    <i class=\"fas fa-times\"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 5 -->
    <div class=\"portfolio-modal modal fade\" id=\"portfolioModal5\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"close-modal\" data-dismiss=\"modal\">
            <div class=\"lr\">
              <div class=\"rl\"></div>
            </div>
          </div>
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-lg-8 mx-auto\">
                <div class=\"modal-body\">
                  <!-- Project Details Go Here -->
                  <h2 class=\"text-uppercase\">Project Name</h2>
                  <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class=\"img-fluid d-block mx-auto\" src=\"themes/custom/trasinv/img/portfolio/05-full.jpg\" alt=\"\">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class=\"list-inline\">
                    <li>Date: January 2017</li>
                    <li>Client: Southwest</li>
                    <li>Category: Website Design</li>
                  </ul>
                  <button class=\"btn btn-primary\" data-dismiss=\"modal\" type=\"button\">
                    <i class=\"fas fa-times\"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 6 -->
    <div class=\"portfolio-modal modal fade\" id=\"portfolioModal6\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"close-modal\" data-dismiss=\"modal\">
            <div class=\"lr\">
              <div class=\"rl\"></div>
            </div>
          </div>
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-lg-8 mx-auto\">
                <div class=\"modal-body\">
                  <!-- Project Details Go Here -->
                  <h2 class=\"text-uppercase\">Project Name</h2>
                  <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class=\"img-fluid d-block mx-auto\" src=\"themes/custom/trasinv/img/portfolio/06-full.jpg\" alt=\"\">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class=\"list-inline\">
                    <li>Date: January 2017</li>
                    <li>Client: Window</li>
                    <li>Category: Photography</li>
                  </ul>
                  <button class=\"btn btn-primary\" data-dismiss=\"modal\" type=\"button\">
                    <i class=\"fas fa-times\"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src=\"themes/custom/trasinv/web/jquery/jquery.min.js\"></script>
    <script src=\"themes/custom/trasinv/web/bootstrap/js/bootstrap.bundle.min.js\"></script>

    <!-- Plugin JavaScript -->
    <script src=\"themes/custom/trasinv/web/jquery-easing/jquery.easing.min.js\"></script>

    <!-- Contact form JavaScript -->
    <script src=\"themes/custom/trasinv/web/js/jqBootstrapValidation.js\"></script>
    <script src=\"themes/custom/trasinv/web/js/contact_me.js\"></script>

    <!-- Custom scripts for this template -->
    <script src=\"themes/custom/trasinv/web/js/agency.min.js\"></script>

  </body>

</html>

", "themes/custom/trasinv/templates/system/html.html.twig", "C:\\xampp\\htdocs\\memo\\drupal-8.6.1\\drupal-8.6.1\\themes\\custom\\trasinv\\templates\\system\\html.html.twig");
    }
}
