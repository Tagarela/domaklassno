<?php

/* OC3ethos/template/common/home.twig */
class __TwigTemplate_87e2d27bb1734ed8d82301908a05fac49be7ee0b1b4157518a11e21ddd03b731 extends Twig_Template
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
<link rel=\"stylesheet\" href=\"catalog/view/theme/OC3ethos/stylesheet/kenburning.css\" type=\"text/css\"/>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-4\">
            ";
        // line 6
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
        </div>
        <div class=\"col-sm-8\">
            <div id=\"kenburning\" style=\"height: 320px;\">
                <img src=\"catalog/view/theme/OC3ethos/img/_sliders/slider1.jpg\" title=\"slider 1\"/>
                <img src=\"catalog/view/theme/OC3ethos/img/_sliders/slider2.jpg\" title=\"slider 2\"/>
                <img src=\"catalog/view/theme/OC3ethos/img/_sliders/slider3.jpg\" title=\"slider 3\"/>
                <img src=\"catalog/view/theme/OC3ethos/img/_sliders/slider4.jpg\" title=\"slider 4\"/>
            </div>
        </div>
    </div>
    <br/>
    <div class=\"row\">
 <div>";
        // line 19
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "</div>
        <div id=\"content-12\" class=\"content-other col-sm-9\">";
        // line 20
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
        <div>";
        // line 21
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
    </div>
</div>

<script src=\"catalog/view/theme/OC3ethos/js/kenburning.js\" type=\"text/javascript\"></script>
<script>
    \$(\"#kenburning\").kenBurning({
        zoom: 1.3,
        time: 7000
    });
</script>
";
        // line 32
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "OC3ethos/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 32,  51 => 21,  47 => 20,  43 => 19,  27 => 6,  19 => 1,);
    }
}
/* {{ header }}*/
/* <link rel="stylesheet" href="catalog/view/theme/OC3ethos/stylesheet/kenburning.css" type="text/css"/>*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-sm-4">*/
/*             {{ content_top }}*/
/*         </div>*/
/*         <div class="col-sm-8">*/
/*             <div id="kenburning" style="height: 320px;">*/
/*                 <img src="catalog/view/theme/OC3ethos/img/_sliders/slider1.jpg" title="slider 1"/>*/
/*                 <img src="catalog/view/theme/OC3ethos/img/_sliders/slider2.jpg" title="slider 2"/>*/
/*                 <img src="catalog/view/theme/OC3ethos/img/_sliders/slider3.jpg" title="slider 3"/>*/
/*                 <img src="catalog/view/theme/OC3ethos/img/_sliders/slider4.jpg" title="slider 4"/>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <br/>*/
/*     <div class="row">*/
/*  <div>{{ column_left }}</div>*/
/*         <div id="content-12" class="content-other col-sm-9">{{ content_bottom }}</div>*/
/*         <div>{{ column_right }}</div>*/
/*     </div>*/
/* </div>*/
/* */
/* <script src="catalog/view/theme/OC3ethos/js/kenburning.js" type="text/javascript"></script>*/
/* <script>*/
/*     $("#kenburning").kenBurning({*/
/*         zoom: 1.3,*/
/*         time: 7000*/
/*     });*/
/* </script>*/
/* {{ footer }}*/
