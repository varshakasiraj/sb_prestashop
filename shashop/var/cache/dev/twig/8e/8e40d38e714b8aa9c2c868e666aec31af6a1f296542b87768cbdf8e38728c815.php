<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__f7c7b4de6257af2bb0d9868f4cd5f093eaf7c1c478a83542b448bbe5669e739d */
class __TwigTemplate_d84b09e85afa58bb0df6be08553a3b14b8c901813adbaf06253d8eee60674af8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__f7c7b4de6257af2bb0d9868f4cd5f093eaf7c1c478a83542b448bbe5669e739d"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__f7c7b4de6257af2bb0d9868f4cd5f093eaf7c1c478a83542b448bbe5669e739d"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/shashop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/shashop/img/app_icon.png\" />

<title>Performance • shop</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminPerformance';
    var iso_user = 'en';
    var lang_is_rtl = '0';
    var full_language_code = 'en-us';
    var full_cldr_language_code = 'en-US';
    var country_iso_code = 'IN';
    var _PS_VERSION_ = '1.7.8.8';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your shop.';
    var order_number_msg = 'Order number: ';
    var total_msg = 'Total: ';
    var from_msg = 'From: ';
    var see_order_msg = 'View this order';
    var new_customer_msg = 'A new customer registered on your shop.';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your shop.';
    var see_msg = 'Read this message';
    var token = '57f4ad24f4a7624fea49a4d0aee8ecd9';
    var token_admin_orders = tokenAdminOrders = 'f08a1bdcb5837b10f84033bb49f4ccb2';
    var token_admin_customers = '98964e61d23f8eb231f3d4ac8b1131b7';
    var token_admin_customer_threads = tokenAdminCustomerThreads = '622e65d2401a1351b137f9306346b607';
    var currentIndex = 'index.php?controller=AdminPerformance';
    var employee_token = '0dda46834d5f31c96acb1a90baee7353';
    var choose_language_translate = 'Choose language:';
    var default_language = '1';
    var admin_modules_link = '/shashop/admin990tjl3ay/index.php/improve/modules/catalog/recommended?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc';
    var admin_notification_get_link = '/shashop/admin990tjl3ay/index.php/common/notifications?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8En";
        // line 42
        echo "GJc';
    var admin_notification_push_link = adminNotificationPushLink = '/shashop/admin990tjl3ay/index.php/common/notifications/ack?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc';
    var tab_modules_list = '';
    var update_success_msg = 'Update successful';
    var errorLogin = 'PrestaShop was unable to log in to Addons. Please check your credentials and your Internet connection.';
    var search_product_msg = 'Search for a product';
  </script>

      <link href=\"/shashop/admin990tjl3ay/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/shashop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/shashop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/shashop/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/shashop/admin990tjl3ay/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/shashop/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/shashop/modules/ps_mbo/views/css/catalog.css?v=2.3.2\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/shashop/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/shashop/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/shashop/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/shashop\\/admin990tjl3ay\\/\";
