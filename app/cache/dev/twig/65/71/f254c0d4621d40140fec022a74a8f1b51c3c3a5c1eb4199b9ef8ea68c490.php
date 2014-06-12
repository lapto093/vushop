<?php

/* AdminBundle:Category:create.html.twig */
class __TwigTemplate_6571f254c0d4621d40140fec022a74a8f1b51c3c3a5c1eb4199b9ef8ea68c490 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AdminBundle::layout.html.twig");

        $this->blocks = array(
            'custom_css' => array($this, 'block_custom_css'),
            'content' => array($this, 'block_content'),
            'custom_js' => array($this, 'block_custom_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_custom_css($context, array $blocks = array())
    {
        // line 4
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/css/plugins/dataTables/dataTables.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div id=\"page-wrapper\">
  <div class=\"row\">
    <div class=\"col-lg-12\">
      <h1 class=\"page-header\">Add category</h1>
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
  <div class=\"row\">
    <div class=\"col-lg-12\">
      <div class=\"col-lg-12\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            Basic Elements
            <div class=\"pull-right\">
              <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("admin_category");
        echo "\">Back To List</a>
            </div>
          </div>
          ";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "          
            <div class=\"panel-body\">
              <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"form-group\">
                      <label>Category Name</label>
                      ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category_name"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <div class=\"form-group\">
                      <label>Parent Id</label>
                      ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent_id"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <div class=\"form-group\">
                      <label>Description</label>
                      ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <div class=\"form-group\">
                      <label>Status</label>
                      ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <button type=\"submit\" class=\"btn btn-default\">Submit Button</button>
                    <button type=\"reset\" class=\"btn btn-default\">Reset Button</button>
                </div>                                
              </div>
              <!-- /.row (nested) -->
            </div>
          ";
        // line 52
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
          <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
      </div>
      <!-- /.panel -->
    </div>
  </div>
  <!-- /.row -->
</div>
";
    }

    // line 64
    public function block_custom_js($context, array $blocks = array())
    {
        echo "    
<!-- Page-Level Plugin Scripts - Tables -->
<script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/plugins/dataTables/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/plugins/dataTables/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>

<script>
  \$(document).ready(function() {
    \$('#dataTables-example').dataTable();
  });
</script>
";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Category:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 67,  128 => 66,  122 => 64,  107 => 52,  96 => 44,  89 => 40,  82 => 36,  75 => 32,  66 => 26,  60 => 23,  43 => 8,  40 => 7,  33 => 4,  30 => 3,);
    }
}
