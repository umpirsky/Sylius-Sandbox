<?php

/*
 * This file is part of the Sylius sandbox application.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Symfony\Component\HttpFoundation\Request;

/*
 * Sylius sandbox front controller.
 * Testing environment.
 */

// Require kernel.
require_once __DIR__.'/../sandbox/SyliusSandboxKernel.php';

// Initialize kernel and run the application.
$kernel = new SyliusSandboxKernel('testing', true);
$kernel->handle(Request::createFromGlobals())->send();
