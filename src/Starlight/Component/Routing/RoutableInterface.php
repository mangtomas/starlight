<?php
/*
 * This file is part of the Starlight framework.
 *
 * (c) Matthew Vince <matthew.vince@phaseshiftllc.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Starlight\Component\Routing;
use Starlight\Component\Http\Request;


/**
 * Routable interface
 */
interface RoutableInterface
{
   /**
    * Match a request
    * @param \Starlight\Component\Http\Request $request current request
    */
   public function match(Request $request);
}
