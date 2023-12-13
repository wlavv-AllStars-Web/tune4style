<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__c7ea39ab3236466a1c57ebd6aa0161a6 */
class __TwigTemplate_746d4b439f38041ea3459d31c03abc0d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Orders • Tune4Style</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminOrders';
    var iso_user = 'en';
    var lang_is_rtl = '0';
    var full_language_code = 'en-us';
    var full_cldr_language_code = 'en-US';
    var country_iso_code = 'PT';
    var _PS_VERSION_ = '8.1.2';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your store.';
    var order_number_msg = 'Order number: ';
    var total_msg = 'Total: ';
    var from_msg = 'From: ';
    var see_order_msg = 'View this order';
    var new_customer_msg = 'A new customer registered on your store.';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your store.';
    var see_msg = 'Read this message';
    var token = 'df688ea71849cc9b2447a15efbca44a4';
    var currentIndex = 'index.php?controller=AdminOrders';
    var employee_token = 'c835f22ed9ab89f7d4941010cb935b93';
    var choose_language_translate = 'Choose language:';
    var default_language = '1';
    var admin_modules_link = '/admin3355/index.php/improve/modules/manage?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q';
    var admin_notification_get_link = '/admin3355/index.php/common/notifications?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q';
    var admin_notification_push_link = adminNotificationPushLink = '/admin3355/index.php/common/notifications/ack?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q';
    var tab_modules_list = '';
    var update_success_msg = 'Update successful';
    var search_product_msg = 'Search for a product';
  </script>";
        // line 44
        echo "



<link
      rel=\"preload\"
      href=\"/admin3355/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/admin3355/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin3355/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/psgdpr/views/css/overrideAddress.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin3355/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin3355\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin3355\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};";
        // line 69
        echo "
