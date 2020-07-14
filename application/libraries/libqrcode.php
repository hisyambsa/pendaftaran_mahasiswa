<?php
defined('BASEPATH') or exit('No direct script access allowed');

// require_once("./vendor/dompdf/dompdf/autoload.inc.php");

use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\LabelAlignment;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Response\QrCodeResponse;

class libqrcode
{

    public function buat($data, $filename)
    {
        // Create a basic QR code
        $qrCode = new QrCode($data);
        $qrCode->setSize(300);

        // Set advanced options
        $qrCode->setWriterByName('png');
        $qrCode->setMargin(10);
        $qrCode->setEncoding('UTF-8');
        $qrCode->setErrorCorrectionLevel(ErrorCorrectionLevel::HIGH());
        $qrCode->setForegroundColor(['r' => 0, 'g' => 0, 'b' => 0, 'a' => 0]);
        $qrCode->setBackgroundColor(['r' => 255, 'g' => 255, 'b' => 255, 'a' => 0]);
        // $qrCode->setLabel('Scan the code', 16, __DIR__ . '/../assets/fonts/noto_sans.otf', LabelAlignment::CENTER());
        $qrCode->setLogoPath(__DIR__ . '/../img_qrcode/logo.jpeg');

        // var_dump(__DIR__);
        $qrCode->setLogoSize(30, 30);
        $qrCode->setRoundBlockSize(true);
        $qrCode->setValidateResult(false);
        $qrCode->setWriterOptions(['exclude_xml_declaration' => true]);

        // Directly output the QR code
        header('Content-Type: ' . $qrCode->getContentType());
        echo $qrCode->writeString();

        // Save it to a file
        // $qrCode->writeFile(__DIR__ . '../../img_qrcode/' . $filename . '.png');

        // Create a response object
        $response = new QrCodeResponse($qrCode);
    }
}
