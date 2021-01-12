<?php
$mail_setFromName = htmlspecialchars($_POST["sendName"], ENT_QUOTES);
$mail_setFromEmail = htmlspecialchars($_POST["sendEmail"], ENT_QUOTES);
$mail_setFromMessage = htmlspecialchars($_POST["sendMessage"], ENT_QUOTES);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'pruebaveinteveinte999@gmail.com';                     // SMTP username
    $mail->Password   = '12345678juan';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom($mail_setFromEmail, $mail_setFromName);
    $mail->addAddress('pictures.mikasa@gmail.com', 'JUANINDES');     // Add a recipient             

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Mensaje recibido desde la PAG. WEB del instituto.';
    $mail->Body    = '<!DOCTYPE html>
    <html lang="en">
    
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width">
      <style type="text/css">
        /* CLIENT-SPECIFIC STYLES */
        #outlook a {
          padding: 0;
        }
        /* Force Outlook to provide a "view in browser" message */
        .ReadMsgBody {
          width: 100%;
        }
        .ExternalClass {
          width: 100%;
        }
        /* Force Hotmail to display emails at full width */
        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
          line-height: 100%;
        }
        /* Force Hotmail to display normal line spacing */
        body,
        table,
        td,
        a {
          -webkit-text-size-adjust: 100%;
          -ms-text-size-adjust: 100%;
        }
        /* Prevent WebKit and Windows mobile changing default text sizes */
        table,
        td {
          mso-table-lspace: 0pt;
          mso-table-rspace: 0pt;
        }
        /* Remove spacing between tables in Outlook 2007 and up */
        img {
          -ms-interpolation-mode: bicubic;
        }
        body {
          margin: 0;
          padding: 0;
        }
    
        img {
          border: 0;
          height: auto;
          line-height: 100%;
          outline: none;
          text-decoration: none;
        }
        table {
          border-collapse: collapse !important;
        }
        body {
          height: 100% !important;
          margin: 0;
          padding: 0;
          width: 100% !important;
        }
        /* iOS BLUE LINKS */
        .appleBody a {
          color: #68440a;
          text-decoration: none;
        }
        .appleFooter a {
          color: #999999;
          text-decoration: none;
        }
        /* MOBILE STYLES */
        @media screen and (max-width: 525px) {
          /* ALLOWS FOR FLUID TABLES */
          table[class="wrapper"] {
            width: 100% !important;
          }
          /* ADJUSTS LAYOUT OF LOGO IMAGE */
          td[class="logo"] {
            text-align: left;
            padding: 20px 0 20px 0 !important;
          }
          td[class="logo"] img {
            margin: 0 auto !important;
          }
          /* USE THESE CLASSES TO HIDE CONTENT ON MOBILE */
          td[class="mobile-hide"] {
            display: none;
          }
          img[class="mobile-hide"] {
            display: none !important;
          }
          img[class="img-max"] {
            max-width: 100% !important;
            height: auto !important;
          }
          /* FULL-WIDTH TABLES */
          table[class="responsive-table"] {
            width: 100% !important;
          }
          /* UTILITY CLASSES FOR ADJUSTING PADDING ON MOBILE */
          td[class="padding"] {
            padding: 10px 5% 15px 5% !important;
          }
    
          td[class="padding-copy"] {
            padding: 10px 5% 10px 5% !important;
            text-align: center;
          }
    
          td[class="padding-meta"] {
            padding: 30px 5% 0px 5% !important;
            text-align: center;
          }
    
          td[class="no-pad"] {
            padding: 0 0 20px 0 !important;
          }
    
          td[class="no-padding"] {
            padding: 0 !important;
          }
    
          td[class="section-padding"] {
            padding: 50px 15px 50px 15px !important;
          }
    
          td[class="section-padding-bottom-image"] {
            padding: 50px 15px 0 15px !important;
          }
    
          /* ADJUST BUTTONS ON MOBILE */
          td[class="mobile-wrapper"] {
            padding: 10px 5% 15px 5% !important;
          }
    
          table[class="mobile-button-container"] {
            margin: 0 auto;
            width: 100% !important;
          }
    
          a[class="mobile-button"] {
            width: 80% !important;
            padding: 15px !important;
            border: 0 !important;
            font-size: 16px !important;
          }
    
        }
      </style>
    </head>
    
    <body style="margin: 0; padding: 0;">
      <!-- ONE COLUMN SECTION -->
    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;">
    <tr>
        <td bgcolor="#ffffff" align="center" style="padding: 70px 15px 70px 15px;" class="section-padding">
        <table border="0" cellpadding="0" cellspacing="0" width="500" class="responsive-table">
            <tr>
            <td>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td>
                    <!-- HERO IMAGE -->
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tbody>
                        <tr>
                            <td class="padding-copy">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                <td>
                                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/48935/responsive-email.jpg" width="500" height="200" border="0" alt="Can an email really be responsive?" style="display: block; padding: 0; color: #666666; text-decoration: none; font-family: Helvetica, arial, sans-serif; font-size: 16px; width: 500px; height: 200px;" class="img-max">
                                </td>
                                </tr>
                            </table>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    </td>
                </tr>
                <tr>
         <td>
    <!-- COPY -->
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
        <td align="center" style="font-size: 25px; font-family: Helvetica, Arial, sans-serif; color: #333333; padding-top: 30px;" class="padding-copy">Email recibido de la WEB INDES.</td>
        </tr>
        <tr>
                          <!-- COMPACT ARTICLE SECTION -->
      <table border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;">
        <tr>
          <td bgcolor="#f8f8f8" align="center" style="padding: 70px 15px 70px 15px;" class="section-padding">
            <table border="0" cellpadding="0" cellspacing="0" width="500" style="padding:0 0 20px 0;" class="responsive-table">
              <!-- TITLE -->
              <tr>
                <td valign="top" style="padding: 40px 0 0 0;" class="mobile-hide"><a href="http://www.campaignmonitor.com/resources/" target="_blank"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/48935/campaign-monitor-logo.jpg" alt="Campaign Monitor" width="105" height="105" border="0" style="display: block; font-family: Arial; color: #666666; font-size: 14px; width: 105px; height: 105px;"></a></td>
                <td style="padding: 40px 0 0 0;" class="no-padding">
                  <!-- ARTICLE -->
                  <table border="0" cellspacing="0" cellpadding="0" width="100%">
                    <tr>
                      <td align="left" style="padding: 0 0 5px 25px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; font-weight: normal; color: #333333;" class="padding-copy">Información del usuario.</td>
                    </tr>
                    <tr>
                      <td align="left" style="padding: 10px 0 15px 25px; font-size: 16px; line-height: 24px; font-family: Helvetica, Arial, sans-serif; color: #666666;" class="padding-copy">
                        Nombre del usuario: '.$mail_setFromName.' <br>
                        Email: '.$mail_setFromEmail.'<br>
                        Asunto: '.$mail_setFromMessage.'
                    </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
      
      <!-- FOOTER -->
      <table border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;">
        <tr>
          <td bgcolor="#ffffff" align="center">
            <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
              <tr>
                <td style="padding: 20px 0px 20px 0px;">
                  <!-- UNSUBSCRIBE COPY -->
                  <table width="500" border="0" cellspacing="0" cellpadding="0" align="center" class="responsive-table">
                    <tr>
                      <td align="center" valign="middle" style="font-size: 12px; line-height: 18px; font-family: Helvetica, Arial, sans-serif; color:#666666;">
                        <span class="appleFooter" style="color:#666666;">Desarrollo WEB BY INDES 2021</span><br>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    
    </body>
    
    </html>';

    $mail->send();
    echo 1;
} catch (Exception $e) {
    echo 0;
}
