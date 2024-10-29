<?php
@include_once dirname(__FILE__).'/../vendor/autoload.php';
require_once dirname(__FILE__).'/../lib/openpgp.php';
require_once dirname(__FILE__).'/../lib/openpgp_crypt_rsa.php';
          $publickey='-----BEGIN PGP PUBLIC KEY BLOCK-----
Version: Keybase OpenPGP v2.0.76
Comment: https://keybase.io/crypto

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
UE7YqNbxYgJW3dAnMBGG6DgPYlOIIvU=
=RwLG
-----END PGP PUBLIC KEY BLOCK-----
';
//       $OpenPGP_Message =new OpenPGP_Message();
//var_dump($string);exit;
             
$key = OpenPGP_Message::parse(OpenPGP::unarmor($publickey, "PGP PUBLIC KEY BLOCK"));

echo '<pre>';
var_dump($key);exit;


$recipientPublicKey = OpenPGP_Message::parse(OpenPGP::unarmor(file_get_contents('public.asc'), 'PGP PUBLIC KEY BLOCK'));

$encryptedPrivateKey = OpenPGP_Message::parse(OpenPGP::unarmor(file_get_contents('sekret.asc'), 'PGP PRIVATE KEY BLOCK'));
$privateKeyPassphrase = 'test';
$key = OpenPGP_Crypt_Symmetric::decryptSecretKey($privateKeyPassphrase, $encryptedPrivateKey[0]);

$signer = new OpenPGP_Crypt_RSA($key);
$data = new OpenPGP_LiteralDataPacket("some text\n", ['format' => 'u']);
$signed = $signer->sign($data);

$compressed = new OpenPGP_CompressedDataPacket($signed);
$encrypted = OpenPGP_Crypt_Symmetric::encrypt([$recipientPublicKey, $key], new OpenPGP_Message([$compressed]));

echo OpenPGP::enarmor($encrypted->to_bytes(), 'PGP MESSAGE');


