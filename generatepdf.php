<?php

// Include the main TCPDF library (search for installation path).
require_once "TCPDF-main/tcpdf.php";

class PDF extends TCPDF
{
  public function Header()
  {
    $imageFile = K_PATH_IMAGES . "logo_example.png";
    $this->Image(
      $imageFile,
      40, // left
      10, // top
      20, // size
      "",
      "PNG",
      "",
      "T",
      false,
      300,
      "",
      false,
      false,
      0,
      false,
      false,
      false
    );
    $this->Ln(5);
    $this->SetFont("helvetica", "B", 12); // font-family, style, size
    //189 is total width of A4 page, height, border, line, alignment
    $this->Cell(189, 5, "Park Hyatt", 0, 1, "C");
    $this->SetFont("helvetica", "", 8);
    $this->Cell(189, 3, "Seoul seocho-gu 123", 0, 1, "C");
    $this->Cell(189, 3, "잠원로 14길 31", 0, 1, "C");
    $this->Cell(189, 3, "전화: 82-2-2135-4820", 0, 1, "C");
    $this->Cell(189, 3, "이메일: david@netsbridge.com", 0, 1, "C");

    $this->SetFont("helvetica", "B", 8);
    $this->Ln(2); //LINE SPACING
    $this->Cell(189, 3, "BUY & SALE ORDER", 0, 1, "C");
  }
  public function Footer()
  {
    $this->SetY(-148); //position at 15mm from the bottom
    $this->Ln(5);
    $this->SetFont("times", "b", 10);

    // MultiCell($w, $h, $txt, $border=0, $align='J', $fill=0, $ln=1, $x='', $y='', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0)
    $this->MultiCell(
      189,
      15,
      "The Market order is valid for ____________ Days from the date I/We have Deposited above __________ Receives the above securities in advance in trust for execution of the order",
      0,
      "L",
      0,
      1,
      "",
      "",
      true
    );

    $this->Ln(2);
    $this->Cell(20, 1, "____________________", 0, 0);
    $this->Cell(118, 1, "", 0, 0);
    $this->Cell(51, 1, "_________________________", 0, 1);
    $this->Cell(20, 5, "Authorized Signature", 0, 0);
    $this->Cell(118, 5, "", 0, 0);
    $this->Cell(51, 5, "Customer / POA Signature(s)", 0, 1);
    // 8+181 = 189 A4 width
    $this->Cell(8, 1, "", 0, 0);
    $this->Cell(181, 5, "(Office Use)", 0, 1);
    $this->Ln(5);
    $this->Cell(100, 5, "Transaction Instruction Form (PAY IN)", 0, 1, "R");
    $this->Cell(89, 5, "", 0, 1, "C");

    $this->Cell(
      110,
      5,
      "Please transfer the above noted sold securities to the clearing stated below",
      0,
      1,
      "C"
    );
    $this->Cell(79, 5, "", 0, 1, "C");

    $this->Cell(110, 5, "DSE Clearing A/C--------------------------", 0, 0);
    $this->Cell(79, 5, "Exchange ID---------------------------", 0, 1, "C");
    $this->Ln(5);

    $this->Cell(110, 5, "CSE Clearing A/C--------------------------", 0, 0);
    $this->Cell(79, 5, "Exchange ID---------------------------", 0, 1, "C");
    $this->Ln(4);

    $this->SetFont("times", "B", 10);
    $this->Cell(189, 5, "DECLARATION", 0, 1, "L");

    $this->SetFont("times", "", 10);
    $html =
      '<p style="text-align:justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae aliquam omnis provident ullam aut ab commodi minus illum corporis debitis est incidunt voluptates dicta, pariatur ratione earum velit repellendus amet culpa quidem necessitatibus, facere non. Adipisci incidunt ratione repellat quos odit perspiciatis, provident, laborum rem recusandae ducimus, et iste dignissimos.</p>';
    $this->writeHTML($html, true, false, true, false, "");

    $this->Ln(8);
    $this->SetFont("times", "B", 10);
    $this->Cell(20, 1, "___________________", 0, 0);
    $this->Cell(118, 1, "", 0, 0);
    $this->Cell(51, 1, "_________________________", 0, 1);

    $this->Cell(20, 5, "Authorized Signature", 0, 0);
    $this->Cell(118, 5, "", 0, 0);
    $this->Cell(51, 5, "Customer / POA Signature(s)", 0, 1);

    $this->Cell(7, 1, "", 0, 0);
    $this->Cell(182, 5, "(Office Use)", 0, 1);
    $this->Ln(7);

    //setFont
    $this->SetFont("helvetica", "I", 8);
    // page number
    date_default_timezone_set("Asia/Seoul");
    $today = date("F j, Y/ g:i A", time());

    $this->Cell(25, 5, "Generation Date/Time: " . $today, 0, 0, "L");
    $this->Cell(
      164,
      5,
      "Page " . $this->getAliasNumPage() . " of " . $this->getAliasNbPages(),
      0,
      false,
      "R",
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
//$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
// PDF_PAGE_ORIENTATION: portrait or landscape

$pdf = new PDF("p", "mm", "A4", true, "UTF-8", false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor("Nicola Asuni");
$pdf->SetTitle("TCPDF Example 001");
$pdf->SetSubject("TCPDF Tutorial");
$pdf->SetKeywords("TCPDF, PDF, example, test, guide");

// set default header data
$pdf->SetHeaderData(
  PDF_HEADER_LOGO,
  PDF_HEADER_LOGO_WIDTH,
  PDF_HEADER_TITLE . " 001",
  PDF_HEADER_STRING,
  [0, 64, 255],
  [0, 64, 128]
);
$pdf->setFooterData([0, 64, 0], [0, 64, 128]);

// set header and footer fonts
$pdf->setHeaderFont([PDF_FONT_NAME_MAIN, "", PDF_FONT_SIZE_MAIN]);
$pdf->setFooterFont([PDF_FONT_NAME_DATA, "", PDF_FONT_SIZE_DATA]);

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(true, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__) . "/lang/eng.php")) {
  require_once dirname(__FILE__) . "/lang/eng.php";
  $pdf->setLanguageArray($l);
}

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont("dejavusans", "", 14, "", true);

// Add a page
$pdf->AddPage();

// Close and output PDF document
$pdf->Output("example_001.pdf", "I");

?>