var baseDir = \"\\/shashop\\/\";
var changeFormLanguageUrl = \"\\/shashop\\/admin990tjl3ay\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\";
var currency = {\"iso_code\":\"INR\",\"sign\":\"\\u20b9\",\"name\":\"Indian Rupee\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u";
        // line 66
        echo "00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"INR\",\"currencySymbol\":\"\\u20b9\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/shashop/admin990tjl3ay/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/shashop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/shashop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/shashop/js/admin.js?v=1.7.8.8\"></script>
<script type=\"text/javascript\" src=\"/shashop/admin990tjl3ay/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/shashop/js/tools.js?v=1.7.8.8\"></script>
<script type=\"text/javascript\" src=\"/shashop/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/shashop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/shashop/admin990tjl3ay/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/shashop/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/shashop/modules/ps_mbo/views/js/recommended-modules.js?v=2.3.2\"></script>
<script type=\"text/javascript\" src=\"/shashop/modules/ps_faviconnotificationbo/views/js/fav";
        // line 85
        echo "ico.js\"></script>
<script type=\"text/javascript\" src=\"/shashop/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>
<script type=\"text/javascript\" src=\"/shashop/modules/welcome/public/module.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/shashop/admin990tjl3ay/index.php/common/notifications?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/shashop\\/admin990tjl3ay\\/index.php?controller=AdminGamification&token=cf05ee0c5cefdb6c0eed2b8c5b8e4c36\";
            var current_id_tab = 105;
        </script>

";
        // line 107
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-en adminperformance\"
  data-base-url=\"/shashop/admin990tjl3ay/index.php\"  data-token=\"4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/shashop/admin990tjl3ay/index.php?controller=AdminDashboard&amp;token=dc81256f5120dd1dc9540b396b5650e3\"></a>
      <span id=\"shop_version\">1.7.8.8</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/shashop/admin990tjl3ay/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=3653aa6a25d1673376ba81834a8e6055\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/shashop/admin990tjl3ay/index.php/improve/modules/manage?token=21b714ca9a79fc8d98b3e6bd0a823290\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/shashop/admin990tjl3ay/index.php/sell/catalog/categories/new?token=21b714ca9a79fc8d98b3e6bd0a823290\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/shashop/admin990tjl3ay/index.php/sell/catalog/products/new?token=21b714ca9a79fc8d98b3e6bd0a823290\"
                 data-item=\"New product\"
      >New product</a>
          <a class=\"drop";
        // line 144
        echo "down-item quick-row-link\"
         href=\"http://localhost/shashop/admin990tjl3ay/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=2c70795a5fae765175a85272ce97e848\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/shashop/admin990tjl3ay/index.php?controller=AdminOrders&amp;token=f08a1bdcb5837b10f84033bb49f4ccb2\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"117\"
        data-icon=\"icon-AdminAdvancedParameters\"
        data-method=\"add\"
        data-url=\"index.php/configure/advanced/performance/?-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\"
        data-post-link=\"http://localhost/shashop/admin990tjl3ay/index.php?controller=AdminQuickAccesses&token=fac80da4c69092b601d82bcae804fe9a\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Performance - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/shashop/admin990tjl3ay/index.php?controller=AdminQuickAccesses&token=fac80da4c69092b601d82bcae804fe9a\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/shashop/admin990tjl3ay/index.php?controller=AdminSearch&amp;token=23cc3d47ead26c0ed49ce39ae8b5b91f\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" pla";
        // line 182
        echo "ceholder=\"Search (e.g.: product reference, customer name…)\" aria-label=\"Searchbar\">
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
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>";
        // line 197
        echo "
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
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class='text-left'><strong>Your shop is in debug mode.</strong></p><p class='text-left'>All the PHP errors and messages are displayed. When you no longer need it, <strong>turn off</strong> this mode.</p>\"
             href=\"/shashop/admin990tjl3ay/index.php/configure/advanced/performance/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Debug mode</span>
          </a>
        </div>
      
      
              <div class=\"component\" id=\"header-shop-list-container\">
            <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/shashop/\" target= \"_blank\">
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
             ";
        // line 244
        echo "             <li class=\"nav-item\">
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
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Have you checked your <strong><a href=\"http://localhost/shashop/admin990tjl3ay/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=38a4b0aa59821aee6c7ef5a48aa3abba\">abandoned carts</a></strong>?<br>Your next order could be hiding there!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Are you active on social media thes";
        // line 294
        echo "e days?
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

      <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/shashop/img/pr/default.jpg\" /></span>
      <span class=\"employee_profile\">Welcome back Varsha</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/shashop/admin990tjl3ay/index.php/conf";
        // line 344
        echo "igure/advanced/employees/1/edit?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\">
      <i class=\"material-icons\">edit</i>
      <span>Your profile</span>
    </a>
    </div>

    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/resources/documentations?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">book</i> Resources</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">school</i> Training</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=expert-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">person_pin_circle</i> Find an Expert</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">extension</i> PrestaShop Marketplace</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">help</i> Help Center</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/shashop/admin990tjl3ay/index.php?controller=AdminLogin&amp;logout=1&amp;token=79814730b59cd757fec3ceae998b326c\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sign out</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
";
        // line 368
        echo "  <span class=\"menu-collapse\" data-toggle-url=\"/shashop/admin990tjl3ay/index.php/configure/advanced/employees/toggle-navigation?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost/shashop/admin990tjl3ay/index.php?controller=AdminDashboard&amp;token=dc81256f5120dd1dc9540b396b5650e3\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/shashop/admin990tjl3ay/index.php/sell/orders/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                         ";
        // line 409
        echo "             
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/sell/orders/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/sell/orders/invoices/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/sell/orders/credit-slips/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/sell/orders/delivery-slips/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Delivery Slips
                                </a>
               ";
        // line 439
        echo "               </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/shashop/admin990tjl3ay/index.php?controller=AdminCarts&amp;token=38a4b0aa59821aee6c7ef5a48aa3abba\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/shashop/admin990tjl3ay/index.php/sell/catalog/products?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/sell/catalog/products?_token=4gzicI-8agSKjqpc6wEzIUnw";
        // line 470
        echo "2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/sell/catalog/categories?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/sell/catalog/monitoring/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/shashop/admin990tjl3ay/index.php?controller=AdminAttributesGroups&amp;token=6217ddd9a8e666c005bbac44807850ac\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"su";
        // line 501
        echo "btab-AdminParentManufacturers\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/sell/catalog/brands/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/sell/attachments/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/shashop/admin990tjl3ay/index.php?controller=AdminCartRules&amp;token=2c70795a5fae765175a85272ce97e848\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/sell/stocks/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
  ";
        // line 532
        echo "                                            
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/shashop/admin990tjl3ay/index.php/sell/customers/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\">
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
                                <a href=\"/shashop/admin990tjl3ay/index.php/sell/customers/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/sell/addresses/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Addresses
                                </a>
                              </li>

                               ";
        // line 563
        echo "                                                                                                     </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/shashop/admin990tjl3ay/index.php?controller=AdminCustomerThreads&amp;token=622e65d2401a1351b137f9306346b607\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/shashop/admin990tjl3ay/index.php?controller=AdminCustomerThreads&amp;token=622e65d2401a1351b137f9306346b607\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/shashop/admin990t";
        // line 592
        echo "jl3ay/index.php/sell/customer-service/order-messages/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/shashop/admin990tjl3ay/index.php?controller=AdminReturn&amp;token=5aadc2ec4bbaa04318a977b61265c453\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/shashop/admin990tjl3ay/index.php/modules/metrics/legacy/stats?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                   ";
        // line 624
        echo "           <li class=\"link-leveltwo\" data-submenu=\"144\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/modules/metrics/legacy/stats?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Stats
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"145\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/modules/metrics?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/shashop/admin990tjl3ay/index.php/modules/addons/modules/catalog?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                              ";
        // line 660
        echo "                      keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/modules/addons/modules/catalog?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/improve/modules/manage?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/shashop/admin990tjl3ay/index.php/improve/design/themes/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\"";
        // line 688
        echo ">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"130\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/improve/design/themes/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"140\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/modules/addons/themes/catalog?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Theme Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/improve/design/mail_theme/?_token=4gzicI-8";
        // line 717
        echo "agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/improve/design/cms-pages/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/improve/design/modules/positions/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/shashop/admin990tjl3ay/index.php?controller=AdminImages&amp;token=45c11c5cf4ce90d976b52e7dc485ac2c\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"129\" id=\"subtab";
        // line 748
        echo "-AdminLinkWidget\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/modules/link-widget/list?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Link List
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/shashop/admin990tjl3ay/index.php?controller=AdminCarriers&amp;token=145529234bc27445776bcda25f4cdefd\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/shashop/admin990tjl3ay/index.php?controller=AdminCarriers&amp;token=145529234bc27445776bcda25f4cdefd\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
   ";
        // line 780
        echo "                                                         
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/improve/shipping/preferences/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/shashop/admin990tjl3ay/index.php/improve/payment/payment_methods?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/improve/payment/payment_methods?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Payment Methods
                                </a>
                   ";
        // line 809
        echo "           </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/improve/payment/preferences?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/shashop/admin990tjl3ay/index.php/improve/international/localization/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/impr";
        // line 840
        echo "ove/international/localization/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/improve/international/zones/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/improve/international/taxes/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/improve/international/translations/settings?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
 ";
        // line 872
        echo "                                                     
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"146\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost/shashop/admin990tjl3ay/index.php?controller=AdminPsfacebookModule&amp;token=3f815d03818d996e7f0dfaa83ba51a56\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-146\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"147\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost/shashop/admin990tjl3ay/index.php?controller=AdminPsfacebookModule&amp;token=3f815d03818d996e7f0dfaa83ba51a56\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"149\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost/shashop/admin990tjl3ay/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=0e4df7f130e0dd0103ba7a785c1fa3f4\" class=\"link\"> Google
                                </a>
                              </li>
";
        // line 900
        echo "
                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/shashop/admin990tjl3ay/index.php/configure/shop/preferences/preferences?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/configure/shop/preferences/preferences?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
       ";
        // line 937
        echo "                       
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/configure/shop/order-preferences/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/configure/shop/product-preferences/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/configure/shop/customer-preferences/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/configure/shop/contacts/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8";
        // line 964
        echo "EnGJc\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/configure/shop/seo-urls/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/shashop/admin990tjl3ay/index.php?controller=AdminSearchConf&amp;token=cc1b60f2598257b9098801139e0e59aa\" class=\"link\"> Search
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"134\" id=\"subtab-AdminGamification\">
                                <a href=\"http://localhost/shashop/admin990tjl3ay/index.php?controller=AdminGamification&amp;token=cf05ee0c5cefdb6c0eed2b8c5b8e4c36\" class=\"link\"> Merchant Expertise
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                ";
        // line 997
        echo "                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/shashop/admin990tjl3ay/index.php/configure/advanced/system-information/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/configure/advanced/system-information/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/configure/advanced/performance/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Performance
                                </a>
                          ";
        // line 1023
        echo "    </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/configure/advanced/administration/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/configure/advanced/emails/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/configure/advanced/import/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/configure/advanced/employees/?_t";
        // line 1053
        echo "oken=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/configure/advanced/sql-requests/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/configure/advanced/logs/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/configure/advanced/webservice-keys/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"su";
        // line 1084
        echo "btab-AdminShopGroup\">
                                <a href=\"http://localhost/shashop/admin990tjl3ay/index.php?controller=AdminShopGroup&amp;token=46dfd29da792960c356474736553b63a\" class=\"link\"> Multistore
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"120\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/configure/advanced/feature-flags/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Experimental Features
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  <div class=\"onboarding-navbar bootstrap\">
  <div class=\"row text\">
    <div class=\"col-md-8\">
      Launch your shop!
    </div>
    <div class=\"col-md-4 text-right text-md-right\">0%</div>
  </div>
  <div class=\"progress\">
    <div class=\"bar\" role=\"progressbar\" style=\"width:0%;\"></div>
  </div>
  <div>
    <button class=\"btn btn-main btn-sm onboarding-button-resume\">Resume</button>
  </div>
  <div>
    <a class=\"btn -small btn-main btn-sm onboarding-button-stop\">Stop the OnBoarding</a>
  </div>
</div>

</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Advanced Parameters</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/shashop/admin990tjl3ay/index.php/configure/advanced/performance/?_t";
        // line 1134
        echo "oken=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" aria-current=\"page\">Performance</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Performance          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-clear_cache\"
                  href=\"/shashop/admin990tjl3ay/index.php/configure/advanced/performance/clear-cache?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\"                  title=\"Clear cache\"                >
                  <i class=\"material-icons\">delete</i>                  Clear cache
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/shashop/admin990tjl3ay/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fen%252Fdoc%252FAdminAdvancedParametersPerformance%253Fversion%253D1.7.8.8%2526country%253Den/Help?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\"
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
              class=\"btn btn-floating-item  pointer\"              id=\"page-head";
        // line 1183
        echo "er-desc-floating-configuration-clear_cache\"
              href=\"/shashop/admin990tjl3ay/index.php/configure/advanced/performance/clear-cache?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\"              title=\"Clear cache\"            >
              Clear cache
              <i class=\"material-icons\">delete</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Help\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/shashop/admin990tjl3ay/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fen%252Fdoc%252FAdminAdvancedParametersPerformance%253Fversion%253D1.7.8.8%2526country%253Den/Help?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\"
            >
              Help
            </a>
                        </div>
    </div>
  </div>
  <!-- begin C:\\xamp\\xampp\\htdocs\\shashop/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
<script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Recommended modules',
        'description': \"Here\\'s a selection of modules,<\\strong> compatible with your store<\\/strong>, to help you achieve your goals\",
        'Close': 'Close',
      },
      recommendedModulesUrl: '/shashop/admin990tjl3ay/index.php/modules/addons/modules/recommended?tabClassName=AdminPerformance&_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 0,
      shouldUseLegacyTheme: 0,
    });
  }
