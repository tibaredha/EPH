<?php
require_once('../tcpdf/GRH1.php');
//***************************post*************************//
class GRH2 extends GRH1 {
    //Page header
    public function Header() {
        // get the current page break margin
        $bMargin = $this->getBreakMargin();
        // get current auto-page-break mode
        $auto_page_break = $this->AutoPageBreak;
        // disable auto-page-break
        $this->SetAutoPageBreak(false, 0);
        // set bacground image
        $img_file = K_PATH_IMAGES.'1.jpg';
        $this->Image($img_file, 0, 0, 210, 297, '', '', '', false, 300, '', false, false, 0);
        // restore auto-page-break status
        $this->SetAutoPageBreak($auto_page_break, $bMargin);
        // set the starting point for the page content
        $this->setPageMark();
    }
}



$pdf = new GRH2('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->entete();
$ndp=$_GET["idp"];



$pdf->Image('../images/photos/'.$ndp.'.jpg', $x='35', $y='5', $w=30, $h=35, $type='', $link='', $align='', $resize=false, $dpi=300, $palign='', $ismask=false, $imgmask=false, $border=0, $fitbox=false, $hidden=false, $fitonpage=false, $alt=false, $altimgs=array());


$pdf->titreFICHEREN($_GET["idp"]);
$pdf->Output();

?>
