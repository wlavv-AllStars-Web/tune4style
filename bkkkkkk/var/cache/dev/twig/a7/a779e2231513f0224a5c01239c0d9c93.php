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

/* __string_template__5708f069ec33c555a6974469950a1ec4 */
class __TwigTemplate_ff7d63a01426cf68f51a79dd42a563ec extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__5708f069ec33c555a6974469950a1ec4"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__5708f069ec33c555a6974469950a1ec4"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pt\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Gestor de módulos • Tune4Style</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModulesManage';
    var iso_user = 'pt';
    var lang_is_rtl = '0';
    var full_language_code = 'pt-pt';
    var full_cldr_language_code = 'pt-PT';
    var country_iso_code = 'PT';
    var _PS_VERSION_ = '8.1.1';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Foi efectuada uma nova encomenda na sua loja.';
    var order_number_msg = 'Número da encomenda: ';
    var total_msg = 'Total: ';
    var from_msg = 'De: ';
    var see_order_msg = 'Ver esta encomenda';
    var new_customer_msg = 'Um novo cliente registou-se na sua loja.';
    var customer_name_msg = 'Nome do cliente: ';
    var new_msg = 'Foi publicada uma nova mensagem na sua loja.';
    var see_msg = 'Ler esta mensagem';
    var token = '787747ebbffb17013a7f17e27b3f5a54';
    var currentIndex = 'index.php?controller=AdminModulesManage';
    var employee_token = '34fb2e2b1f398227a6989764f5bc0a18';
    var choose_language_translate = 'Escolher idioma:';
    var default_language = '1';
    var admin_modules_link = '/admin3355/index.php/improve/modules/manage?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU';
    var admin_notification_get_link = '/admin3355/index.php/common/notifications?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU';
    var admin_notification_push_link = adminNotificationPushLink = '/admin3355/index.php/common/notifications/ack?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU';
    var tab_modules_list = '';
    var update_success_msg = 'Atualizado com sucesso';
    var search";
        // line 43
        echo "_product_msg = 'Pesquisar um produto';
  </script>



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
      <link href=\"/admin3355/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin3355\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin3355\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
var show_new_custo";
        // line 69
        echo "mers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admin3355/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.1.1\"></script>
