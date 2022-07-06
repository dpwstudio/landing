<?php

switch ($_SERVER['REQUEST_METHOD']) {
	case ("OPTIONS"): //Allow preflighting to take place.
		 header("Access-Control-Allow-Origin: *");
		 header("Access-Control-Allow-Methods: POST");
		 header("Access-Control-Allow-Headers: content-type");
		 exit;
	case ("POST"): //Send the email;
		 header("Access-Control-Allow-Origin: *");

		 $json = file_get_contents('php://input');
		 $params = json_decode($json);

		 $name = trim(stripslashes($params->name));
		 $email = trim(stripslashes($params->email));
		 $detailMessage = $params->message;

		 $headers  = "MIME-Version: 1.0\r\n";
		 $headers .= "Reply-To: ". $email . "\r\n";
		 $headers .= "Content-type: text/html; charset= utf8\n";
		 $headers .= "From: anatomiedunegarderobe.com  <noreply@anatomiedunegarderobe.com>";

		 $to = 'dpw.contact@gmail.com';

		 $subject = 'Prise de contact sur anatomiedunegarderobe.com';

	// Set Message
	$message .= '
	<!DOCTYPE html>
<html>

<head>
  <title>Prise de contact depuis le site</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <style type="text/css">
    /* CLIENT-SPECIFIC STYLES */
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

    /* Allow smoother rendering of resized image in Internet Explorer */

    /* RESET STYLES */
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
      margin: 0 !important;
      padding: 0 !important;
      width: 100% !important;
    }

    /* iOS BLUE LINKS */
    a[x-apple-data-detectors] {
      color: inherit !important;
      text-decoration: none !important;
      font-size: inherit !important;
      font-family: inherit !important;
      font-weight: inherit !important;
      line-height: inherit !important;
    }

    /* MOBILE STYLES */
    @media screen and (max-width: 525px) {

      /* ALLOWS FOR FLUID TABLES */
      .wrapper {
        width: 100% !important;
        max-width: 100% !important;
      }

      /* ADJUSTS LAYOUT OF LOGO IMAGE */
      .logo img {
        margin: 0 auto !important;
        width: 20%;
      }

      /* USE THESE CLASSES TO HIDE CONTENT ON MOBILE */
      .mobile-hide {
        display: none !important;
      }

      .img-max {
        max-width: 50% !important;
        width: 50% !important;
        height: auto !important;
      }

      /* FULL-WIDTH TABLES */
      .responsive-table {
        width: 100% !important;
      }

      /* UTILITY CLASSES FOR ADJUSTING PADDING ON MOBILE */
      .padding {
        padding: 10px 5% 15px 5% !important;
      }

      .padding-meta {
        padding: 30px 5% 0 5% !important;
        text-align: center;
      }

      .padding-copy {
        padding: 10px 5% 10px 5% !important;
        text-align: center;
      }

      .no-padding {
        padding: 0 !important;
      }

      .section-padding {
        padding: 50px 15px 50px 15px !important;
      }

      /* ADJUST BUTTONS ON MOBILE */
      .mobile-button-container {
        margin: 0 auto;
        width: 100% !important;
      }

      .mobile-button {
        padding: 15px !important;
        border: 0 !important;
        font-size: 16px !important;
        display: block !important;
      }

    }

    /* ANDROID CENTER FIX */
    div[style*="margin: 16px 0;"] {
      margin: 0 !important;
    }

  </style>
</head>

