<?php

/* OC3ethos/template/common/search.twig */
class __TwigTemplate_e78b9259275b5d36d56e128e197584bfca2d44cb3db14fc5f89fda3660d0dee2 extends Twig_Template
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
        echo "<div id=\"search\" class=\"input-group\">
  <input type=\"text\" name=\"search\" value=\"";
        // line 2
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "\" class=\"form-control input-md\" />
  <span class=\"input-group-btn\">
    <button type=\"button\" class=\"btn btn-default btn-md\"><i class=\"fa fa-search\"></i></button>
  </span>
</div>";
    }

    public function getTemplateName()
    {
        return "OC3ethos/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
/* <div id="search" class="input-group">*/
/*   <input type="text" name="search" value="{{ search }}" placeholder="{{ text_search }}" class="form-control input-md" />*/
/*   <span class="input-group-btn">*/
/*     <button type="button" class="btn btn-default btn-md"><i class="fa fa-search"></i></button>*/
/*   </span>*/
/* </div>*/
