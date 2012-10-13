<?php

/* SiteAdminBundle:Administrateurs:edit.html.twig */
class __TwigTemplate_262a96f439dd2a0338b83e57aee90683 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SiteAdminBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SiteAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        $this->displayParentBlock("content", $context, $blocks);
        echo "


<h1>Editer mon compte</h1>



<form action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("administrateurs_update", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "edit_form"), 'enctype');
        echo ">

                ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "edit_form"), 'errors');
        echo "

            <div>
                    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "firstname"), 'label', array("label" => "Prénom"));
        echo "
                    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "firstname"), 'errors');
        echo "
                    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "firstname"), 'widget');
        echo "
            </div>

             <div>
                    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "lastname"), 'label', array("label" => "Nom"));
        echo "
                    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "lastname"), 'errors');
        echo "
                    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "lastname"), 'widget');
        echo "
            </div>
    
                 <div>
                        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "description"), 'label');
        echo "
                        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "description"), 'errors');
        echo "
                        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "description"), 'widget');
        echo "
                </div>
    
                <div>
                        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "email"), 'label');
        echo "
                        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "email"), 'errors');
        echo "
                        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "email"), 'widget');
        echo "
                </div>
    
              <div>
                        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "edit_form"), "password"), "mdp"), 'row', array("label" => "Mot de passe"));
        echo "     
                        ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "edit_form"), "password"), "mdp_conf"), 'row', array("label" => "Confirmation du mot de passe"));
        echo "
                </div>
    
                <div>
                        ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "dob"), 'label', array("label" => "Date de naissance"));
        echo "
                        ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "dob"), 'errors');
        echo "
                        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "dob"), 'widget');
        echo "
                </div>
    
                <div>
                        ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "tel"), 'label', array("label" => "Téléphone"));
        echo "
                        ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "tel"), 'errors');
        echo "
                        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "tel"), 'widget');
        echo "
                </div>
    
                <div>
                        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "adresse"), 'label', array("label" => "Adresse"));
        echo "
                        ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "adresse"), 'errors');
        echo "
                        ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "adresse"), 'widget');
        echo "
                </div>
    
                <div>
                        ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "ville"), 'label', array("label" => "Ville"));
        echo "
                        ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "ville"), 'errors');
        echo "
                        ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "ville"), 'widget', array("attr" => array("class" => "city")));
        echo "
                </div>
    
                <div>
                        ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "zipcode"), 'label', array("label" => "Code Postal"));
        echo "
                        ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "zipcode"), 'errors');
        echo "
                        ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "zipcode"), 'widget');
        echo "
                </div>

                <div>
                        ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "enabled"), 'label', array("label" => "Activé"));
        echo "
                        ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "enabled"), 'errors');
        echo "
                        ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "enabled"), 'widget');
        echo "  
                </div>

                        ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "edit_form"), 'rest');
        echo "
                <p>
                    <button type=\"submit\" class=\"btn\">Editer mon compte</button>
                </p>
            </form>

                            <ul class=\"record_actions\">
                                <li>
                                    <a href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("administrateurs"), "html", null, true);
        echo "\">
                                        <i class=\"icon-share-alt\"></i>Back to the list
                                    </a>
                                </li>
                            </ul>

 ";
    }

    public function getTemplateName()
    {
        return "SiteAdminBundle:Administrateurs:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 89,  212 => 81,  206 => 78,  202 => 77,  198 => 76,  191 => 72,  187 => 71,  183 => 70,  176 => 66,  172 => 65,  168 => 64,  161 => 60,  157 => 59,  153 => 58,  146 => 54,  142 => 53,  138 => 52,  131 => 48,  127 => 47,  123 => 46,  116 => 42,  112 => 41,  105 => 37,  101 => 36,  97 => 35,  90 => 31,  86 => 30,  82 => 29,  75 => 25,  71 => 24,  67 => 23,  60 => 19,  56 => 18,  52 => 17,  46 => 14,  39 => 12,  29 => 5,  26 => 4,);
    }
}
