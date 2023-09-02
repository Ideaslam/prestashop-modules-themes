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

/* __string_template__b1212cd6dfed867f4e079f81a15c7d1599a9c6e5e8bf2c5388ed786fb69024d7 */
class __TwigTemplate_de47cad35961f7e48c811fa1e78062c0d2765fa5bc01c9971c6050d03311a7c5 extends Template
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

<link rel=\"icon\" type=\"image/x-icon\" href=\"/prestashop_edition_basic_version_8.1.0/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/prestashop_edition_basic_version_8.1.0/img/app_icon.png\" />

<title>Module manager • Almahtab</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModulesManage';
    var iso_user = 'en';
    var lang_is_rtl = '0';
    var full_language_code = 'en-us';
    var full_cldr_language_code = 'en-US';
    var country_iso_code = 'SA';
    var _PS_VERSION_ = '8.1.1';
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
    var token = '2b4eb4501b9ccbec52c8d52c288b3459';
    var currentIndex = 'index.php?controller=AdminModulesManage';
    var employee_token = '55cc9e9e70589556bbe7ad3df46be6fa';
    var choose_language_translate = 'Choose language:';
    var default_language = '1';
    var admin_modules_link = '/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/improve/modules/manage?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ';
    var admin_notification_get_link = '/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/common/notifications?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ';
    var admin_notification_push_link = adminNotificationPushLink = '/prestashop_edition_basic_version_8.1.";
        // line 40
        echo "0/admin1017mfaenagmddc8ms3/index.php/common/notifications/ack?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ';
    var tab_modules_list = '';
    var update_success_msg = 'Update successful';
    var search_product_msg = 'Search for a product';
  </script>



<link
      rel=\"preload\"
      href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_edition_basic_version_8.1.0/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_edition_basic_version_8.1.0/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_edition_basic_version_8.1.0/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/prestashop_edition_basic_version_8.1.0\\/admin1017mfaenagmddc8ms3\\/\";
