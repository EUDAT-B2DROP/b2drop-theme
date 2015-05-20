<?php
class OC_Theme {
    function __construct() {
        $this->themeName = "b2drop";
        $this->slogan = "Sync and Exchange Research Data";
        $this->themeFooter = '';
        $this->baseUrl = "https://b2drop.eudat.eu";
    }
   
    public function getTitle() {
        return $this->themeName;
    }

    public function getLongFooter() {
        return $this->themeFooter;
    }

    public function getName() {
        return $this->themeName;
    }

    public function getSlogan() {
        return $this->slogan;
    }

    public function getBaseUrl() {
        return $this->baseUrl;
    }
}