var psgdprNoAddresses = \"Customer data deleted by the official GDPR module.\";
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admin3355/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.1.2\"></script>
<script type=\"text/javascript\" src=\"/admin3355/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.1.2\"></script>
<script type=\"text/javascript\" src=\"/admin3355/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/modules/psgdpr/views/js/overrideAddress.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin3355/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/admin3355/index.php/common/notifications?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 105
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-en adminorders\"
  data-base-url=\"/admin3355/index.php\"  data-token=\"wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://tune4style.local/admin3355/index.php?controller=AdminDashboard&amp;token=749b2a2afa7a89683c70cd5ec66cb8be\"></a>
      <span id=\"shop_version\">8.1.2</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://tune4style.local/admin3355/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=1cf199daf0ae8bd13a19c691f59d33f7\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://tune4style.local/admin3355/index.php/improve/modules/manage?token=ba5a9b61cc9438037cbf90b5917ab782\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://tune4style.local/admin3355/index.php/sell/catalog/categories/new?token=ba5a9b61cc9438037cbf90b5917ab782\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://tune4style.local/admin3355/index.php/sell/catalog/products-v2/create?token=ba5a9b61cc9438037cbf90b5917ab782\"
                 data-item=\"New product\"
      >New product</a>
          <a class=\"dropdown-item quick-row-li";
        // line 142
        echo "nk \"
         href=\"http://tune4style.local/admin3355/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=a8f8f26710f17c9e0b1e1f8ba52d9589\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link  active\"
         href=\"http://tune4style.local/admin3355/index.php/sell/orders?token=ba5a9b61cc9438037cbf90b5917ab782\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-remove-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-method=\"remove\"
        data-quicklink-id=\"1\"
        data-rand=\"193\"
        data-icon=\"icon-AdminParentOrders\"
        data-url=\"index.php/sell/orders\"
        data-post-link=\"http://tune4style.local/admin3355/index.php?controller=AdminQuickAccesses&token=32a80bc7d8959047966678ae38cd4182\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Orders - List\"
      >
        <i class=\"material-icons\">remove_circle_outline</i>
        Remove from Quick Acess
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://tune4style.local/admin3355/index.php?controller=AdminQuickAccesses&token=32a80bc7d8959047966678ae38cd4182\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin3355/index.php?controller=AdminSearch&amp;token=898fa79b3e6e17eaa83c1789fd869910\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query";
        // line 183
        echo "\" value=\"\" placeholder=\"Search (e.g.: product reference, customer name…)\" aria-label=\"Searchbar\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Everywhere
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Everywhere</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog</a>
        <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Name\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Customers by name</a>
        <a class=\"dropdown-item\" data-item=\"Customers by ip address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Customers by IP address</a>
        <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Orders</a>
        <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice number\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoices</a>
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carts</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a";
        // line 197
        echo ">
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Cancel</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Quick Access</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://tune4style.local/admin3355/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=1cf199daf0ae8bd13a19c691f59d33f7\"
             data-item=\"Catalog evaluation\"
    >Catalog evaluation</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://tune4style.local/admin3355/index.php/improve/modules/manage?token=ba5a9b61cc9438037cbf90b5917ab782\"
             data-item=\"Installed modules\"
    >Installed modules</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://tune4style.local/admin3355/index.php/sell/catalog/categories/new?token=ba5a9b61cc9438037cbf90b5917ab782\"
             data-item=\"New category\"
    >New category</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://tune4style.local/admin3355/index.php/sell/catalog/products-v2/create?token=ba5a9b61cc9438037cbf90b5917ab782\"
             data-item=\"New product\"
    >New product</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://tune4style.local/admin3355/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=a8f8f26710f17c9e0b1e1f8ba52d9589\"
             data-item=\"New voucher\"
    >New voucher</a>
      <a class=\"dropdown-item quick-row-link active\"
       href=\"http://tune4style.local/admin3355/index.php/sell/orders?token=ba5a9b61cc9438037cbf90b5917ab782\"
             data-item=\"Orders\"
    >Orders</a>
    <div clas";
        // line 240
        echo "s=\"dropdown-divider\"></div>
      <a id=\"quick-remove-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-method=\"remove\"
      data-quicklink-id=\"1\"
      data-rand=\"127\"
      data-icon=\"icon-AdminParentOrders\"
      data-url=\"index.php/sell/orders\"
      data-post-link=\"http://tune4style.local/admin3355/index.php?controller=AdminQuickAccesses&token=32a80bc7d8959047966678ae38cd4182\"
      data-prompt-text=\"Please name this shortcut:\"
      data-link=\"Orders - List\"
    >
      <i class=\"material-icons\">remove_circle_outline</i>
      Remove from Quick Acess
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://tune4style.local/admin3355/index.php?controller=AdminQuickAccesses&token=32a80bc7d8959047966678ae38cd4182\">
    <i class=\"material-icons\">settings</i>
    Manage your quick accesses
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://tune4style.local/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my store</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orde";
        // line 289
        echo "rs-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Orders<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Customers<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Have you checked your <strong><a href=\"http://tune4style.local/admin3355/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=9e4d44cb25de17b9893fbc5102a66680\">abandoned carts</a></strong>?<br>Your next order could be hiding there!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Are you active on social media these days?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                    ";
        // line 340
        echo "                <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new message for now.<br>
              Seems like all your customers are happy :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://tune4style.local/img/pr/default.jpg\" alt=\"System\" /></span>
        <span class=\"employee_profile\">Welcome back System</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin3355/index.php/configure/advanced/employees/1/edit?_token=wvGVHbTfA3twh7VwkKKq";
        // line 388
        echo "RoDqcUv5InjyhgYXI5Dl00Q\">
      <i class=\"material-icons\">edit</i>
      <span>Your profile</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://tune4style.local/admin3355/index.php?controller=AdminLogin&amp;logout=1&amp;token=0d1377965d1fde21ab4c2d5726676001\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sign out</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin3355/index.php/configure/advanced/employees/toggle-navigation?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://tune4style.local/admin3355/index.php?controller=AdminDashboard&amp;token=749b2a2afa7a89683c70cd5ec66cb8be\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.2</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://tune4style.local/admin3355/index.php?controller=AdminDashboard&amp;token=749b2a2afa7a89683c70cd5ec66cb8be\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                              ";
        // line 442
        echo "                        
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin3355/index.php/sell/orders/?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/admin3355/index.php/sell/orders/?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin3355/index.php/sell/orders/invoices/?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                     ";
        // line 472
        echo "         
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin3355/index.php/sell/orders/credit-slips/?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin3355/index.php/sell/orders/delivery-slips/?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://tune4style.local/admin3355/index.php?controller=AdminCarts&amp;token=9e4d44cb25de17b9893fbc5102a66680\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin3355/index.php/sell/catalog/products?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\" class=\"link\">
                      <i class=\"mat";
        // line 503
        echo "erial-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admin3355/index.php/sell/catalog/products?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin3355/index.php/sell/catalog/categories?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin3355/index.php/sell/catalog/monitoring/?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\" class=\"link\"> Monitoring
                                </a>
            ";
        // line 534
        echo "                  </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://tune4style.local/admin3355/index.php?controller=AdminAttributesGroups&amp;token=3fa010783e0ffc3280dcebba82ac8a39\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin3355/index.php/sell/catalog/brands/?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin3355/index.php/sell/attachments/?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://tune4style.local/admin3355/index.php?con";
        // line 564
        echo "troller=AdminCartRules&amp;token=a8f8f26710f17c9e0b1e1f8ba52d9589\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin3355/index.php/sell/stocks/?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin3355/index.php/sell/customers/?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
  ";
        // line 597
        echo "                              <a href=\"/admin3355/index.php/sell/customers/?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin3355/index.php/sell/addresses/?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://tune4style.local/admin3355/index.php?controller=AdminCustomerThreads&amp;token=46192b098373a5ccc4ec4c2caa67e8c4\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                        ";
        // line 628
        echo "                                    
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://tune4style.local/admin3355/index.php?controller=AdminCustomerThreads&amp;token=46192b098373a5ccc4ec4c2caa67e8c4\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin3355/index.php/sell/customer-service/order-messages/?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://tune4style.local/admin3355/index.php?controller=AdminReturn&amp;token=7ffdd44c13c8b4e431b1a6470d527942\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://tune4style.local/admin3355/index.php?controller=AdminStats&amp;token=1cf199daf0ae8bd13a19c691f59d33f7\" class=\"link\">
           ";
        // line 658
        echo "           <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"130\" id=\"subtab-AdminProcurementHome\">
                    <a href=\"http://tune4style.local/admin3355/index.php?controller=AdminProcurementHome&amp;token=bd60fd6de1d0d833718aa0baaa47d239\" class=\"link\">
                      <i class=\"material-icons mi-article\">article</i>
                      <span>
                      Procurement
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin3355/index.php/improve/modules/manage?_token=wv";
        // line 697
        echo "GVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin3355/index.php/improve/modules/manage?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/admin3355/index.php/improve/design/themes/?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                  ";
        // line 728
        echo "  keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"125\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/admin3355/index.php/improve/design/themes/?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin3355/index.php/improve/design/mail_theme/?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin3355/index.php/improve/design/cms-pages/?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" dat";
        // line 759
        echo "a-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin3355/index.php/improve/design/modules/positions/?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://tune4style.local/admin3355/index.php?controller=AdminImages&amp;token=bc51ac7301aa8cb9da0d6f19d2818862\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin3355/index.php/modules/link-widget/list?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\" class=\"link\"> Link List
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://tune4style.local/admin3355/index.php?controller=AdminCarriers&amp;token=e816b893a401306a9f6e89594dc67890\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
            ";
        // line 790
        echo "          Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://tune4style.local/admin3355/index.php?controller=AdminCarriers&amp;token=e816b893a401306a9f6e89594dc67890\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin3355/index.php/improve/shipping/preferences/?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin3355/index.php/improve/payment/payment_methods?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\" class=\"link\">
             ";
        // line 821
        echo "         <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/admin3355/index.php/improve/payment/payment_methods?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin3355/index.php/improve/payment/preferences?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin3355/index.php/improve";
        // line 853
        echo "/international/localization/?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/admin3355/index.php/improve/international/localization/?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin3355/index.php/improve/international/zones/?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                              ";
        // line 883
        echo "  <a href=\"/admin3355/index.php/improve/international/taxes/?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin3355/index.php/improve/international/translations/settings?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin3355/index.php/configure/shop/preferences/preferences?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                     ";
        // line 920
        echo "       </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin3355/index.php/configure/shop/preferences/preferences?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin3355/index.php/configure/shop/order-preferences/?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin3355/index.php/configure/shop/product-preferences/?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
              ";
        // line 950
        echo "                  <a href=\"/admin3355/index.php/configure/shop/customer-preferences/?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin3355/index.php/configure/shop/contacts/?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admin3355/index.php/configure/shop/seo-urls/?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://tune4style.local/admin3355/index.php?controller=AdminSearchConf&amp;token=32e5005f49642591dca64077a660721a\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
       ";
        // line 981
        echo "           
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin3355/index.php/configure/advanced/system-information/?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/admin3355/index.php/configure/advanced/system-information/?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin3355/index.php/configure/advanced/performance/?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\" class=\"link\"> Performance
                                </a>
                              </li>

                        ";
        // line 1011
        echo "                                                          
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin3355/index.php/configure/advanced/administration/?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin3355/index.php/configure/advanced/emails/?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/admin3355/index.php/configure/advanced/import/?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin3355/index.php/configure/advanced/employees/?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\" class=\"link\"> Team
                      ";
        // line 1040
        echo "          </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin3355/index.php/configure/advanced/sql-requests/?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin3355/index.php/configure/advanced/logs/?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin3355/index.php/configure/advanced/webservice-keys/?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-lev";
        // line 1070
        echo "eltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin3355/index.php/configure/advanced/feature-flags/?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/admin3355/index.php/configure/advanced/security/?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Orders</li>
          
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
  
      <h1 class=\"title\">
      Orders    </h1>
  

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/admin3355/index.php/sell/orders/new?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\"                  title=\"Add new order\"                                  >
                  <i class=\"material-icons\">add_circle_outline</i>                  Add new order
                </a>
                ";
        // line 1122
        echo "                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin3355/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminOrders%253Fversion%253D8.1.2%2526country%253Den/Help?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\"
                   id=\"product_form_open_help\"
                >
                  Help
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add\"
              href=\"/admin3355/index.php/sell/orders/new?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\"              title=\"Add new order\"            >
              Add new order
              <i class=\"material-icons\">add_circle_outline</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Help\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/admin3355/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminOrders%253Fversion%253D8.1.2%2526country%253Den/Help?_token=wvGVHbTfA3twh7VwkKKqRoDqcUv5InjyhgYXI5Dl00Q\"
            >
              Help
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=";
        // line 1169
        echo "\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1180
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"mt-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"mt-2\">
    Thank you.
  </p>
  <a href=\"http://tune4style.local/admin3355/index.php?controller=AdminDashboard&amp;token=749b2a2afa7a89683c70cd5ec66cb8be\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Back
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1214
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 105
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1180
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1214
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__c7ea39ab3236466a1c57ebd6aa0161a6";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1377 => 1214,  1356 => 1180,  1345 => 105,  1336 => 1214,  1296 => 1180,  1283 => 1169,  1234 => 1122,  1180 => 1070,  1148 => 1040,  1117 => 1011,  1085 => 981,  1052 => 950,  1020 => 920,  981 => 883,  949 => 853,  915 => 821,  882 => 790,  849 => 759,  816 => 728,  783 => 697,  742 => 658,  710 => 628,  677 => 597,  642 => 564,  610 => 534,  577 => 503,  544 => 472,  512 => 442,  456 => 388,  406 => 340,  353 => 289,  302 => 240,  257 => 197,  241 => 183,  198 => 142,  156 => 105,  118 => 69,  91 => 44,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__c7ea39ab3236466a1c57ebd6aa0161a6", "");
    }
}