<script type=\"text/javascript\" src=\"/admin3355/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.1.1\"></script>
<script type=\"text/javascript\" src=\"/admin3355/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
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
      notificationGetUrl: '/admin3355/index.php/common/notifications?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 102
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-pt adminmodulesmanage developer-mode\"
  data-base-url=\"/admin3355/index.php\"  data-token=\"rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://tune4style.local/admin3355/index.php?controller=AdminDashboard&amp;token=2ad89a3014a2eb643c4f239e3366c816\"></a>
      <span id=\"shop_version\">8.1.1</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acesso Rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://tune4style.local/admin3355/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=c34ed3ce55516fdef4cc22f73cc2e9fc\"
                 data-item=\"Avaliação do catálogo\"
      >Avaliação do catálogo</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://tune4style.local/admin3355/index.php/sell/orders?token=f22330906868dc9bdaf75dc0e8fc773d\"
                 data-item=\"Encomendas\"
      >Encomendas</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://tune4style.local/admin3355/index.php/improve/modules/manage?token=f22330906868dc9bdaf75dc0e8fc773d\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://tune4style.local/admin3355/index.php/sell/catalog/categories/new?token=f22330906868dc9bdaf75dc0e8fc773d\"
                 data-item=\"Nova Categoria\"
      >Nova Categoria</a>
          <a class=\"dropdown-item quick-ro";
        // line 139
        echo "w-link new-product-button\"
         href=\"http://tune4style.local/admin3355/index.php/sell/catalog/products-v2/create?token=f22330906868dc9bdaf75dc0e8fc773d\"
                 data-item=\"Novo produto\"
      >Novo produto</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://tune4style.local/admin3355/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=6dd97ad4c586bc96ba9169886470a950\"
                 data-item=\"Novo Voucher\"
      >Novo Voucher</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"25\"
        data-icon=\"icon-AdminModulesSf\"
        data-method=\"add\"
        data-url=\"index.php/improve/modules/manage?-yfh83G-O1bwB_xjfTuC_JuVeuhRU\"
        data-post-link=\"http://tune4style.local/admin3355/index.php?controller=AdminQuickAccesses&token=87dee63dda5da3b8d916e19c7315f813\"
        data-prompt-text=\"Atribua um nome a este atalho:\"
        data-link=\"M&oacute;dulos - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Adicionar página atual ao «Acesso Rápido»
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://tune4style.local/admin3355/index.php?controller=AdminQuickAccesses&token=87dee63dda5da3b8d916e19c7315f813\">
      <i class=\"material-icons\">settings</i>
      Gerir os seus acessos rápidos
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
      action=\"/admin3355/index.php?controller=AdminSearch&amp;token=dd8c5e81ca5bfffd57c981b6147c57a0\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <inpu";
        // line 179
        echo "t type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Pesquisar (por ex.: referência do produto, nome do cliente…)\" aria-label=\"Barra de pesquisa\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Em todo o lado
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Em todo o lado\" href=\"#\" data-value=\"0\" data-placeholder=\"O que procura?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Em todo o lado</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catálogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nome do produto, referência, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catálogo</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por nome\" href=\"#\" data-value=\"2\" data-placeholder=\"Nome\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clientes por nome</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por endereço IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clientes por endereço IP</a>
        <a class=\"dropdown-item\" data-item=\"Encomendas\" href=\"#\" data-value=\"3\" data-placeholder=\"Nº da Encomenda\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Encomendas</a>
        <a class=\"dropdown-item\" data-item=\"Faturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Número da fatura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Faturas</a>
        <a class=\"dropdown-item\" data-item=\"Carrinhos\" href=\"#\" data-value=\"5\" data-placeholder=\"ID do Carrinho\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carrinhos</a>
        <a class=\"dropdown-item\" data-item=";
        // line 193
        echo "\"Módulos\" href=\"#\" data-value=\"7\" data-placeholder=\"Nome do Módulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Módulos</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">PESQUISAR</span><i class=\"material-icons\">search</i></button>
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
            <button class=\"component-search-cancel d-none\">Cancelar</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Acesso Rápido</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://tune4style.local/admin3355/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=c34ed3ce55516fdef4cc22f73cc2e9fc\"
             data-item=\"Avaliação do catálogo\"
    >Avaliação do catálogo</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://tune4style.local/admin3355/index.php/sell/orders?token=f22330906868dc9bdaf75dc0e8fc773d\"
             data-item=\"Encomendas\"
    >Encomendas</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://tune4style.local/admin3355/index.php/improve/modules/manage?token=f22330906868dc9bdaf75dc0e8fc773d\"
             data-item=\"Módulos instalados\"
    >Módulos instalados</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://tune4style.local/admin3355/index.php/sell/catalog/categories/new?token=f22330906868dc9bdaf75dc0e8fc773d\"
             data-item=\"Nova Categoria\"
    >Nova Categoria</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://tune4style.local/admin3355/index.php/sell/catalog/products-v2/create?token=f22330906868dc9bdaf75dc0e8fc773d\"
             data-item=\"Novo produto\"
    >Novo produto</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://tune4style.loc";
        // line 233
        echo "al/admin3355/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=6dd97ad4c586bc96ba9169886470a950\"
             data-item=\"Novo Voucher\"
    >Novo Voucher</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"191\"
      data-icon=\"icon-AdminModulesSf\"
      data-method=\"add\"
      data-url=\"index.php/improve/modules/manage?-yfh83G-O1bwB_xjfTuC_JuVeuhRU\"
      data-post-link=\"http://tune4style.local/admin3355/index.php?controller=AdminQuickAccesses&token=87dee63dda5da3b8d916e19c7315f813\"
      data-prompt-text=\"Atribua um nome a este atalho:\"
      data-link=\"M&oacute;dulos - Lista\"
    >
      <i class=\"material-icons\">add_circle</i>
      Adicionar página atual ao «Acesso Rápido»
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://tune4style.local/admin3355/index.php?controller=AdminQuickAccesses&token=87dee63dda5da3b8d916e19c7315f813\">
    <i class=\"material-icons\">settings</i>
    Gerir os seus acessos rápidos
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>A sua loja está em modo de depuração.</strong></p><p class=&quot;text-left&quot;>Todos os erros PHP e mensagens são apresentados. Quando não necessitar mais, &lt;strong&gt;desligue&lt;/strong&gt; este modo.</p>\"
             href=\"/admin3355/index.php/configure/advanced/performance/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Modo de descoberta de erros (debug)</span>
          </a>
        </div>
      
      
      <d";
        // line 276
        echo "iv class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://tune4style.local/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Ver a minha loja</span>
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
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Encomendas<span id=\"_nb_new_orders_\"></span>
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
              Clientes<span id=\"_nb_new_customers_\"></span>
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
              Mensagens<span id=\"_nb_new_mess";
        // line 327
        echo "ages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Nenhuma nova encomenda por enquanto :(<br>
              Verificou os seus <strong><a href=\"http://tune4style.local/admin3355/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=18b14967cca20eeb244d673e1efb1a8f\">carrinhos abandonados</a></strong>?<br>A sua próxima encomenda poderá estar escondida aí!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Nenhum novo cliente por enquanto :(<br>
              Tem estado ativo nas redes sociais estes últimos dias?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Sem nova mensagem por enquanto.<br>
              Ao que parece, todos os seus clientes estão satisfeitos :)
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
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registado <strong>_date_add_</strong>
    </a>
  </script>

  <script typ";
        // line 374
        echo "e=\"text/html\" id=\"message-notification-template\">
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
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://tune4style.local/img/pr/default.jpg\" alt=\"Ricardo\" /></span>
        <span class=\"employee_profile\">Bem-vindo de volta Ricardo</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin3355/index.php/configure/advanced/employees/3/edit?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\">
      <i class=\"material-icons\">edit</i>
      <span>O seu perfil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://tune4style.local/admin3355/index.php?controller=AdminLogin&amp;logout=1&amp;token=3cd0af06acc248787ec1ab8098c65e5f\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Fechar sessão</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin3355/index.php/configure/advanced/employees/toggle-navigation?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </s";
        // line 420
        echo "pan>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://tune4style.local/admin3355/index.php?controller=AdminDashboard&amp;token=2ad89a3014a2eb643c4f239e3366c816\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.1</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://tune4style.local/admin3355/index.php?controller=AdminDashboard&amp;token=2ad89a3014a2eb643c4f239e3366c816\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Painel de controlo</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vender</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin3355/index.php/sell/orders/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Encomendas
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                           ";
        // line 463
        echo "                           
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/admin3355/index.php/sell/orders/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Encomendas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin3355/index.php/sell/orders/invoices/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Faturas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin3355/index.php/sell/orders/credit-slips/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Notas de Crédito
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin3355/index.php/sell/orders/delivery-slips/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Notas de Entrega
                                </a>
                              </li>

      ";
        // line 495
        echo "                                                                            
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://tune4style.local/admin3355/index.php?controller=AdminCarts&amp;token=18b14967cca20eeb244d673e1efb1a8f\" class=\"link\"> Carrinhos de Compras
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin3355/index.php/sell/catalog/products?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catálogo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admin3355/index.php/sell/catalog/products?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Produtos
        ";
        // line 525
        echo "                        </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin3355/index.php/sell/catalog/categories?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Categorias
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin3355/index.php/sell/catalog/monitoring/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Monitorização
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://tune4style.local/admin3355/index.php?controller=AdminAttributesGroups&amp;token=14530b5c12c6fc134c6136cbcda9d4d2\" class=\"link\"> Atributos e Características
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/ad";
        // line 556
        echo "min3355/index.php/sell/catalog/brands/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Marcas e Fornecedores
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin3355/index.php/sell/attachments/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Ficheiros
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://tune4style.local/admin3355/index.php?controller=AdminCartRules&amp;token=6dd97ad4c586bc96ba9169886470a950\" class=\"link\"> Descontos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin3355/index.php/sell/stocks/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Inventário
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                ";
        // line 588
        echo "      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin3355/index.php/sell/customers/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clientes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admin3355/index.php/sell/customers/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin3355/index.php/sell/addresses/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Endereços
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>";
        // line 618
        echo "
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://tune4style.local/admin3355/index.php?controller=AdminCustomerThreads&amp;token=2a71768d1bf31ca20bb3d07fe6164e2e\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Apoio ao Cliente
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://tune4style.local/admin3355/index.php?controller=AdminCustomerThreads&amp;token=2a71768d1bf31ca20bb3d07fe6164e2e\" class=\"link\"> Apoio ao Cliente
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin3355/index.php/sell/customer-service/order-messages/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Mensagens de Encomendas
                                <";
        // line 647
        echo "/a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://tune4style.local/admin3355/index.php?controller=AdminReturn&amp;token=fd8e089dc65b3020f9495a802467ec3a\" class=\"link\"> Mercadorias Devolvidas
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://tune4style.local/admin3355/index.php?controller=AdminStats&amp;token=c34ed3ce55516fdef4cc22f73cc2e9fc\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Estatísticas
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Melhorar</span>
            </li>

                              
                  
                                                   ";
        // line 687
        echo "   
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin3355/index.php/improve/modules/manage?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Módulos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin3355/index.php/improve/modules/manage?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Gestor de módulos
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/admin3355/index.php/improve/design/themes/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\">
                      <i class=\"ma";
        // line 716
        echo "terial-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"127\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/admin3355/index.php/improve/design/themes/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Tema Gráfico e Logótipo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin3355/index.php/improve/design/mail_theme/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Template de e-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin3355/index.php/improve/design/cms-pages/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Pági";
        // line 745
        echo "nas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin3355/index.php/improve/design/modules/positions/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Posições
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://tune4style.local/admin3355/index.php?controller=AdminImages&amp;token=c0fd649c02e0729155a44c106d0b01dd\" class=\"link\"> Definições de Imagem
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin3355/index.php/modules/link-widget/list?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Lista de ligações
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" da";
        // line 779
        echo "ta-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://tune4style.local/admin3355/index.php?controller=AdminCarriers&amp;token=15ab78e5a9bfb5d28881358624d49b62\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Envio
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://tune4style.local/admin3355/index.php?controller=AdminCarriers&amp;token=15ab78e5a9bfb5d28881358624d49b62\" class=\"link\"> Transportadoras
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin3355/index.php/improve/shipping/preferences/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Preferências
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
    ";
        // line 810
        echo "                                                  
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin3355/index.php/improve/payment/payment_methods?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Pagamento
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/admin3355/index.php/improve/payment/payment_methods?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Métodos de Pagamento
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin3355/index.php/improve/payment/preferences?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Preferências
                                </a>
                              </li>

                                                                              </ul>
  ";
        // line 840
        echo "                                      </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin3355/index.php/improve/international/localization/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\">
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
                                <a href=\"/admin3355/index.php/improve/international/localization/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Localização
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin3355/index.php/improve/international/zones/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Localizações
                              ";
        // line 869
        echo "  </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin3355/index.php/improve/international/taxes/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> IVA
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin3355/index.php/improve/international/translations/settings?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Traduções
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin3355/index.php/configure/shop/preferences/preferences?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
 ";
        // line 908
        echo "                     Parâmetros da Loja
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin3355/index.php/configure/shop/preferences/preferences?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Geral
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin3355/index.php/configure/shop/order-preferences/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Definições da Encomenda
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin3355/index.php/configure/shop/product-preferences/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Produtos
                         ";
        // line 936
        echo "       </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admin3355/index.php/configure/shop/customer-preferences/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Definições do cliente
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin3355/index.php/configure/shop/contacts/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Contacto
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admin3355/index.php/configure/shop/seo-urls/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Tráfego e SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://tune4style.local/admin3355/";
        // line 967
        echo "index.php?controller=AdminSearchConf&amp;token=701d1fdeb69bcb99aadac15e009e821d\" class=\"link\"> Pesquisar
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin3355/index.php/configure/advanced/system-information/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Parâmetros Avançados
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/admin3355/index.php/configure/advanced/system-information/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Informação
                                </a>
                              </li>

                                                                                  
                              
                                                            
       ";
        // line 999
        echo "                       <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin3355/index.php/configure/advanced/performance/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Desempenho
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin3355/index.php/configure/advanced/administration/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Administração
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin3355/index.php/configure/advanced/emails/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/admin3355/index.php/configure/advanced/import/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Importar
                                </a>
                              </li>

                                                                                  
                ";
        // line 1029
        echo "              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin3355/index.php/configure/advanced/employees/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Empregados
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin3355/index.php/configure/advanced/sql-requests/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Base de dados
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin3355/index.php/configure/advanced/logs/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Registos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin3355/index.php/configure/advanced/webservice-keys/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Webservice
                                </a>
                              </li>

  ";
        // line 1060
        echo "                                                                                                                                                                                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin3355/index.php/configure/advanced/feature-flags/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Características novas e experimentais
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/admin3355/index.php/configure/advanced/security/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Segurança
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"116\" id=\"tab-DEFAULT\">
                <span class=\"title\">Mais</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"145\" id=\"subtab-AdminSelfUpgrade\">
                    <a href=\"http://tune4style.local/admin3355/index.php?controller=AdminSelfUpgrade&amp;token=c494f1264dc8cec9d29";
        // line 1093
        echo "d689e409f9964\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      1-Click Upgrade
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"130\" id=\"tab-AdminYbcBlogFree\">
                <span class=\"title\">Blog</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"131\" id=\"subtab-AdminYbcBlogFreePost\">
                    <a href=\"http://tune4style.local/admin3355/index.php?controller=AdminYbcBlogFreePost&amp;token=05697f298a4c710d051655ecc9f3e4e4\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Blog posts
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"132\" id=\"subtab-AdminYbcBlogFreeCategory\">
                    <a href=\"ht";
        // line 1133
        echo "tp://tune4style.local/admin3355/index.php?controller=AdminYbcBlogFreeCategory&amp;token=283c0cb4e3b9883272925bffd8b6343b\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Blog categories
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"133\" id=\"subtab-AdminYbcBlogFreeComment\">
                    <a href=\"http://tune4style.local/admin3355/index.php?controller=AdminYbcBlogFreeComment&amp;token=834afdffab35639baf5999a4c383bf8f\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Blog comments
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"134\" id=\"subtab-AdminYbcBlogFreeSlider\">
                    <a href=\"http://tune4style.local/admin3355/index.php?controller=AdminYbcBlogFreeSlider&amp;token=7f136fcfdeae91c2f9632cbb02b4ae27\" class=\"link\">
                      <i cla";
        // line 1164
        echo "ss=\"material-icons mi-extension\">extension</i>
                      <span>
                      Blog Slider
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"135\" id=\"subtab-AdminYbcBlogFreeGallery\">
                    <a href=\"http://tune4style.local/admin3355/index.php?controller=AdminYbcBlogFreeGallery&amp;token=c76497dc898f8caf672b1c645245ceb8\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Blog gallery
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"136\" id=\"subtab-AdminYbcBlogFreeSetting\">
                    <a href=\"http://tune4style.local/admin3355/index.php?controller=AdminYbcBlogFreeSetting&amp;token=42e6a02ffbe8eb7a26855895fc1db3bd\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Settings
                      </span>
                              ";
        // line 1198
        echo "                      <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Gestor de módulos</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin3355/index.php/improve/modules/manage?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" aria-current=\"page\">Módulos</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Gestor de módulos          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add_module\"
                  href=\"#\"                  title=\"Enviar um módulo\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                                  >
                  <i class=\"material-icons\">cloud_upload</i>                  Enviar um módulo
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ajuda\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin3355/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fpt%252Fdoc%252FAdm";
        // line 1249
        echo "inModules%253Fversion%253D8.1.1%2526country%253Dpt/Ajuda?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\"
                   id=\"product_form_open_help\"
                >
                  Ajuda
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <li class=\"nav-item\">
                    <a href=\"/admin3355/index.php/improve/modules/manage?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" id=\"subtab-AdminModulesManage\" class=\"nav-link tab active current\" data-submenu=\"40\">
                      Módulos
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/admin3355/index.php/improve/modules/alerts?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" id=\"subtab-AdminModulesNotifications\" class=\"nav-link tab \" data-submenu=\"41\">
                      Alertas
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                ";
        // line 1279
        echo "  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/admin3355/index.php/improve/modules/updates?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" id=\"subtab-AdminModulesUpdates\" class=\"nav-link tab \" data-submenu=\"42\">
                      Atualizações
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
   ";
        // line 1297
        echo "     
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add_module\"
              href=\"#\"              title=\"Enviar um módulo\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Enviar um módulo
              <i class=\"material-icons\">cloud_upload</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Ajuda\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/admin3355/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fpt%252Fdoc%252FAdminModules%253Fversion%253D8.1.1%2526country%253Dpt/Ajuda?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\"
            >
              Ajuda
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1330
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh, não!</h1>
  <p class=\"mt-3\">
    A versão móvel desta página ainda não está disponível.
  </p>
  <p class=\"mt-2\">
    Utilize um computador para obter acesso a esta página, até ser adaptada para um telemóvel.
  </p>
  <p class=\"mt-2\">
    Obrigado.
  </p>
  <a href=\"http://tune4style.local/admin3355/index.php?controller=AdminDashboard&amp;token=2ad89a3014a2eb643c4f239e3366c816\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Voltar
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1364
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 102
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1330
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1364
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__5708f069ec33c555a6974469950a1ec4";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1621 => 1364,  1552 => 1330,  1517 => 102,  1502 => 1364,  1462 => 1330,  1427 => 1297,  1407 => 1279,  1375 => 1249,  1322 => 1198,  1286 => 1164,  1253 => 1133,  1211 => 1093,  1176 => 1060,  1143 => 1029,  1111 => 999,  1077 => 967,  1044 => 936,  1014 => 908,  973 => 869,  942 => 840,  910 => 810,  877 => 779,  841 => 745,  810 => 716,  779 => 687,  737 => 647,  706 => 618,  674 => 588,  640 => 556,  607 => 525,  575 => 495,  541 => 463,  496 => 420,  448 => 374,  399 => 327,  346 => 276,  301 => 233,  259 => 193,  243 => 179,  201 => 139,  159 => 102,  124 => 69,  96 => 43,  52 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ '<!DOCTYPE html>
<html lang=\"pt\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Gestor de módulos • Tune4Style</title>

  <script type=\"text/javascript\">
    var help_class_name = \\'AdminModulesManage\\';
    var iso_user = \\'pt\\';
    var lang_is_rtl = \\'0\\';
    var full_language_code = \\'pt-pt\\';
    var full_cldr_language_code = \\'pt-PT\\';
    var country_iso_code = \\'PT\\';
    var _PS_VERSION_ = \\'8.1.1\\';
    var roundMode = 2;
    var youEditFieldFor = \\'\\';
        var new_order_msg = \\'Foi efectuada uma nova encomenda na sua loja.\\';
    var order_number_msg = \\'Número da encomenda: \\';
    var total_msg = \\'Total: \\';
    var from_msg = \\'De: \\';
    var see_order_msg = \\'Ver esta encomenda\\';
    var new_customer_msg = \\'Um novo cliente registou-se na sua loja.\\';
    var customer_name_msg = \\'Nome do cliente: \\';
    var new_msg = \\'Foi publicada uma nova mensagem na sua loja.\\';
    var see_msg = \\'Ler esta mensagem\\';
    var token = \\'787747ebbffb17013a7f17e27b3f5a54\\';
    var currentIndex = \\'index.php?controller=AdminModulesManage\\';
    var employee_token = \\'34fb2e2b1f398227a6989764f5bc0a18\\';
    var choose_language_translate = \\'Escolher idioma:\\';
    var default_language = \\'1\\';
    var admin_modules_link = \\'/admin3355/index.php/improve/modules/manage?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\\';
    var admin_notification_get_link = \\'/admin3355/index.php/common/notifications?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\\';
    var admin_notification_push_link = adminNotificationPushLink = \\'/admin3355/index.php/common/notifications/ack?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\\';
    var tab_modules_list = \\'\\';
    var update_success_msg = \\'Atualizado com sucesso\\';
    var search' | raw }}{{ '_product_msg = \\'Pesquisar um produto\\';
  </script>



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
      <link href=\"/admin3355/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\\\/admin3355\\\\/\";
