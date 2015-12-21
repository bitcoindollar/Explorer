Altcoin/Bitcoin Data Explorer 
======================
[![Build Status](https://travis-ci.org/arzzen/altcoin-bitcoin-explorer.svg)](https://travis-ci.org/arzzen/altcoin-bitcoin-explorer) [![SensioLabs Insight](https://img.shields.io/sensiolabs/i/71672116-520c-4715-b419-be2dae112b86.svg)](https://insight.sensiolabs.com/projects/71672116-520c-4715-b419-be2dae112b86) [![License](https://poser.pugx.org/arzzen/altcoin-bitcoin-explorer/license)](https://packagist.org/packages/arzzen/altcoin-bitcoin-explorer) [![Latest Stable Version](https://poser.pugx.org/arzzen/altcoin-bitcoin-explorer/v/stable)](https://packagist.org/packages/arzzen/altcoin-bitcoin-explorer)

PHP Altcoin/Bitcoin data Explorer

This package can get transaction information with Bitcoin protocol.

It can send HTTP requests to a Bitcoin peer server to perform several operations.

Currently it can get transaction details, get peer information, get mining information, get network hashes, get block chains, etc..

## Installation

You can install this library by using [Composer]. You can also view more info
about this on [Packagist].

Add this to the `require` section in your `composer.json` file.

```json
{
    "require": {
        "arzzen/altcoin-bitcoin-explorer": "1.1.*"
    }
}
```

## Usage

Information about network:
```php
# Get information from network 
use BlockExplorer\NetworkInfo;
$network = new NetworkInfo($ip, $port, $username, $password);

# Get information about the wallets network and block chain
$networkInfo = $network->getInfo();
print_r($networkInfo);

# Get data about each connected node
$peerInfo = $network->getPeerInfo();
print_r($peerInfo);

# Get calculated network hash rate for the latest block
$latestHash = $network->getNetworkHashForLatestBlock();
print_r($latestHash);
```

Information about transactions:
```php
# Fetch transactions information
use BlockExplorer\Transaction;
$transaction = new Transaction($ip, $port, $username, $password);

$transactionInfo = $transaction->getTransaction('51b78168d94ec307e2855697209275d477e05d8647caf29cb9e38fb6a4661145');
print_r($transactionInfo);
```

Information from block chain:
```php
# Get information from blockchain
use BlockExplorer\BlockChain;
$block = new BlockChain($ip, $port, $username, $password);

$blockInfoFromHash = $block->getBlock('000000000000000007c4695c756bb944cf31f1f20487a32375d9d4c61dfd6349');
print_r($blockInfoFromHash);

$blockInfoFromHeight = $block->getBlockHash('308788');
print_r($blockInfoFromHeight);
```

## Award

Class won "[PHP Programming Innovation Award](http://www.phpclasses.org/winners/year/2014/)" on phpclasses.org (August 2014). [Link](http://www.phpclasses.org/package/8730-PHP-Get-transaction-information-with-Bitcoin-protocol.html). 

