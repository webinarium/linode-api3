<?php

//----------------------------------------------------------------------
//
//  Copyright (C) 2015 Artem Rodygin
//
//  This file is part of Linode API Client Library for PHP.
//
//  You should have received a copy of the GNU General Public License
//  along with the library. If not, see <http://www.gnu.org/licenses/>.
//
//----------------------------------------------------------------------

namespace Linode;

use \Exception;

/**
 * Basic class which can make calls to Linode API.
 */
class BaseLinodeApi
{
    /** @var string API key */
    protected $key;

    /**
     * Constructor.
     *
     * @param   string $key
     */
    public function __construct($key)
    {
        $this->key = $key;
    }

    /**
     * Performs specified call to Linode API.
     *
     * @param   string $action
     * @param   array  $parameters
     *
     * @return  array|null
     *
     * @throws  LinodeException
     * @throws  Exception
     */
    protected function call($action, $parameters = array())
    {
        $curl = curl_init();

        if (!$curl) {
            return null;
        }

        $query = "api_key={$this->key}&api_action={$action}";

        foreach ($parameters as $key => $value) {
            $query .= sprintf('&%s=%s', urlencode($key), urlencode($value));
        }

        curl_setopt($curl, CURLOPT_URL, 'https://api.linode.com/');
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $query);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($curl);

        curl_close($curl);

        $json = json_decode($result, true);

        if (!$json) {
            throw new Exception('Empty response');
        }

        $error = reset($json['ERRORARRAY']);

        if ($error) {
            throw new LinodeException($error['ERRORMESSAGE'], $error['ERRORCODE']);
        }

        return $json['DATA'];
    }
}
