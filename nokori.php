<?php
  $第一項目 = $_POST['第一項目'];
  $第二項目 = $_POST['第二項目'];
  $第三項目 = $_POST['第三項目'];
  $第四項目 = $_POST['第一項目'];
  $第五項目 = $_POST['第一項目'];
  $第六項目 = $_POST['第一項目'];
  $第七項目 = $_POST['第一項目'];
  $後で = $_POST['後で'];
  $formcontent = '
  <html>
    <head>
      <title>Contact Form</title>
    </head>
    <body>
      <p>下記は送信それました：</p>
      <br>
      <table style="border: 1px solid black; line-height: 1.5">
        <thead>
          <tr style="background-color: LimeGreen;">
            <th style="padding: 3px;" scope="col">項目</th>
            <th style="padding: 3px; width:17%" scope="col">理由</th>
          </tr>
        </thead>
        <tbody>
          <tr style="background-color: #f1f1f1;">
            <td style="padding: 3px;">$第一項目</td>
            <td style="padding: 3px;">$第一項目理由</td>
          </tr>
          <tr style="background-color: #fff;">
            <td style="padding: 3px;">$第二項目</td>
            <td style="padding: 3px;">$第二項目理由</td>
          </tr>
          <tr style="background-color: #f1f1f1;">
            <td style="padding: 3px;">$第三項目</td>
            <td style="padding: 3px;">$第三項目理由</td>
          </tr>
          <tr style="background-color: #fff;">
            <td style="padding: 3px;">$第四項目</td>
            <td style="padding: 3px;">$第四項目理由</td>
          </tr>
          <tr style="background-color: #f1f1f1;">
            <td style="padding: 3px;">$第五項目</td>
            <td style="padding: 3px;">$第五項目理由</td>
          </tr>
          <tr style="background-color: #fff;">
            <td style="padding: 3px;">$第六項目</td>
            <td style="padding: 3px;">$第六項目理由</td>
          </tr>
          <tr style="background-color: #f1f1f1;">
            <td style="padding: 3px;">$第七項目</td>
            <td style="padding: 3px;">$第七項目理由</td>
          </tr>
          <tr style="background-color: #fff;">
            <td style="padding: 3px;">$後で</td>
            <td style="padding: 3px;">分かったかい？</td>
          </tr>
        </tbody>
      </table>
    </body>
    <br>
    <p>よろぴくー</p>
  </html>'
  $recipient = "hhecktor@icloud.com";
  $subject = "Contact Form";
  $headers[] = 'MIME-Version: 1.0';
  $headers[] = 'Content-type: text/html; charset=utf-8';
  mail($recipient, $subject, $formcontent, $hedaers) or die("Error!");
  echo "Thank You!";
?>