Altcoin/Bitcoin Data Explorer [![Build Status](https://travis-ci.org/arzzen/altcoin-bitcoin-explorer.svg)](https://travis-ci.org/arzzen/altcoin-bitcoin-explorer) [![SensioLabs Insight](https://img.shields.io/sensiolabs/i/71672116-520c-4715-b419-be2dae112b86.svg)](https://insight.sensiolabs.com/projects/71672116-520c-4715-b419-be2dae112b86)
======================

PHP Altcoin/Bitcoin data Explorer

This package can get transaction information with Bitcoin protocol.

It can send HTTP requests to a Bitcoin peer server to perform several operations.

Currently it can get transaction details, get peer information, get mining information, get network hashes, get block chains, etc..

Award
======================

Class won "[PHP Programming Innovation Award](http://www.phpclasses.org/winners/year/2014/)" on phpclasses.org (August 2014). [Link](http://www.phpclasses.org/package/8730-PHP-Get-transaction-information-with-Bitcoin-protocol.html). 


Usage
======================
```php
include "daemondata.php";
include "blockchain.php";

$block = new BlockChain($ip, $port, $username, $password);

$blockInfoFromHash = $block->getBlock('000000000000000007c4695c756bb944cf31f1f20487a32375d9d4c61dfd6349');
$blockInfoFromHeight = $block->getBlockHash('308788');

var_dump($blockInfoFromHash, $blockInfoFromHeight);
```
