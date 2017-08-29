<?php

/**
 * Install hook for module msv-core
 * This function is executed upon installation
 *
 * @param object $module Module object
 * @return void
 */
function Install_Core($module) {

    // add site settings
    msv_set_config("include_html_head", "", true, "*", _t("settings.include_html_head"));
    msv_set_config("theme_css_path", "", true, "*", _t("settings.theme_css_path"));
    msv_set_config("theme_js_path", "", true, "*", _t("settings.theme_js_path"));
    msv_set_config("theme_use_bootstrap", 1, true, "*", _t("settings.theme_use_bootstrap"));
    msv_set_config("theme_use_jquery", 1, true, "*", _t("settings.theme_use_jquery"));
    msv_set_config("edit_mode", 0, true, "*", _t("settings.edit_mode"));

    // add messages to default output
    msv_set_config("message_ok", "", true, "*", _t("settings.message_ok"));
    msv_set_config("message_error", "", true, "*", _t("settings.message_error"));

    // FROM field for all emails send by app
    msv_set_config("email_from", "admin@localhost", true, "*", _t("settings.email_from"));
    msv_set_config("email_fromname", "Website", true, "*", _t("settings.email_fromname"));

    // email accounts used by app
    msv_set_config("admin_email", "admin@localhost", true, "*", _t("settings.admin_email"));
    msv_set_config("support_email", "admin@localhost", true, "*", _t("settings.support_email"));
}