<?php 

if (!function_exists('device_agent')) {
    function device_agent()
    {
        $agent = new Jenssegers\Agent\Agent();

        if ($agent->isMobile()) {
            return 'mobile';
        }
        elseif ($agent->isDesktop()) {
            return 'desktop';
        }
        elseif ($agent->isTablet()) {
            return 'tablet';
        }
    }
}

 ?>