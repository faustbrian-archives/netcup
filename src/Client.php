<?php

declare(strict_types=1);

/*
 * This file is part of Netcup PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Netcup;

use Exception;
use SOAPClient;

class Client
{
    /**
     * @var string
     */
    private $wsdl = 'https://www.servercontrolpanel.de/WSEndUser?wsdl';

    /**
     * @var \SOAPClient
     */
    private $client;

    /**
     * @var int
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @param int    $username
     * @param string $password
     */
    public function __construct(int $username, string $password)
    {
        $this->username = $username;
        $this->password = $password;
        $this->client   = new SOAPClient($this->wsdl, ['cache_wsdl' => 0]);
    }

    /**
     * @param string $vservername
     *
     * @return mixed
     */
    public function getVServerInformation(string $vservername)
    {
        return $this->request('getVServerInformation', compact('vservername'));
    }

    /**
     * @param string $vservername
     *
     * @return mixed
     */
    public function getVServerNickname(string $vservername)
    {
        return $this->request('getVServerNickname', compact('vservername'));
    }

    /**
     * @param string $vservername
     * @param string $vservernickname
     */
    public function setVServerNickname(string $vservername, string $vservernickname)
    {
        return $this->request('setVServerNickname', compact('vservername', 'vservernickname'));
    }

    /**
     * @param string $vserverName
     *
     * @return mixed
     */
    public function getVServerState(string $vserverName)
    {
        return $this->request('getVServerState', compact('vserverName'));
    }

    /**
     * @param string $vserverName
     *
     * @return mixed
     */
    public function getVServerLoad(string $vserverName)
    {
        return $this->request('getVServerLoad', compact('vserverName'));
    }

    /**
     * @param string $vserverName
     *
     * @return mixed
     */
    public function getVServerUptime(string $vserverName)
    {
        return $this->request('getVServerUptime', compact('vserverName'));
    }

    /**
     * @param string $vserverName
     *
     * @return mixed
     */
    public function getVServerProcesses(string $vserverName)
    {
        return $this->request('getVServerProcesses', compact('vserverName'));
    }

    /**
     * @param string $vserverName
     *
     * @return mixed
     */
    public function getVServerIPs(string $vserverName)
    {
        return $this->request('getVServerIPs', compact('vserverName'));
    }

    /**
     * @param string $vserverName
     * @param array  $rule
     *
     * @return mixed
     */
    public function deleteFirewallRule(string $vserverName, array $rule)
    {
        return $this->request('deleteFirewallRule', compact('vserverName', 'rule'));
    }

    /**
     * @param string $vserverName
     *
     * @return mixed
     */
    public function startVServer(string $vserverName)
    {
        return $this->request('startVServer', compact('vserverName'));
    }

    /**
     * @param string $vserverName
     *
     * @return mixed
     */
    public function stopVServer(string $vserverName)
    {
        return $this->request('stopVServer', compact('vserverName'));
    }

    /**
     * @param string $vserverName
     *
     * @return mixed
     */
    public function getFirewall(string $vserverName)
    {
        return $this->request('getFirewall', compact('vserverName'));
    }

    /**
     * @param string $vserverName
     * @param array  $rule
     */
    public function addFirewallRule(string $vserverName, array $rule)
    {
        return $this->request('addFirewallRule', compact('vserverName', 'rule'));
    }

    /**
     * @param string $vserverName
     *
     * @return mixed
     */
    public function vServerACPIShutdown(string $vserverName)
    {
        return $this->request('vServerACPIShutdown', compact('vserverName'));
    }

    /**
     * @param string $vserverName
     *
     * @return mixed
     */
    public function vServerACPIReboot(string $vserverName)
    {
        return $this->request('vServerACPIReboot', compact('vserverName'));
    }

    /**
     * @param string $vserverName
     *
     * @return mixed
     */
    public function vServerReset(string $vserverName)
    {
        return $this->request('vServerReset', compact('vserverName'));
    }

    /**
     * @param string $vserverName
     *
     * @return mixed
     */
    public function vServerPoweroff(string $vserverName)
    {
        return $this->request('vServerPoweroff', compact('vserverName'));
    }

    /**
     * @param string $vserverName
     *
     * @return mixed
     */
    public function vServerStart(string $vserverName)
    {
        return $this->request('vServerStart', compact('vserverName'));
    }

    /**
     * @param string $vserverName
     *
     * @return mixed
     */
    public function vServerSuspend(string $vserverName)
    {
        return $this->request('vServerSuspend', compact('vserverName'));
    }

    /**
     * @param string $vserverName
     *
     * @return mixed
     */
    public function vServerResume(string $vserverName)
    {
        return $this->request('vServerResume', compact('vserverName'));
    }

    /**
     * @param string $vserverName
     *
     * @return mixed
     */
    public function vServerSave(string $vserverName)
    {
        return $this->request('vServerSave', compact('vserverName'));
    }

    /**
     * @param string $vserverName
     *
     * @return mixed
     */
    public function vServerRestore(string $vserverName)
    {
        return $this->request('vServerRestore', compact('vserverName'));
    }

    /**
     * @param string $vserverName
     * @param int    $day
     * @param int    $month
     * @param int    $year
     *
     * @return mixed
     */
    public function getVServerTrafficOfDay(string $vserverName, int $day, int $month, int $year)
    {
        return $this->request('getVServerTrafficOfDay', compact('vserverName', 'day', 'month', 'year'));
    }

    /**
     * @return mixed
     */
    public function getVServers()
    {
        return $this->request('getVServers');
    }

    /**
     * @param string $vserverName
     * @param int    $month
     * @param int    $year
     *
     * @return mixed
     */
    public function getVServerTrafficOfMonth(string $vserverName, int $month, int $year)
    {
        return $this->request('getVServerTrafficOfMonth', compact('vserverName', 'month', 'year'));
    }

    /**
     * @param string $vserverName
     *
     * @return mixed
     */
    public function changeIPRouting(string $vserverName)
    {
        return $this->request('changeIPRouting', compact('vserverName'));
    }

    /**
     * @param string $method
     * @param array  $parameters
     *
     * @return mixed
     */
    private function request(string $method, array $parameters = [])
    {
        try {
            return $this->client->{$method}([
                'loginName' => $this->username,
                'password'  => $this->password,
            ] + $parameters)->return;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
