<?php

/**
 * Fetch network/wallet information from altcoin/bitcoin deamon
 *
 * @author Lukas Mestan
 * @copyright MIT
 * @see https://en.bitcoin.it/wiki/Original_Bitcoin_client/API_calls_list
 * @version 1.0.2
 */
class NetworkInfo extends DaemonData
{

    /**
     * Get information about the wallets network and block chain
     *
     * @access public
     * @return array
     */
    public function getInfo()
    {
        return $this->getData('getinfo');
    }

    /**
     *  Get data about each connected node.
     *
     * @access public
     * @internal from bitcoin version 0.7
     * @return array
     */
    public function getPeerInfo()
    {
        return $this->getData('getpeerinfo');
    }

    /**
     * Returns an object containing mining-related information:
     * blocks, currentblocksize, currentblocktx, difficulty, errors,
     * generate, genproclimit, hashespersec, pooledtx, testnet
     *
     * @access public
     * @return array
     */
    public function getMiningInfo()
    {
        return $this->getData('getmininginfo');
    }

    /**
     * Returns a recent hashes per second performance measurement while generating
     *
     * @access public
     * @return array
     */
    public function getHashesPerSecond()
    {
        return $this->getData('gethashespersec');
    }

    /**
     * Get calculated network hash rate for the latest block
     *
     * @access public
     * @param string $blockIndex
     * @return array
     */
    public function getNetworkHashForLatestBlock($blockIndex = NULL)
    {
        if( isset($blockIndex) )
        {
            return $this->getData('getnetworkhashps', array(
                $blockIndex
            ));
        }
        else
        {
            return $this->getData('getnetworkhashps');
        }
    }

}
