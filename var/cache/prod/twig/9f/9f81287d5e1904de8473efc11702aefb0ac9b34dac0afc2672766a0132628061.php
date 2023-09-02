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

/* __string_template__b5871ebd7a072f10b4bb80b027a023067c4a60f49adbf2aed9ec0fda99f16f69 */
class __TwigTemplate_e9e6072bae4803d6198d8c7f33a592e199c95b861d223b8954cd2a5fd9843ea7 extends Template
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

<title>Theme & Logo > Theme • Almahtab</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminThemes';
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
    var token = 'baf5d76b52f9d8060c5dfc37a681976d';
    var currentIndex = 'index.php?controller=AdminThemes';
    var employee_token = '55cc9e9e70589556bbe7ad3df46be6fa';
    var choose_language_translate = 'Choose language:';
    var default_language = '1';
    var admin_modules_link = '/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/improve/modules/manage?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q';
    var admin_notification_get_link = '/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/common/notifications?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q';
    var admin_notification_push_link = adminNotificationPushLink = '/prestashop_edition_basic_version_8.1.0/admin1";
        // line 40
        echo "017mfaenagmddc8ms3/index.php/common/notifications/ack?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q';
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
var changeFormLanguageUrl = \"\\/prestashop_edition_basic_version_8.1.0\\/admin1017mfaenagmddc8ms3\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\";
var currency = {\"iso_code\":\"SAR\",\"sign\":\"SAR\",\"name\":\"Saudi Riyal\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"SAR\",\"currencySymbol\":\"SAR\",\"numberS";
        // line 66
        echo "ymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
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
<script type=\"text/javascript\" src=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8m";
        // line 82
        echo "s3/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_edition_basic_version_8.1.0/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_edition_basic_version_8.1.0/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_edition_basic_version_8.1.0/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/common/notifications?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q',
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
  class=\"lang-en adminthemes\"
  data-base-url=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php\"  data-token=\"VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\">

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
          <a class=\"dropdown-item quick-row-link";
        // line 135
        echo " new-product-button\"
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
        data-rand=\"39\"
        data-icon=\"icon-AdminThemesParent\"
        data-method=\"add\"
        data-url=\"index.php/improve/design/themes\"
        data-post-link=\"http://localhost:7777/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php?controller=AdminQuickAccesses&token=949a3d7957d83908c95331fb45c8f454\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Theme &amp; Logo - List\"
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
        <div class=\"component-search-body\">
       ";
        // line 171
        echo "   <div class=\"component-search-top\">
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
        <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Orders</a>
       ";
        // line 191
        echo " <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice number\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoices</a>
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
    >New category</a";
        // line 223
        echo ">
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
      data-rand=\"3\"
      data-icon=\"icon-AdminThemesParent\"
      data-method=\"add\"
      data-url=\"index.php/improve/design/themes\"
      data-post-link=\"http://localhost:7777/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php?controller=AdminQuickAccesses&token=949a3d7957d83908c95331fb45c8f454\"
      data-prompt-text=\"Please name this shortcut:\"
      data-link=\"Theme &amp; Logo - List\"
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
                  <div class=\"component\" id=\"header-shop-list";
        // line 264
        echo "-container\">
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
            </a>
          </li>
        ";
        // line 317
        echo "                </ul>

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
    <a class=\"notif\" href='mes";
        // line 362
        echo "sage_url'>
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

      <a class=\"dropdown-item employee-link profile-link\" href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/configure/advanced/employees/1/edit?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\">
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
  <span class=\"menu-collapse\" data-toggle-url=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/configure/advanced/employees/toggle-navigation?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\">
    <i class=\"ma";
        // line 405
        echo "terial-icons rtl-flip\">chevron_left</i>
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
                    <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/sell/orders/?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_";
        // line 446
        echo "down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/sell/orders/?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/sell/orders/invoices/?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/sell/orders/credit-slips/?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                    ";
        // line 476
        echo "                                        
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/sell/orders/delivery-slips/?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost:7777/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php?controller=AdminCarts&amp;token=6b78e17d5799e03595581a3155af2e80\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/sell/catalog/products?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
              ";
        // line 505
        echo "                              </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/sell/catalog/products?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/sell/catalog/categories?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/sell/catalog/monitoring/?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                    ";
        // line 534
        echo "          <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost:7777/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php?controller=AdminAttributesGroups&amp;token=a87c764e3ccb771b9bbb92358e58afe4\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/sell/catalog/brands/?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/sell/attachments/?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost:7777/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php?controller=";
        // line 559
        echo "AdminCartRules&amp;token=9a5d9a7a8b3508f1544ae8a196ed41c6\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/sell/stocks/?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/sell/customers/?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" class=\"link\">
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
        // line 591
        echo "                          <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/sell/customers/?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/sell/addresses/?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" class=\"link\"> Addresses
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
                                                            </i";
        // line 618
        echo ">
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost:7777/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php?controller=AdminCustomerThreads&amp;token=ced56faeab07d49b291471c594261e48\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/sell/customer-service/order-messages/?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost:7777/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php?controller=AdminReturn&amp;token=989d36cd7f6289876a23410db925724c\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                  ";
        // line 646
        echo "                      </li>
                                              
                  
                                                      
                  
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

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/improve/modules/manage?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                       ";
        // line 683
        echo "             keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/improve/modules/manage?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/improve/design/themes/?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-";
        // line 711
        echo "43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"127\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/improve/design/themes/?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/improve/design/mail_theme/?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/improve/design/cms-pages/?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab";
        // line 739
        echo "-AdminModulesPositions\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/improve/design/modules/positions/?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost:7777/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php?controller=AdminImages&amp;token=2ee715c7bfdf87f92f785694fada7ed7\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/modules/link-widget/list?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" class=\"link\"> Link List
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost:7777/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php?controller=AdminCarrie";
        // line 767
        echo "rs&amp;token=8fbf2650a739146a65bc69971f46eec0\" class=\"link\">
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
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/improve/shipping/preferences/?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                ";
        // line 797
        echo "      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/improve/payment/payment_methods?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" class=\"link\">
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
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/improve/payment/payment_methods?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/improve/payment/preferences?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" class=\"link\"> Preferences
                                </a>
               ";
        // line 824
        echo "               </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/improve/international/localization/?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" class=\"link\">
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
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/improve/international/localization/?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParen";
        // line 854
        echo "tCountries\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/improve/international/zones/?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/improve/international/taxes/?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/improve/international/translations/settings?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
     ";
        // line 890
        echo "             
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/configure/shop/preferences/preferences?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" class=\"link\">
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
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/configure/shop/preferences/preferences?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/configure/shop/order-preferences/?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" class=\"link\"> Order Settings
                             ";
        // line 915
        echo "   </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/configure/shop/product-preferences/?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/configure/shop/customer-preferences/?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/configure/shop/contacts/?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                  ";
        // line 945
        echo "            <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/configure/shop/seo-urls/?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost:7777/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php?controller=AdminSearchConf&amp;token=5b76d622a70dc893b9140b270d21f4bf\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/configure/advanced/system-information/?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                         ";
        // line 972
        echo "   </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/configure/advanced/system-information/?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/configure/advanced/performance/?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/configure/advanced/administration/?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
   ";
        // line 1001
        echo "                                                         
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/configure/advanced/emails/?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/configure/advanced/import/?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/configure/advanced/employees/?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/configure/adva";
        // line 1027
        echo "nced/sql-requests/?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/configure/advanced/logs/?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/configure/advanced/webservice-keys/?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/configure/advanced/feature-flags/?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" class=\"link\"> New &amp; Experimental Features
 ";
        // line 1052
        echo "                               </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/configure/advanced/security/?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" class=\"link\"> Security
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
                      <li class=\"breadcrumb-item\">Theme &amp; Logo</li>
          
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Theme &amp; Logo &gt; Theme          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/improve/design/themes/import?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\"                  title=\"Add new theme\"                                  >
                  <i class=\"material-icons\">add</i>                  Add new theme
                </a>
                                                                        <a
                  class=\"btn btn-prima";
        // line 1102
        echo "ry pointer\"                  id=\"page-header-desc-configuration-export\"
                  href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/improve/design/themes/export?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\"                  title=\"Export current theme\"                                  >
                  <i class=\"material-icons\">cloud_download</i>                  Export current theme
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminThemes%253Fversion%253D8.1.1%2526country%253Den/Help?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\"
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
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          <li class=\"nav-";
        // line 1127
        echo "item\">
                    <a href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/improve/design/themes/?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\" id=\"subtab-AdminThemes\" class=\"nav-link tab active current\" data-submenu=\"44\">
                      Theme & Logo
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"http://localhost:7777/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php?controller=AdminPsThemeCustoConfiguration&token=e610933caa9d968f187ab20919f1c8e9\" id=\"subtab-AdminPsThemeCustoConfiguration\" class=\"nav-link tab \" data-submenu=\"128\">
                      Pages Configuration
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"http://localhost:7777/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php?controller=AdminPsThemeCustoAdvanced&token=3470e3c570e37666b395bf430a7386ae\" id=\"subtab-AdminPsThemeCustoAdvanced\" class=\"nav-link tab \" data-submenu=\"129\">
                      Advanced Customization
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                         ";
        // line 1151
        echo "                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add\"
              href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/improve/design/themes/import?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\"              title=\"Add new theme\"            >
              Add new theme
              <i class=\"material-icons\">add</i>            </a>
                                        <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-export\"
              href=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/improve/design/themes/export?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\"              title=\"Export current theme\"            >
              Export current theme
              <i class=\"material-icons\">cloud_download</i>            </a>
                  
        ";
        // line 1172
        echo "                      <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Help\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/prestashop_edition_basic_version_8.1.0/admin1017mfaenagmddc8ms3/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminThemes%253Fversion%253D8.1.1%2526country%253Den/Help?_token=VitcIPPFSIGahKDPZBeXUbYV6IrZpmVSFafWGE6BC_Q\"
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
        // line 1197
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
        // line 1231
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

    // line 1197
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

    // line 1231
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
        return "__string_template__b5871ebd7a072f10b4bb80b027a023067c4a60f49adbf2aed9ec0fda99f16f69";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1404 => 1231,  1383 => 1197,  1372 => 102,  1363 => 1231,  1323 => 1197,  1296 => 1172,  1273 => 1151,  1247 => 1127,  1220 => 1102,  1168 => 1052,  1141 => 1027,  1113 => 1001,  1082 => 972,  1053 => 945,  1021 => 915,  994 => 890,  956 => 854,  924 => 824,  895 => 797,  863 => 767,  833 => 739,  803 => 711,  773 => 683,  734 => 646,  704 => 618,  675 => 591,  641 => 559,  614 => 534,  583 => 505,  552 => 476,  520 => 446,  477 => 405,  432 => 362,  385 => 317,  330 => 264,  287 => 223,  253 => 191,  231 => 171,  193 => 135,  155 => 102,  133 => 82,  115 => 66,  87 => 40,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__b5871ebd7a072f10b4bb80b027a023067c4a60f49adbf2aed9ec0fda99f16f69", "");
    }
}