</script>
<!-- end C:\\xamp\\xampp\\htdocs\\shashop/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        
<div class=\"onboarding-advancement\" style=\"display: none\">
  <div class=\"advancement-groups\">
          <div class=\"group group-0\" styl";
        // line 1225
        echo "e=\"width: 9.0909090909091%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">1</div>
      </div>
          <div class=\"group group-1\" style=\"width: 45.454545454545%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">2</div>
      </div>
          <div class=\"group group-2\" style=\"width: 18.181818181818%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">3</div>
      </div>
          <div class=\"group group-3\" style=\"width: 9.0909090909091%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">4</div>
      </div>
          <div class=\"group group-4\" style=\"width: 18.181818181818%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">5</div>
      </div>
      </div>
  <div class=\"col-md-8\">
    <h4 class=\"group-title\"></h4>
    <div class=\"step-title step-title-1\"></div>
    <div class=\"step-title step-title-2\"></div>
  </div>
  <button class=\"btn btn-primary onboarding-button-next\">Continue</button>
  <a class=\"onboarding-button-shut-down\">Skip this tutorial</a>
</div>

<script type=\"text/javascript\">

  var onBoarding;

  \$(function(){
    onBoarding = new OnBoarding(0, {\"groups\":[{\"name\":\"dashboard\",\"steps\":[{\"type\":\"popup\",\"text\":\"<div class=\\\"onboarding-welcome\\\">\\n  <i class=\\\"material-icons onboarding-button-shut-down\\\">close<\\/i>\\n  <p class=\\\"welcome\\\">Welcome to your shop!<\\/p>\\n  <div class=\\\"content\\\">\\n    <p>Hi! My name is Preston and I'm here to show you around.<\\/p>\\n    <p>You will discover a few essential steps before you can launch your shop:\\n    Create your first product, customize your shop, configure shipping and payments...<\\/p>\\n  <\\/div>\\n  <div class=\\\"started\\\">\\n    <p>Let's get started!<\\/p>\\n  <\\/div>\\n  <div class=\\\"buttons\\\">\\n    <button class=\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\">Later<\\/button>\\n    <button class=\\\"blue-balloon btn btn-";
        // line 1260
        echo "primary btn-lg with-spinner onboarding-button-next\\\">Start<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"http:\\/\\/localhost\\/shashop\\/admin990tjl3ay\\/index.php?controller=AdminDashboard&token=dc81256f5120dd1dc9540b396b5650e3\"}]},{\"name\":\"product\",\"title\":\"Let's create your first product\",\"subtitle\":{\"1\":\"What do you want to tell about it? Think about what your customers want to know.\",\"2\":\"Add clear and attractive information. Don't worry, you can edit it later :)\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Give your product a catchy name.\",\"options\":[\"savepoint\"],\"page\":[\"\\/shashop\\/admin990tjl3ay\\/index.php\\/sell\\/catalog\\/products\\/new?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\",\"index.php\\/sell\\/catalog\\/products\\/.+\"],\"selector\":\"#form_step1_name_1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Fill out the essential details in this tab. The other tabs are for more advanced information.\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#tab_step1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Add one or more pictures so your product looks tempting!\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#product-images-dropzone\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"How much do you want to sell it for?\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\".right-column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:first-child > .input-group\",\"position\":\"left\",\"action\":{\"selector\":\"#product_form_save_go_to_catalog_btn\",\"action\":\"click\"}},{\"type\":\"tooltip\",\"text\":\"Yay! You just created your first product. Looks good, right?\",\"page\":\"index.php\\/sell\\/catalog\\/products\",\"selector\":\"#product_catalog_list table tr:first-child td:nth-child(3)\",\"position\":\"left\"}]},{\"name\":\"theme\",\"title\":\"Give your shop its own identity\",\"subtitle\":{\"1\":\"How do you want your shop to look? What makes it so special?\",\"2\":\"Customize your theme or choose the best design from our theme catalog.\"},\"steps\":[{";
        echo "\"type\":\"tooltip\",\"text\":\"A good way to start is to add your own logo here!\",\"options\":[\"savepoint\"],\"page\":\"\\/shashop\\/admin990tjl3ay\\/index.php\\/improve\\/design\\/themes\\/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\",\"selector\":\"#form_shop_logos_header_logo, #form_header_logo\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"If you want something really special, have a look at the theme catalog!\",\"page\":\"\\/shashop\\/admin990tjl3ay\\/index.php\\/improve\\/design\\/themes-catalog\\/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\",\"selector\":\".addons-theme-one:first-child\",\"position\":\"right\"}]},{\"name\":\"payment\",\"title\":\"Get your shop ready for payments\",\"subtitle\":{\"1\":\"How do you want your customers to pay you?\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"These payment methods are already available to your customers.\",\"options\":[\"savepoint\"],\"page\":\"\\/shashop\\/admin990tjl3ay\\/index.php\\/improve\\/payment\\/payment_methods?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\",\"selector\":\".modules_list_container_tab:first tr:first-child .text-muted, .card:eq(0) .text-muted:eq(0)\",\"position\":\"right\"}]},{\"name\":\"shipping\",\"title\":\"Choose your shipping solutions\",\"subtitle\":{\"1\":\"How do you want to deliver your products?\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Here are the shipping methods available on your shop today.\",\"options\":[\"savepoint\"],\"page\":\"http:\\/\\/localhost\\/shashop\\/admin990tjl3ay\\/index.php?controller=AdminCarriers&token=145529234bc27445776bcda25f4cdefd\",\"selector\":\"#table-carrier tr:eq(2) td:eq(3)\",\"position\":\"right\"},{\"type\":\"popup\",\"text\":\"<div id=\\\"onboarding-welcome\\\" class=\\\"modal-body\\\">\\n    <div class=\\\"col-12\\\">\\n        <button class=\\\"onboarding-button-next pull-right close\\\" type=\\\"button\\\">&times;<\\/button>\\n        <h2 class=\\\"text-center text-md-center\\\">Over to you!<\\/h2>\\n    <\\/div>\\n    <div class=\\\"col-12\\\">\\n        <p class=\\\"text-center text-md-center\\\">\\n          You've seen the essential, but there's a lot more to explore.<br \\/>\\n          So";
        echo "me resources can help you go further:\\n        <\\/p>\\n        <div class=\\\"container-fluid\\\">\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6  justify-content-center text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"http:\\/\\/doc.prestashop.com\\/display\\/PS17\\/Getting+Started\\\" target=\\\"_blank\\\">\\n                <div class=\\\"starter-guide\\\"><\\/div>\\n                <span class=\\\"link\\\">Starter Guide<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/forums\\/\\\" target=\\\"_blank\\\">\\n                <div class=\\\"forum\\\"><\\/div>\\n                <span class=\\\"link\\\">Forum<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/en\\/training-prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"training\\\"><\\/div>\\n                <span class=\\\"link\\\">Training<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.youtube.com\\/user\\/prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"video-tutorial\\\"><\\/div>\\n                <span class=\\\"link\\\">Video tutorial<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n        <\\/div>\\n    <\\/div>\\n    <div class=\\\"modal-footer\\\">\\n        <div class=\\\"col-12\\\">\\n            <div class=\\\"text-center text-md-center\\\">\\n                <button class=\\\"btn btn-primary onboarding-button-next\\\">I'm ready<\\/button>\\n            <\\/div>\\n        <\\/div>\\n    <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"http:\\/\\/localhost\\/shashop\\/admin990tjl3ay";
        echo "\\/index.php?controller=AdminDashboard&token=dc81256f5120dd1dc9540b396b5650e3\"}]}]}, 1, \"http://localhost/shashop/admin990tjl3ay/index.php?controller=AdminWelcome&token=7750466f877dbc1634075b3a9cd6049f\", baseAdminDir);

          onBoarding.addTemplate('lost', '<div class=\"onboarding onboarding-popup bootstrap\">  <div class=\"content\">    <p>Hey! Are you lost?</p>    <p>To continue, click here:</p>    <div class=\"text-center\">      <button class=\"btn btn-primary onboarding-button-goto-current\">Continue</button>    </div>    <p>If you want to stop the tutorial for good, click here:</p>    <div class=\"text-center\">      <button class=\"btn btn-alert onboarding-button-stop\">Quit the Welcome tutorial</button>    </div>  </div></div>');
          onBoarding.addTemplate('popup', '<div class=\"onboarding-popup bootstrap\">  <div class=\"content\"></div></div>');
          onBoarding.addTemplate('tooltip', '<div class=\"onboarding-tooltip\">  <div class=\"content\"></div>  <div class=\"onboarding-tooltipsteps\">    <div class=\"total\">Step <span class=\"count\">1/5</span></div>    <div class=\"bulls\">    </div>  </div>  <button class=\"btn btn-primary btn-xs onboarding-button-next\">Next</button></div>');
    
    onBoarding.showCurrentStep();

    var body = \$(\"body\");

    body.delegate(\".onboarding-button-next\", \"click\", function(){
      if (\$(this).is('.with-spinner')) {
        if (!\$(this).is('.animated')) {
          \$(this).addClass('animated');
          onBoarding.gotoNextStep();
        }
      } else {
        onBoarding.gotoNextStep();
      }
    }).delegate(\".onboarding-button-shut-down\", \"click\", function(){
      onBoarding.setShutDown(true);
    }).delegate(\".onboarding-button-resume\", \"click\", function(){
      onBoarding.setShutDown(false);
    }).delegate(\".onboarding-button-goto-current\", \"click\", function(){
      onBoarding.gotoLastSavePoint();
    }).delegate(\".onboarding-button-stop\", \"click\", function(){
      onBoarding.stop();
    });

  });

