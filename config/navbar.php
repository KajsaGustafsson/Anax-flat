<?php
/**
 * Config-file for navigation bar.
 *
 */
return [

    // Name of this menu
    "navbarTop" => [
        // Use for styling the menu
        "wrapper" => null,
        "class" => "rm-default rm-desktop",

        // Here comes the menu structure
        "items" => [

            "hem" => [
                "text"  => t("Hem"),
                "url"   => $this->di->get("url")->create("index"),
                "title" => t("Hem"),
                "mark-if-parent" => true,
            ],

            "typography" => [
                "text"  => t("Typografi"),
                "url"   => $this->di->get("url")->create("typography?hgrid"),
                "title" => t("Typografi"),
            ],

            "grid" => [
                "text"  => t("Grid"),
                "url"   => $this->di->get("url")->create("grid?vgrid"),
                "title" => t("Grid"),
            ],

            "report" => [
                "text"  => t("Redovisning"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Redovisning"),
                "mark-if-parent" => true,
            ],

            "analysis" => [
                "text"  => t("Analys"),
                "url"   => $this->di->get("url")->create("analysis"),
                "title" => t("Analys"),
                "mark-if-parent" => true,
            ],

            "theme" => [
                "text"  => t("Tema"),
                "url"   => $this->di->get("url")->create("theme"),
                "title" => t("Tema")
            ],

            "themeselector" => [
                "text"  => t("Temaväljare"),
                "url"   => $this->di->get("url")->create("theme-selector"),
                "title" => t("Temaväljare")
            ],

            "about" => [
                "text"  => t("Om"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("Om")
            ],
        ],
    ],




    // Used as menu together with responsive menu
    // Name of this menu
    "navbarMax" => [
        // Use for styling the menu
        "id" => "rm-menu",
        "wrapper" => null,
        "class" => "rm-default rm-mobile",

        // Here comes the menu structure
        "items" => [

            "hem" => [
                "text"  => t("Hem"),
                "url"   => $this->di->get("url")->create(""),
                "title" => t("Reports from kmom assignments"),
            ],

            "typography" => [
                "text"  => t("Typografi"),
                "url"   => $this->di->get("url")->create("typography?hgrid"),
                "title" => t("Typografi")
            ],

            "grid" => [
                "text"  => t("Grid"),
                "url"   => $this->di->get("url")->create("grid?vgrid"),
                "title" => t("Grid")
            ],

            "report" => [
                "text"  => t("Redovisning"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Redovisning"),
                "mark-if-parent" => true,
            ],

            "analys" => [
                "text"  => t("Analys"),
                "url"   => $this->di->get("url")->create("analysis"),
                "title" => t("Analys"),
                "mark-if-parent" => true,
            ],

            "theme" => [
                "text"  => t("Tema"),
                "url"   => $this->di->get("url")->create("theme"),
                "title" => t("Tema")
            ],

            "about" => [
                "text"  => t("Om"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("Om")
            ],

        ],
    ],



    /**
     * Callback tracing the current selected menu item base on scriptname
     *
     */
    "callback" => function ($url) {
        return !strcmp($url, $this->di->get("request")->getCurrentUrl(false));
    },



    /**
     * Callback to check if current page is a decendant of the menuitem,
     * this check applies for those menuitems that has the setting
     * "mark-if-parent" set to true.
     *
     */
    "is_parent" => function ($parent) {
        $url = $this->di->get("request")->getCurrentUrl(false);
        return !substr_compare($parent, $url, 0, strlen($parent));
    },



   /**
     * Callback to create the url, if needed, else comment out.
     *
     */
     /*
    "create_url" => function ($url) {
        return $this->di->get("url")->create($url);
    },*/
];
