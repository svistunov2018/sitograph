<?php

function Install_Gallery($module) {
    // create website structure item
    $itemStructure = array(
        "url" => $module->baseUrl,
        "name" => _t("structure.gallery"),
        "template" => "custom",
        "page_template" => "main-gallery.tpl",
        "sitemap" => 1,
        "menu" => "top",
        "menu_order" => 10,
    );
    msv_add_structure($itemStructure, array("lang" => "all"));

    // add sample gallery
    $item = array(
        "date" => "2017-07-01 13:25:11",
        "url" => "the-beautiful-photo-gallery",
        "title" => _t("gallery.gallery1"),
        "description" => msv_load_module_doc($module->pathModule, "gallery-1"),
        "pic" => "images/gallery/gallery_1.jpg",
        "pic_preview" => "images/gallery/gallery_1.jpg",
        "photos" => array(
            array(
                "pic" => "images/gallery/gallery1_photo1.jpg",
                "pic_preview" => "images/gallery/gallery1_photo1.jpg",
            ),
            array(
                "pic" => "images/gallery/gallery1_photo2.jpg",
                "pic_preview" => "images/gallery/gallery1_photo2.jpg",
            ),
            array(
                "pic" => "images/gallery/gallery1_photo3.jpg",
                "pic_preview" => "images/gallery/gallery1_photo3.jpg",
            ),
            array(
                "pic" => "images/gallery/gallery1_photo4.jpg",
                "pic_preview" => "images/gallery/gallery1_photo4.jpg",
            ),
            array(
                "pic" => "images/gallery/gallery1_photo5.jpg",
                "pic_preview" => "images/gallery/gallery1_photo5.jpg",
            ),
            array(
                "pic" => "images/gallery/gallery1_photo6.jpg",
                "pic_preview" => "images/gallery/gallery1_photo6.jpg",
            ),
        )
    );
    $result = api_gallery_add($item, array("LoadPictures"));
}