</script>


        ";
        // line 1294
        echo "                                                
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1300
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

            
          </div>
        </div>

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
  <a href=\"http://localhost/shashop/admin990tjl3ay/index.php?controller=AdminDashboard&amp;token=dc81256f5120dd1dc9540b396b5650e3\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Back
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-EN&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/en/login?email=varshakasiraj%40gmail.com&amp;firstname=Varsha&amp;lastname=Kasiraj&amp;website=http%3A%2F%2Flocalhost%2Fshashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/shashop/admin990tjl3ay/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connect your shop to PrestaShop's marketplace in order to automatically import all your Addons purchases.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
        // line 1350
        echo "<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Don't have an account?</h4>
\t\t\t\t\t\t<p class='text-justify'>Discover the Power of PrestaShop Addons! Explore the PrestaShop Official Marketplace and find over 3 500 innovative modules and themes that optimize conversion rates, increase traffic, build customer loyalty and maximize your productivity</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connect to PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/en/forgot-your-password\">I forgot my password</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/en/login?email=varshakasiraj%40gmail.com&amp;firstname=Varsha&amp;lastname=Kasiraj&amp;website=http%3A%2F%2Flocalhost%2Fshashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCreate an Account
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">";
        // line 1388
        echo "
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Sign in
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1408
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 107
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1300
    public function block_content_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_content_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1408
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__f7c7b4de6257af2bb0d9868f4cd5f093eaf7c1c478a83542b448bbe5669e739d";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1661 => 1408,  1596 => 1300,  1563 => 107,  1548 => 1408,  1526 => 1388,  1486 => 1350,  1430 => 1300,  1422 => 1294,  1383 => 1260,  1346 => 1225,  1302 => 1183,  1251 => 1134,  1199 => 1084,  1166 => 1053,  1134 => 1023,  1106 => 997,  1071 => 964,  1042 => 937,  1003 => 900,  973 => 872,  939 => 840,  906 => 809,  875 => 780,  841 => 748,  808 => 717,  777 => 688,  747 => 660,  709 => 624,  675 => 592,  644 => 563,  611 => 532,  578 => 501,  545 => 470,  512 => 439,  480 => 409,  437 => 368,  411 => 344,  359 => 294,  307 => 244,  258 => 197,  241 => 182,  201 => 144,  159 => 107,  135 => 85,  114 => 66,  88 => 42,  45 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{{ '<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/shashop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/shashop/img/app_icon.png\" />

