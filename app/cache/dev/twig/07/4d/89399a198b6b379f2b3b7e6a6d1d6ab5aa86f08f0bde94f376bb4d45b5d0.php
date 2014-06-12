<?php

/* AdminBundle::layout.html.twig */
class __TwigTemplate_074d89399a198b6b379f2b3b7e6a6d1d6ab5aa86f08f0bde94f376bb4d45b5d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'core_css' => array($this, 'block_core_css'),
            'custom_css' => array($this, 'block_custom_css'),
            'notification' => array($this, 'block_notification'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
            'core_js' => array($this, 'block_core_js'),
            'custom_js' => array($this, 'block_custom_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>

<head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    
    ";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        // line 12
        echo "
    ";
        // line 13
        $this->displayBlock('core_css', $context, $blocks);
        // line 20
        echo "        
    ";
        // line 21
        $this->displayBlock('custom_css', $context, $blocks);
        // line 24
        echo "
</head>

<body>

    <div id=\"wrapper\">

        <nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\" style=\"margin-bottom: 0\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".sidebar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"index.html\">SB Admin v2.0</a>
            </div>
            <!-- /.navbar-header -->
            
            ";
        // line 43
        $this->displayBlock('notification', $context, $blocks);
        // line 125
        echo "                
            ";
        // line 126
        $this->displayBlock('menu', $context, $blocks);
        // line 232
        echo "        </nav>

        ";
        // line 234
        $this->displayBlock('content', $context, $blocks);
        // line 237
        echo "
    </div>
    <!-- /#wrapper -->

    ";
        // line 241
        $this->displayBlock('core_js', $context, $blocks);
        // line 249
        echo "    
    ";
        // line 250
        $this->displayBlock('custom_js', $context, $blocks);
        // line 253
        echo "
</body>

</html>
";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        // line 10
        echo "        <title>Start Bootstrap - SB Admin Version 2.0 Demo</title>
    ";
    }

    // line 13
    public function block_core_css($context, array $blocks = array())
    {
        // line 14
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        
        <!-- SB Admin CSS - Include with every page -->
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/css/sb-admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
    }

    // line 21
    public function block_custom_css($context, array $blocks = array())
    {
        // line 22
        echo "        
    ";
    }

    // line 43
    public function block_notification($context, array $blocks = array())
    {
        // line 44
        echo "                <ul class=\"nav navbar-top-links navbar-right\">
                    <!-- /.dropdown -->
                    <li class=\"dropdown\">
                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                            <i class=\"fa fa-bell fa-fw\"></i>  <i class=\"fa fa-caret-down\"></i>
                        </a>
                        <ul class=\"dropdown-menu dropdown-alerts\">
                            <li>
                                <a href=\"#\">
                                    <div>
                                        <i class=\"fa fa-comment fa-fw\"></i> New Comment
                                        <span class=\"pull-right text-muted small\">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a href=\"#\">
                                    <div>
                                        <i class=\"fa fa-twitter fa-fw\"></i> 3 New Followers
                                        <span class=\"pull-right text-muted small\">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a href=\"#\">
                                    <div>
                                        <i class=\"fa fa-envelope fa-fw\"></i> Message Sent
                                        <span class=\"pull-right text-muted small\">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a href=\"#\">
                                    <div>
                                        <i class=\"fa fa-tasks fa-fw\"></i> New Task
                                        <span class=\"pull-right text-muted small\">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a href=\"#\">
                                    <div>
                                        <i class=\"fa fa-upload fa-fw\"></i> Server Rebooted
                                        <span class=\"pull-right text-muted small\">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a class=\"text-center\" href=\"#\">
                                    <strong>See All Alerts</strong>
                                    <i class=\"fa fa-angle-right\"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-alerts -->
                    </li>
                    <!-- /.dropdown -->
                    <li class=\"dropdown\">
                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                            <i class=\"fa fa-user fa-fw\"></i>  <i class=\"fa fa-caret-down\"></i>
                        </a>
                        <ul class=\"dropdown-menu dropdown-user\">
                            <li><a href=\"#\"><i class=\"fa fa-user fa-fw\"></i> User Profile</a>
                            </li>
                            <li><a href=\"#\"><i class=\"fa fa-gear fa-fw\"></i> Settings</a>
                            </li>
                            <li class=\"divider\"></li>
                            <li><a href=\"login.html\"><i class=\"fa fa-sign-out fa-fw\"></i> Logout</a>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->
            ";
    }

    // line 126
    public function block_menu($context, array $blocks = array())
    {
        // line 127
        echo "                <div class=\"navbar-default navbar-static-side\" role=\"navigation\">
                    <div class=\"sidebar-collapse\">
                        <ul class=\"nav\" id=\"side-menu\">
                            <li class=\"sidebar-search\">
                                <div class=\"input-group custom-search-form\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
                                    <span class=\"input-group-btn\">
                                    <button class=\"btn btn-default\" type=\"button\">
                                        <i class=\"fa fa-search\"></i>
                                    </button>
                                </span>
                                </div>
                                <!-- /input-group -->
                            </li>
                            <li>
                                <a href=\"index.html\"><i class=\"fa fa-dashboard fa-fw\"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href=\"#\"><i class=\"fa fa-bar-chart-o fa-fw\"></i> Charts<span class=\"fa arrow\"></span></a>
                                <ul class=\"nav nav-second-level\">
                                    <li>
                                        <a href=\"flot.html\">Flot Charts</a>
                                    </li>
                                    <li>
                                        <a href=\"morris.html\">Morris.js Charts</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href=\"tables.html\"><i class=\"fa fa-table fa-fw\"></i> Tables</a>
                            </li>
                            <li>
                                <a href=\"forms.html\"><i class=\"fa fa-edit fa-fw\"></i> Forms</a>
                            </li>
                            <li>
                                <a href=\"#\"><i class=\"fa fa-wrench fa-fw\"></i> UI Elements<span class=\"fa arrow\"></span></a>
                                <ul class=\"nav nav-second-level\">
                                    <li>
                                        <a href=\"panels-wells.html\">Panels and Wells</a>
                                    </li>
                                    <li>
                                        <a href=\"buttons.html\">Buttons</a>
                                    </li>
                                    <li>
                                        <a href=\"notifications.html\">Notifications</a>
                                    </li>
                                    <li>
                                        <a href=\"typography.html\">Typography</a>
                                    </li>
                                    <li>
                                        <a href=\"grid.html\">Grid</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href=\"#\"><i class=\"fa fa-sitemap fa-fw\"></i> Multi-Level Dropdown<span class=\"fa arrow\"></span></a>
                                <ul class=\"nav nav-second-level\">
                                    <li>
                                        <a href=\"#\">Second Level Item</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Second Level Item</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Third Level <span class=\"fa arrow\"></span></a>
                                        <ul class=\"nav nav-third-level\">
                                            <li>
                                                <a href=\"#\">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">Third Level Item</a>
                                            </li>
                                        </ul>
                                        <!-- /.nav-third-level -->
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href=\"#\"><i class=\"fa fa-files-o fa-fw\"></i> Sample Pages<span class=\"fa arrow\"></span></a>
                                <ul class=\"nav nav-second-level\">
                                    <li>
                                        <a href=\"blank.html\">Blank Page</a>
                                    </li>
                                    <li>
                                        <a href=\"login.html\">Login Page</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                        </ul>
                        <!-- /#side-menu -->
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            ";
    }

    // line 234
    public function block_content($context, array $blocks = array())
    {
        // line 235
        echo "            
        ";
    }

    // line 241
    public function block_core_js($context, array $blocks = array())
    {
        // line 242
        echo "        <!-- Core Scripts - Include with every page -->
        <script src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/plugins/metisMenu/jquery.metisMenu.js"), "html", null, true);
        echo "\"></script>
        <!-- SB Admin Scripts - Include with every page -->
        <script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/sb-admin.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 250
    public function block_custom_js($context, array $blocks = array())
    {
        // line 251
        echo "        
    ";
    }

    public function getTemplateName()
    {
        return "AdminBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  374 => 251,  371 => 250,  365 => 247,  360 => 245,  356 => 244,  352 => 243,  349 => 242,  346 => 241,  341 => 235,  338 => 234,  230 => 127,  227 => 126,  143 => 44,  140 => 43,  135 => 22,  126 => 18,  120 => 15,  115 => 14,  112 => 13,  107 => 10,  104 => 9,  96 => 253,  94 => 250,  91 => 249,  83 => 237,  77 => 232,  75 => 126,  70 => 43,  49 => 24,  47 => 21,  44 => 20,  42 => 13,  39 => 12,  37 => 9,  27 => 1,  132 => 21,  128 => 60,  122 => 58,  106 => 44,  97 => 41,  93 => 40,  89 => 241,  85 => 38,  81 => 234,  74 => 36,  72 => 125,  43 => 8,  40 => 7,  33 => 4,  30 => 3,);
    }
}
