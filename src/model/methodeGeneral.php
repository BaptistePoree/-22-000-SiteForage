<?php
function add_version($url, $throwException = true)
{
    if (!$url) {
        throw new Exception(sprintf('%s > url obligatoire', __FUNCTION__));
    }

    if (@file_exists($url)) {
        $url .= '?dm=' . @filemtime($url);
    } else if ($throwException) {
        throw new Exception(
            sprintf("%s > Fichier non trouvé pour l'URL %s", __FUNCTION__, $url) . ($_SESSION['ISADMIN'] ? ' << ' . $_SERVER['PHP_SELF'] : ''
            )
        );
    }

    return $url;
}


?>