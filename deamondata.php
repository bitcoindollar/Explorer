<?php

/**
 * Fetch data from altcoin/bitcoin deamon
 * 
 * @author Lukas Mestan
 * @copyright GPL v2
 * @version 1.0.2
 */
class DeamonData  
{
    /**
     * Wallet IP
     *
     * @access protected
     * @var string
     */
    protected $ip = '';
    /**
     * Wallet port
     *
     * @access protected
     * @var integer|string
     */
    protected $port = '';
    /**
     * Wallet username
     *
     * @access protected
     * @var string
     */
    protected $username = '';
    /**
     * Wallet password
     *
     * @access protected
     * @var string
     */
    protected $password = '';
    /**
     * Request data
     *
     * @access protected
     * @var array
     */
    protected $request = array();
    
        
    /**
     * Class contructor
     * 
     * @access public
     * @param string $ip
     * @param integer $port
     * @param string $username
     * @param string $password
     */
    public function __construct($ip, $port, $username, $password)
    {
        $this->ip = $ip;
        $this->port = $port;
        $this->username = $username;
        $this->password = $password;
    }
    
    /**
     * Get data from JSON RPC by method & params
     * 
     * @access public
     * @param string $method
     * @param array $params
     * @return array
     */
    public function get_data($method, $params)
    {
        $this->request = array(
            'method' => $method,
            'params' => $params
        );
        
        return $this->fetch_data();
    }
    
    /**
     * Fetch JsonRPC request information from the deamon
     * 
     * @access private
     * @return array
     * @see error codes https://github.com/bitcoin/bitcoin/blob/master/src/rpcprotocol.h#L34
     */
    private function fetch_data()
    {
        $request = json_encode($this->request);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->ip);
        curl_setopt($ch, CURLOPT_PORT, $this->port);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_USERPWD, $this->username . ":" . $this->password);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array( 
            "Content-type: application/json" 
        ));
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $request);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        $response = curl_exec($ch);
        curl_close($ch);

        $info = json_decode($response, TRUE);
        if ( ! empty($info["error"]) )
        {
            return $info["error"]["message"] . " (Error Code: " . $info["error"]["code"] . ")";
        }
        else
        {
            return $info["result"];
        }
    }
    
}