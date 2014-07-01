Altcoin/Bitcoin Data Explorer
======================

PHP Altcoin/Bitcoin data Explorer 


Usage
======================
```
$block = new BlockChain($ip, $port, $username, $password);

$block_info_from_hash = $block->get_block('000000000000000007c4695c756bb944cf31f1f20487a32375d9d4c61dfd6349');
$block_info_from_height = $block->get_block_hash('308788');

var_dump($block_info_from_hash, $block_info_from_height);
```
