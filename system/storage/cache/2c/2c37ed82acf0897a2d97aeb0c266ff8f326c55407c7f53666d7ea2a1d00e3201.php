<?php

/* extension/theme/OC3ethos.twig */
class __TwigTemplate_c7f1df5211906e33604eea8ff84e931afdcd5468ca36b7ff4464ffba5149d955 extends Twig_Template
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
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"pull-right\">
                <button type=\"submit\" form=\"form-theme\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\"
                        class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 8
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i
                            class=\"fa fa-reply\"></i></a></div>
            <h1>";
        // line 10
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "                    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 19
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 20
            echo "            <div class=\"alert alert-danger alert-dismissible\"><i
                        class=\"fa fa-exclamation-circle\"></i> ";
            // line 21
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 25
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 27
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 30
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-theme\"
                      class=\"form-horizontal\">
                    <fieldset>
                        <legend>";
        // line 33
        echo (isset($context["text_general"]) ? $context["text_general"] : null);
        echo "</legend>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-directory\"><span data-toggle=\"tooltip\"
                                                                                              title=\"";
        // line 36
        echo (isset($context["help_directory"]) ? $context["help_directory"] : null);
        echo "\">";
        echo (isset($context["entry_directory"]) ? $context["entry_directory"] : null);
        echo "</span></label>

                            <div class=\"col-sm-10\">
                                <select name=\"theme_OC3ethos_directory\" id=\"input-directory\" class=\"form-control\">
                                    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["directories"]) ? $context["directories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["directory"]) {
            // line 41
            echo "                                        ";
            if (($context["directory"] == (isset($context["theme_OC3ethos_directory"]) ? $context["theme_OC3ethos_directory"] : null))) {
                // line 42
                echo "                                            <option value=\"";
                echo $context["directory"];
                echo "\" selected=\"selected\">";
                echo $context["directory"];
                echo "</option>
                                        ";
            } else {
                // line 44
                echo "                                            <option value=\"";
                echo $context["directory"];
                echo "\">";
                echo $context["directory"];
                echo "</option>
                                        ";
            }
            // line 46
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['directory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                                </select>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 51
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>

                            <div class=\"col-sm-10\">
                                <select name=\"theme_OC3ethos_status\" id=\"input-status\" class=\"form-control\">
                                    ";
        // line 55
        if ((isset($context["theme_OC3ethos_status"]) ? $context["theme_OC3ethos_status"] : null)) {
            // line 56
            echo "                                        <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                        <option value=\"0\">";
            // line 57
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                                    ";
        } else {
            // line 59
            echo "                                        <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                        <option value=\"0\" selected=\"selected\">";
            // line 60
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                                    ";
        }
        // line 62
        echo "                                </select>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>";
        // line 67
        echo (isset($context["text_product"]) ? $context["text_product"] : null);
        echo "</legend>
                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\" for=\"input-catalog-limit\"><span data-toggle=\"tooltip\"
                                                                                                  title=\"";
        // line 70
        echo (isset($context["help_product_limit"]) ? $context["help_product_limit"] : null);
        echo "\">";
        echo (isset($context["entry_product_limit"]) ? $context["entry_product_limit"] : null);
        echo "</span></label>

                            <div class=\"col-sm-10\">
                                <input type=\"text\" name=\"theme_OC3ethos_product_limit\"
                                       value=\"";
        // line 74
        echo (isset($context["theme_OC3ethos_product_limit"]) ? $context["theme_OC3ethos_product_limit"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_product_limit"]) ? $context["entry_product_limit"] : null);
        echo "\"
                                       id=\"input-catalog-limit\" class=\"form-control\"/>
                                ";
        // line 76
        if ((isset($context["error_product_limit"]) ? $context["error_product_limit"] : null)) {
            // line 77
            echo "                                    <div class=\"text-danger\">";
            echo (isset($context["error_product_limit"]) ? $context["error_product_limit"] : null);
            echo "</div>
                                ";
        }
        // line 79
        echo "                            </div>
                        </div>
                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\" for=\"input-description-limit\"><span
                                        data-toggle=\"tooltip\"
                                        title=\"";
        // line 84
        echo (isset($context["help_product_description_length"]) ? $context["help_product_description_length"] : null);
        echo "\">";
        echo (isset($context["entry_product_description_length"]) ? $context["entry_product_description_length"] : null);
        echo "</span></label>

                            <div class=\"col-sm-10\">
                                <input type=\"text\" name=\"theme_OC3ethos_product_description_length\"
                                       value=\"";
        // line 88
        echo (isset($context["theme_OC3ethos_product_description_length"]) ? $context["theme_OC3ethos_product_description_length"] : null);
        echo "\"
                                       placeholder=\"";
        // line 89
        echo (isset($context["entry_product_description_length"]) ? $context["entry_product_description_length"] : null);
        echo "\" id=\"input-description-limit\"
                                       class=\"form-control\"/>
                                ";
        // line 91
        if ((isset($context["error_product_description_length"]) ? $context["error_product_description_length"] : null)) {
            // line 92
            echo "                                    <div class=\"text-danger\">";
            echo (isset($context["error_product_description_length"]) ? $context["error_product_description_length"] : null);
            echo "</div>
                                ";
        }
        // line 94
        echo "                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>";
        // line 98
        echo (isset($context["text_image"]) ? $context["text_image"] : null);
        echo "</legend>
                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\"
                                   for=\"input-image-category-width\">";
        // line 101
        echo (isset($context["entry_image_category"]) ? $context["entry_image_category"] : null);
        echo "</label>

                            <div class=\"col-sm-10\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <input type=\"text\" name=\"theme_OC3ethos_image_category_width\"
                                               value=\"";
        // line 107
        echo (isset($context["theme_OC3ethos_image_category_width"]) ? $context["theme_OC3ethos_image_category_width"] : null);
        echo "\"
                                               placeholder=\"";
        // line 108
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-category-width\"
                                               class=\"form-control\"/>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <input type=\"text\" name=\"theme_OC3ethos_image_category_height\"
                                               value=\"";
        // line 113
        echo (isset($context["theme_OC3ethos_image_category_height"]) ? $context["theme_OC3ethos_image_category_height"] : null);
        echo "\"
                                               placeholder=\"";
        // line 114
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\"/>
                                    </div>
                                </div>
                                ";
        // line 117
        if ((isset($context["error_image_category"]) ? $context["error_image_category"] : null)) {
            // line 118
            echo "                                    <div class=\"text-danger\">";
            echo (isset($context["error_image_category"]) ? $context["error_image_category"] : null);
            echo "</div>
                                ";
        }
        // line 120
        echo "                            </div>
                        </div>
                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\"
                                   for=\"input-image-thumb-width\">";
        // line 124
        echo (isset($context["entry_image_thumb"]) ? $context["entry_image_thumb"] : null);
        echo "</label>

                            <div class=\"col-sm-10\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <input type=\"text\" name=\"theme_OC3ethos_image_thumb_width\"
                                               value=\"";
        // line 130
        echo (isset($context["theme_OC3ethos_image_thumb_width"]) ? $context["theme_OC3ethos_image_thumb_width"] : null);
        echo "\"
                                               placeholder=\"";
        // line 131
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-thumb-width\"
                                               class=\"form-control\"/>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <input type=\"text\" name=\"theme_OC3ethos_image_thumb_height\"
                                               value=\"";
        // line 136
        echo (isset($context["theme_OC3ethos_image_thumb_height"]) ? $context["theme_OC3ethos_image_thumb_height"] : null);
        echo "\"
                                               placeholder=\"";
        // line 137
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\"/>
                                    </div>
                                </div>
                                ";
        // line 140
        if ((isset($context["error_image_thumb"]) ? $context["error_image_thumb"] : null)) {
            // line 141
            echo "                                    <div class=\"text-danger\">";
            echo (isset($context["error_image_thumb"]) ? $context["error_image_thumb"] : null);
            echo "</div>
                                ";
        }
        // line 143
        echo "                            </div>
                        </div>
                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\"
                                   for=\"input-image-popup-width\">";
        // line 147
        echo (isset($context["entry_image_popup"]) ? $context["entry_image_popup"] : null);
        echo "</label>

                            <div class=\"col-sm-10\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <input type=\"text\" name=\"theme_OC3ethos_image_popup_width\"
                                               value=\"";
        // line 153
        echo (isset($context["theme_OC3ethos_image_popup_width"]) ? $context["theme_OC3ethos_image_popup_width"] : null);
        echo "\"
                                               placeholder=\"";
        // line 154
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-popup-width\"
                                               class=\"form-control\"/>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <input type=\"text\" name=\"theme_OC3ethos_image_popup_height\"
                                               value=\"";
        // line 159
        echo (isset($context["theme_OC3ethos_image_popup_height"]) ? $context["theme_OC3ethos_image_popup_height"] : null);
        echo "\"
                                               placeholder=\"";
        // line 160
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\"/>
                                    </div>
                                </div>
                                ";
        // line 163
        if ((isset($context["error_image_popup"]) ? $context["error_image_popup"] : null)) {
            // line 164
            echo "                                    <div class=\"text-danger\">";
            echo (isset($context["error_image_popup"]) ? $context["error_image_popup"] : null);
            echo "</div>
                                ";
        }
        // line 166
        echo "                            </div>
                        </div>
                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\"
                                   for=\"input-image-product-width\">";
        // line 170
        echo (isset($context["entry_image_product"]) ? $context["entry_image_product"] : null);
        echo "</label>

                            <div class=\"col-sm-10\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <input type=\"text\" name=\"theme_OC3ethos_image_product_width\"
                                               value=\"";
        // line 176
        echo (isset($context["theme_OC3ethos_image_product_width"]) ? $context["theme_OC3ethos_image_product_width"] : null);
        echo "\"
                                               placeholder=\"";
        // line 177
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-product-width\"
                                               class=\"form-control\"/>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <input type=\"text\" name=\"theme_OC3ethos_image_product_height\"
                                               value=\"";
        // line 182
        echo (isset($context["theme_OC3ethos_image_product_height"]) ? $context["theme_OC3ethos_image_product_height"] : null);
        echo "\"
                                               placeholder=\"";
        // line 183
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\"/>
                                    </div>
                                </div>
                                ";
        // line 186
        if ((isset($context["error_image_product"]) ? $context["error_image_product"] : null)) {
            // line 187
            echo "                                    <div class=\"text-danger\">";
            echo (isset($context["error_image_product"]) ? $context["error_image_product"] : null);
            echo "</div>
                                ";
        }
        // line 189
        echo "                            </div>
                        </div>
                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\"
                                   for=\"input-image-additional-width\">";
        // line 193
        echo (isset($context["entry_image_additional"]) ? $context["entry_image_additional"] : null);
        echo "</label>

                            <div class=\"col-sm-10\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <input type=\"text\" name=\"theme_OC3ethos_image_additional_width\"
                                               value=\"";
        // line 199
        echo (isset($context["theme_OC3ethos_image_additional_width"]) ? $context["theme_OC3ethos_image_additional_width"] : null);
        echo "\"
                                               placeholder=\"";
        // line 200
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-additional-width\"
                                               class=\"form-control\"/>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <input type=\"text\" name=\"theme_OC3ethos_image_additional_height\"
                                               value=\"";
        // line 205
        echo (isset($context["theme_OC3ethos_image_additional_height"]) ? $context["theme_OC3ethos_image_additional_height"] : null);
        echo "\"
                                               placeholder=\"";
        // line 206
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\"/>
                                    </div>
                                </div>
                                ";
        // line 209
        if ((isset($context["error_image_additional"]) ? $context["error_image_additional"] : null)) {
            // line 210
            echo "                                    <div class=\"text-danger\">";
            echo (isset($context["error_image_additional"]) ? $context["error_image_additional"] : null);
            echo "</div>
                                ";
        }
        // line 212
        echo "                            </div>
                        </div>
                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\"
                                   for=\"input-image-related\">";
        // line 216
        echo (isset($context["entry_image_related"]) ? $context["entry_image_related"] : null);
        echo "</label>

                            <div class=\"col-sm-10\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <input type=\"text\" name=\"theme_OC3ethos_image_related_width\"
                                               value=\"";
        // line 222
        echo (isset($context["theme_OC3ethos_image_related_width"]) ? $context["theme_OC3ethos_image_related_width"] : null);
        echo "\"
                                               placeholder=\"";
        // line 223
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-related\"
                                               class=\"form-control\"/>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <input type=\"text\" name=\"theme_OC3ethos_image_related_height\"
                                               value=\"";
        // line 228
        echo (isset($context["theme_OC3ethos_image_related_height"]) ? $context["theme_OC3ethos_image_related_height"] : null);
        echo "\"
                                               placeholder=\"";
        // line 229
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\"/>
                                    </div>
                                </div>
                                ";
        // line 232
        if ((isset($context["error_image_related"]) ? $context["error_image_related"] : null)) {
            // line 233
            echo "                                    <div class=\"text-danger\">";
            echo (isset($context["error_image_related"]) ? $context["error_image_related"] : null);
            echo "</div>
                                ";
        }
        // line 235
        echo "                            </div>
                        </div>
                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\"
                                   for=\"input-image-compare\">";
        // line 239
        echo (isset($context["entry_image_compare"]) ? $context["entry_image_compare"] : null);
        echo "</label>

                            <div class=\"col-sm-10\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <input type=\"text\" name=\"theme_OC3ethos_image_compare_width\"
                                               value=\"";
        // line 245
        echo (isset($context["theme_OC3ethos_image_compare_width"]) ? $context["theme_OC3ethos_image_compare_width"] : null);
        echo "\"
                                               placeholder=\"";
        // line 246
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-compare\"
                                               class=\"form-control\"/>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <input type=\"text\" name=\"theme_OC3ethos_image_compare_height\"
                                               value=\"";
        // line 251
        echo (isset($context["theme_OC3ethos_image_compare_height"]) ? $context["theme_OC3ethos_image_compare_height"] : null);
        echo "\"
                                               placeholder=\"";
        // line 252
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\"/>
                                    </div>
                                </div>
                                ";
        // line 255
        if ((isset($context["error_image_compare"]) ? $context["error_image_compare"] : null)) {
            // line 256
            echo "                                    <div class=\"text-danger\">";
            echo (isset($context["error_image_compare"]) ? $context["error_image_compare"] : null);
            echo "</div>
                                ";
        }
        // line 258
        echo "                            </div>
                        </div>
                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\"
                                   for=\"input-image-wishlist\">";
        // line 262
        echo (isset($context["entry_image_wishlist"]) ? $context["entry_image_wishlist"] : null);
        echo "</label>

                            <div class=\"col-sm-10\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <input type=\"text\" name=\"theme_OC3ethos_image_wishlist_width\"
                                               value=\"";
        // line 268
        echo (isset($context["theme_OC3ethos_image_wishlist_width"]) ? $context["theme_OC3ethos_image_wishlist_width"] : null);
        echo "\"
                                               placeholder=\"";
        // line 269
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-wishlist\"
                                               class=\"form-control\"/>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <input type=\"text\" name=\"theme_OC3ethos_image_wishlist_height\"
                                               value=\"";
        // line 274
        echo (isset($context["theme_OC3ethos_image_wishlist_height"]) ? $context["theme_OC3ethos_image_wishlist_height"] : null);
        echo "\"
                                               placeholder=\"";
        // line 275
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\"/>
                                    </div>
                                </div>
                                ";
        // line 278
        if ((isset($context["error_image_wishlist"]) ? $context["error_image_wishlist"] : null)) {
            // line 279
            echo "                                    <div class=\"text-danger\">";
            echo (isset($context["error_image_wishlist"]) ? $context["error_image_wishlist"] : null);
            echo "</div>
                                ";
        }
        // line 281
        echo "                            </div>
                        </div>
                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\" for=\"input-image-cart\">";
        // line 284
        echo (isset($context["entry_image_cart"]) ? $context["entry_image_cart"] : null);
        echo "</label>

                            <div class=\"col-sm-10\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <input type=\"text\" name=\"theme_OC3ethos_image_cart_width\"
                                               value=\"";
        // line 290
        echo (isset($context["theme_OC3ethos_image_cart_width"]) ? $context["theme_OC3ethos_image_cart_width"] : null);
        echo "\"
                                               placeholder=\"";
        // line 291
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-cart\"
                                               class=\"form-control\"/>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <input type=\"text\" name=\"theme_OC3ethos_image_cart_height\"
                                               value=\"";
        // line 296
        echo (isset($context["theme_OC3ethos_image_cart_height"]) ? $context["theme_OC3ethos_image_cart_height"] : null);
        echo "\"
                                               placeholder=\"";
        // line 297
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\"/>
                                    </div>
                                </div>
                                ";
        // line 300
        if ((isset($context["error_image_cart"]) ? $context["error_image_cart"] : null)) {
            // line 301
            echo "                                    <div class=\"text-danger\">";
            echo (isset($context["error_image_cart"]) ? $context["error_image_cart"] : null);
            echo "</div>
                                ";
        }
        // line 303
        echo "                            </div>
                        </div>
                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\"
                                   for=\"input-image-location\">";
        // line 307
        echo (isset($context["entry_image_location"]) ? $context["entry_image_location"] : null);
        echo "</label>

                            <div class=\"col-sm-10\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <input type=\"text\" name=\"theme_OC3ethos_image_location_width\"
                                               value=\"";
        // line 313
        echo (isset($context["theme_OC3ethos_image_location_width"]) ? $context["theme_OC3ethos_image_location_width"] : null);
        echo "\"
                                               placeholder=\"";
        // line 314
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-location\"
                                               class=\"form-control\"/>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <input type=\"text\" name=\"theme_OC3ethos_image_location_height\"
                                               value=\"";
        // line 319
        echo (isset($context["theme_OC3ethos_image_location_height"]) ? $context["theme_OC3ethos_image_location_height"] : null);
        echo "\"
                                               placeholder=\"";
        // line 320
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\"/>
                                    </div>
                                </div>
                                ";
        // line 323
        if ((isset($context["error_image_location"]) ? $context["error_image_location"] : null)) {
            // line 324
            echo "                                    <div class=\"text-danger\">";
            echo (isset($context["error_image_location"]) ? $context["error_image_location"] : null);
            echo "</div>
                                ";
        }
        // line 326
        echo "                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
";
        // line 334
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/theme/OC3ethos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  708 => 334,  698 => 326,  692 => 324,  690 => 323,  684 => 320,  680 => 319,  672 => 314,  668 => 313,  659 => 307,  653 => 303,  647 => 301,  645 => 300,  639 => 297,  635 => 296,  627 => 291,  623 => 290,  614 => 284,  609 => 281,  603 => 279,  601 => 278,  595 => 275,  591 => 274,  583 => 269,  579 => 268,  570 => 262,  564 => 258,  558 => 256,  556 => 255,  550 => 252,  546 => 251,  538 => 246,  534 => 245,  525 => 239,  519 => 235,  513 => 233,  511 => 232,  505 => 229,  501 => 228,  493 => 223,  489 => 222,  480 => 216,  474 => 212,  468 => 210,  466 => 209,  460 => 206,  456 => 205,  448 => 200,  444 => 199,  435 => 193,  429 => 189,  423 => 187,  421 => 186,  415 => 183,  411 => 182,  403 => 177,  399 => 176,  390 => 170,  384 => 166,  378 => 164,  376 => 163,  370 => 160,  366 => 159,  358 => 154,  354 => 153,  345 => 147,  339 => 143,  333 => 141,  331 => 140,  325 => 137,  321 => 136,  313 => 131,  309 => 130,  300 => 124,  294 => 120,  288 => 118,  286 => 117,  280 => 114,  276 => 113,  268 => 108,  264 => 107,  255 => 101,  249 => 98,  243 => 94,  237 => 92,  235 => 91,  230 => 89,  226 => 88,  217 => 84,  210 => 79,  204 => 77,  202 => 76,  195 => 74,  186 => 70,  180 => 67,  173 => 62,  168 => 60,  163 => 59,  158 => 57,  153 => 56,  151 => 55,  144 => 51,  138 => 47,  132 => 46,  124 => 44,  116 => 42,  113 => 41,  109 => 40,  100 => 36,  94 => 33,  88 => 30,  82 => 27,  78 => 25,  71 => 21,  68 => 20,  66 => 19,  60 => 15,  49 => 13,  45 => 12,  40 => 10,  33 => 8,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*     <div class="page-header">*/
/*         <div class="container-fluid">*/
/*             <div class="pull-right">*/
/*                 <button type="submit" form="form-theme" data-toggle="tooltip" title="{{ button_save }}"*/
/*                         class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*                 <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i*/
/*                             class="fa fa-reply"></i></a></div>*/
/*             <h1>{{ heading_title }}</h1>*/
/*             <ul class="breadcrumb">*/
/*                 {% for breadcrumb in breadcrumbs %}*/
/*                     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/*     <div class="container-fluid">*/
/*         {% if error_warning %}*/
/*             <div class="alert alert-danger alert-dismissible"><i*/
/*                         class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*                 <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*             </div>*/
/*         {% endif %}*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*                 <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/*             </div>*/
/*             <div class="panel-body">*/
/*                 <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-theme"*/
/*                       class="form-horizontal">*/
/*                     <fieldset>*/
/*                         <legend>{{ text_general }}</legend>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label" for="input-directory"><span data-toggle="tooltip"*/
/*                                                                                               title="{{ help_directory }}">{{ entry_directory }}</span></label>*/
/* */
/*                             <div class="col-sm-10">*/
/*                                 <select name="theme_OC3ethos_directory" id="input-directory" class="form-control">*/
/*                                     {% for directory in directories %}*/
/*                                         {% if directory == theme_OC3ethos_directory %}*/
/*                                             <option value="{{ directory }}" selected="selected">{{ directory }}</option>*/
/*                                         {% else %}*/
/*                                             <option value="{{ directory }}">{{ directory }}</option>*/
/*                                         {% endif %}*/
/*                                     {% endfor %}*/
/*                                 </select>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/* */
/*                             <div class="col-sm-10">*/
/*                                 <select name="theme_OC3ethos_status" id="input-status" class="form-control">*/
/*                                     {% if theme_OC3ethos_status %}*/
/*                                         <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                                         <option value="0">{{ text_disabled }}</option>*/
/*                                     {% else %}*/
/*                                         <option value="1">{{ text_enabled }}</option>*/
/*                                         <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                                     {% endif %}*/
/*                                 </select>*/
/*                             </div>*/
/*                         </div>*/
/*                     </fieldset>*/
/*                     <fieldset>*/
/*                         <legend>{{ text_product }}</legend>*/
/*                         <div class="form-group required">*/
/*                             <label class="col-sm-2 control-label" for="input-catalog-limit"><span data-toggle="tooltip"*/
/*                                                                                                   title="{{ help_product_limit }}">{{ entry_product_limit }}</span></label>*/
/* */
/*                             <div class="col-sm-10">*/
/*                                 <input type="text" name="theme_OC3ethos_product_limit"*/
/*                                        value="{{ theme_OC3ethos_product_limit }}" placeholder="{{ entry_product_limit }}"*/
/*                                        id="input-catalog-limit" class="form-control"/>*/
/*                                 {% if error_product_limit %}*/
/*                                     <div class="text-danger">{{ error_product_limit }}</div>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group required">*/
/*                             <label class="col-sm-2 control-label" for="input-description-limit"><span*/
/*                                         data-toggle="tooltip"*/
/*                                         title="{{ help_product_description_length }}">{{ entry_product_description_length }}</span></label>*/
/* */
/*                             <div class="col-sm-10">*/
/*                                 <input type="text" name="theme_OC3ethos_product_description_length"*/
/*                                        value="{{ theme_OC3ethos_product_description_length }}"*/
/*                                        placeholder="{{ entry_product_description_length }}" id="input-description-limit"*/
/*                                        class="form-control"/>*/
/*                                 {% if error_product_description_length %}*/
/*                                     <div class="text-danger">{{ error_product_description_length }}</div>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                         </div>*/
/*                     </fieldset>*/
/*                     <fieldset>*/
/*                         <legend>{{ text_image }}</legend>*/
/*                         <div class="form-group required">*/
/*                             <label class="col-sm-2 control-label"*/
/*                                    for="input-image-category-width">{{ entry_image_category }}</label>*/
/* */
/*                             <div class="col-sm-10">*/
/*                                 <div class="row">*/
/*                                     <div class="col-sm-6">*/
/*                                         <input type="text" name="theme_OC3ethos_image_category_width"*/
/*                                                value="{{ theme_OC3ethos_image_category_width }}"*/
/*                                                placeholder="{{ entry_width }}" id="input-image-category-width"*/
/*                                                class="form-control"/>*/
/*                                     </div>*/
/*                                     <div class="col-sm-6">*/
/*                                         <input type="text" name="theme_OC3ethos_image_category_height"*/
/*                                                value="{{ theme_OC3ethos_image_category_height }}"*/
/*                                                placeholder="{{ entry_height }}" class="form-control"/>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 {% if error_image_category %}*/
/*                                     <div class="text-danger">{{ error_image_category }}</div>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group required">*/
/*                             <label class="col-sm-2 control-label"*/
/*                                    for="input-image-thumb-width">{{ entry_image_thumb }}</label>*/
/* */
/*                             <div class="col-sm-10">*/
/*                                 <div class="row">*/
/*                                     <div class="col-sm-6">*/
/*                                         <input type="text" name="theme_OC3ethos_image_thumb_width"*/
/*                                                value="{{ theme_OC3ethos_image_thumb_width }}"*/
/*                                                placeholder="{{ entry_width }}" id="input-image-thumb-width"*/
/*                                                class="form-control"/>*/
/*                                     </div>*/
/*                                     <div class="col-sm-6">*/
/*                                         <input type="text" name="theme_OC3ethos_image_thumb_height"*/
/*                                                value="{{ theme_OC3ethos_image_thumb_height }}"*/
/*                                                placeholder="{{ entry_height }}" class="form-control"/>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 {% if error_image_thumb %}*/
/*                                     <div class="text-danger">{{ error_image_thumb }}</div>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group required">*/
/*                             <label class="col-sm-2 control-label"*/
/*                                    for="input-image-popup-width">{{ entry_image_popup }}</label>*/
/* */
/*                             <div class="col-sm-10">*/
/*                                 <div class="row">*/
/*                                     <div class="col-sm-6">*/
/*                                         <input type="text" name="theme_OC3ethos_image_popup_width"*/
/*                                                value="{{ theme_OC3ethos_image_popup_width }}"*/
/*                                                placeholder="{{ entry_width }}" id="input-image-popup-width"*/
/*                                                class="form-control"/>*/
/*                                     </div>*/
/*                                     <div class="col-sm-6">*/
/*                                         <input type="text" name="theme_OC3ethos_image_popup_height"*/
/*                                                value="{{ theme_OC3ethos_image_popup_height }}"*/
/*                                                placeholder="{{ entry_height }}" class="form-control"/>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 {% if error_image_popup %}*/
/*                                     <div class="text-danger">{{ error_image_popup }}</div>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group required">*/
/*                             <label class="col-sm-2 control-label"*/
/*                                    for="input-image-product-width">{{ entry_image_product }}</label>*/
/* */
/*                             <div class="col-sm-10">*/
/*                                 <div class="row">*/
/*                                     <div class="col-sm-6">*/
/*                                         <input type="text" name="theme_OC3ethos_image_product_width"*/
/*                                                value="{{ theme_OC3ethos_image_product_width }}"*/
/*                                                placeholder="{{ entry_width }}" id="input-image-product-width"*/
/*                                                class="form-control"/>*/
/*                                     </div>*/
/*                                     <div class="col-sm-6">*/
/*                                         <input type="text" name="theme_OC3ethos_image_product_height"*/
/*                                                value="{{ theme_OC3ethos_image_product_height }}"*/
/*                                                placeholder="{{ entry_height }}" class="form-control"/>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 {% if error_image_product %}*/
/*                                     <div class="text-danger">{{ error_image_product }}</div>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group required">*/
/*                             <label class="col-sm-2 control-label"*/
/*                                    for="input-image-additional-width">{{ entry_image_additional }}</label>*/
/* */
/*                             <div class="col-sm-10">*/
/*                                 <div class="row">*/
/*                                     <div class="col-sm-6">*/
/*                                         <input type="text" name="theme_OC3ethos_image_additional_width"*/
/*                                                value="{{ theme_OC3ethos_image_additional_width }}"*/
/*                                                placeholder="{{ entry_width }}" id="input-image-additional-width"*/
/*                                                class="form-control"/>*/
/*                                     </div>*/
/*                                     <div class="col-sm-6">*/
/*                                         <input type="text" name="theme_OC3ethos_image_additional_height"*/
/*                                                value="{{ theme_OC3ethos_image_additional_height }}"*/
/*                                                placeholder="{{ entry_height }}" class="form-control"/>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 {% if error_image_additional %}*/
/*                                     <div class="text-danger">{{ error_image_additional }}</div>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group required">*/
/*                             <label class="col-sm-2 control-label"*/
/*                                    for="input-image-related">{{ entry_image_related }}</label>*/
/* */
/*                             <div class="col-sm-10">*/
/*                                 <div class="row">*/
/*                                     <div class="col-sm-6">*/
/*                                         <input type="text" name="theme_OC3ethos_image_related_width"*/
/*                                                value="{{ theme_OC3ethos_image_related_width }}"*/
/*                                                placeholder="{{ entry_width }}" id="input-image-related"*/
/*                                                class="form-control"/>*/
/*                                     </div>*/
/*                                     <div class="col-sm-6">*/
/*                                         <input type="text" name="theme_OC3ethos_image_related_height"*/
/*                                                value="{{ theme_OC3ethos_image_related_height }}"*/
/*                                                placeholder="{{ entry_height }}" class="form-control"/>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 {% if error_image_related %}*/
/*                                     <div class="text-danger">{{ error_image_related }}</div>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group required">*/
/*                             <label class="col-sm-2 control-label"*/
/*                                    for="input-image-compare">{{ entry_image_compare }}</label>*/
/* */
/*                             <div class="col-sm-10">*/
/*                                 <div class="row">*/
/*                                     <div class="col-sm-6">*/
/*                                         <input type="text" name="theme_OC3ethos_image_compare_width"*/
/*                                                value="{{ theme_OC3ethos_image_compare_width }}"*/
/*                                                placeholder="{{ entry_width }}" id="input-image-compare"*/
/*                                                class="form-control"/>*/
/*                                     </div>*/
/*                                     <div class="col-sm-6">*/
/*                                         <input type="text" name="theme_OC3ethos_image_compare_height"*/
/*                                                value="{{ theme_OC3ethos_image_compare_height }}"*/
/*                                                placeholder="{{ entry_height }}" class="form-control"/>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 {% if error_image_compare %}*/
/*                                     <div class="text-danger">{{ error_image_compare }}</div>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group required">*/
/*                             <label class="col-sm-2 control-label"*/
/*                                    for="input-image-wishlist">{{ entry_image_wishlist }}</label>*/
/* */
/*                             <div class="col-sm-10">*/
/*                                 <div class="row">*/
/*                                     <div class="col-sm-6">*/
/*                                         <input type="text" name="theme_OC3ethos_image_wishlist_width"*/
/*                                                value="{{ theme_OC3ethos_image_wishlist_width }}"*/
/*                                                placeholder="{{ entry_width }}" id="input-image-wishlist"*/
/*                                                class="form-control"/>*/
/*                                     </div>*/
/*                                     <div class="col-sm-6">*/
/*                                         <input type="text" name="theme_OC3ethos_image_wishlist_height"*/
/*                                                value="{{ theme_OC3ethos_image_wishlist_height }}"*/
/*                                                placeholder="{{ entry_height }}" class="form-control"/>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 {% if error_image_wishlist %}*/
/*                                     <div class="text-danger">{{ error_image_wishlist }}</div>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group required">*/
/*                             <label class="col-sm-2 control-label" for="input-image-cart">{{ entry_image_cart }}</label>*/
/* */
/*                             <div class="col-sm-10">*/
/*                                 <div class="row">*/
/*                                     <div class="col-sm-6">*/
/*                                         <input type="text" name="theme_OC3ethos_image_cart_width"*/
/*                                                value="{{ theme_OC3ethos_image_cart_width }}"*/
/*                                                placeholder="{{ entry_width }}" id="input-image-cart"*/
/*                                                class="form-control"/>*/
/*                                     </div>*/
/*                                     <div class="col-sm-6">*/
/*                                         <input type="text" name="theme_OC3ethos_image_cart_height"*/
/*                                                value="{{ theme_OC3ethos_image_cart_height }}"*/
/*                                                placeholder="{{ entry_height }}" class="form-control"/>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 {% if error_image_cart %}*/
/*                                     <div class="text-danger">{{ error_image_cart }}</div>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group required">*/
/*                             <label class="col-sm-2 control-label"*/
/*                                    for="input-image-location">{{ entry_image_location }}</label>*/
/* */
/*                             <div class="col-sm-10">*/
/*                                 <div class="row">*/
/*                                     <div class="col-sm-6">*/
/*                                         <input type="text" name="theme_OC3ethos_image_location_width"*/
/*                                                value="{{ theme_OC3ethos_image_location_width }}"*/
/*                                                placeholder="{{ entry_width }}" id="input-image-location"*/
/*                                                class="form-control"/>*/
/*                                     </div>*/
/*                                     <div class="col-sm-6">*/
/*                                         <input type="text" name="theme_OC3ethos_image_location_height"*/
/*                                                value="{{ theme_OC3ethos_image_location_height }}"*/
/*                                                placeholder="{{ entry_height }}" class="form-control"/>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 {% if error_image_location %}*/
/*                                     <div class="text-danger">{{ error_image_location }}</div>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                         </div>*/
/*                     </fieldset>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {{ footer }}*/
