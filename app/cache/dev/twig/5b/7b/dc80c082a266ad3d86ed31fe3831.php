<?php

/* SiteAdminBundle:Security:login.html.twig */
class __TwigTemplate_5b7bdc80c082a266ad3d86ed31fe3831 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SiteAdminBundle::layoutoff.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SiteAdminBundle::layoutoff.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Connexion Pro";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "        ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
 <p></p>
 <p></p>
        <div class=\"well\">
                                ";
        // line 9
        if ($this->getContext($context, "error")) {
            // line 10
            echo "                                            <div class=\"alert alert-block alert-error fade in\"> 
                                                    <span class=\"close\"></span>
                                                    ";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "error"), "message"), array(), "AdminBundle"), "html", null, true);
            echo " 
                                            </div>      
                                ";
        }
        // line 15
        echo "                            <legend>Authentification</legend>
                                <form  action=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_check"), "html", null, true);
        echo "\" method=\"post\">
                                    <label for=\"login\">Login: </label><input required=\"required\" id=\"login\"  type=\"text\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" ";
        if (twig_test_empty($this->getContext($context, "last_username"))) {
            echo "placeholder=\"E-mail\" ";
        }
        echo ">
                                    <label for=\"mdp\">Password: </label><input id=\"mdp\" required=\"required\" type=\"password\" placeholder=\"Password\" name=\"_password\">
                                        <label id=\"entrer\" class=\"active\"><input type=\"checkbox\" name=\"_remember_me\" checked=\"checked\">Se souvenir de moi</label>
                                        <input type=\"submit\" name=\"login\" value=\"Connexion\" class=\"btn btn-primary btn-large\">
                                        </form>
                            </fieldset>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "SiteAdminBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 17,  59 => 16,  56 => 15,  50 => 12,  46 => 10,  44 => 9,  36 => 5,  33 => 4,  27 => 3,);
    }
}
