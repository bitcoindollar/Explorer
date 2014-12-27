Altcoin/Bitcoin Data Explorer [![Build Status](https://travis-ci.org/arzzen/altcoin-bitcoin-explorer.svg)](https://travis-ci.org/arzzen/altcoin-bitcoin-explorer)
======================

PHP Altcoin/Bitcoin data Explorer

This package can get transaction information with Bitcoin protocol.

It can send HTTP requests to a Bitcoin peer server to perform several operations.

Currently it can get transaction details, get peer information, get mining information, get network hashes, get block chains, etc..


Usage
======================
```
include "daemondata.php";
include "blockchain.php";

$block = new BlockChain($ip, $port, $username, $password);

$block_info_from_hash = $block->get_block('000000000000000007c4695c756bb944cf31f1f20487a32375d9d4c61dfd6349');
$block_info_from_height = $block->get_block_hash('308788');

var_dump($block_info_from_hash, $block_info_from_height);
```
