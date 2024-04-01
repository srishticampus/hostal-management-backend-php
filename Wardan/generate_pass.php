<?php
// Include the TCPDF library
require 'connection.php';
require_once('tcpdf/tcpdf.php');
define('NASLOV', $naslov_pdf_poln);

class MYPDF extends TCPDF {

    //Page header
    

    // Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        
        $this->SetFont('helvetica', 'I', 12);
          $this->write2DBarcode(NASLOV,'DATAMATRIX', 100, 265, 25, 25, $style, 'N');

    // Page number
    $this->Cell(0, 10, NASLOV, 0, false, 'C', 0, '', 0, false, 'T', 'M');
        // Page number
       // $this->Cell(0, 10, 'Hostel | Hostel | ', 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
}

// Create a new TCPDF instance
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// Set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Your Name');
$pdf->SetTitle('Gate Pass');
$pdf->SetSubject('Gate Pass');
$pdf->SetKeywords('PDF, TCPDF, HTML');

// Set default header data
//$pdf->SetHeaderData('', 0, 'Customized PDF', '');

// Set header and footer fonts
//$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
//$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// Set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// Set margins
// $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
// $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
// $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);


$pdf->setFooterData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));



// Set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// Set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// Add a page
$pdf->AddPage();

// Your provided HTML content

$connect = mysqli_connect("localhost","root","Neontetra@2021#","hostal");
$id=$_GET['id'];
$query = "SELECT user.name,user.email,user.contact_number,outpass.pass_date,outpass.pass_time,outpass.purpose,outpass.return_time,outpass.id,outpass.outpass_status,wardan.hostal_name,wardan.hostal_address,wardan.email as wemail,wardan.contact FROM outpass INNER JOIN user ON outpass.user_id = user.id inner join wardan on wardan.id=user.hostal_id where outpass.id=$id";
 //echo $query;die();
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_array($result);

$html = '<html>
<head>
<style>
.logo-sec{
background-color: #ccc;
float: right;
}
.logo-sec img{

}
h1{
    color:red;
}
h1,h6,h2{
  
  text-align:center;
}
table th{ text-align: center; padding: 15px; line-height: 70px;}
</style>
</head>
<body style="margin: 0;">
    

            <table width="100%">
                <tr>
                    <th>
                        <img style="width: 100px;"src="img/hostel.png">
                    </th>
                </tr>
            </table> 



        <br><br><br>
        <h1 style="">'.$row['hostal_name'].' Hostel</h1>
        <h6>'.$row['hostal_address'].'</h6>
        <h6>'.$row['wemail'].'</h6>
        <h6>'.$row['contact'].'</h6>
        <h2>Out Pass</h2>
        <div>
            <table width="100%">
                
                <td align="left">Date:'.$row['pass_date'].' </td>
                <td align="center">Time:'.$row['pass_time'].' </td>
                 <td align="right">Return Time:'.$row['return_time'].' </td>
            </table>     
        </div>
        <div>
                <h5>Purpose:'.$row['purpose'].'</h5>
                <h3>User Details</h3>
                <p>Name:'.$row['name'].'</p>
                <p>Email:'.$row['email'].'</p>
                <p>Contact Number:'.$row['contact_number'].'</p>

               
          
           
          

            </div>
            <div>


            </div>
    
           
    
   
</body>
</html>';



// Convert HTML to PDF
$pdf->writeHTML($html, true, false, true, false, '');

// Output the PDF to a file
$folderPath = '/home/ubuntu/html/Project/Hostel/Wardan/pdf'; // Change this to the folder where you want to store PDFs
$fileName = rand().'customized_pdf.pdf'; // Change the filename if needed
$pdfFilePath = $folderPath . '/' . $fileName;

if (!is_dir($folderPath)) {
    mkdir($folderPath, 0755, true);
}

$pdf->Output($pdfFilePath, 'F');

// Close the PDF
$pdf->close();

$s1="update outpass set pass_file='$fileName', `outpass_status`=1 where id=$id";
$r=$con->query($s1);

// Redirect to the generated PDF file
$path1="http://campus.sicsglobal.co.in/Project/Hostel/Wardan/pdf/".$fileName;

header("location:view_outpass.php?status=success");
exit();


?>
