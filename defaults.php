<?php
class OC_Theme {
    function __construct() {
        $this->themeName = "B2DROP Finland";
        $this->slogan = "Sync and Exchange Research Data";
        $this->themeFooter = 'Provided by CSC - IT Center for Science, Finland';
        $this->baseUrl = "https://fi.b2drop.eudat.eu";
        $this->iTunesAppId = "543672169";
    }

    public function getiTunesAppId() {
        return $this->iTunesAppId;
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