var baseDir = \"\\/prestashop_edition_basic_version_8.1.0\\/\";
var changeFormLanguageUrl = \"\\/prestashop_edition_basic_version_8.1.0\\/admin1017mfaenagmddc8ms3\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\";
var currency = {\"iso_code\":\"SAR\",\"sign\":\"SAR\",\"name\":\"Saudi Riyal\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"SAR\",\"currencySymbol\":\"SAR\",";
        // line 66
        echo "\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_edition_basic_version_8.1.0/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_edition_basic_version_8.1.0/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_edition_basic_version_8.1.0/js/admin.js?v=8.1.1\"></script>
<script type=\"text/javascript\" src=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_edition_basic_version_8.1.0/js/tools.js?v=8.1.1\"></script>
<script type=\"text/javascript\" src=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_edition_basic_version_8.1.0/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_edition_basic_version_8.1.0/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaen";
        // line 82
        echo "agmddc8ms3/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_edition_basic_version_8.1.0/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_edition_basic_version_8.1.0/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_edition_basic_version_8.1.0/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/common/notifications?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ',
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
  class=\"lang-en adminmodulesmanage\"
  data-base-url=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php\"  data-token=\"9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost:7777/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php?controller=AdminDashboard&amp;token=0459c3576965a726da42f7f8a55c4606\"></a>
      <span id=\"shop_version\">8.1.1</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:7777/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=368b7e72dcfb70552d96375026210d14\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:7777/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/improve/modules/manage?token=17d2763a38096e6756d2f8bda0fcfb17\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:7777/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/sell/catalog/categories/new?token=17d2763a38096e6756d2f8bda0fcfb17\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-r";
        // line 135
        echo "ow-link new-product-button\"
         href=\"http://localhost:7777/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/sell/catalog/products-v2/create?token=17d2763a38096e6756d2f8bda0fcfb17\"
                 data-item=\"New product\"
      >New product</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:7777/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=9a5d9a7a8b3508f1544ae8a196ed41c6\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:7777/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/sell/orders?token=17d2763a38096e6756d2f8bda0fcfb17\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"133\"
        data-icon=\"icon-AdminModulesSf\"
        data-method=\"add\"
        data-url=\"index.php/improve/modules/manage?-ZOror93hlWH-xapFQ\"
        data-post-link=\"http://localhost:7777/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php?controller=AdminQuickAccesses&token=949a3d7957d83908c95331fb45c8f454\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Modules - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost:7777/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php?controller=AdminQuickAccesses&token=949a3d7957d83908c95331fb45c8f454\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-searc";
        // line 170
        echo "h-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php?controller=AdminSearch&amp;token=f7d108cd7c5bdcd5bb31c37b256f41ff\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Search (e.g.: product reference, customer name…)\" aria-label=\"Searchbar\">
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
        <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Or";
        // line 190
        echo "ders</a>
        <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice number\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoices</a>
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carts</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
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
       href=\"http://localhost:7777/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=368b7e72dcfb70552d96375026210d14\"
             data-item=\"Catalog evaluation\"
    >Catalog evaluation</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:7777/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/improve/modules/manage?token=17d2763a38096e6756d2f8bda0fcfb17\"
             data-item=\"Installed modules\"
    >Installed modules</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:7777/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/sell/catalog/categories/new?token=17d2763a38096e6756d2f8bda0fcfb17\"
             data-item=\"New category\"
    ";
        // line 223
        echo ">New category</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:7777/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/sell/catalog/products-v2/create?token=17d2763a38096e6756d2f8bda0fcfb17\"
             data-item=\"New product\"
    >New product</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:7777/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=9a5d9a7a8b3508f1544ae8a196ed41c6\"
             data-item=\"New voucher\"
    >New voucher</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:7777/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/sell/orders?token=17d2763a38096e6756d2f8bda0fcfb17\"
             data-item=\"Orders\"
    >Orders</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"136\"
      data-icon=\"icon-AdminModulesSf\"
      data-method=\"add\"
      data-url=\"index.php/improve/modules/manage?-ZOror93hlWH-xapFQ\"
      data-post-link=\"http://localhost:7777/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php?controller=AdminQuickAccesses&token=949a3d7957d83908c95331fb45c8f454\"
      data-prompt-text=\"Please name this shortcut:\"
      data-link=\"Modules - List\"
    >
      <i class=\"material-icons\">add_circle</i>
      Add current page to Quick Access
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost:7777/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php?controller=AdminQuickAccesses&token=949a3d7957d83908c95331fb45c8f454\">
    <i class=\"material-icons\">settings</i>
    Manage your quick accesses
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"compo";
        // line 264
        echo "nent\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost:7777/prestashop_edition_basic_version_8.1.0/\" target= \"_blank\">
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
              id=\"orders-tab\"
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
            </a";
        // line 315
        echo ">
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Have you checked your <strong><a href=\"http://localhost:7777/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=6b78e17d5799e03595581a3155af2e80\">abandoned carts</a></strong>?<br>Your next order could be hiding there!
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
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
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
    ";
        // line 362
        echo "<a class=\"notif\" href='message_url'>
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
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost:7777/prestashop_edition_basic_version_8.1.0/img/pr/default.jpg\" alt=\"Islam\" /></span>
        <span class=\"employee_profile\">Welcome back Islam</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/configure/advanced/employees/1/edit?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\">
      <i class=\"material-icons\">edit</i>
      <span>Your profile</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost:7777/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php?controller=AdminLogin&amp;logout=1&amp;token=14a481b1be47aac8ec141060de4117e0\">
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
  <span class=\"menu-collapse\" data-toggle-url=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/configure/advanced/employees/toggle-navigation?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlW";
        // line 404
        echo "H-xapFQ\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost:7777/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php?controller=AdminDashboard&amp;token=0459c3576965a726da42f7f8a55c4606\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.1</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost:7777/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php?controller=AdminDashboard&amp;token=0459c3576965a726da42f7f8a55c4606\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/sell/orders/?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                         ";
        // line 446
        echo "           keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/sell/orders/?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/sell/orders/invoices/?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/sell/orders/credit-slips/?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                         ";
        // line 475
        echo "     
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/sell/orders/delivery-slips/?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost:7777/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php?controller=AdminCarts&amp;token=6b78e17d5799e03595581a3155af2e80\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/sell/catalog/products?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                     ";
        // line 504
        echo "       </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/sell/catalog/products?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/sell/catalog/categories?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/sell/catalog/monitoring/?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                       ";
        // line 533
        echo "     
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost:7777/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php?controller=AdminAttributesGroups&amp;token=a87c764e3ccb771b9bbb92358e58afe4\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/sell/catalog/brands/?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/sell/attachments/?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost:7777/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc";
        // line 559
        echo "8ms3/index.php?controller=AdminCartRules&amp;token=9a5d9a7a8b3508f1544ae8a196ed41c6\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/sell/stocks/?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/sell/customers/?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                       ";
        // line 590
        echo "                     
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/sell/customers/?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/sell/addresses/?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost:7777/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php?controller=AdminCustomerThreads&amp;token=ced56faeab07d49b291471c594261e48\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                     ";
        // line 618
        echo "                       </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost:7777/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php?controller=AdminCustomerThreads&amp;token=ced56faeab07d49b291471c594261e48\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/sell/customer-service/order-messages/?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost:7777/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php?controller=AdminReturn&amp;token=989d36cd7f6289876a23410db925724c\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                            ";
        // line 645
        echo "  </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://localhost:7777/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php?controller=AdminStats&amp;token=368b7e72dcfb70552d96375026210d14\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/improve/modules/manage?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i cla";
        // line 682
        echo "ss=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/improve/modules/manage?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/improve/design/themes/?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                         ";
        // line 711
        echo "                     <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"127\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/improve/design/themes/?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/improve/design/mail_theme/?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/improve/design/cms-pages/?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" da";
        // line 739
        echo "ta-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/improve/design/modules/positions/?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost:7777/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php?controller=AdminImages&amp;token=2ee715c7bfdf87f92f785694fada7ed7\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/modules/link-widget/list?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" class=\"link\"> Link List
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost:7777/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.";
        // line 767
        echo "php?controller=AdminCarriers&amp;token=8fbf2650a739146a65bc69971f46eec0\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost:7777/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php?controller=AdminCarriers&amp;token=8fbf2650a739146a65bc69971f46eec0\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/improve/shipping/preferences/?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                      ";
        // line 797
        echo "                                
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/improve/payment/payment_methods?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/improve/payment/payment_methods?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/improve/payment/preferences?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" class=\"link\"> Preferences
                          ";
        // line 823
        echo "      </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/improve/international/localization/?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" class=\"link\">
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
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/improve/international/localization/?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=";
        // line 854
        echo "\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/improve/international/zones/?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/improve/international/taxes/?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/improve/international/translations/settings?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                  ";
        // line 889
        echo "                    
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/configure/shop/preferences/preferences?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/configure/shop/preferences/preferences?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/configure/shop/order-preferences/?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" class=\"link\"> Order Settings
   ";
        // line 915
        echo "                             </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/configure/shop/product-preferences/?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/configure/shop/customer-preferences/?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/configure/shop/contacts/?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                     ";
        // line 944
        echo "       
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/configure/shop/seo-urls/?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost:7777/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php?controller=AdminSearchConf&amp;token=5b76d622a70dc893b9140b270d21f4bf\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/configure/advanced/system-information/?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                               ";
        // line 972
        echo "                             </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/configure/advanced/system-information/?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/configure/advanced/performance/?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/configure/advanced/administration/?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
        ";
        // line 1000
        echo "                      
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/configure/advanced/emails/?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/configure/advanced/import/?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/configure/advanced/employees/?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms";
        // line 1027
        echo "3/index.php/configure/advanced/sql-requests/?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/configure/advanced/logs/?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/configure/advanced/webservice-keys/?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/configure/advanced/feature-flags/?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" class=\"link\"> New &am";
        // line 1051
        echo "p; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/configure/advanced/security/?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" class=\"link\"> Security
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
                      <li class=\"breadcrumb-item\">Module Manager</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/improve/modules/manage?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" aria-current=\"page\">Modules</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Module manager          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add_module\"
                  href=\"#\"                  title=\"Upload a module\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                      ";
        // line 1102
        echo "            >
                  <i class=\"material-icons\">cloud_upload</i>                  Upload a module
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminModules%253Fversion%253D8.1.1%2526country%253Den/Help?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\"
                   id=\"product_form_open_help\"
                >
                  Help
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <li class=\"nav-item\">
                    <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/improve/modules/manage?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" id=\"subtab-AdminModulesManage\" class=\"nav-link tab active current\" data-submenu=\"40\">
                      Modules
                      <span class=\"notification-container\">
                        <";
        // line 1130
        echo "span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/improve/modules/alerts?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" id=\"subtab-AdminModulesNotifications\" class=\"nav-link tab \" data-submenu=\"41\">
                      Alerts
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/improve/modules/updates?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\" id=\"subtab-AdminModulesUpdates\" class=\"nav-link tab \" data-submenu=\"42\">
                      Updates
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     ";
        // line 1150
        echo "                                                                                                                                                                                                                                                                     </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add_module\"
              href=\"#\"              title=\"Upload a module\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Upload a module
              <i class=\"material-icons\">cloud_upload</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Help\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminModules%253Fversion%253D8.1.1%2526country%253Den/Help?_token=9RhmyT6tTJ3e_qNblRYr2yquK-ZOror93hlWH-xapFQ\"
            >
              Help
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
        // line 1192
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
  <a href=\"http://localhost:7777/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php?controller=AdminDashboard&amp;token=0459c3576965a726da42f7f8a55c4606\" class=\"btn btn-primary py-1 mt-3\">
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
        // line 1226
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 102
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1192
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

    // line 1226
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
        return "__string_template__b1212cd6dfed867f4e079f81a15c7d1599a9c6e5e8bf2c5388ed786fb69024d7";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1397 => 1226,  1376 => 1192,  1365 => 102,  1356 => 1226,  1316 => 1192,  1272 => 1150,  1250 => 1130,  1220 => 1102,  1167 => 1051,  1141 => 1027,  1112 => 1000,  1082 => 972,  1052 => 944,  1021 => 915,  993 => 889,  956 => 854,  923 => 823,  895 => 797,  863 => 767,  833 => 739,  803 => 711,  772 => 682,  733 => 645,  704 => 618,  674 => 590,  641 => 559,  613 => 533,  582 => 504,  551 => 475,  520 => 446,  476 => 404,  432 => 362,  383 => 315,  330 => 264,  287 => 223,  252 => 190,  230 => 170,  193 => 135,  155 => 102,  133 => 82,  115 => 66,  87 => 40,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__b1212cd6dfed867f4e079f81a15c7d1599a9c6e5e8bf2c5388ed786fb69024d7", "");
    }
}