<body style="margin: 0 !important; padding: 0 !important;">
  <!-- HEADER -->
  <table border="0" cellpadding="0" cellspacing="0" width="100%" style="-webkit-font-smoothing: antialiased;">
    <tr>
      <td bgcolor="#ffffff" align="center">
        <!--[if (gte mso 9)|(IE)]>
			   <table align="center" border="0" cellspacing="0" cellpadding="0" width="500">
			   <tr>
			   <td align="center" valign="top" width="500">
			   <![endif]-->
        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 500px;" class="wrapper">
          <tr>
            <td align="center" valign="top" style="padding: 15px 0;" class="logo">
              <a href="#">
                <img alt="Logo" src="https://anatomiedunegarderobe.com/landing/imgs/logo.png" width="150"
                  style="display: block; font-family: Helvetica Neue, Arial, sans-serif; color: #ffffff; font-size: 16px;"
                  border="0">
              </a>
            </td>
          </tr>
        </table>
        <!--[if (gte mso 9)|(IE)]>
			   </td>
			   </tr>
			   </table>
			   <![endif]-->
      </td>
    </tr>
    <tr>
      <td bgcolor="#FAFAFA" align="center" style="padding: 100px 15px;" class="section-padding">
        <!--[if (gte mso 9)|(IE)]>
			   <table align="center" border="0" cellspacing="0" cellpadding="0" width="500">
			   <tr>
			   <td align="center" valign="top" width="500">
			   <![endif]-->
        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 500px;"
          class="responsive-table">
          <tr>
            <td>
              <!-- HERO IMAGE -->
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td>
                    <!-- COPY -->
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td align="center"
                          style="font-size: 25px; font-family: Helvetica Neue, Arial, sans-serif; font-weight: bold; color: #000; padding: 0px 0 15px;"
                          class="padding">Prise de contact depuis <span style="color: #dfc4c4">anatomiedunegarderobe.com</span></td>
                      </tr>
                      <tr>
                        <td align="left"
                          style="padding: 20px 0 0 0; font-size: 16px; line-height: 25px; font-family: Helvetica Neue, Arial, sans-serif; color: #666666;"
                          class="padding">Une personne vous a contacté pour des renseignements, voici le détail :</td>
                      </tr>
                      <tr>
                        <td align="left"
                          style="padding: 20px 0 0 0; font-size: 16px; line-height: 25px; font-family: Helvetica Neue, Arial, sans-serif; color: #666666;"
                          class="padding">De => ' . $name . '</td>
                      </tr>
                      <tr>
                        <td align="left"
                          style="padding: 20px 0 0 0; font-size: 16px; line-height: 25px; font-family: Helvetica Neue, Arial, sans-serif; color: #666666;"
                          class="padding">Email => ' . $email . '</td>
                      </tr>
                      <tr>
                        <td align="left"
                          style="padding: 20px 0 0 0; font-size: 16px; line-height: 25px; font-family: Helvetica Neue, Arial, sans-serif; color: #666666;"
                          class="padding">Message => ' . $detailMessage . '</td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
        <!--[if (gte mso 9)|(IE)]>
			   </td>
			   </tr>
			   </table>
			   <![endif]-->
      </td>
    </tr>
    <tr>
      <td bgcolor="#fff" align="center" style="padding: 20px 0;">
        <!--[if (gte mso 9)|(IE)]>
			   <table align="center" border="0" cellspacing="0" cellpadding="0" width="500">
			   <tr>
			   <td align="center" valign="top" width="500">
			   <![endif]-->
        <!-- UNSUBSCRIBE COPY -->
        <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" style="max-width: 500px;"
          class="responsive-table">
          <tr>
            <td align="center"
              style="font-size: 12px; line-height: 18px; font-family: Helvetica Neue, Arial, sans-serif; color:grey;">
              © 2022 Anatomie d'une Garde-Robe. Tous droits réservés.
            </td>
          </tr>
        </table>
        <!--[if (gte mso 9)|(IE)]>
			   </td>
			   </tr>
			   </table>
			   <![endif]-->
      </td>
    </tr>
	</table>
</body>
</html>
	';

        // Sending email
        if (mail($to, $subject, $message, $headers)) {
			echo 'Success: Your mail has been sent successfully.';
	  } else {
			echo 'Error: Unable to send email. Please try again.';
	  }
	  break;
 default: //Reject any non POST or OPTIONS requests.
	  header("Allow: POST", true, 405);
	  exit;
}

