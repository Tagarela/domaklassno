<?php

/* OC3ethos/template/common/column_right.twig */
class __TwigTemplate_a4fe906614811bc6ebd6d7d9b3e763497e25c45885d72ad3660d7562b2f27022 extends Twig_Template
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
        if ((isset($context["modules"]) ? $context["modules"] : null)) {
            // line 2
            echo "    <aside id=\"column-right\" class=\"col-sm-3 hidden-xs\">
        <div class=\"right-col\">
            ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 5
                echo "                ";
                echo $context["module"];
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "        </div>
    </aside>
";
        }
    }

    public function getTemplateName()
    {
        return "OC3ethos/template/common/column_right.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if modules %}*/
/*     <aside id="column-right" class="col-sm-3 hidden-xs">*/
/*         <div class="right-col">*/
/*             {% for module in modules %}*/
/*                 {{ module }}*/
/*             {% endfor %}*/
/*         </div>*/
/*     </aside>*/
/* {% endif %}*/
/* */
