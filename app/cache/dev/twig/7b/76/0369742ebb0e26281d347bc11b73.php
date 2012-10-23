<?php

/* SiteAdminBundle:Slot:filter.html.twig */
class __TwigTemplate_7b760369742ebb0e26281d347bc11b73 extends Twig_Template
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
        echo "<div id=\"filter_box\" class=\"pull-left\">
        <label  for=\"search\">Filtrer par: </label>
          <div class=\"input-prepend\">
                <span class=\"add-on\">?</span>
                <input required=\"required\" class=\"filter_input\" id=\"search\"  id=\"prependedInput\"  type=\"search\" name=\"filter\" placeholder=\"Nom, titre ...\" />
          </div>
</div>";
    }

    public function getTemplateName()
    {
        return "SiteAdminBundle:Slot:filter.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  17 => 1,);
    }
}
