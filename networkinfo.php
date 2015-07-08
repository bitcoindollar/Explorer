<?php

/**
 * Fetch network/wallet information from altcoin/bitcoin deamon
 *
 * @author Lukas Mestan
 * @copyright GPL v2
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
    public function get_info()
    {
        return $this->get_data('getinfo');
    }

    /**
     *  Get data about each connected node.
     *
     * @access public
     * @internal from bitcoin version 0.7
     * @return array
     */
    public function get_peer_info()
    {
        return $this->get_data('getpeerinfo');
    }

    /**
     * Returns an object containing mining-related information:
     * blocks, currentblocksize, currentblocktx, difficulty, errors,
     * generate, genproclimit,hashespersec, pooledtx, testnet
     *
     * @access public
     * @return array
     */
    public function get_mining_info()
    {
        return $this->get_data('getmininginfo');
    }

    /**
     * Returns a recent hashes per second performance measurement while generating
     *
     * @access public
     * @return array
     */
    public function get_hashes_per_second()
    {
        return $this->get_data('gethashespersec');
    }

    /**
     * Get calculated network hash rate for the latest block
     *
     * @access public
     * @param string $block_index
     * @return array
     */
    public function get_network_hash_for_latest_block($block_index = NULL)
    {
        if( isset($block_index) )
        {
            return $this->get_data('getnetworkhashps', array(
                $block_index
            ));
        }
        else
        {
            return $this->get_data('getnetworkhashps');
        }
    }

}
