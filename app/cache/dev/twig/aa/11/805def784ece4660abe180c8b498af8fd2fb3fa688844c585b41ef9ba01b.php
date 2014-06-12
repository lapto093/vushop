<?php

/* AdminBundle:Category:index.html.twig */
class __TwigTemplate_aa11805def784ece4660abe180c8b498af8fd2fb3fa688844c585b41ef9ba01b extends Twig_Template
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
      <h1 class=\"page-header\">Category Manager</h1>
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
  <div class=\"row\">
    <div class=\"col-lg-12\">
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          DataTables Advanced Tables
          <div class=\"pull-right\">
            <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("admin_category_create");
        echo "\">Add new</a>
          </div>
        </div>
        <!-- /.panel-heading -->
        <div class=\"panel-body\">
          <div class=\"table-responsive\">
            <table class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
              <thead>
                <tr>
                  <th>Category Id</th>
                  <th>Category Name</th>
                  <th>Status</th>
                  <th>Created Date</th>
                </tr>
              </thead>
              <tbody>
                                        ";
        // line 38
        $context["cnt"] = 1;
        // line 39
        echo "                                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo "                                        
                <tr class=\"";
            // line 40
            echo ((((isset($context["cnt"]) ? $context["cnt"] : $this->getContext($context, "cnt")) % 2)) ? ("even") : ("odd"));
            echo " gradeX\">
                  <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "categoryId"), "html", null, true);
            echo "</td>
                  <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "categoryName"), "html", null, true);
            echo "</td>
                  <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "status"), "html", null, true);
            echo "</td>
                  <td class=\"center\">";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "createdDate"), "date"), "html", null, true);
            echo "</td>
                </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
              </tbody>
            </table>
          </div>
        </div>
        <!-- /.panel-body -->
      </div>
      <!-- /.panel -->
    </div>
  </div>
  <!-- /.row -->
</div>
";
    }

    // line 61
    public function block_custom_js($context, array $blocks = array())
    {
        echo "    
<!-- Page-Level Plugin Scripts - Tables -->
<script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/plugins/dataTables/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 64
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
        return "AdminBundle:Category:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 64,  134 => 63,  128 => 61,  112 => 47,  103 => 44,  99 => 43,  95 => 42,  91 => 41,  87 => 40,  80 => 39,  78 => 38,  59 => 22,  43 => 8,  40 => 7,  33 => 4,  30 => 3,);
    }
}
