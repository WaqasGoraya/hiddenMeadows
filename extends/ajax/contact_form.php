<?php


add_action('wp_ajax_nopriv_contact_form_ajax', 'contact_form_ajax');
add_action('wp_ajax_contact_form_ajax', 'contact_form_ajax');
function contact_form_ajax()
{
  parse_str($_POST['data'], $searcharray);
  if (isset($searcharray['submit'])) {
    $name = $searcharray['name'];
    $email = $searcharray['email'];
    $phone = $searcharray['phone'];
    $fsubject = $searcharray['subject'];
    $message = $searcharray['message'];

    $to = get_option('admin_email');
    $subject = 'Client Contact';

    $message =  '<!DOCTYPE html> <html lang="en">';
    $message .=  '<head>
          <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
          href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap"
          rel="stylesheet"
        />
        <title>Email template</title>
        <style type="text/css">
          a:hover,
          a:focus,
          a:active {
            color: black;
          }
        </style>
    
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <br />
        <br />
      </head>
      <body>
        <table
          id="sig"
          width="820px"
          cellspacing="0"
          cellpadding="0"
          border-spacing="0"
          style="
            width: 820px;
            margin: 0;
            padding: 0;
            margin: auto;
            font-family: "Roboto", sans-serif !important;">
          <thead>
            <tr>
              <th style="display: flex; justify-content: center">
                Request For : Universal Labels Form';
    $message .= '</th>
            </tr>
          </thead>
        </table>
        <table
          id="sig"
          width="820px"
          cellspacing="0"
          cellpadding="0"
          border-spacing="0"
          style="
            width: 820px;
            margin: 0;
            padding: 0;
            margin: auto;
            font-family: "Roboto", sans-serif !important;
            border-top: 2px solid #a3b4b9;
            border-bottom: 2px solid #a3b4b9;
            border-left: 1px solid #a3b4b9;
            border-right: 1px solid #a3b4b9;
            margin-top: 20px;
            padding: 40px;
          "
        >
          <tbody>
            <tr>
              <td style="border-bottom: 1px solid #a3b4b9">
                <div
                  style="
                    font-size: 18px;
                    font-weight: 600;
                    margin-top: 20px;
                    margin-bottom: 10px;
                  "
                >
                Name
                </div>
                <div style="padding-bottom: 20px">';
    $message .= $name;
    $message .=
      '</div>
              </td>
            </tr>
           
            <tr>
              <td style="border-bottom: 1px solid #a3b4b9">
                <div
                  style="
                    font-size: 18px;
                    font-weight: 600;
                    margin-top: 20px;
                    margin-bottom: 10px;
                  "
                >
                  Email
                </div>
                <div style="padding-bottom: 20px">';
    $message .= $email;
    '</div>
              </td>
            </tr>
           
            <tr>
              <td style="border-bottom: 1px solid #a3b4b9">
                <div
                  style="
                    font-size: 18px;
                    font-weight: 600;
                    margin-top: 20px;
                    margin-bottom: 10px;
                  "
                >
                  Email
                </div>
                <div style="padding-bottom: 20px">';
    $message .= $phone;
    $message .=
      '</div>
              </td>
            </tr>
            <tr>
              <td style="border-bottom: 1px solid #a3b4b9">
                <div
                  style="
                    font-size: 18px;
                    font-weight: 600;
                    margin-top: 20px;
                    margin-bottom: 10px;
                  "
                >
                  Subject
                </div>
                <div style="padding-bottom: 20px">';
    $message .= $fsubject;
    $message .=
      '</div>
              </td>
            </tr>
                    <tr>
              <td style="border-bottom: 1px solid #a3b4b9">
                <div
                  style="
                    font-size: 18px;
                    font-weight: 600;
                    margin-top: 20px;
                    margin-bottom: 10px;
                  "
                >
                 Message
                </div>
                <div style="padding-bottom: 20px">';
    $message .= $message;
    $message .=
      '</div>
              </td>
            </tr>
           

        
          </tbody>
        </table>
        <table
          id="sig"
          width="820px"
          cellspacing="0"
          cellpadding="0"
          border-spacing="0"
          style="
            width: 820px;
            margin: 0;
            padding: 0;
            margin: auto;
            font-family: "Roboto", sans-serif !important;">
          <tbody>
            <tr>
              <td
                style="
                  display: flex;
                  justify-content: center;
                  font-size: 14px;
                  font-weight: 400;
                  padding-top: 10px;
                "
              >Sent from
              <a href="https://idsolution.demo.leadconcept.net/" > King  </a>
              </td>
            </tr>
          </tbody>
        </table>
      </body>
    </html>';
    $headers = array('Content-Type: text/html; charset=UTF-8');
    $content_type = function () {
      return 'text/html';
    };
    $mail = wp_mail($to, $subject, $message, $headers);

    if ($mail) {

      echo true;
    }
  } else {
    echo false;
  }

  wp_die();
}
