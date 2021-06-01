<?php

require_once "TCPDF-main/tcpdf.php";

//클래스 정의
class MYPDF extends TCPDF
{
  //Page header
  // public function Header() {
  //     // Logo
  //     $image_file = K_PATH_IMAGES.'logo_example.jpg';
  //     $this->Image($image_file, 10, 10, 15, '', 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);
  //     // Set font
  //     $this->SetFont('helvetica', 'B', 20);
  //     // Title
  //     $this->Cell(0, 15, '<< TCPDF Example 003 >>', 0, false, 'C', 0, '', 0, false, 'M', 'M');
  // }

  // Page footer
  public function Footer()
  {
    // Position at 15 mm from bottom
    $this->SetY(-15);
    // Set font
    $this->SetFont("helvetica", "I", 7);

    date_default_timezone_set("Asia/Seoul");
    $today = date("F j, Y/ g:i A", time());

    // Page number and generated Date/Time
    $this->Cell(25, 5, "Generation Date/Time: " . $today, 0, 0, "L");
    $this->Cell(
      0,
      5,
      "Page " . $this->getAliasNumPage() . "/" . $this->getAliasNbPages(),
      0,
      false,
      "C",
      0,
      "",
      0,
      false,
      "T",
      "M"
    );
  }
}

// create new PDF document
$pdf = new MYPDF(
  PDF_PAGE_ORIENTATION,
  PDF_UNIT,
  PDF_PAGE_FORMAT,
  true,
  "UTF-8",
  false
);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor("Park Hyatt Seoul");
$pdf->SetTitle("Privacy agreement - Park Hyatt Seoul");
$pdf->SetSubject("TCPDF Tutorial");
$pdf->SetKeywords("TCPDF, PDF, example, test, guide");

// remove default header/footer
$pdf->setPrintHeader(false);
// $pdf->setPrintFooter(false);

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(10, 10, 10); //LEFT, TOP, RIGHT

//set footer margins

// set auto page breaks
$pdf->SetAutoPageBreak(true, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__) . "/lang/eng.php")) {
  require_once dirname(__FILE__) . "/lang/eng.php";
  $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont("times", "", 10);

// add a page
$pdf->AddPage();
require "template.php";
$pdf->writeHTML($html, true, false, true, false, "");

// ---------------------------------------------------------
//echo $html;
$fileName = date("Ymd") . date("His") . ".pdf";
// $pdf->Output($fileName, "I");
$pdf->Output(__DIR__ . "/savedPDF/$fileName", "F"); //file
?>
