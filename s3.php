<?php
require 'Web-It-developers/aws.phar';
/**
 * Created by PhpStorm.
 * User: estudiante
 * Date: 11/04/15
 * Time: 02:28 PM
 */
use Aws\S3\S3Client;

$client = S3Client::factory(array(
    'key' => 'AKIAI6GQQ74JGDBHFNHQ',
    'secret' =>'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',
));

$bucket = 'web-it-developers';
$keyname = 'helloWorld';


// Upload data.
$result = $client->putObject(array(
    'Bucket' => $web-it-developers,
    'Key'    => $helloWorld,
    'Body'   => 'Hello, world!'
));
