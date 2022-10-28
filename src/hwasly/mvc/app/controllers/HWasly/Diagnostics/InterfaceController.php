<?php

/**
 *    Copyright (C) 2016-2020 Deciso B.V.
 *
 *    All rights reserved.
 *
 *    Redistribution and use in source and binary forms, with or without
 *    modification, are permitted provided that the following conditions are met:
 *
 *    1. Redistributions of source code must retain the above copyright notice,
 *       this list of conditions and the following disclaimer.
 *
 *    2. Redistributions in binary form must reproduce the above copyright
 *       notice, this list of conditions and the following disclaimer in the
 *       documentation and/or other materials provided with the distribution.
 *
 *    THIS SOFTWARE IS PROVIDED ``AS IS'' AND ANY EXPRESS OR IMPLIED WARRANTIES,
 *    INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY
 *    AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 *    AUTHOR BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY,
 *    OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF
 *    SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS
 *    INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN
 *    CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *    ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *    POSSIBILITY OF SUCH DAMAGE.
 *
 */

namespace HWasly\Diagnostics;

use HWasly\Base\IndexController;

/**
 * Class InterfaceController
 * @package HWasly\Proxy
 */
class InterfaceController extends IndexController
{
    /**
     * system arp table
     */
    public function arpAction()
    {
        $this->view->pick('HWasly/Diagnostics/arp');
    }

    /**
     * system NDP table
     */
    public function ndpAction()
    {
        $this->view->pick('HWasly/Diagnostics/ndp');
    }

    /**
     * system Routing table
     */
    public function routesAction()
    {
        $this->view->pick('HWasly/Diagnostics/routes');
    }

    /**
     * netstat
     */
    public function netstatAction()
    {
        $this->view->tabs = [
            [
              "name" => "bpf",
              "caption" => gettext("Bpf"),
              "endpoint" => "/api/diagnostics/interface/getBpfStatistics"
            ],
            [
              "name" => "interfaces",
              "caption" => gettext("Interfaces"),
              "endpoint" => "/api/diagnostics/interface/getInterfaceStatistics"
            ],
            [
              "name" => "memory",
              "caption" => gettext("Memory"),
              "endpoint" => "/api/diagnostics/interface/getMemoryStatistics"
            ],
            [
              "name" => "netisr",
              "caption" => gettext("Netisr"),
              "endpoint" => "/api/diagnostics/interface/getNetisrStatistics"
            ],
            [
              "name" => "protocol",
              "caption" => gettext("Protocol"),
              "endpoint" => "/api/diagnostics/interface/getProtocolStatistics"
            ],
            [
              "name" => "sockets",
              "caption" => gettext("Sockets"),
              "endpoint" => "/api/diagnostics/interface/getSocketStatistics"
            ]
        ];
        $this->view->default_tab = "interfaces";
        $this->view->pick('HWasly/Diagnostics/treeview');
    }
}
