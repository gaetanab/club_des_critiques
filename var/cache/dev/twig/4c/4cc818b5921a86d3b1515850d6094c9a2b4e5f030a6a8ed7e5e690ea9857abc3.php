<?php

/* membre/login.html.twig */
class __TwigTemplate_344ae4bc8911a8018d39911df4e9f37f3e71a367b33befafcef962ce89ed7089 extends Twig_Template
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
        $__internal_c872c832b9ef639d9e499a81775802b4417101157563d82d978c802f1e3fde17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c872c832b9ef639d9e499a81775802b4417101157563d82d978c802f1e3fde17->enter($__internal_c872c832b9ef639d9e499a81775802b4417101157563d82d978c802f1e3fde17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "membre/login.html.twig"));

        $__internal_58210cab2675c22899ab3c0ec4d97e0e96ddf24d60e817adb3a8690621f2021b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58210cab2675c22899ab3c0ec4d97e0e96ddf24d60e817adb3a8690621f2021b->enter($__internal_58210cab2675c22899ab3c0ec4d97e0e96ddf24d60e817adb3a8690621f2021b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "membre/login.html.twig"));

        // line 1
        echo "




    <div class=\"row\">
        <div  class=\"col s12 center-align\">
            <form method=\"POST\" action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("membre_profil");
        echo "\">
                <div class=\"left-align\">
                        <div>
                            <label>E-mail</label>
                            <input type=\"text\" name=\"email\">
                        </div>
                        <div>
                            <label>Mot de passe</label>
                            <input type=\"text\" name=\"mdp\">
                        </div>
                </div>
                <div class=\"right-align\">
                    <button class=\"btn waves-effect waves-light\" type=\"submit\">valider</button>
                </div>
            </form>
        </div>
    </div>
    

";
        
        $__internal_c872c832b9ef639d9e499a81775802b4417101157563d82d978c802f1e3fde17->leave($__internal_c872c832b9ef639d9e499a81775802b4417101157563d82d978c802f1e3fde17_prof);

        
        $__internal_58210cab2675c22899ab3c0ec4d97e0e96ddf24d60e817adb3a8690621f2021b->leave($__internal_58210cab2675c22899ab3c0ec4d97e0e96ddf24d60e817adb3a8690621f2021b_prof);

    }

    public function getTemplateName()
    {
        return "membre/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("




    <div class=\"row\">
        <div  class=\"col s12 center-align\">
            <form method=\"POST\" action=\"{{path('membre_profil')}}\">
                <div class=\"left-align\">
                        <div>
                            <label>E-mail</label>
                            <input type=\"text\" name=\"email\">
                        </div>
                        <div>
                            <label>Mot de passe</label>
                            <input type=\"text\" name=\"mdp\">
                        </div>
                </div>
                <div class=\"right-align\">
                    <button class=\"btn waves-effect waves-light\" type=\"submit\">valider</button>
                </div>
            </form>
        </div>
    </div>
    

", "membre/login.html.twig", "/var/www/html/club_des_critiques/app/Resources/views/membre/login.html.twig");
    }
}