<?php

class BlockInfo extends BlockChain
{
    public function get_data($method, $params)
    {
        return '{
            "hash" : "000000000000010c5ba86d05c6f43df46921d453d23fdafe85229f6a7d840e16",
            "confirmations" : 43,
            "size" : 1473,
            "height" : 186154,
            "version" : 1,
            "merkleroot" : "47de80c28529a69bddefb90ea15388f10e2647482560bb50857e7b586d45a8c3",
            "time" : 1340614357,
            "nonce" : 728350342,
            "bits" : "1a09b78a",
            "difficulty" : 1726566.55919348,
            "tx" : [
                {
                    "txid" : "11af9ba807942f7db6274f40442651c7b58b02b0a942867847b2b8a3932df7b1",
                    "version" : 1,
                    "locktime" : 0,
                    "size" : 142,
                    "vin" : [
                        {
                            "coinbase" : "048ab7091a027702062f503253482f",
                            "sequence" : 4294967295
                        }
                    ],
                    "vout" : [
                        {
                            "value" : 50.00000000,
                            "scriptPubKey" : "04b034ecbcbe86f327d2edd25ce1fce3f4463710c00ae00d1a25198bab882be95c72d3468dc6931f756b03d99a3b7f3a07543834370ad023b37cb1127c6266d91a OP_CHECKSIG"
                        }
                    ],
                    "confirmations" : 0
                },
                {
                    "txid" : "9fb85b2c9085284a6c39407025cbec31b4c88b1075f3d98840395bc4e389616d",
                    "version" : 1,
                    "locktime" : 0,
                    "size" : 259,
                    "vin" : [
                        {
                            "prevout" : {
                                "hash" : "1f16f657fb093f4618c1ad6504130d08fa71bb1964d0be5574f44011124f7b64",
                                "n" : 1
                            },
                            "scriptSig" : "3046022100dea86a40b8ffcfa446e05886e18c7ea8bca371118da48d4adfde846b87af43190221009652d86f7013afd35311fe8d080c9e592758716c08e971c39283ca08746db78501 04a1ce79a9fec1018129bb79c19dc90dcb4657e8cf725c635909ea402143b64e84fb06bf0b2c96ca6f0db9ac8ae480399f7724a9b288faf52c16d1535f13b90fe6",
                            "sequence" : 4294967295
                        }
                    ],
                    "vout" : [
                        {
                            "value" : 1066.13121507,
                            "scriptPubKey" : "OP_DUP OP_HASH160 e51a349be7044a8d84c6e8370ff56ff6860f3597 OP_EQUALVERIFY OP_CHECKSIG"
                        },
                        {
                            "value" : 1242.21306062,
                            "scriptPubKey" : "OP_DUP OP_HASH160 51fb66b01bcdbcdc67049fa97a8da21a2fa912e0 OP_EQUALVERIFY OP_CHECKSIG"
                        }
                        ],
                        "confirmations" : 0
                    },
                    {
                        "txid" : "060cbd899b2c1fac0cdbcf580a3f90aae131b16d516f049baf1d13c66e410892",
                        "version" : 1,
                        "locktime" : 0,
                        "size" : 226,
                        "vin" : [
                        {
                            "prevout" : {
                                "hash" : "f2b6efbef50c026efc19dac73ed787b0ccc1697c8640e96637ab861e85afca60",
                                "n" : 0
                            },
                            "scriptSig" : "3045022100a0be436cb85b899740792206a17658ef96e6d786e53448cab8b11f9e51be96a6022063ab6d9337fa71b9d5a75e3ebe0a33c151ad6cdca70f9170c1b0297d655c5b3301 022cb39adb02162270b89b08975256293182bcaa84622d18a30c3bd72751d4ddd5",
                            "sequence" : 4294967295
                        }
                        ],
                        "vout" : [
                        {
                            "value" : 1.40018289,
                            "scriptPubKey" : "OP_DUP OP_HASH160 d6211f74851b1cc1d181d0fe591445a18f49c818 OP_EQUALVERIFY OP_CHECKSIG"
                        },
                        {
                            "value" : 1.00000000,
                            "scriptPubKey" : "OP_DUP OP_HASH160 713c581950bbfb0545f1418bbfe825911e8efa5c OP_EQUALVERIFY OP_CHECKSIG"
                        }
                        ],
                        "confirmations" : 0
                    },
                    {
                        "txid" : "2da6e2a83abe9e870a3a4762d8159e523a3068cce26c5670afdcd2c63486a1ac",
                        "version" : 1,
                        "locktime" : 0,
                        "size" : 765,
                        "vin" : [
                        {
                            "prevout" : {
                                "hash" : "9aa47d859bda3eba62fd366461adda78f6df3293dd7b1681361f54531220b378",
                                "n" : 2
                            },
                            "scriptSig" : "3046022100f10d0f6fc6ce90ae97a04627a659791b1caed48aae8d70b82c73c5c730758576022100aba76d54166189b50e678faac63a4265d6d2daf48889a23a1fc285e042fb9c8901 04addfdfd09989768bc93678fd4eca1bf8d485e98690b7584a7559ab30a63ac16fd33e8e7db59f72c21b402a78bacbde205d642e60037d8b660a57341a60c4e646",
                            "sequence" : 4294967295
                        },
                        {
                            "prevout" : {
                                "hash" : "125ea4a6f9e86333de7566af28e6a5558a2c66e5c41b197560bd9a8e6c56866b",
                                "n" : 0
                            },
                            "scriptSig" : "3045022100c9e3d69de5bcbb9252b2b637e6846eaef971959653c887e7bb13f6528f1587f2022059d47b80f98460c0a02a9f7a7977202533fe3566a1cbecc599b122af02a8b8ac01 04a875f1a901e23be1435350f1a94820f84f590e297c0a34e393b873ac5b3182d071ca43890a54c750ad2fd6288416a319e70e48f2c2d2fe828666cfc98689ce0e",
                            "sequence" : 4294967295
                        },
                        {
                            "prevout" : {
                                "hash" : "e2b9a62cd1ad312f510510bf071ae0079b6b858db8b43e86809b7269d8ad1ff7",
                                "n" : 1
                            },
                            "scriptSig" : "3045022100a198dea14374a5d0584cfedeb8f6a457556b9bdd0488c433b179ad328a007c7102200a3179f1b8a95ae4e02183c25fb3234f1efe0db9129806d38579b2845e77a11801 047b19a9c3e6b0a92e9bdeeb294ebea709dd1d9b5e2ccb7e1fb03ca6bfa43b78dd0a6d72ddd9e64130513d63dc1ea5609906a15f1d3044f50ee6415b2e4eaf59e4",
                            "sequence" : 4294967295
                        },
                        {
                            "prevout" : {
                                "hash" : "b6548149a182fd10330b9f69024bdd55ce521ce367e9125d1bd8c91a8c5539da",
                                "n" : 0
                            },
                            "scriptSig" : "30450220670628b426d996131f064bb861554e31bd3afcdc581ae9824af1610dcc079080022100d240e2f445670f8e2be82f5fc74dfbc98312f0adb5f2ec163449588bdd8e9f8401 045c7e935730d0a7e45615e4a5df7c50b8bdde7fad7c978c569563b5451a756710d7dc0f1a248bd233467f17dd28e27484a91c0af4123c131b87d959dd37850692",
                            "sequence" : 4294967295
                        }
                        ],
                        "vout" : [
                        {
                            "value" : 0.19950871,
                            "scriptPubKey" : "OP_DUP OP_HASH160 c6b92e0b69d3a7aa53a28e2bc5a6de3f32fbff5a OP_EQUALVERIFY OP_CHECKSIG"
                        }
                        ],
                        "confirmations" : 0
                    }
                    ],
                    "previousblockhash" : "00000000000006d68b5d22acef2a43b38dc692782d7c12c0ae43259b9eb46078",
                    "nextblockhash" : "000000000000023b6a46f950ef1ccd08519c2e26208d1af157c6e7fa541bd043"
                }';
    }

}

class BlockChainTest extends PHPUnit_Framework_TestCase
{
    public function testGetBlock()
    {
        $blockChain = new BlockInfo(IP, PORT, USERNAME, PASSWORD);
        $block = $blockChain->get_block('000000000000010c5ba86d05c6f43df46921d453d23fdafe85229f6a7d840e16');

        $this->assertFalse(empty($block));
    }

}
