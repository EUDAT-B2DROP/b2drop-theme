<?php
class OC_Theme {

    private $ThemeName;

    function __construct() {
        $this->themeName = "B2DROP";
        $this->themeFooter = "<b> New to EUDAT B2DROP? </b> <a href='https://b2drop.fz-juelich.de/pwm'> <br/><i>Create a test account!<i></a>";
    }
   
    public function getTitle() {
        return $this->themeName;
    }

    public function getLongFooter() {
        return $this->themeFooter;
    }

}
