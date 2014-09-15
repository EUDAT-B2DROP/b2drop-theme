<?php
class OC_Theme {

    private $ThemeName;

    function __construct() {
        $this->themeName = "B2DROP";
        $this->slogan = "Sync and Exchange Research Data";
        $this->themeFooter = "<b> New to EUDAT B2DROP? </b> <a href='https://b2drop.fz-juelich.de/pwm'> <br/><i>Create a test account!<i></a>";
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
