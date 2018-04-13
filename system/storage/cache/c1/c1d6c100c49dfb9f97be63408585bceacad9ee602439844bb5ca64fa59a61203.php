<?php

/* OC3ethos/template/common/header.twig */
class __TwigTemplate_1b24f3ea91e85d74fdc2831cb1917beab7b39d88cd3f7d6abcec9bf27faa4fc6 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]>
<html dir=\"";
        // line 4
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]>
<html dir=\"";
        // line 6
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 8
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\">
    <!--<![endif]-->
    <head>
        <meta charset=\"UTF-8\"/>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <title>";
        // line 14
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
        <base href=\"";
        // line 15
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\"/>
        ";
        // line 16
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 17
            echo "            <meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\"/>
        ";
        }
        // line 19
        echo "        ";
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 20
            echo "            <meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\"/>
        ";
        }
        // line 22
        echo "        <script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>

        <link href=\"catalog/view/javascript/bootstrap/css/bootstrap.css\" rel=\"stylesheet\" media=\"screen\"/>
        <script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
        <link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"catalog/view/theme/OC3ethos/stylesheet/OC3ethos.css\" rel=\"stylesheet\">

        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 31
            echo "            <link href=\"";
            echo $this->getAttribute($context["style"], "href", array());
            echo "\" type=\"text/css\" rel=\"";
            echo $this->getAttribute($context["style"], "rel", array());
            echo "\" media=\"";
            echo $this->getAttribute($context["style"], "media", array());
            echo "\"/>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 34
            echo "            <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        <script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 38
            echo "            <link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\"/>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 41
            echo "            ";
            echo $context["analytic"];
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "    </head>
    <body>
        <script>
            \$(window).scroll(function () {
                if (\$(this).scrollTop() > 100) {
                    if (!\$('.navbar1').hasClass('fixed')) {
                        \$('.navbar1').stop().addClass('fixed').css('top', '-50px').animate(
                                {
                                    'top': '0px'
                                }, 500);
                    }
                }
                else {
                    \$('.navbar1').removeClass('fixed');
                }
            });
        </script>
        <div class=\"navbar1\">
            <nav id=\"top\">
                <div class=\"row\">
                    <div id=\"top-links\" class=\"container\">
                        <div class=\"col-md-8 col-sm-12 col-xs-12\">
                            ";
        // line 67
        echo "                            ";
        echo (isset($context["menu"]) ? $context["menu"] : null);
        echo "
                        </div>
                        <div class=\"col-lg-2 col-md-3 col-xs-7 searchheader\">";
        // line 69
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "</div>
                        <div class=\"col-lg-2 col-md-2 col-xs-4 cartheader\">";
        // line 70
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "</div>
                    </div>
                </div>
            </nav>
        </div>
        <header>
            <div class=\"container pad-top\">
                <div class=\"row\">
                    <div class=\"col-md-5 col-xs-6\">
                        <div id=\"logo\">";
        // line 79
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            echo "<a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\"><img src=\"";
            echo (isset($context["logo"]) ? $context["logo"] : null);
            echo "\" title=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\"
                                                                              alt=\"";
            // line 80
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" class=\"img-responsive\"/>
                                </a>";
        } else {
            // line 82
            echo "                                <h1><a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "</a></h1>
                            ";
        }
        // line 83
        echo "</div>
                    </div>
                    <div class=\"col-md-7 col-xs-6\">
                        <div class=\"nav pull-right\">
                            <ul class=\"list-inline my-dropdown\">
                                <li><a href=\"";
        // line 88
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\"><i class=\"fa fa-phone\"></i></a> <span
                                            class=\"hidden-xs hidden-sm hidden-md\">";
        // line 89
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "</span></li>
                                <li><a href=\"";
        // line 90
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\" title=\"";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "\"
                                                        class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i
                                                class=\"fa fa-user\"></i> <span
                                                class=\"hidden-xs hidden-sm hidden-md\">";
        // line 93
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</span> <span
                                                class=\"caret\"></span></a>
                                    <ul class=\"dropdown-menu my-dropdown\">
                                        ";
        // line 96
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 97
            echo "                                            <li class=\"my-dropdown\"><a href=\"";
            echo (isset($context["account"]) ? $context["account"] : null);
            echo "\">";
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "</a></li>
                                            <li class=\"my-dropdown\"><a href=\"";
            // line 98
            echo (isset($context["order"]) ? $context["order"] : null);
            echo "\">";
            echo (isset($context["text_order"]) ? $context["text_order"] : null);
            echo "</a></li>
                                           ";
            // line 100
            echo "                                            <li class=\"my-dropdown\"><a href=\"";
            echo (isset($context["download"]) ? $context["download"] : null);
            echo "\">";
            echo (isset($context["text_download"]) ? $context["text_download"] : null);
            echo "</a></li>
                                            <li class=\"my-dropdown\"><a href=\"";
            // line 101
            echo (isset($context["logout"]) ? $context["logout"] : null);
            echo "\">";
            echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
            echo "</a></li>
                                        ";
        } else {
            // line 103
            echo "                                            <li class=\"my-dropdown\"><a href=\"";
            echo (isset($context["register"]) ? $context["register"] : null);
            echo "\">";
            echo (isset($context["text_register"]) ? $context["text_register"] : null);
            echo "</a></li>
                                            <li class=\"my-dropdown\"><a href=\"";
            // line 104
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "\">";
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo "</a></li>
                                        ";
        }
        // line 106
        echo "                                    </ul>
                                </li>
                                <li><a href=\"";
        // line 108
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\" id=\"wishlist-total\" title=\"";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "\"><i
                                                class=\"fa fa-heart\"></i> <span
                                                class=\"hidden-xs hidden-sm hidden-md\">";
        // line 110
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</span></a>
                                </li>
                               ";
        // line 116
        echo "                                <li><a href=\"";
        echo (isset($context["checkout"]) ? $context["checkout"] : null);
        echo "\" title=\"";
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "\"><i
                                                class=\"fa fa-share\"></i> <span
                                                class=\"hidden-xs hidden-sm hidden-md\">";
        // line 118
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "</span></a>
                                </li>
                                <li><a href=\"";
        // line 120
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\" title=\"";
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "\"><i
                                                class=\"fa fa-envelope\"></i> <span
                                                class=\"hidden-xs hidden-sm hidden-md\">";
        // line 122
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-md-7 col-xs-6\">
                        <div class=\"nav pull-right\">
                            <ul class=\"list-inline\">
                                <li class=\"hidden-xs\"><img src=\"catalog/view/theme/OC3ethos/img/_ui-images/sale-header.png\" class=\"img-responsive\"/>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </header>

