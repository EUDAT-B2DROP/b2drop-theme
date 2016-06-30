<?php
/**
 * OwnCloud - B2DROP Theme File
 *
 * PHP Version 5-7
 *
 * @category  Owncloud
 * @package   Theme
 * @author    EUDAT <b2drop-devel@postit.csc.fi>
 * @copyright 2016 EUDAT
 * @license   AGPL3 https://github.com/EUDAT-B2DROP/b2drop-theme/blob/master/LICENSE
 * @link      https://github.com/EUDAT-B2DROP/b2drop-theme.git
 */

/**
 * OwnCloud - B2DROP Theme Class
 *
 * PHP Version 5-7
 *
 * @category  Owncloud
 * @package   Theme
 * @author    EUDAT <b2drop-devel@postit.csc.fi>
 * @copyright 2016 EUDAT
 * @license   AGPL3 https://github.com/EUDAT-B2DROP/b2drop-theme/blob/master/LICENSE
 * @link      https://github.com/EUDAT-B2DROP/b2drop-theme.git
 */
class OC_Theme
{
    /**
     * Create theme object
     */
    function __construct() 
    {
        $this->themeName = "b2drop";
        $this->slogan = "Sync and Exchange Research Data";
        $this->themeFooter = '';
        $this->baseUrl = "https://b2drop.eudat.eu";
        $this->iTunesAppId = "543672169";
    }

    /**
     * Get iTunes App Id
     *
     * @return string iTunesAppId
     */
    public function getiTunesAppId() 
    {
        return $this->iTunesAppId;
    }

    /**
     * Get theme title
     *
     * @return string themeName
     */
    public function getTitle() 
    {
        return $this->themeName;
    }

    /**
     * Get theme footer
     *
     * @return string themeFooter
     */
    public function getLongFooter() 
    {
        return $this->themeFooter;
    }

    /**
     * Get theme name
     *
     * @return string themeName
     */
    public function getName() 
    {
        return $this->themeName;
    }

    /**
     * Get slogan
     *
     * @return string slogan
     */
    public function getSlogan() 
    {
        return $this->slogan;
    }

    /**
     * Get bae url
     *
     * @return string baseurl
     */
    public function getBaseUrl() 
    {
        return $this->baseUrl;
    }
}
