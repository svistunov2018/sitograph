<?php

function Install_ThemeDefault($module) {

    //
    // install function
    // run when module in installed

    $doc404Title = _t("structure.404");
    $doc404Text = "<h2>Page not found</h2>";
    $docExampleTitle = "h1. ". _t("structure.page1")." title";
    $docExampleText = file_get_contents($module->pathModule."install-example-page.html");

    $docHomepageText = '<div class="row">
<div class="col-sm-5 col-sm-offset-1">
<p>&nbsp;</p>
<p>&nbsp;</p>
<h1>Wellcome to Sitograph website creation tool.</h1>
<div class="lead">Simple and flexible Content Management System (CMS) for support and development of any Web Application.</div>
<p>&nbsp;</p>
<p class="lead"><a href="2" class="btn btn-primary btn-lg">Download Sitograph 1.0.beta</a>&nbsp;</p>
</div>
<div class="col-sm-6"><img src="/content/images/promo-top.png" class="img-responsive" /></div>
</div>';

    // create basic site structure
    $itemStructure = array(
        "url" => "/",
        "name" => _t("structure.homepage"),
        "template" => "custom",
        "page_template" => "index.tpl",
        "sitemap" => 1,
        "menu" => "top",
        "menu_order" => 1,
        "document_text" => $docHomepageText,
    );
    msv_add_structure($itemStructure, array("lang" => "all"));

    $itemStructure = array(
        "url" => "/example-page/",
        "name" => _t("structure.page1"),
        "template" => "custom",
        "page_template" => "main.tpl",
        "sitemap" => 1,
        "menu" => "top",
        "menu_order" => 2,
        "document_title" => $docExampleTitle,
        "document_text" => $docExampleText,
    );
    msv_add_structure($itemStructure, array("lang" => "all"));

    $itemStructure = array(
        "url" => "/sitemap/",
        "name" => _t("structure.sitemap"),
        "template" => "custom",
        "page_template" => "sitemap.tpl",
        "sitemap" => 0,
    );
    msv_add_structure($itemStructure, array("lang" => "all"));

    $itemStructure = array(
        "url" => "/404/",
        "name" => _t("structure.404"),
        "template" => "custom",
        "page_template" => "404.tpl",
        "sitemap" => 0,
        "document_title" => $doc404Title,
        "document_text" => $doc404Text,
    );
    msv_add_structure($itemStructure, array("lang" => "all"));

    // theme options
    msv_set_config("theme_active", "theme-default", true, "*");
    msv_set_config("theme_css_path", "/content/css/default.css", true, "*");
    msv_set_config("theme_js_path", "/content/js/default.js", true, "*");
    msv_set_config("theme_use_bootstrap", 1, true, "*");
    msv_set_config("theme_use_jquery", 1, true, "*");

    // theme options
    msv_set_config("theme_bg", "/content/images/bg_full.jpg", true, "*");
    msv_set_config("theme_cms_favicon", "/content/images/sitograph/cms_favicon.gif", true, "*");

    if (LANG === "ru" || LANG === "ua") {
        msv_set_config("theme_logo", "/content/images/sitograph/sitograph-logo-dark-ru.png", true, "*");
    } else {
        msv_set_config("theme_logo", "/content/images/sitograph/sitograph-logo-dark-en.png", true, "*");
    }

    msv_set_config("theme_copyright_text", "2016-2017 <a href='http://sitograph.com/' target='_blank'>Sitograph</a>", true, "*");
    msv_set_config("theme_header_contacts", "<a href='https://discord.gg/tPusyxP'>Join Discord channel</a><br>Skype: max.svistunov", true, "*");
}
