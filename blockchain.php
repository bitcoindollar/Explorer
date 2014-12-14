<?php

/**
 * Fetch block information from altcoin/bitcoin deamon
 *
 * @author Lukas Mestan
 * @copyright GPL v2
 * @see https://en.bitcoin.it/wiki/Original_Bitcoin_client/API_calls_list
 * @version 1.0.2
 */
class BlockChain extends DaemonData
{

    /**
     * Get data for the specified block hash
     *
     * @access public
     * @param string $block_hash
     * @return array
     */
    public function get_block($block_hash)
    {
        return $this->get_data('getblock', array(
            $block_hash
        ));
    }

    /**
     * Get hash of the best (tip) block in the longest block chain.
     *
     * @access public
     * @internal from bitcoin version 0.9
     * @return array
     */
    public function get_best_block_hash()
    {
        return $this->get_data('getbestblockhash');
    }

    /**
     * Returns the number of blocks in the longest block chain
     *
     * @access public
     * @return array
     */
    public function get_block_count()
    {
        return $this->get_data('getblockcount');
    }

    /**
     * Get hash value for the specified block in the chain
     *
     * @access public
     * @param string $block_index
     * @return array
     */
    public function get_block_hash($block_index)
    {
        return $this->get_data('getblockhash', array(
            $block_index
        ));
    }

}