<title>Performance • shop</title>

  <script type=\"text/javascript\">
    var help_class_name = \\'AdminPerformance\\';
    var iso_user = \\'en\\';
    var lang_is_rtl = \\'0\\';
    var full_language_code = \\'en-us\\';
    var full_cldr_language_code = \\'en-US\\';
    var country_iso_code = \\'IN\\';
    var _PS_VERSION_ = \\'1.7.8.8\\';
    var roundMode = 2;
    var youEditFieldFor = \\'\\';
        var new_order_msg = \\'A new order has been placed on your shop.\\';
    var order_number_msg = \\'Order number: \\';
    var total_msg = \\'Total: \\';
    var from_msg = \\'From: \\';
    var see_order_msg = \\'View this order\\';
    var new_customer_msg = \\'A new customer registered on your shop.\\';
    var customer_name_msg = \\'Customer name: \\';
    var new_msg = \\'A new message was posted on your shop.\\';
    var see_msg = \\'Read this message\\';
    var token = \\'57f4ad24f4a7624fea49a4d0aee8ecd9\\';
    var token_admin_orders = tokenAdminOrders = \\'f08a1bdcb5837b10f84033bb49f4ccb2\\';
    var token_admin_customers = \\'98964e61d23f8eb231f3d4ac8b1131b7\\';
    var token_admin_customer_threads = tokenAdminCustomerThreads = \\'622e65d2401a1351b137f9306346b607\\';
    var currentIndex = \\'index.php?controller=AdminPerformance\\';
    var employee_token = \\'0dda46834d5f31c96acb1a90baee7353\\';
    var choose_language_translate = \\'Choose language:\\';
    var default_language = \\'1\\';
    var admin_modules_link = \\'/shashop/admin990tjl3ay/index.php/improve/modules/catalog/recommended?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\\';
    var admin_notification_get_link = \\'/shashop/admin990tjl3ay/index.php/common/notifications?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8En' | raw }}{{ 'GJc\\';
    var admin_notification_push_link = adminNotificationPushLink = \\'/shashop/admin990tjl3ay/index.php/common/notifications/ack?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\\';
    var tab_modules_list = \\'\\';
    var update_success_msg = \\'Update successful\\';
    var errorLogin = \\'PrestaShop was unable to log in to Addons. Please check your credentials and your Internet connection.\\';
    var search_product_msg = \\'Search for a product\\';
  </script>

      <link href=\"/shashop/admin990tjl3ay/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/shashop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/shashop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/shashop/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/shashop/admin990tjl3ay/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/shashop/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/shashop/modules/ps_mbo/views/css/catalog.css?v=2.3.2\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/shashop/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/shashop/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/shashop/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\\\/shashop\\\\/admin990tjl3ay\\\\/\";
var baseDir = \"\\\\/shashop\\\\/\";
var changeFormLanguageUrl = \"\\\\/shashop\\\\/admin990tjl3ay\\\\/index.php\\\\/configure\\\\/advanced\\\\/employees\\\\/change-form-language?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\";
var currency = {\"iso_code\":\"INR\",\"sign\":\"\\\\u20b9\",\"name\":\"Indian Rupee\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u' | raw }}{{ '00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"currencyCode\":\"INR\",\"currencySymbol\":\"\\\\u20b9\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"positivePattern\":\"\\\\u00a4#,##0.00\",\"negativePattern\":\"-\\\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/shashop/admin990tjl3ay/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/shashop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/shashop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/shashop/js/admin.js?v=1.7.8.8\"></script>
<script type=\"text/javascript\" src=\"/shashop/admin990tjl3ay/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/shashop/js/tools.js?v=1.7.8.8\"></script>
<script type=\"text/javascript\" src=\"/shashop/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/shashop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/shashop/admin990tjl3ay/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/shashop/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/shashop/modules/ps_mbo/views/js/recommended-modules.js?v=2.3.2\"></script>
<script type=\"text/javascript\" src=\"/shashop/modules/ps_faviconnotificationbo/views/js/fav' | raw }}{{ 'ico.js\"></script>
<script type=\"text/javascript\" src=\"/shashop/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>
<script type=\"text/javascript\" src=\"/shashop/modules/welcome/public/module.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: \\'#DF0067\\',
      textColor: \\'#FFFFFF\\',
      notificationGetUrl: \\'/shashop/admin990tjl3ay/index.php/common/notifications?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\\',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script>
            var admin_gamification_ajax_url = \"http:\\\\/\\\\/localhost\\\\/shashop\\\\/admin990tjl3ay\\\\/index.php?controller=AdminGamification&token=cf05ee0c5cefdb6c0eed2b8c5b8e4c36\";
            var current_id_tab = 105;
        </script>

' | raw }}{% block stylesheets %}{% endblock %}{% block extra_stylesheets %}{% endblock %}</head>{{ '

<body
  class=\"lang-en adminperformance\"
  data-base-url=\"/shashop/admin990tjl3ay/index.php\"  data-token=\"4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/shashop/admin990tjl3ay/index.php?controller=AdminDashboard&amp;token=dc81256f5120dd1dc9540b396b5650e3\"></a>
      <span id=\"shop_version\">1.7.8.8</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/shashop/admin990tjl3ay/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=3653aa6a25d1673376ba81834a8e6055\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/shashop/admin990tjl3ay/index.php/improve/modules/manage?token=21b714ca9a79fc8d98b3e6bd0a823290\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/shashop/admin990tjl3ay/index.php/sell/catalog/categories/new?token=21b714ca9a79fc8d98b3e6bd0a823290\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/shashop/admin990tjl3ay/index.php/sell/catalog/products/new?token=21b714ca9a79fc8d98b3e6bd0a823290\"
                 data-item=\"New product\"
      >New product</a>
          <a class=\"drop' | raw }}{{ 'down-item quick-row-link\"
         href=\"http://localhost/shashop/admin990tjl3ay/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=2c70795a5fae765175a85272ce97e848\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/shashop/admin990tjl3ay/index.php?controller=AdminOrders&amp;token=f08a1bdcb5837b10f84033bb49f4ccb2\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"117\"
        data-icon=\"icon-AdminAdvancedParameters\"
        data-method=\"add\"
        data-url=\"index.php/configure/advanced/performance/?-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\"
        data-post-link=\"http://localhost/shashop/admin990tjl3ay/index.php?controller=AdminQuickAccesses&token=fac80da4c69092b601d82bcae804fe9a\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Performance - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/shashop/admin990tjl3ay/index.php?controller=AdminQuickAccesses&token=fac80da4c69092b601d82bcae804fe9a\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/shashop/admin990tjl3ay/index.php?controller=AdminSearch&amp;token=23cc3d47ead26c0ed49ce39ae8b5b91f\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" pla' | raw }}{{ 'ceholder=\"Search (e.g.: product reference, customer name…)\" aria-label=\"Searchbar\">
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
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>' | raw }}{{ '
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
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
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=\\'text-left\\'><strong>Your shop is in debug mode.</strong></p><p class=\\'text-left\\'>All the PHP errors and messages are displayed. When you no longer need it, <strong>turn off</strong> this mode.</p>\"
             href=\"/shashop/admin990tjl3ay/index.php/configure/advanced/performance/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Debug mode</span>
          </a>
        </div>
      
      
              <div class=\"component\" id=\"header-shop-list-container\">
            <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/shashop/\" target= \"_blank\">
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
             ' | raw }}{{ '             <li class=\"nav-item\">
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
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Have you checked your <strong><a href=\"http://localhost/shashop/admin990tjl3ay/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=38a4b0aa59821aee6c7ef5a48aa3abba\">abandoned carts</a></strong>?<br>Your next order could be hiding there!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Are you active on social media thes' | raw }}{{ 'e days?
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
    <a class=\"notif\" href=\\'order_url\\'>
      #_id_order_ -
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href=\\'customer_url\\'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
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

      <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/shashop/img/pr/default.jpg\" /></span>
      <span class=\"employee_profile\">Welcome back Varsha</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/shashop/admin990tjl3ay/index.php/conf' | raw }}{{ 'igure/advanced/employees/1/edit?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\">
      <i class=\"material-icons\">edit</i>
      <span>Your profile</span>
    </a>
    </div>

    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/resources/documentations?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">book</i> Resources</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">school</i> Training</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=expert-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">person_pin_circle</i> Find an Expert</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">extension</i> PrestaShop Marketplace</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">help</i> Help Center</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/shashop/admin990tjl3ay/index.php?controller=AdminLogin&amp;logout=1&amp;token=79814730b59cd757fec3ceae998b326c\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sign out</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
' | raw }}{{ '  <span class=\"menu-collapse\" data-toggle-url=\"/shashop/admin990tjl3ay/index.php/configure/advanced/employees/toggle-navigation?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost/shashop/admin990tjl3ay/index.php?controller=AdminDashboard&amp;token=dc81256f5120dd1dc9540b396b5650e3\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/shashop/admin990tjl3ay/index.php/sell/orders/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                         ' | raw }}{{ '             
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/sell/orders/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/sell/orders/invoices/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/sell/orders/credit-slips/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/sell/orders/delivery-slips/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Delivery Slips
                                </a>
               ' | raw }}{{ '               </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/shashop/admin990tjl3ay/index.php?controller=AdminCarts&amp;token=38a4b0aa59821aee6c7ef5a48aa3abba\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/shashop/admin990tjl3ay/index.php/sell/catalog/products?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/sell/catalog/products?_token=4gzicI-8agSKjqpc6wEzIUnw' | raw }}{{ '2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/sell/catalog/categories?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/sell/catalog/monitoring/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/shashop/admin990tjl3ay/index.php?controller=AdminAttributesGroups&amp;token=6217ddd9a8e666c005bbac44807850ac\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"su' | raw }}{{ 'btab-AdminParentManufacturers\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/sell/catalog/brands/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/sell/attachments/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/shashop/admin990tjl3ay/index.php?controller=AdminCartRules&amp;token=2c70795a5fae765175a85272ce97e848\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/sell/stocks/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
  ' | raw }}{{ '                                            
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/shashop/admin990tjl3ay/index.php/sell/customers/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\">
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
                                <a href=\"/shashop/admin990tjl3ay/index.php/sell/customers/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/sell/addresses/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Addresses
                                </a>
                              </li>

                               ' | raw }}{{ '                                                                                                     </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/shashop/admin990tjl3ay/index.php?controller=AdminCustomerThreads&amp;token=622e65d2401a1351b137f9306346b607\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/shashop/admin990tjl3ay/index.php?controller=AdminCustomerThreads&amp;token=622e65d2401a1351b137f9306346b607\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/shashop/admin990t' | raw }}{{ 'jl3ay/index.php/sell/customer-service/order-messages/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/shashop/admin990tjl3ay/index.php?controller=AdminReturn&amp;token=5aadc2ec4bbaa04318a977b61265c453\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/shashop/admin990tjl3ay/index.php/modules/metrics/legacy/stats?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                   ' | raw }}{{ '           <li class=\"link-leveltwo\" data-submenu=\"144\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/modules/metrics/legacy/stats?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Stats
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"145\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/modules/metrics?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/shashop/admin990tjl3ay/index.php/modules/addons/modules/catalog?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                              ' | raw }}{{ '                      keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/modules/addons/modules/catalog?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/improve/modules/manage?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/shashop/admin990tjl3ay/index.php/improve/design/themes/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\"' | raw }}{{ '>desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"130\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/improve/design/themes/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"140\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/modules/addons/themes/catalog?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Theme Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/improve/design/mail_theme/?_token=4gzicI-8' | raw }}{{ 'agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/improve/design/cms-pages/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/improve/design/modules/positions/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/shashop/admin990tjl3ay/index.php?controller=AdminImages&amp;token=45c11c5cf4ce90d976b52e7dc485ac2c\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"129\" id=\"subtab' | raw }}{{ '-AdminLinkWidget\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/modules/link-widget/list?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Link List
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/shashop/admin990tjl3ay/index.php?controller=AdminCarriers&amp;token=145529234bc27445776bcda25f4cdefd\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/shashop/admin990tjl3ay/index.php?controller=AdminCarriers&amp;token=145529234bc27445776bcda25f4cdefd\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
   ' | raw }}{{ '                                                         
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/improve/shipping/preferences/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/shashop/admin990tjl3ay/index.php/improve/payment/payment_methods?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/improve/payment/payment_methods?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Payment Methods
                                </a>
                   ' | raw }}{{ '           </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/improve/payment/preferences?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/shashop/admin990tjl3ay/index.php/improve/international/localization/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/impr' | raw }}{{ 'ove/international/localization/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/improve/international/zones/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/improve/international/taxes/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/improve/international/translations/settings?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
 ' | raw }}{{ '                                                     
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"146\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost/shashop/admin990tjl3ay/index.php?controller=AdminPsfacebookModule&amp;token=3f815d03818d996e7f0dfaa83ba51a56\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-146\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"147\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost/shashop/admin990tjl3ay/index.php?controller=AdminPsfacebookModule&amp;token=3f815d03818d996e7f0dfaa83ba51a56\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"149\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost/shashop/admin990tjl3ay/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=0e4df7f130e0dd0103ba7a785c1fa3f4\" class=\"link\"> Google
                                </a>
                              </li>
' | raw }}{{ '
                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/shashop/admin990tjl3ay/index.php/configure/shop/preferences/preferences?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/configure/shop/preferences/preferences?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
       ' | raw }}{{ '                       
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/configure/shop/order-preferences/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/configure/shop/product-preferences/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/configure/shop/customer-preferences/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/configure/shop/contacts/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8' | raw }}{{ 'EnGJc\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/configure/shop/seo-urls/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/shashop/admin990tjl3ay/index.php?controller=AdminSearchConf&amp;token=cc1b60f2598257b9098801139e0e59aa\" class=\"link\"> Search
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"134\" id=\"subtab-AdminGamification\">
                                <a href=\"http://localhost/shashop/admin990tjl3ay/index.php?controller=AdminGamification&amp;token=cf05ee0c5cefdb6c0eed2b8c5b8e4c36\" class=\"link\"> Merchant Expertise
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                ' | raw }}{{ '                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/shashop/admin990tjl3ay/index.php/configure/advanced/system-information/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/configure/advanced/system-information/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/configure/advanced/performance/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Performance
                                </a>
                          ' | raw }}{{ '    </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/configure/advanced/administration/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/configure/advanced/emails/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/configure/advanced/import/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/configure/advanced/employees/?_t' | raw }}{{ 'oken=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/configure/advanced/sql-requests/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/configure/advanced/logs/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/configure/advanced/webservice-keys/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"su' | raw }}{{ 'btab-AdminShopGroup\">
                                <a href=\"http://localhost/shashop/admin990tjl3ay/index.php?controller=AdminShopGroup&amp;token=46dfd29da792960c356474736553b63a\" class=\"link\"> Multistore
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"120\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/shashop/admin990tjl3ay/index.php/configure/advanced/feature-flags/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" class=\"link\"> Experimental Features
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  <div class=\"onboarding-navbar bootstrap\">
  <div class=\"row text\">
    <div class=\"col-md-8\">
      Launch your shop!
    </div>
    <div class=\"col-md-4 text-right text-md-right\">0%</div>
  </div>
  <div class=\"progress\">
    <div class=\"bar\" role=\"progressbar\" style=\"width:0%;\"></div>
  </div>
  <div>
    <button class=\"btn btn-main btn-sm onboarding-button-resume\">Resume</button>
  </div>
  <div>
    <a class=\"btn -small btn-main btn-sm onboarding-button-stop\">Stop the OnBoarding</a>
  </div>
</div>

</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Advanced Parameters</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/shashop/admin990tjl3ay/index.php/configure/advanced/performance/?_t' | raw }}{{ 'oken=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\" aria-current=\"page\">Performance</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Performance          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-clear_cache\"
                  href=\"/shashop/admin990tjl3ay/index.php/configure/advanced/performance/clear-cache?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\"                  title=\"Clear cache\"                >
                  <i class=\"material-icons\">delete</i>                  Clear cache
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/shashop/admin990tjl3ay/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fen%252Fdoc%252FAdminAdvancedParametersPerformance%253Fversion%253D1.7.8.8%2526country%253Den/Help?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\"
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
              class=\"btn btn-floating-item  pointer\"              id=\"page-head' | raw }}{{ 'er-desc-floating-configuration-clear_cache\"
              href=\"/shashop/admin990tjl3ay/index.php/configure/advanced/performance/clear-cache?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\"              title=\"Clear cache\"            >
              Clear cache
              <i class=\"material-icons\">delete</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Help\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/shashop/admin990tjl3ay/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fen%252Fdoc%252FAdminAdvancedParametersPerformance%253Fversion%253D1.7.8.8%2526country%253Den/Help?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\"
            >
              Help
            </a>
                        </div>
    </div>
  </div>
  <!-- begin C:\\\\xamp\\\\xampp\\\\htdocs\\\\shashop/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
<script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        \\'Recommended Modules and Services\\': \\'Recommended modules\\',
        \\'description\\': \"Here\\\\\\'s a selection of modules,<\\\\strong> compatible with your store<\\\\/strong>, to help you achieve your goals\",
        \\'Close\\': \\'Close\\',
      },
      recommendedModulesUrl: \\'/shashop/admin990tjl3ay/index.php/modules/addons/modules/recommended?tabClassName=AdminPerformance&_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\\',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 0,
      shouldUseLegacyTheme: 0,
    });
  }