";
    }

    public function getTemplateName()
    {
        return "OC3ethos/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 122,  317 => 120,  312 => 118,  304 => 116,  299 => 110,  292 => 108,  288 => 106,  281 => 104,  274 => 103,  267 => 101,  260 => 100,  254 => 98,  247 => 97,  245 => 96,  239 => 93,  231 => 90,  227 => 89,  223 => 88,  216 => 83,  208 => 82,  203 => 80,  193 => 79,  181 => 70,  177 => 69,  171 => 67,  147 => 43,  138 => 41,  133 => 40,  122 => 38,  118 => 37,  115 => 36,  106 => 34,  101 => 33,  88 => 31,  84 => 30,  74 => 22,  68 => 20,  65 => 19,  59 => 17,  57 => 16,  53 => 15,  49 => 14,  38 => 8,  31 => 6,  24 => 4,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if IE]><![endif]-->*/
/* <!--[if IE 8 ]>*/
/* <html dir="{{ direction }}" lang="{{ lang }}" class="ie8"><![endif]-->*/
/* <!--[if IE 9 ]>*/
/* <html dir="{{ direction }}" lang="{{ lang }}" class="ie9"><![endif]-->*/
/* <!--[if (gt IE 9)|!(IE)]><!-->*/
/* <html dir="{{ direction }}" lang="{{ lang }}">*/
/*     <!--<![endif]-->*/
/*     <head>*/
/*         <meta charset="UTF-8"/>*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <title>{{ title }}</title>*/
/*         <base href="{{ base }}"/>*/
/*         {% if description %}*/
/*             <meta name="description" content="{{ description }}"/>*/
/*         {% endif %}*/
/*         {% if keywords %}*/
/*             <meta name="keywords" content="{{ keywords }}"/>*/
/*         {% endif %}*/
/*         <script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>*/
/* */
/*         <link href="catalog/view/javascript/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen"/>*/
/*         <script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>*/
/*         <link href="catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>*/
/*         <link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css"/>*/
/*         <link href="catalog/view/theme/OC3ethos/stylesheet/OC3ethos.css" rel="stylesheet">*/
/* */
/*         {% for style in styles %}*/
/*             <link href="{{ style.href }}" type="text/css" rel="{{ style.rel }}" media="{{ style.media }}"/>*/
/*         {% endfor %}*/
/*         {% for script in scripts %}*/
/*             <script src="{{ script }}" type="text/javascript"></script>*/
/*         {% endfor %}*/
/*         <script src="catalog/view/javascript/common.js" type="text/javascript"></script>*/
/*         {% for link in links %}*/
/*             <link href="{{ link.href }}" rel="{{ link.rel }}"/>*/
/*         {% endfor %}*/
/*         {% for analytic in analytics %}*/
/*             {{ analytic }}*/
/*         {% endfor %}*/
/*     </head>*/
/*     <body>*/
/*         <script>*/
/*             $(window).scroll(function () {*/
/*                 if ($(this).scrollTop() > 100) {*/
/*                     if (!$('.navbar1').hasClass('fixed')) {*/
/*                         $('.navbar1').stop().addClass('fixed').css('top', '-50px').animate(*/
/*                                 {*/
/*                                     'top': '0px'*/
/*                                 }, 500);*/
/*                     }*/
/*                 }*/
/*                 else {*/
/*                     $('.navbar1').removeClass('fixed');*/
/*                 }*/
/*             });*/
/*         </script>*/
/*         <div class="navbar1">*/
/*             <nav id="top">*/
/*                 <div class="row">*/
/*                     <div id="top-links" class="container">*/
/*                         <div class="col-md-8 col-sm-12 col-xs-12">*/
/*                             {# {{ currency }}*/
/*                              {{ language }}#}*/
/*                             {{ menu }}*/
/*                         </div>*/
/*                         <div class="col-lg-2 col-md-3 col-xs-7 searchheader">{{ search }}</div>*/
/*                         <div class="col-lg-2 col-md-2 col-xs-4 cartheader">{{ cart }}</div>*/
/*                     </div>*/
/*                 </div>*/
/*             </nav>*/
/*         </div>*/
/*         <header>*/
/*             <div class="container pad-top">*/
/*                 <div class="row">*/
/*                     <div class="col-md-5 col-xs-6">*/
/*                         <div id="logo">{% if logo %}<a href="{{ home }}"><img src="{{ logo }}" title="{{ name }}"*/
/*                                                                               alt="{{ name }}" class="img-responsive"/>*/
/*                                 </a>{% else %}*/
/*                                 <h1><a href="{{ home }}">{{ name }}</a></h1>*/
/*                             {% endif %}</div>*/
/*                     </div>*/
/*                     <div class="col-md-7 col-xs-6">*/
/*                         <div class="nav pull-right">*/
/*                             <ul class="list-inline my-dropdown">*/
/*                                 <li><a href="{{ contact }}"><i class="fa fa-phone"></i></a> <span*/
/*                                             class="hidden-xs hidden-sm hidden-md">{{ telephone }}</span></li>*/
/*                                 <li><a href="{{ account }}" title="{{ text_account }}"*/
/*                                                         class="dropdown-toggle" data-toggle="dropdown"><i*/
/*                                                 class="fa fa-user"></i> <span*/
/*                                                 class="hidden-xs hidden-sm hidden-md">{{ text_account }}</span> <span*/
/*                                                 class="caret"></span></a>*/
/*                                     <ul class="dropdown-menu my-dropdown">*/
/*                                         {% if logged %}*/
/*                                             <li class="my-dropdown"><a href="{{ account }}">{{ text_account }}</a></li>*/
/*                                             <li class="my-dropdown"><a href="{{ order }}">{{ text_order }}</a></li>*/
/*                                            {# <li><a href="{{ transaction }}">{{ text_transaction }}</a></li>#}*/
/*                                             <li class="my-dropdown"><a href="{{ download }}">{{ text_download }}</a></li>*/
/*                                             <li class="my-dropdown"><a href="{{ logout }}">{{ text_logout }}</a></li>*/
/*                                         {% else %}*/
/*                                             <li class="my-dropdown"><a href="{{ register }}">{{ text_register }}</a></li>*/
/*                                             <li class="my-dropdown"><a href="{{ login }}">{{ text_login }}</a></li>*/
/*                                         {% endif %}*/
/*                                     </ul>*/
/*                                 </li>*/
/*                                 <li><a href="{{ wishlist }}" id="wishlist-total" title="{{ text_wishlist }}"><i*/
/*                                                 class="fa fa-heart"></i> <span*/
/*                                                 class="hidden-xs hidden-sm hidden-md">{{ text_wishlist }}</span></a>*/
/*                                 </li>*/
/*                                {# <li><a href="{{ shopping_cart }}" title="{{ text_shopping_cart }}"><i*/
/*                                                 class="fa fa-shopping-cart"></i> <span*/
/*                                                 class="hidden-xs hidden-sm hidden-md">{{ text_shopping_cart }}</span></a>*/
/*                                 </li>#}*/
/*                                 <li><a href="{{ checkout }}" title="{{ text_checkout }}"><i*/
/*                                                 class="fa fa-share"></i> <span*/
/*                                                 class="hidden-xs hidden-sm hidden-md">{{ text_checkout }}</span></a>*/
/*                                 </li>*/
/*                                 <li><a href="{{ contact }}" title="{{ text_contact }}"><i*/
/*                                                 class="fa fa-envelope"></i> <span*/
/*                                                 class="hidden-xs hidden-sm hidden-md">{{ text_contact }}</span></a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-md-7 col-xs-6">*/
/*                         <div class="nav pull-right">*/
/*                             <ul class="list-inline">*/
/*                                 <li class="hidden-xs"><img src="catalog/view/theme/OC3ethos/img/_ui-images/sale-header.png" class="img-responsive"/>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </header>*/
/* */
/* */
