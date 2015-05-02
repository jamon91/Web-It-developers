<?php

require_once 'aws.phar';
use Aws\S3\S3Client;
use Aws\S3\Exception\S3Exception;
class ConectorS3{

  public static function conectarS3(){

        $conexion = S3Client::factory(array(


            'key' => 'AKIAJNGHF326Y63CQSBA',
            'secret' => '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',

        ));

      return $conexion;
    }

    public static function listadoS3()
    {
       $arreglo['objeto'] = array();
        $bucket = 'cyrixpot';
        $bucketS3 = ConectorS3::conectarS3();
        $archivos = $bucketS3->getListObjectsIterator(array(
                'Bucket' => $bucket,
                 'Prefix'=> ''
        ));

        return $archivos;


    }



   public static function borrarS3($archivo){


       $bucketS3 = ConectorS3::conectarS3();
       $bucket = 'cyrixpot';
       $bucketS3->deleteObject(array(
           'Bucket' => $bucket,
           'Key'    => $archivo
       ));


   }


  public static function descargaS3($archivo){

      $s3 = ConectorS3::conectarS3();
      $bucket='cyrixpot';
      $filename=$archivo;
      $result = $s3->putObject(array(
          'Bucket' => $bucket,
          'Key'    => $filename,
          'Body'   => ' ',
          'ACL'    => 'public-read',
      ));
      $data=$result->toArray();
      $object_url=$data['ObjectURL'];
      $url= print_r($object_url,TRUE);

      return $url;
   }


  }