</script>
<!-- end C:\\\\xamp\\\\xampp\\\\htdocs\\\\shashop/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        
<div class=\"onboarding-advancement\" style=\"display: none\">
  <div class=\"advancement-groups\">
          <div class=\"group group-0\" styl' | raw }}{{ 'e=\"width: 9.0909090909091%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">1</div>
      </div>
          <div class=\"group group-1\" style=\"width: 45.454545454545%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">2</div>
      </div>
          <div class=\"group group-2\" style=\"width: 18.181818181818%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">3</div>
      </div>
          <div class=\"group group-3\" style=\"width: 9.0909090909091%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">4</div>
      </div>
          <div class=\"group group-4\" style=\"width: 18.181818181818%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">5</div>
      </div>
      </div>
  <div class=\"col-md-8\">
    <h4 class=\"group-title\"></h4>
    <div class=\"step-title step-title-1\"></div>
    <div class=\"step-title step-title-2\"></div>
  </div>
  <button class=\"btn btn-primary onboarding-button-next\">Continue</button>
  <a class=\"onboarding-button-shut-down\">Skip this tutorial</a>
</div>

<script type=\"text/javascript\">

  var onBoarding;

  \$(function(){
    onBoarding = new OnBoarding(0, {\"groups\":[{\"name\":\"dashboard\",\"steps\":[{\"type\":\"popup\",\"text\":\"<div class=\\\\\"onboarding-welcome\\\\\">\\\\n  <i class=\\\\\"material-icons onboarding-button-shut-down\\\\\">close<\\\\/i>\\\\n  <p class=\\\\\"welcome\\\\\">Welcome to your shop!<\\\\/p>\\\\n  <div class=\\\\\"content\\\\\">\\\\n    <p>Hi! My name is Preston and I\\'m here to show you around.<\\\\/p>\\\\n    <p>You will discover a few essential steps before you can launch your shop:\\\\n    Create your first product, customize your shop, configure shipping and payments...<\\\\/p>\\\\n  <\\\\/div>\\\\n  <div class=\\\\\"started\\\\\">\\\\n    <p>Let\\'s get started!<\\\\/p>\\\\n  <\\\\/div>\\\\n  <div class=\\\\\"buttons\\\\\">\\\\n    <button class=\\\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\\\">Later<\\\\/button>\\\\n    <button class=\\\\\"blue-balloon btn btn-' | raw }}{{ 'primary btn-lg with-spinner onboarding-button-next\\\\\">Start<\\\\/button>\\\\n  <\\\\/div>\\\\n<\\\\/div>\\\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"http:\\\\/\\\\/localhost\\\\/shashop\\\\/admin990tjl3ay\\\\/index.php?controller=AdminDashboard&token=dc81256f5120dd1dc9540b396b5650e3\"}]},{\"name\":\"product\",\"title\":\"Let\\'s create your first product\",\"subtitle\":{\"1\":\"What do you want to tell about it? Think about what your customers want to know.\",\"2\":\"Add clear and attractive information. Don\\'t worry, you can edit it later :)\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Give your product a catchy name.\",\"options\":[\"savepoint\"],\"page\":[\"\\\\/shashop\\\\/admin990tjl3ay\\\\/index.php\\\\/sell\\\\/catalog\\\\/products\\\\/new?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\",\"index.php\\\\/sell\\\\/catalog\\\\/products\\\\/.+\"],\"selector\":\"#form_step1_name_1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Fill out the essential details in this tab. The other tabs are for more advanced information.\",\"page\":\"index.php\\\\/sell\\\\/catalog\\\\/products\\\\/.+\",\"selector\":\"#tab_step1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Add one or more pictures so your product looks tempting!\",\"page\":\"index.php\\\\/sell\\\\/catalog\\\\/products\\\\/.+\",\"selector\":\"#product-images-dropzone\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"How much do you want to sell it for?\",\"page\":\"index.php\\\\/sell\\\\/catalog\\\\/products\\\\/.+\",\"selector\":\".right-column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:first-child > .input-group\",\"position\":\"left\",\"action\":{\"selector\":\"#product_form_save_go_to_catalog_btn\",\"action\":\"click\"}},{\"type\":\"tooltip\",\"text\":\"Yay! You just created your first product. Looks good, right?\",\"page\":\"index.php\\\\/sell\\\\/catalog\\\\/products\",\"selector\":\"#product_catalog_list table tr:first-child td:nth-child(3)\",\"position\":\"left\"}]},{\"name\":\"theme\",\"title\":\"Give your shop its own identity\",\"subtitle\":{\"1\":\"How do you want your shop to look? What makes it so special?\",\"2\":\"Customize your theme or choose the best design from our theme catalog.\"},\"steps\":[{' | raw }}{{ '\"type\":\"tooltip\",\"text\":\"A good way to start is to add your own logo here!\",\"options\":[\"savepoint\"],\"page\":\"\\\\/shashop\\\\/admin990tjl3ay\\\\/index.php\\\\/improve\\\\/design\\\\/themes\\\\/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\",\"selector\":\"#form_shop_logos_header_logo, #form_header_logo\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"If you want something really special, have a look at the theme catalog!\",\"page\":\"\\\\/shashop\\\\/admin990tjl3ay\\\\/index.php\\\\/improve\\\\/design\\\\/themes-catalog\\\\/?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\",\"selector\":\".addons-theme-one:first-child\",\"position\":\"right\"}]},{\"name\":\"payment\",\"title\":\"Get your shop ready for payments\",\"subtitle\":{\"1\":\"How do you want your customers to pay you?\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"These payment methods are already available to your customers.\",\"options\":[\"savepoint\"],\"page\":\"\\\\/shashop\\\\/admin990tjl3ay\\\\/index.php\\\\/improve\\\\/payment\\\\/payment_methods?_token=4gzicI-8agSKjqpc6wEzIUnw2qjA8pR-QJoxH8EnGJc\",\"selector\":\".modules_list_container_tab:first tr:first-child .text-muted, .card:eq(0) .text-muted:eq(0)\",\"position\":\"right\"}]},{\"name\":\"shipping\",\"title\":\"Choose your shipping solutions\",\"subtitle\":{\"1\":\"How do you want to deliver your products?\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Here are the shipping methods available on your shop today.\",\"options\":[\"savepoint\"],\"page\":\"http:\\\\/\\\\/localhost\\\\/shashop\\\\/admin990tjl3ay\\\\/index.php?controller=AdminCarriers&token=145529234bc27445776bcda25f4cdefd\",\"selector\":\"#table-carrier tr:eq(2) td:eq(3)\",\"position\":\"right\"},{\"type\":\"popup\",\"text\":\"<div id=\\\\\"onboarding-welcome\\\\\" class=\\\\\"modal-body\\\\\">\\\\n    <div class=\\\\\"col-12\\\\\">\\\\n        <button class=\\\\\"onboarding-button-next pull-right close\\\\\" type=\\\\\"button\\\\\">&times;<\\\\/button>\\\\n        <h2 class=\\\\\"text-center text-md-center\\\\\">Over to you!<\\\\/h2>\\\\n    <\\\\/div>\\\\n    <div class=\\\\\"col-12\\\\\">\\\\n        <p class=\\\\\"text-center text-md-center\\\\\">\\\\n          You\\'ve seen the essential, but there\\'s a lot more to explore.<br \\\\/>\\\\n          So' | raw }}{{ 'me resources can help you go further:\\\\n        <\\\\/p>\\\\n        <div class=\\\\\"container-fluid\\\\\">\\\\n          <div class=\\\\\"row\\\\\">\\\\n            <div class=\\\\\"col-md-6  justify-content-center text-center text-md-center link-container\\\\\">\\\\n              <a class=\\\\\"final-link\\\\\" href=\\\\\"http:\\\\/\\\\/doc.prestashop.com\\\\/display\\\\/PS17\\\\/Getting+Started\\\\\" target=\\\\\"_blank\\\\\">\\\\n                <div class=\\\\\"starter-guide\\\\\"><\\\\/div>\\\\n                <span class=\\\\\"link\\\\\">Starter Guide<\\\\/span>\\\\n              <\\\\/a>\\\\n            <\\\\/div>\\\\n            <div class=\\\\\"col-md-6 text-center text-md-center link-container\\\\\">\\\\n              <a class=\\\\\"final-link\\\\\" href=\\\\\"https:\\\\/\\\\/www.prestashop.com\\\\/forums\\\\/\\\\\" target=\\\\\"_blank\\\\\">\\\\n                <div class=\\\\\"forum\\\\\"><\\\\/div>\\\\n                <span class=\\\\\"link\\\\\">Forum<\\\\/span>\\\\n              <\\\\/a>\\\\n            <\\\\/div>\\\\n          <\\\\/div>\\\\n          <div class=\\\\\"row\\\\\">\\\\n            <div class=\\\\\"col-md-6 text-center text-md-center link-container\\\\\">\\\\n              <a class=\\\\\"final-link\\\\\" href=\\\\\"https:\\\\/\\\\/www.prestashop.com\\\\/en\\\\/training-prestashop\\\\\" target=\\\\\"_blank\\\\\">\\\\n                <div class=\\\\\"training\\\\\"><\\\\/div>\\\\n                <span class=\\\\\"link\\\\\">Training<\\\\/span>\\\\n              <\\\\/a>\\\\n            <\\\\/div>\\\\n            <div class=\\\\\"col-md-6 text-center text-md-center link-container\\\\\">\\\\n              <a class=\\\\\"final-link\\\\\" href=\\\\\"https:\\\\/\\\\/www.youtube.com\\\\/user\\\\/prestashop\\\\\" target=\\\\\"_blank\\\\\">\\\\n                <div class=\\\\\"video-tutorial\\\\\"><\\\\/div>\\\\n                <span class=\\\\\"link\\\\\">Video tutorial<\\\\/span>\\\\n              <\\\\/a>\\\\n            <\\\\/div>\\\\n          <\\\\/div>\\\\n        <\\\\/div>\\\\n    <\\\\/div>\\\\n    <div class=\\\\\"modal-footer\\\\\">\\\\n        <div class=\\\\\"col-12\\\\\">\\\\n            <div class=\\\\\"text-center text-md-center\\\\\">\\\\n                <button class=\\\\\"btn btn-primary onboarding-button-next\\\\\">I\\'m ready<\\\\/button>\\\\n            <\\\\/div>\\\\n        <\\\\/div>\\\\n    <\\\\/div>\\\\n<\\\\/div>\\\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"http:\\\\/\\\\/localhost\\\\/shashop\\\\/admin990tjl3ay' | raw }}{{ '\\\\/index.php?controller=AdminDashboard&token=dc81256f5120dd1dc9540b396b5650e3\"}]}]}, 1, \"http://localhost/shashop/admin990tjl3ay/index.php?controller=AdminWelcome&token=7750466f877dbc1634075b3a9cd6049f\", baseAdminDir);

          onBoarding.addTemplate(\\'lost\\', \\'<div class=\"onboarding onboarding-popup bootstrap\">  <div class=\"content\">    <p>Hey! Are you lost?</p>    <p>To continue, click here:</p>    <div class=\"text-center\">      <button class=\"btn btn-primary onboarding-button-goto-current\">Continue</button>    </div>    <p>If you want to stop the tutorial for good, click here:</p>    <div class=\"text-center\">      <button class=\"btn btn-alert onboarding-button-stop\">Quit the Welcome tutorial</button>    </div>  </div></div>\\');
          onBoarding.addTemplate(\\'popup\\', \\'<div class=\"onboarding-popup bootstrap\">  <div class=\"content\"></div></div>\\');
          onBoarding.addTemplate(\\'tooltip\\', \\'<div class=\"onboarding-tooltip\">  <div class=\"content\"></div>  <div class=\"onboarding-tooltipsteps\">    <div class=\"total\">Step <span class=\"count\">1/5</span></div>    <div class=\"bulls\">    </div>  </div>  <button class=\"btn btn-primary btn-xs onboarding-button-next\">Next</button></div>\\');
    
    onBoarding.showCurrentStep();

    var body = \$(\"body\");

    body.delegate(\".onboarding-button-next\", \"click\", function(){
      if (\$(this).is(\\'.with-spinner\\')) {
        if (!\$(this).is(\\'.animated\\')) {
          \$(this).addClass(\\'animated\\');
          onBoarding.gotoNextStep();
        }
      } else {
        onBoarding.gotoNextStep();
      }
    }).delegate(\".onboarding-button-shut-down\", \"click\", function(){
      onBoarding.setShutDown(true);
    }).delegate(\".onboarding-button-resume\", \"click\", function(){
      onBoarding.setShutDown(false);
    }).delegate(\".onboarding-button-goto-current\", \"click\", function(){
      onBoarding.gotoLastSavePoint();
    }).delegate(\".onboarding-button-stop\", \"click\", function(){
      onBoarding.stop();
    });

  });

