<?php
defined('BASEPATH') or exit('No direct script access allowed');

// require_once("./vendor/dompdf/dompdf/autoload.inc.php");

use Dompdf\Dompdf;
use Dompdf\Options;

class Pdf extends Dompdf
{

  public function generate($html, $filename = 'unname', $stream = TRUE, $paper = 'A4', $orientation = "portrait")
  {
    $options = new Options();
    $options->set('isRemoteEnabled', TRUE);
    $dompdf = new Dompdf($options);


    $dompdf->setPaper($paper, $orientation);
    $dompdf->loadHtml($html);
    $dompdf->render();
    if ($stream) {
      // 0 = attachment | preview
      // 1 = attachment | force download
      $dompdf->stream($filename . ".pdf", array("Attachment" => 0));
    } else {
      return $dompdf->output();
    }
  }
}
