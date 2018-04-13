<?php

/* OC3ethos/template/common/menu.twig */
class __TwigTemplate_d60a42cba5c5455b85f59db8642d4d2fc309964d50ef8dc7d3708cfaa4898854 extends Twig_Template
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
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 2
            echo "
    <nav id=\"menu\" class=\"nav pull-left\">
        <div class=\"navbar-header\"><span id=\"category\" class=\"visible-xs\">";
            // line 4
            echo (isset($context["text_category"]) ? $context["text_category"] : null);
            echo "</span>
            <button type=\"button\" class=\"btn btn-navbar navbar-toggle\" data-toggle=\"collapse\"
                    data-target=\".navbar-ex1-collapse\"><i class=\"fa fa-bars\"></i></button>
        </div>
        <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"dropdown\"><a href=\"/index.php\">Home</a></li>
                ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 12
                echo "                    ";
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 13
                    echo "
                        <li class=\"dropdown\"><a href=\"";
                    // line 14
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\" class=\"dropdown-toggle\"
                                                data-toggle=\"dropdown\">";
                    // line 15
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a>

                            <div class=\"dropdown-menu\">
                                <div class=\"dropdown-inner\"> ";
                    // line 18
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($context["category"], "children", array()), (twig_length_filter($this->env, $this->getAttribute($context["category"], "children", array())) / twig_round($this->getAttribute($context["category"], "column", array()), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 19
                        echo "                                        <ul class=\"list-unstyled\">
                                            <li><a href=\"";
                        // line 20
                        echo $this->getAttribute($context["category"], "href", array());
                        echo "\"
                                                   class=\"see-all\">~";
                        // line 21
                        echo (isset($context["text_all"]) ? $context["text_all"] : null);
                        echo "</a></li>
                                            ";
                        // line 22
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 23
                            echo "                                                <li><a href=\"";
                            echo $this->getAttribute($context["child"], "href", array());
                            echo "\">";
                            echo $this->getAttribute($context["child"], "name", array());
                            echo "</a></li>
                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 25
                        echo "                                        </ul>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 26
                    echo "</div>
                            </div>
                        </li>
                    ";
                } else {
                    // line 30
                    echo "                        <li><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a></li>
                    ";
                }
                // line 32
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "            </ul>
        </div>
    </nav>

";
        }
    }

    public function getTemplateName()
    {
        return "OC3ethos/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 33,  106 => 32,  98 => 30,  92 => 26,  85 => 25,  74 => 23,  70 => 22,  66 => 21,  62 => 20,  59 => 19,  55 => 18,  49 => 15,  45 => 14,  42 => 13,  39 => 12,  35 => 11,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if categories %}*/
/* */
/*     <nav id="menu" class="nav pull-left">*/
/*         <div class="navbar-header"><span id="category" class="visible-xs">{{ text_category }}</span>*/
/*             <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse"*/
/*                     data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>*/
/*         </div>*/
/*         <div class="collapse navbar-collapse navbar-ex1-collapse">*/
/*             <ul class="nav navbar-nav">*/
/*                 <li class="dropdown"><a href="/index.php">Home</a></li>*/
/*                 {% for category in categories %}*/
/*                     {% if category.children %}*/
/* */
/*                         <li class="dropdown"><a href="{{ category.href }}" class="dropdown-toggle"*/
/*                                                 data-toggle="dropdown">{{ category.name }}</a>*/
/* */
/*                             <div class="dropdown-menu">*/
/*                                 <div class="dropdown-inner"> {% for children in category.children|batch(category.children|length / category.column|round(1, 'ceil')) %}*/
/*                                         <ul class="list-unstyled">*/
/*                                             <li><a href="{{ category.href }}"*/
/*                                                    class="see-all">~{{ text_all }}</a></li>*/
/*                                             {% for child in children %}*/
/*                                                 <li><a href="{{ child.href }}">{{ child.name }}</a></li>*/
/*                                             {% endfor %}*/
/*                                         </ul>*/
/*                                     {% endfor %}</div>*/
/*                             </div>*/
/*                         </li>*/
/*                     {% else %}*/
/*                         <li><a href="{{ category.href }}">{{ category.name }}</a></li>*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*     </nav>*/
/* */
/* {% endif %}*/
