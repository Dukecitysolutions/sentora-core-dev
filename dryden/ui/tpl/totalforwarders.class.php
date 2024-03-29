<?php

/**
 * @copyright 2014-2023 Sentora Project (http://www.sentora.org/) 
 * Sentora is a GPL fork of the ZPanel Project whose original header follows:
 *
 * Generic template place holder class.
 * @package zpanelx
 * @subpackage dryden -> ui -> tpl
 * @version 1.0.0
 * @author Bobby Allen (ballen@bobbyallen.me)
 * @copyright ZPanel Project (http://www.zpanelcp.com/)
 * @link http://www.zpanelcp.com/
 * @license GPL (http://www.gnu.org/licenses/gpl.html)
 */
class ui_tpl_totalforwarders {

    public static function Template() {
        $currentuser = ctrl_users::GetUserDetail();
        $forwardersquota = $currentuser['forwardersquota'];
        if ($forwardersquota < 0)
            return '&#8734;';
        else
            return $forwardersquota;
    }

}

?>