</script>


        ' | raw }}{{ '                                                
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ' | raw }}{% block content_header %}{% endblock %}{% block content %}{% endblock %}{% block content_footer %}{% endblock %}{% block sidebar_right %}{% endblock %}{{ '

            
          </div>
        </div>

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
  <a href=\"http://localhost/shashop/admin990tjl3ay/index.php?controller=AdminDashboard&amp;token=dc81256f5120dd1dc9540b396b5650e3\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Back
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-EN&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/en/login?email=varshakasiraj%40gmail.com&amp;firstname=Varsha&amp;lastname=Kasiraj&amp;website=http%3A%2F%2Flocalhost%2Fshashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/shashop/admin990tjl3ay/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connect your shop to PrestaShop\\'s marketplace in order to automatically import all your Addons purchases.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t' | raw }}{{ '<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Don\\'t have an account?</h4>
\t\t\t\t\t\t<p class=\\'text-justify\\'>Discover the Power of PrestaShop Addons! Explore the PrestaShop Official Marketplace and find over 3 500 innovative modules and themes that optimize conversion rates, increase traffic, build customer loyalty and maximize your productivity</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connect to PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/en/forgot-your-password\">I forgot my password</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/en/login?email=varshakasiraj%40gmail.com&amp;firstname=Varsha&amp;lastname=Kasiraj&amp;website=http%3A%2F%2Flocalhost%2Fshashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCreate an Account
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">' | raw }}{{ '
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Sign in
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
' | raw }}{% block javascripts %}{% endblock %}{% block extra_javascripts %}{% endblock %}{% block translate_javascripts %}{% endblock %}</body>{{ '
</html>' | raw }}", "__string_template__f7c7b4de6257af2bb0d9868f4cd5f093eaf7c1c478a83542b448bbe5669e739d", "");
    }
}
