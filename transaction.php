<?php

/**
 * Fetch transactions information from altcoin/bitcoin deamon
 *
 * @author Lukas Mestan
 * @copyright GPL v2
 * @see https://en.bitcoin.it/wiki/Original_Bitcoin_client/API_calls_list
 * @version 1.0.2
 */
class Transaction extends DaemonData
{

    /**
     * Get an object about the given transaction
     *
     * @access public
     * @param string $tx_id
     * @return array
     */
    public function get_transaction($tx_id)
    {
        return $this->get_data('gettransaction', array(
            $tx_id
        ));
    }

    /**
     * Get block hash value for the specified block in the chain
     *
     * @access public
     * @internal from bitcoin version 0.7
     * @param string $tx_id
     * @param integer |string$verbose
     * @return array
     */
    public function get_raw_transaction($tx_id, $verbose = 1)
    {
        return $this->get_data('getrawtransaction', array(
            $tx_id,
            $verbose
        ));
    }

}
