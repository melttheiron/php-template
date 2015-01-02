<?php 

require_once('vendor/autoload.php');

use Aws\S3\S3Client;

$payload = getPayload();

$param1 = $payload->param1;

$aws_key = $payload->aws->key;
$aws_secret = $payload->aws->secret;
$aws_bucket = $payload->aws->bucket;

$s3 = S3Client::factory(array(
    'key' => $aws_key,
    'secret' => $aws_secret
));

$result = $s3->getObject(array(
    'Bucket' => $aws_bucket,
    'Key'    => 'file.txt'
));