var baseDir = \"\\\\/\";
var changeFormLanguageUrl = \"\\\\/admin3355\\\\/index.php\\\\/configure\\\\/advanced\\\\/employees\\\\/change-form-language?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\\\u20ac\",\"numberSymbols\":[\",\",\"\\\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\\\u00a0\\\\u00a4\",\"negativePattern\":\"-#,##0.00\\\\u00a0\\\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
var show_new_custo' | raw }}{{ 'mers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admin3355/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.1.1\"></script>
<script type=\"text/javascript\" src=\"/admin3355/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.1.1\"></script>
<script type=\"text/javascript\" src=\"/admin3355/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin3355/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: \\'#DF0067\\',
      textColor: \\'#FFFFFF\\',
      notificationGetUrl: \\'/admin3355/index.php/common/notifications?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\\',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


' | raw }}{% block stylesheets %}{% endblock %}{% block extra_stylesheets %}{% endblock %}</head>{{ '

<body
  class=\"lang-pt adminmodulesmanage developer-mode\"
  data-base-url=\"/admin3355/index.php\"  data-token=\"rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://tune4style.local/admin3355/index.php?controller=AdminDashboard&amp;token=2ad89a3014a2eb643c4f239e3366c816\"></a>
      <span id=\"shop_version\">8.1.1</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acesso Rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://tune4style.local/admin3355/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=c34ed3ce55516fdef4cc22f73cc2e9fc\"
                 data-item=\"Avaliação do catálogo\"
      >Avaliação do catálogo</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://tune4style.local/admin3355/index.php/sell/orders?token=f22330906868dc9bdaf75dc0e8fc773d\"
                 data-item=\"Encomendas\"
      >Encomendas</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://tune4style.local/admin3355/index.php/improve/modules/manage?token=f22330906868dc9bdaf75dc0e8fc773d\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://tune4style.local/admin3355/index.php/sell/catalog/categories/new?token=f22330906868dc9bdaf75dc0e8fc773d\"
                 data-item=\"Nova Categoria\"
      >Nova Categoria</a>
          <a class=\"dropdown-item quick-ro' | raw }}{{ 'w-link new-product-button\"
         href=\"http://tune4style.local/admin3355/index.php/sell/catalog/products-v2/create?token=f22330906868dc9bdaf75dc0e8fc773d\"
                 data-item=\"Novo produto\"
      >Novo produto</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://tune4style.local/admin3355/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=6dd97ad4c586bc96ba9169886470a950\"
                 data-item=\"Novo Voucher\"
      >Novo Voucher</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"25\"
        data-icon=\"icon-AdminModulesSf\"
        data-method=\"add\"
        data-url=\"index.php/improve/modules/manage?-yfh83G-O1bwB_xjfTuC_JuVeuhRU\"
        data-post-link=\"http://tune4style.local/admin3355/index.php?controller=AdminQuickAccesses&token=87dee63dda5da3b8d916e19c7315f813\"
        data-prompt-text=\"Atribua um nome a este atalho:\"
        data-link=\"M&oacute;dulos - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Adicionar página atual ao «Acesso Rápido»
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://tune4style.local/admin3355/index.php?controller=AdminQuickAccesses&token=87dee63dda5da3b8d916e19c7315f813\">
      <i class=\"material-icons\">settings</i>
      Gerir os seus acessos rápidos
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
      action=\"/admin3355/index.php?controller=AdminSearch&amp;token=dd8c5e81ca5bfffd57c981b6147c57a0\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <inpu' | raw }}{{ 't type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Pesquisar (por ex.: referência do produto, nome do cliente…)\" aria-label=\"Barra de pesquisa\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Em todo o lado
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Em todo o lado\" href=\"#\" data-value=\"0\" data-placeholder=\"O que procura?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Em todo o lado</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catálogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nome do produto, referência, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catálogo</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por nome\" href=\"#\" data-value=\"2\" data-placeholder=\"Nome\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clientes por nome</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por endereço IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clientes por endereço IP</a>
        <a class=\"dropdown-item\" data-item=\"Encomendas\" href=\"#\" data-value=\"3\" data-placeholder=\"Nº da Encomenda\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Encomendas</a>
        <a class=\"dropdown-item\" data-item=\"Faturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Número da fatura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Faturas</a>
        <a class=\"dropdown-item\" data-item=\"Carrinhos\" href=\"#\" data-value=\"5\" data-placeholder=\"ID do Carrinho\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carrinhos</a>
        <a class=\"dropdown-item\" data-item=' | raw }}{{ '\"Módulos\" href=\"#\" data-value=\"7\" data-placeholder=\"Nome do Módulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Módulos</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">PESQUISAR</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$(\\'#bo_query\\').one(\\'click\\', function() {
    \$(this).closest(\\'form\\').removeClass(\\'collapsed\\');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Cancelar</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Acesso Rápido</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://tune4style.local/admin3355/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=c34ed3ce55516fdef4cc22f73cc2e9fc\"
             data-item=\"Avaliação do catálogo\"
    >Avaliação do catálogo</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://tune4style.local/admin3355/index.php/sell/orders?token=f22330906868dc9bdaf75dc0e8fc773d\"
             data-item=\"Encomendas\"
    >Encomendas</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://tune4style.local/admin3355/index.php/improve/modules/manage?token=f22330906868dc9bdaf75dc0e8fc773d\"
             data-item=\"Módulos instalados\"
    >Módulos instalados</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://tune4style.local/admin3355/index.php/sell/catalog/categories/new?token=f22330906868dc9bdaf75dc0e8fc773d\"
             data-item=\"Nova Categoria\"
    >Nova Categoria</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://tune4style.local/admin3355/index.php/sell/catalog/products-v2/create?token=f22330906868dc9bdaf75dc0e8fc773d\"
             data-item=\"Novo produto\"
    >Novo produto</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://tune4style.loc' | raw }}{{ 'al/admin3355/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=6dd97ad4c586bc96ba9169886470a950\"
             data-item=\"Novo Voucher\"
    >Novo Voucher</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"191\"
      data-icon=\"icon-AdminModulesSf\"
      data-method=\"add\"
      data-url=\"index.php/improve/modules/manage?-yfh83G-O1bwB_xjfTuC_JuVeuhRU\"
      data-post-link=\"http://tune4style.local/admin3355/index.php?controller=AdminQuickAccesses&token=87dee63dda5da3b8d916e19c7315f813\"
      data-prompt-text=\"Atribua um nome a este atalho:\"
      data-link=\"M&oacute;dulos - Lista\"
    >
      <i class=\"material-icons\">add_circle</i>
      Adicionar página atual ao «Acesso Rápido»
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://tune4style.local/admin3355/index.php?controller=AdminQuickAccesses&token=87dee63dda5da3b8d916e19c7315f813\">
    <i class=\"material-icons\">settings</i>
    Gerir os seus acessos rápidos
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>A sua loja está em modo de depuração.</strong></p><p class=&quot;text-left&quot;>Todos os erros PHP e mensagens são apresentados. Quando não necessitar mais, &lt;strong&gt;desligue&lt;/strong&gt; este modo.</p>\"
             href=\"/admin3355/index.php/configure/advanced/performance/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Modo de descoberta de erros (debug)</span>
          </a>
        </div>
      
      
      <d' | raw }}{{ 'iv class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://tune4style.local/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Ver a minha loja</span>
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
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Encomendas<span id=\"_nb_new_orders_\"></span>
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
              Clientes<span id=\"_nb_new_customers_\"></span>
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
              Mensagens<span id=\"_nb_new_mess' | raw }}{{ 'ages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Nenhuma nova encomenda por enquanto :(<br>
              Verificou os seus <strong><a href=\"http://tune4style.local/admin3355/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=18b14967cca20eeb244d673e1efb1a8f\">carrinhos abandonados</a></strong>?<br>A sua próxima encomenda poderá estar escondida aí!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Nenhum novo cliente por enquanto :(<br>
              Tem estado ativo nas redes sociais estes últimos dias?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Sem nova mensagem por enquanto.<br>
              Ao que parece, todos os seus clientes estão satisfeitos :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href=\\'order_url\\'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href=\\'customer_url\\'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registado <strong>_date_add_</strong>
    </a>
  </script>

  <script typ' | raw }}{{ 'e=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href=\\'message_url\\'>
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
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://tune4style.local/img/pr/default.jpg\" alt=\"Ricardo\" /></span>
        <span class=\"employee_profile\">Bem-vindo de volta Ricardo</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin3355/index.php/configure/advanced/employees/3/edit?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\">
      <i class=\"material-icons\">edit</i>
      <span>O seu perfil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://tune4style.local/admin3355/index.php?controller=AdminLogin&amp;logout=1&amp;token=3cd0af06acc248787ec1ab8098c65e5f\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Fechar sessão</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin3355/index.php/configure/advanced/employees/toggle-navigation?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </s' | raw }}{{ 'pan>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://tune4style.local/admin3355/index.php?controller=AdminDashboard&amp;token=2ad89a3014a2eb643c4f239e3366c816\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.1</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://tune4style.local/admin3355/index.php?controller=AdminDashboard&amp;token=2ad89a3014a2eb643c4f239e3366c816\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Painel de controlo</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vender</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin3355/index.php/sell/orders/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Encomendas
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                           ' | raw }}{{ '                           
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/admin3355/index.php/sell/orders/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Encomendas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin3355/index.php/sell/orders/invoices/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Faturas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin3355/index.php/sell/orders/credit-slips/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Notas de Crédito
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin3355/index.php/sell/orders/delivery-slips/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Notas de Entrega
                                </a>
                              </li>

      ' | raw }}{{ '                                                                            
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://tune4style.local/admin3355/index.php?controller=AdminCarts&amp;token=18b14967cca20eeb244d673e1efb1a8f\" class=\"link\"> Carrinhos de Compras
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin3355/index.php/sell/catalog/products?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catálogo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admin3355/index.php/sell/catalog/products?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Produtos
        ' | raw }}{{ '                        </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin3355/index.php/sell/catalog/categories?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Categorias
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin3355/index.php/sell/catalog/monitoring/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Monitorização
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://tune4style.local/admin3355/index.php?controller=AdminAttributesGroups&amp;token=14530b5c12c6fc134c6136cbcda9d4d2\" class=\"link\"> Atributos e Características
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/ad' | raw }}{{ 'min3355/index.php/sell/catalog/brands/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Marcas e Fornecedores
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin3355/index.php/sell/attachments/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Ficheiros
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://tune4style.local/admin3355/index.php?controller=AdminCartRules&amp;token=6dd97ad4c586bc96ba9169886470a950\" class=\"link\"> Descontos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin3355/index.php/sell/stocks/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Inventário
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                ' | raw }}{{ '      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin3355/index.php/sell/customers/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clientes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admin3355/index.php/sell/customers/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin3355/index.php/sell/addresses/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Endereços
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>' | raw }}{{ '
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://tune4style.local/admin3355/index.php?controller=AdminCustomerThreads&amp;token=2a71768d1bf31ca20bb3d07fe6164e2e\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Apoio ao Cliente
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://tune4style.local/admin3355/index.php?controller=AdminCustomerThreads&amp;token=2a71768d1bf31ca20bb3d07fe6164e2e\" class=\"link\"> Apoio ao Cliente
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin3355/index.php/sell/customer-service/order-messages/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Mensagens de Encomendas
                                <' | raw }}{{ '/a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://tune4style.local/admin3355/index.php?controller=AdminReturn&amp;token=fd8e089dc65b3020f9495a802467ec3a\" class=\"link\"> Mercadorias Devolvidas
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://tune4style.local/admin3355/index.php?controller=AdminStats&amp;token=c34ed3ce55516fdef4cc22f73cc2e9fc\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Estatísticas
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Melhorar</span>
            </li>

                              
                  
                                                   ' | raw }}{{ '   
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin3355/index.php/improve/modules/manage?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Módulos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin3355/index.php/improve/modules/manage?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Gestor de módulos
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/admin3355/index.php/improve/design/themes/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\">
                      <i class=\"ma' | raw }}{{ 'terial-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"127\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/admin3355/index.php/improve/design/themes/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Tema Gráfico e Logótipo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin3355/index.php/improve/design/mail_theme/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Template de e-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin3355/index.php/improve/design/cms-pages/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Pági' | raw }}{{ 'nas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin3355/index.php/improve/design/modules/positions/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Posições
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://tune4style.local/admin3355/index.php?controller=AdminImages&amp;token=c0fd649c02e0729155a44c106d0b01dd\" class=\"link\"> Definições de Imagem
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin3355/index.php/modules/link-widget/list?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Lista de ligações
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" da' | raw }}{{ 'ta-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://tune4style.local/admin3355/index.php?controller=AdminCarriers&amp;token=15ab78e5a9bfb5d28881358624d49b62\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Envio
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://tune4style.local/admin3355/index.php?controller=AdminCarriers&amp;token=15ab78e5a9bfb5d28881358624d49b62\" class=\"link\"> Transportadoras
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin3355/index.php/improve/shipping/preferences/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Preferências
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
    ' | raw }}{{ '                                                  
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin3355/index.php/improve/payment/payment_methods?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Pagamento
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/admin3355/index.php/improve/payment/payment_methods?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Métodos de Pagamento
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin3355/index.php/improve/payment/preferences?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Preferências
                                </a>
                              </li>

                                                                              </ul>
  ' | raw }}{{ '                                      </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin3355/index.php/improve/international/localization/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\">
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
                                <a href=\"/admin3355/index.php/improve/international/localization/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Localização
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin3355/index.php/improve/international/zones/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Localizações
                              ' | raw }}{{ '  </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin3355/index.php/improve/international/taxes/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> IVA
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin3355/index.php/improve/international/translations/settings?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Traduções
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin3355/index.php/configure/shop/preferences/preferences?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
 ' | raw }}{{ '                     Parâmetros da Loja
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin3355/index.php/configure/shop/preferences/preferences?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Geral
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin3355/index.php/configure/shop/order-preferences/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Definições da Encomenda
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin3355/index.php/configure/shop/product-preferences/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Produtos
                         ' | raw }}{{ '       </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admin3355/index.php/configure/shop/customer-preferences/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Definições do cliente
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin3355/index.php/configure/shop/contacts/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Contacto
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admin3355/index.php/configure/shop/seo-urls/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Tráfego e SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://tune4style.local/admin3355/' | raw }}{{ 'index.php?controller=AdminSearchConf&amp;token=701d1fdeb69bcb99aadac15e009e821d\" class=\"link\"> Pesquisar
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin3355/index.php/configure/advanced/system-information/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Parâmetros Avançados
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/admin3355/index.php/configure/advanced/system-information/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Informação
                                </a>
                              </li>

                                                                                  
                              
                                                            
       ' | raw }}{{ '                       <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin3355/index.php/configure/advanced/performance/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Desempenho
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin3355/index.php/configure/advanced/administration/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Administração
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin3355/index.php/configure/advanced/emails/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/admin3355/index.php/configure/advanced/import/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Importar
                                </a>
                              </li>

                                                                                  
                ' | raw }}{{ '              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin3355/index.php/configure/advanced/employees/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Empregados
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin3355/index.php/configure/advanced/sql-requests/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Base de dados
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin3355/index.php/configure/advanced/logs/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Registos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin3355/index.php/configure/advanced/webservice-keys/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Webservice
                                </a>
                              </li>

  ' | raw }}{{ '                                                                                                                                                                                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin3355/index.php/configure/advanced/feature-flags/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Características novas e experimentais
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/admin3355/index.php/configure/advanced/security/?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" class=\"link\"> Segurança
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"116\" id=\"tab-DEFAULT\">
                <span class=\"title\">Mais</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"145\" id=\"subtab-AdminSelfUpgrade\">
                    <a href=\"http://tune4style.local/admin3355/index.php?controller=AdminSelfUpgrade&amp;token=c494f1264dc8cec9d29' | raw }}{{ 'd689e409f9964\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      1-Click Upgrade
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"130\" id=\"tab-AdminYbcBlogFree\">
                <span class=\"title\">Blog</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"131\" id=\"subtab-AdminYbcBlogFreePost\">
                    <a href=\"http://tune4style.local/admin3355/index.php?controller=AdminYbcBlogFreePost&amp;token=05697f298a4c710d051655ecc9f3e4e4\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Blog posts
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"132\" id=\"subtab-AdminYbcBlogFreeCategory\">
                    <a href=\"ht' | raw }}{{ 'tp://tune4style.local/admin3355/index.php?controller=AdminYbcBlogFreeCategory&amp;token=283c0cb4e3b9883272925bffd8b6343b\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Blog categories
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"133\" id=\"subtab-AdminYbcBlogFreeComment\">
                    <a href=\"http://tune4style.local/admin3355/index.php?controller=AdminYbcBlogFreeComment&amp;token=834afdffab35639baf5999a4c383bf8f\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Blog comments
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"134\" id=\"subtab-AdminYbcBlogFreeSlider\">
                    <a href=\"http://tune4style.local/admin3355/index.php?controller=AdminYbcBlogFreeSlider&amp;token=7f136fcfdeae91c2f9632cbb02b4ae27\" class=\"link\">
                      <i cla' | raw }}{{ 'ss=\"material-icons mi-extension\">extension</i>
                      <span>
                      Blog Slider
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"135\" id=\"subtab-AdminYbcBlogFreeGallery\">
                    <a href=\"http://tune4style.local/admin3355/index.php?controller=AdminYbcBlogFreeGallery&amp;token=c76497dc898f8caf672b1c645245ceb8\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Blog gallery
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"136\" id=\"subtab-AdminYbcBlogFreeSetting\">
                    <a href=\"http://tune4style.local/admin3355/index.php?controller=AdminYbcBlogFreeSetting&amp;token=42e6a02ffbe8eb7a26855895fc1db3bd\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Settings
                      </span>
                              ' | raw }}{{ '                      <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Gestor de módulos</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin3355/index.php/improve/modules/manage?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" aria-current=\"page\">Módulos</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Gestor de módulos          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add_module\"
                  href=\"#\"                  title=\"Enviar um módulo\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                                  >
                  <i class=\"material-icons\">cloud_upload</i>                  Enviar um módulo
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ajuda\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin3355/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fpt%252Fdoc%252FAdm' | raw }}{{ 'inModules%253Fversion%253D8.1.1%2526country%253Dpt/Ajuda?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\"
                   id=\"product_form_open_help\"
                >
                  Ajuda
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <li class=\"nav-item\">
                    <a href=\"/admin3355/index.php/improve/modules/manage?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" id=\"subtab-AdminModulesManage\" class=\"nav-link tab active current\" data-submenu=\"40\">
                      Módulos
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/admin3355/index.php/improve/modules/alerts?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" id=\"subtab-AdminModulesNotifications\" class=\"nav-link tab \" data-submenu=\"41\">
                      Alertas
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                ' | raw }}{{ '  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/admin3355/index.php/improve/modules/updates?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\" id=\"subtab-AdminModulesUpdates\" class=\"nav-link tab \" data-submenu=\"42\">
                      Atualizações
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
   ' | raw }}{{ '     
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add_module\"
              href=\"#\"              title=\"Enviar um módulo\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Enviar um módulo
              <i class=\"material-icons\">cloud_upload</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Ajuda\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/admin3355/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fpt%252Fdoc%252FAdminModules%253Fversion%253D8.1.1%2526country%253Dpt/Ajuda?_token=rBhWliUGC_IGYa-yfh83G-O1bwB_xjfTuC_JuVeuhRU\"
            >
              Ajuda
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ' | raw }}{% block content_header %}{% endblock %}{% block content %}{% endblock %}{% block content_footer %}{% endblock %}{% block sidebar_right %}{% endblock %}{{ '

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh, não!</h1>
  <p class=\"mt-3\">
    A versão móvel desta página ainda não está disponível.
  </p>
  <p class=\"mt-2\">
    Utilize um computador para obter acesso a esta página, até ser adaptada para um telemóvel.
  </p>
  <p class=\"mt-2\">
    Obrigado.
  </p>
  <a href=\"http://tune4style.local/admin3355/index.php?controller=AdminDashboard&amp;token=2ad89a3014a2eb643c4f239e3366c816\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Voltar
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
' | raw }}{% block javascripts %}{% endblock %}{% block extra_javascripts %}{% endblock %}{% block translate_javascripts %}{% endblock %}</body>{{ '
</html>' | raw }}", "__string_template__5708f069ec33c555a6974469950a1ec4", "");
    }
}
