<?php
class OC_Theme {
    function __construct() {
        $this->themeName = "b2drop";
        $this->slogan = "Sync and Exchange Research Data";
        $this->themeFooter = '
		<footer>
			<div class="container">
				<div class="row">
					
					<div class="col-xs-12 col-sm-6 col-md-6">
						<p><img width="45" height="31" src="/themes/b2drop/core/img/flag-ce.jpg" style="float:left; margin-right:10px;"/> EUDAT receives funding from the European Union’s Horizon 2020 research and innovation programme under grant agreement No. 654065. <a href="#">Legal Notice</a>.</p>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 text-right">
						<nav class="navbar navbar-footer">
							<ul id="menu" class="nav navbar-nav navbar-right pull-right">
								<li><a href="https://b2drop.eudat.eu/ToU.pdf">Terms of Use</a></li>
								<li><a target="_blank" href="http://www.eudat.eu/what-eudat">About EUDAT</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</footer> ';
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
