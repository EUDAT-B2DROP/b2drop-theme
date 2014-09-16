<?php
class OC_Theme {

    private $ThemeName;

    function __construct() {
        $this->themeName = "B2DROP";
        $this->slogan = "Sync and Exchange Research Data";
        $this->themeFooter = '
            <div class="footer_links">
                <span>
	        <a href="https://b2drop.eudat.eu/pwm">Register</a>
                <a href="https://b2drop.eudat.eu/ToU.pdf">Terms of Use</a>
                <a href="https://b2drop.eudat.eu/FAQ.pdf">FAQ</a>
                </span>
            </div>';
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
