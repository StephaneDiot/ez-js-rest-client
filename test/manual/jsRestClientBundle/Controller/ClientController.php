<?php
/**
 * File containing the PrototypeController class.
 *
 * Simple prototype for content management via REST interface.
 *
 * @copyright Copyright (C) 1999-2014 eZ Systems AS.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */

namespace EzSystems\jsRestClientBundle\Controller;

use eZ\Bundle\EzPublishCoreBundle\Controller;

class ClientController extends Controller
{
    public function testAction()
    {
        return $this->render( "jsRestClientBundle::test.html.twig" );
    }

    /**
     * Useful for session authorization testing
     */
    public function killSession()
    {
        session_destroy();
    }
}