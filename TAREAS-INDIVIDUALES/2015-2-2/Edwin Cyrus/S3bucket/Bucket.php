<?php
/**
 * Created by PhpStorm.
 * User: estudiante
 * Date: 20/04/15
 * Time: 06:58 PM
 */

require_once __DIR__ . '/vendor/autoload.php';

 // /Composer Bucket/s3-php5-curl/vendor
//include the S3 class
//if (!class_exists('S3')) require_once('../app/S3.php');

//AWS access info
if (!defined('awsAccessKey')) define('awsAccessKey', 'AKIAI26AC2GGSZ6CAL4A');
if (!defined('awsSecretKey')) define('awsSecretKey', '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');

//instantiate the class
$s3 = new S3(awsAccessKey, awsSecretKey);


//check whether a form was submitted
if(isset($_POST['Submit'])){

    //retreive post variables
    $fileName = $_FILES['theFile']['name'];
    $fileTempName = $_FILES['theFile']['tmp_name'];

    //we'll continue our script from here in the next step!

    //create a new bucket
    $s3->putBucket("cyrixpot", S3::ACL_PUBLIC_READ);

//move the file
if ($s3->putObjectFile($fileTempName, "cyrixpot", $fileName, S3::ACL_PUBLIC_READ)) {
    echo "We successfully uploaded your file.";
}else{
    echo "Something went wrong while uploading your file... sorry.";
}
    // Get the contents of our bucket
    $bucket_contents = $s3->getBucket("cyrixpot");

    foreach ($bucket_contents as $file){

        $fname = $file['name'];
        $furl = "http://cyrixpot.s3.amazonaws.com/".$fname;

        //output a link to the file
        echo "<a href=\"$furl\">$fname</a><br />";
    }

}

?>

<!DOCTYPE html>




<html>
<Head>
    Subir Archivo
</Head>


<form action="" method="post" enctype="multipart/form-data">
    <input name="theFile" type="file" />
    <input name="Submit" type="submit" value="Upload">
</form>
</html>
