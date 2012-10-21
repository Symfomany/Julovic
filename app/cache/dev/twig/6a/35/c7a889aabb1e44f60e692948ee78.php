<?php

/* SiteAdminBundle:Security:login.html.twig */
class __TwigTemplate_6a35c7a889aabb1e44f60e692948ee78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SiteAdminBundle::layoutoff.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
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
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "        ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
 <p></p>
 <p></p>
    <div class=\"span6\" id=\"box_login\">
                   ";
        // line 9
        if ($this->getContext($context, "error")) {
            // line 10
            echo "                                    <div class=\"alert alert-error\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                                            ";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "error"), "message"), array(), "AdminBundle"), "html", null, true);
            echo " 
                                    </div>      
                        ";
        }
        // line 15
        echo "                                <center><h3>";
        echo twig_escape_filter($this->env, $this->getContext($context, "nom_site"), "html", null, true);
        echo "</h3></center>
                                <center><p><i>";
        // line 16
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getContext($context, "slogan")), "html", null, true);
        echo "</i></p></center>
        <div class=\"well\" >
                            <legend>Authentification</legend>
                                <form  class=\"form-horizontal\" action=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_check"), "html", null, true);
        echo "\" method=\"post\">
                                    <div class=\"control-group\">
                                        <label class=\"control-label\" for=\"login\">Login: </label>
                                        <div class=\"controls\">
                                                <div class=\"input-prepend\">
                                                        <span class=\"add-on\">@</span>
                                                        <input class=\"span2\" name=\"_username\"  required=\"required\" id=\"prependedInput\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" size=\"16\" type=\"text\" ";
        if (twig_test_empty($this->getContext($context, "last_username"))) {
            echo " placeholder=\"E-mail\"";
        }
        echo " />
                                                </div>
                                        </div>
                                    </div>
                                    <div class=\"control-group\">
                                        <label class=\"control-label\" for=\"mdp\">Password: </label>
                                        <div class=\"controls\">
                                            <div class=\"input-prepend\">
                                                        <span class=\"add-on\">?</span>
                                                        <input type=\"password\"  id=\"mdp\"  required=\"required\" placeholder=\"Password\" name=\"_password\" class=\"span2\" id=\"prependedInput\" size=\"16\" type=\"text\" />
                                                </div>
                                             <p></p>
                                             <label id=\"entrer\" class=\"active\"><i class=\"icon-user\"></i><input type=\"checkbox\" name=\"_remember_me\" checked=\"checked\">Se souvenir de moi</label>
                                              <p></p>
                                             <button type=\"submit\" name=\"login\"  data-loading-text=\"Loading...\"  class=\"btn\">Se Connecter</button>
                                        </div>
                                    </div>
                                    </form>
                            </fieldset>
            </div>
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
        return array (  76 => 25,  67 => 19,  61 => 16,  56 => 15,  50 => 12,  46 => 10,  44 => 9,  36 => 5,  33 => 4,  27 => 3,);
    }
}
