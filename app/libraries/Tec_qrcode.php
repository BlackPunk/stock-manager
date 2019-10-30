<?php

defined('BASEPATH') or exit('No direct script access allowed');

/*
 *  ==============================================================================
 *  Author  : Mian Saleem
 *  Email   : support@blackpunk.id
 *  For     : PHP QR Code
 *  Web     : http://phpqrcode.sourceforge.net
 *  License : open source (LGPL)
 *  ==============================================================================
 */

use PHPQRCode\QRcode;

class Tec_qrcode
{
    public function generate($params = [])
    {
        $params['data'] = (isset($params['data'])) ? $params['data'] : 'http://blackpunk.id';
        QRcode::png($params['data'], $params['savename'], 'H', 2, 0);
        return $params['savename'];
    }
}
