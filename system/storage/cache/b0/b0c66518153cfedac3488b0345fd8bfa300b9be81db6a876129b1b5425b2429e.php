<?php

/* OC3ethos/template/product/category.twig */
class __TwigTemplate_901cd732b3ace4e5523c9ed4b5f89cee331bbb900061b061fdfea8e9a54b1db7 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div id=\"product-category\" class=\"container\">
    <ul class=\"breadcrumb\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "            <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    </ul>
    <div class=\"row\">";
        // line 8
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
        ";
        // line 9
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 10
            echo "            ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "        ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 12
            echo "            ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "        ";
        } else {
            // line 14
            echo "            ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "        ";
        }
        // line 16
        echo "        <div id=\"content\" class=\"content-category col-sm-9\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
            <h2>";
        // line 17
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h2>
            ";
        // line 18
        if (((isset($context["thumb"]) ? $context["thumb"] : null) || (isset($context["description"]) ? $context["description"] : null))) {
            // line 19
            echo "                <div class=\"row\"> ";
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                // line 20
                echo "                        <div class=\"col-sm-4\"><img src=\"";
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\"
                                                   title=\"";
                // line 21
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" class=\"img-thumbnail\"/></div>
                    ";
            }
            // line 23
            echo "                    ";
            if ((isset($context["description"]) ? $context["description"] : null)) {
                // line 24
                echo "                        <div class=\"col-sm-8\">";
                echo (isset($context["description"]) ? $context["description"] : null);
                echo "</div>
                    ";
            }
            // line 25
            echo "</div>
                <hr>
            ";
        }
        // line 28
        echo "            ";
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 29
            echo "                <h3>";
            echo (isset($context["text_refine"]) ? $context["text_refine"] : null);
            echo "</h3>
                ";
            // line 30
            if ((twig_length_filter($this->env, (isset($context["categories"]) ? $context["categories"] : null)) <= 5)) {
                // line 31
                echo "                    <div class=\"row\">
                        <ul class=\"inline\">
                            ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 34
                    echo "                                <li><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a></li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "                        </ul>
                    </div>
                ";
            } else {
                // line 39
                echo "                    <div class=\"row\">";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["categories"]) ? $context["categories"] : null), twig_round((twig_length_filter($this->env, (isset($context["categories"]) ? $context["categories"] : null)) / 4), 1, "ceil")));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 40
                    echo "                            <div class=\"col-sm-3\">
                                <ul>
                                    ";
                    // line 42
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["category"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 43
                        echo "                                        <li><a href=\"";
                        echo $this->getAttribute($context["child"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["child"], "name", array());
                        echo "</a></li>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 45
                    echo "                                </ul>
                            </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "</div>
                    <br/>
                ";
            }
            // line 50
            echo "            ";
        }
        // line 51
        echo "            ";
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 52
            echo "                <div class=\"row top-border\">
                    <div class=\"col-md-2 col-sm-6 hidden-xs\">
                        <div class=\"btn-group btn-group-sm\">
                            <button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\"
                                    title=\"";
            // line 56
            echo (isset($context["button_list"]) ? $context["button_list"] : null);
            echo "\"><i class=\"fa fa-th-list\"></i></button>
                            <button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\"
                                    title=\"";
            // line 58
            echo (isset($context["button_grid"]) ? $context["button_grid"] : null);
            echo "\"><i class=\"fa fa-th\"></i></button>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"form-group\"><a href=\"";
            // line 62
            echo (isset($context["compare"]) ? $context["compare"] : null);
            echo "\" id=\"compare-total\"
                                                   class=\"btn btn-link\">";
            // line 63
            echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
            echo "</a></div>
                    </div>
                    <div class=\"col-md-4 col-xs-6\">
                        <div class=\"form-group input-group input-group-sm\">
                            <label class=\"input-group-addon\" for=\"input-sort\">";
            // line 67
            echo (isset($context["text_sort"]) ? $context["text_sort"] : null);
            echo "</label>
                            <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
                                ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 70
                echo "                                    ";
                if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                    // line 71
                    echo "                                        <option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
                                    ";
                } else {
                    // line 73
                    echo "                                        <option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
                                    ";
                }
                // line 75
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "                            </select>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-xs-6 nnn\">
                        <div class=\"form-group input-group input-group-sm\">
                            <label class=\"input-group-addon\" for=\"input-limit\">";
            // line 81
            echo (isset($context["text_limit"]) ? $context["text_limit"] : null);
            echo "</label>
                            <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
                                ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 84
                echo "                                    ";
                if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                    // line 85
                    echo "                                        <option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
                                    ";
                } else {
                    // line 87
                    echo "                                        <option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
                                    ";
                }
                // line 89
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "                            </select>
                        </div>
                    </div>
                </div>
                <div class=\"row\"> ";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 95
                echo "                        <div class=\"product-layout col-lg-3 col-md-4\">
                            <div class=\"product-thumb\">
                                <div class=\"image\"><a href=\"";
                // line 97
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\"
                                                                                     alt=\"";
                // line 98
                echo $this->getAttribute($context["product"], "name", array());
                echo "\"
                                                                                     title=\"";
                // line 99
                echo $this->getAttribute($context["product"], "name", array());
                echo "\"
                                                                                     class=\"img-responsive\"/></a></div>
                                <div class=\"caption-wrapper\">
                                    <div class=\"caption\">
                                        <h4><a href=\"";
                // line 103
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h4>

                                        <p>";
                // line 105
                echo $this->getAttribute($context["product"], "description", array());
                echo "</p>
                                        ";
                // line 106
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 107
                    echo "                                            <p class=\"price\"> ";
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 108
                        echo "                                                    ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
                                                ";
                    } else {
                        // line 109
                        echo " <span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span> <span
                                                        class=\"price-old\">";
                        // line 110
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span> ";
                    }
                    // line 111
                    echo "                                                ";
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        echo " <span
                                                        class=\"price-tax\">";
                        // line 112
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span> ";
                    }
                    // line 113
                    echo "                                            </p>
                                        ";
                }
                // line 115
                echo "                                        ";
                if ($this->getAttribute($context["product"], "rating", array())) {
                    // line 116
                    echo "                                            <div class=\"rating\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 117
                        echo "                                                    ";
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                            echo " <span class=\"fa fa-stack\"><i
                                                                class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        } else {
                            // line 119
                            echo "                                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i
                                                                    class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                        }
                        // line 121
                        echo "                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " </div>
                                        ";
                }
                // line 122
                echo " </div>
                                    <div class=\"button-group\">
                                        <button type=\"button\"
                                                onclick=\"cart.add('";
                // line 125
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "', '";
                echo $this->getAttribute($context["product"], "minimum", array());
                echo "');\">
                                             <span
                                                    class=\"hidden-xs hidden-sm hidden-md\">";
                // line 127
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "</span> <i class=\"fa fa-shopping-cart\"></i>
                                        </button>
                                        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 129
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\"
                                                onclick=\"wishlist.add('";
                // line 130
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i
                                                    class=\"fa fa-heart\"></i></button>
                                        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 132
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\"
                                                onclick=\"compare.add('";
                // line 133
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i
                                                    class=\"fa fa-exchange\"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 139
            echo " </div>
                <div class=\"row\">
                    <div class=\"col-sm-6 text-left\">";
            // line 141
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
                    <div class=\"col-sm-6 text-right\">";
            // line 142
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</div>
                </div>
            ";
        }
        // line 145
        echo "            ";
        if (( !(isset($context["categories"]) ? $context["categories"] : null) &&  !(isset($context["products"]) ? $context["products"] : null))) {
            // line 146
            echo "                <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
                <div class=\"buttons\">
                    <div class=\"pull-right\"><a href=\"";
            // line 148
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"btn btn-primary\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a>
                    </div>
                </div>
            ";
        }
        // line 152
        echo "            ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
        ";
        // line 153
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 155
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OC3ethos/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  477 => 155,  472 => 153,  467 => 152,  458 => 148,  452 => 146,  449 => 145,  443 => 142,  439 => 141,  435 => 139,  422 => 133,  418 => 132,  413 => 130,  409 => 129,  404 => 127,  397 => 125,  392 => 122,  383 => 121,  379 => 119,  373 => 117,  368 => 116,  365 => 115,  361 => 113,  355 => 112,  350 => 111,  346 => 110,  341 => 109,  335 => 108,  332 => 107,  330 => 106,  326 => 105,  319 => 103,  312 => 99,  308 => 98,  302 => 97,  298 => 95,  294 => 94,  288 => 90,  282 => 89,  274 => 87,  266 => 85,  263 => 84,  259 => 83,  254 => 81,  247 => 76,  241 => 75,  233 => 73,  225 => 71,  222 => 70,  218 => 69,  213 => 67,  206 => 63,  202 => 62,  195 => 58,  190 => 56,  184 => 52,  181 => 51,  178 => 50,  173 => 47,  165 => 45,  154 => 43,  150 => 42,  146 => 40,  141 => 39,  136 => 36,  125 => 34,  121 => 33,  117 => 31,  115 => 30,  110 => 29,  107 => 28,  102 => 25,  96 => 24,  93 => 23,  88 => 21,  81 => 20,  78 => 19,  76 => 18,  72 => 17,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  47 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="product-category" class="container">*/
/*     <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*             <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*     </ul>*/
/*     <div class="row">{{ column_left }}*/
/*         {% if column_left and column_right %}*/
/*             {% set class = 'col-sm-6' %}*/
/*         {% elseif column_left or column_right %}*/
/*             {% set class = 'col-sm-9' %}*/
/*         {% else %}*/
/*             {% set class = 'col-sm-12' %}*/
/*         {% endif %}*/
/*         <div id="content" class="content-category col-sm-9">{{ content_top }}*/
/*             <h2>{{ heading_title }}</h2>*/
/*             {% if thumb or description %}*/
/*                 <div class="row"> {% if thumb %}*/
/*                         <div class="col-sm-4"><img src="{{ thumb }}" alt="{{ heading_title }}"*/
/*                                                    title="{{ heading_title }}" class="img-thumbnail"/></div>*/
/*                     {% endif %}*/
/*                     {% if description %}*/
/*                         <div class="col-sm-8">{{ description }}</div>*/
/*                     {% endif %}</div>*/
/*                 <hr>*/
/*             {% endif %}*/
/*             {% if categories %}*/
/*                 <h3>{{ text_refine }}</h3>*/
/*                 {% if categories|length <= 5 %}*/
/*                     <div class="row">*/
/*                         <ul class="inline">*/
/*                             {% for category in categories %}*/
/*                                 <li><a href="{{ category.href }}">{{ category.name }}</a></li>*/
/*                             {% endfor %}*/
/*                         </ul>*/
/*                     </div>*/
/*                 {% else %}*/
/*                     <div class="row">{% for category in categories|batch((categories|length / 4)|round(1, 'ceil')) %}*/
/*                             <div class="col-sm-3">*/
/*                                 <ul>*/
/*                                     {% for child in category %}*/
/*                                         <li><a href="{{ child.href }}">{{ child.name }}</a></li>*/
/*                                     {% endfor %}*/
/*                                 </ul>*/
/*                             </div>*/
/*                         {% endfor %}</div>*/
/*                     <br/>*/
/*                 {% endif %}*/
/*             {% endif %}*/
/*             {% if products %}*/
/*                 <div class="row top-border">*/
/*                     <div class="col-md-2 col-sm-6 hidden-xs">*/
/*                         <div class="btn-group btn-group-sm">*/
/*                             <button type="button" id="list-view" class="btn btn-default" data-toggle="tooltip"*/
/*                                     title="{{ button_list }}"><i class="fa fa-th-list"></i></button>*/
/*                             <button type="button" id="grid-view" class="btn btn-default" data-toggle="tooltip"*/
/*                                     title="{{ button_grid }}"><i class="fa fa-th"></i></button>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-md-3 col-sm-6">*/
/*                         <div class="form-group"><a href="{{ compare }}" id="compare-total"*/
/*                                                    class="btn btn-link">{{ text_compare }}</a></div>*/
/*                     </div>*/
/*                     <div class="col-md-4 col-xs-6">*/
/*                         <div class="form-group input-group input-group-sm">*/
/*                             <label class="input-group-addon" for="input-sort">{{ text_sort }}</label>*/
/*                             <select id="input-sort" class="form-control" onchange="location = this.value;">*/
/*                                 {% for sorts in sorts %}*/
/*                                     {% if sorts.value == '%s-%s'|format(sort, order) %}*/
/*                                         <option value="{{ sorts.href }}" selected="selected">{{ sorts.text }}</option>*/
/*                                     {% else %}*/
/*                                         <option value="{{ sorts.href }}">{{ sorts.text }}</option>*/
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/*                             </select>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-md-3 col-xs-6 nnn">*/
/*                         <div class="form-group input-group input-group-sm">*/
/*                             <label class="input-group-addon" for="input-limit">{{ text_limit }}</label>*/
/*                             <select id="input-limit" class="form-control" onchange="location = this.value;">*/
/*                                 {% for limits in limits %}*/
/*                                     {% if limits.value == limit %}*/
/*                                         <option value="{{ limits.href }}" selected="selected">{{ limits.text }}</option>*/
/*                                     {% else %}*/
/*                                         <option value="{{ limits.href }}">{{ limits.text }}</option>*/
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/*                             </select>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="row"> {% for product in products %}*/
/*                         <div class="product-layout col-lg-3 col-md-4">*/
/*                             <div class="product-thumb">*/
/*                                 <div class="image"><a href="{{ product.href }}"><img src="{{ product.thumb }}"*/
/*                                                                                      alt="{{ product.name }}"*/
/*                                                                                      title="{{ product.name }}"*/
/*                                                                                      class="img-responsive"/></a></div>*/
/*                                 <div class="caption-wrapper">*/
/*                                     <div class="caption">*/
/*                                         <h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/* */
/*                                         <p>{{ product.description }}</p>*/
/*                                         {% if product.price %}*/
/*                                             <p class="price"> {% if not product.special %}*/
/*                                                     {{ product.price }}*/
/*                                                 {% else %} <span class="price-new">{{ product.special }}</span> <span*/
/*                                                         class="price-old">{{ product.price }}</span> {% endif %}*/
/*                                                 {% if product.tax %} <span*/
/*                                                         class="price-tax">{{ text_tax }} {{ product.tax }}</span> {% endif %}*/
/*                                             </p>*/
/*                                         {% endif %}*/
/*                                         {% if product.rating %}*/
/*                                             <div class="rating"> {% for i in 1..5 %}*/
/*                                                     {% if product.rating < i %} <span class="fa fa-stack"><i*/
/*                                                                 class="fa fa-star-o fa-stack-2x"></i></span> {% else %}*/
/*                                                         <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i*/
/*                                                                     class="fa fa-star-o fa-stack-2x"></i></span>{% endif %}*/
/*                                                 {% endfor %} </div>*/
/*                                         {% endif %} </div>*/
/*                                     <div class="button-group">*/
/*                                         <button type="button"*/
/*                                                 onclick="cart.add('{{ product.product_id }}', '{{ product.minimum }}');">*/
/*                                              <span*/
/*                                                     class="hidden-xs hidden-sm hidden-md">{{ button_cart }}</span> <i class="fa fa-shopping-cart"></i>*/
/*                                         </button>*/
/*                                         <button type="button" data-toggle="tooltip" title="{{ button_wishlist }}"*/
/*                                                 onclick="wishlist.add('{{ product.product_id }}');"><i*/
/*                                                     class="fa fa-heart"></i></button>*/
/*                                         <button type="button" data-toggle="tooltip" title="{{ button_compare }}"*/
/*                                                 onclick="compare.add('{{ product.product_id }}');"><i*/
/*                                                     class="fa fa-exchange"></i></button>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endfor %} </div>*/
/*                 <div class="row">*/
/*                     <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*                     <div class="col-sm-6 text-right">{{ results }}</div>*/
/*                 </div>*/
/*             {% endif %}*/
/*             {% if not categories and not products %}*/
/*                 <p>{{ text_empty }}</p>*/
/*                 <div class="buttons">*/
/*                     <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a>*/
/*                     </div>*/
/*                 </div>*/
/*             {% endif %}*/
/*             {{ content_bottom }}</div>*/
/*         {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }}*/
/* */
