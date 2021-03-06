<?php
Namespace Adianti\Widget\Base;

use Adianti\Widget\Base\TElement;

/**
 * Base class for scripts
 *
 * @version    2.0
 * @package    widget
 * @subpackage base
 * @author     Pablo Dall'Oglio
 * @copyright  Copyright (c) 2006-2014 Adianti Solutions Ltd. (http://www.adianti.com.br)
 * @license    http://www.adianti.com.br/framework-license
 */
class TScript
{
    /**
     * Create a script
     * @param $code source code
     */
    public static function create( $code, $show = TRUE )
    {
        $script = new TElement('script');
        $script->{'language'} = 'JavaScript';
        $script->setUseSingleQuotes(TRUE);
        $script->setUseLineBreaks(FALSE);
        $script->add( $code );
        if ($show)
        {
            $script->show();
        }
        return $script;
    }
}
