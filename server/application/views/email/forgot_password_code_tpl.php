<html xmlns="http://www.w3.org/1999/xhtml"><head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title><?php echo getConfig('site_name');?></title>
      <style type="text/css">
         /* Client-specific Styles */
         #outlook a {padding:0;} /* Force Outlook to provide a "view in browser" menu link. */
         body{width:100% !important; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; margin:0; padding:0;}
         /* Prevent Webkit and Windows Mobile platforms from changing default font sizes, while not breaking desktop design. */
         .ExternalClass {width:100%;} /* Force Hotmail to display emails at full width */
         .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;} /* Force Hotmail to display normal line spacing.  More on that: http://www.emailonacid.com/forum/viewthread/43/ */
         #backgroundTable {margin:0; padding:0; width:100% !important; line-height: 100% !important;}
         img {outline:none; text-decoration:none;border:none; -ms-interpolation-mode: bicubic;}
         a img {border:none;}
         .image_fix {display:block;}
         p {margin: 0px 0px !important;}
         
         table td {border-collapse: collapse;}
         table { border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; }
         /*a {color: #e95353;text-decoration: none;text-decoration:none!important;}*/
         /*STYLES*/
         table[class=full] { width: 100%; clear: both; }
         
         /*################################################*/
         /*IPAD STYLES*/
         /*################################################*/
         @media only screen and (max-width: 640px) {
         a[href^="tel"], a[href^="sms"] {
         text-decoration: none;
         color: #ffffff; /* or whatever your want */
         pointer-events: none;
         cursor: default;
         }
         .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
         text-decoration: default;
         color: #ffffff !important;
         pointer-events: auto;
         cursor: default;
         }
         table[class=devicewidth] {width: 440px!important;text-align:center!important;}
         table[class=devicewidthinner] {width: 420px!important;text-align:center!important;}
         table[class="sthide"]{display: none!important;}
         img[class="bigimage"]{width: 420px!important;height:219px!important;}
         img[class="col2img"]{width: 420px!important;height:258px!important;}
         img[class="image-banner"]{width: 440px!important;height:106px!important;}
         td[class="menu"]{text-align:center !important; padding: 0 0 10px 0 !important;}
         td[class="logo"]{padding:10px 0 5px 0!important;margin: 0 auto !important;}
         img[class="logo"]{padding:0!important;margin: 0 auto !important;}

         }
         /*##############################################*/
         /*IPHONE STYLES*/
         /*##############################################*/
         @media only screen and (max-width: 480px) {
         a[href^="tel"], a[href^="sms"] {
         text-decoration: none;
         color: #ffffff; /* or whatever your want */
         pointer-events: none;
         cursor: default;
         }
         .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
         text-decoration: default;
         color: #ffffff !important; 
         pointer-events: auto;
         cursor: default;
         }
         table[class=devicewidth] {width: 280px!important;text-align:center!important;}
         table[class=devicewidthinner] {width: 260px!important;text-align:center!important;}
         table[class="sthide"]{display: none!important;}
         img[class="bigimage"]{width: 260px!important;height:136px!important;}
         img[class="col2img"]{width: 260px!important;height:160px!important;}
         img[class="image-banner"]{width: 280px!important;height:68px!important;}
         
         }
      </style>

      
   </head>
<body>

<div class="block">
   <!-- start of header -->
   <table width="100%" bgcolor="#f6f4f5" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="header">
      <tbody>
         <tr>
            <td>
               <table width="580" bgcolor="#F0994E" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" hlitebg="edit" shadow="edit">
                  <tbody>
                     <tr>
                        <td>
                           <!-- logo -->
                           <table width="280" cellpadding="0" cellspacing="0" border="0" align="left" class="devicewidth">
                              <tbody>
                                 <tr>
                                    <td valign="middle" width="270" style="padding: 10px 0 10px 20px;" class="logo">
                                       <div class="imgpop">
                                          <h3 style="color:#ffffff;"><?php echo getConfig('site_name');?></h3>
                                       </div>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                           <!-- End of logo -->
                           <!-- menu -->
                           <table width="280" cellpadding="0" cellspacing="0" border="0" align="right" class="devicewidth">
                              <tbody>
                                 <tr>
                                    <td width="270" valign="middle" style="font-family: Helvetica, Arial, sans-serif;font-size: 14px; color: #ffffff;line-height: 24px; padding: 10px 0;" align="right" class="menu" st-content="menu">
                                        <img  width="60px" src="<?php echo base_url() . getConfig('site_logo');?>" alt="logo" border="0" style="display:block; border:none; outline:none; text-decoration:none;" st-image="edit" class="logo">
                                    </td>
                                    <td width="20"></td>
                                 </tr>
                              </tbody>
                           </table>
                           <!-- End of Menu -->
                        </td>
                     </tr>
                  </tbody>
               </table>
            </td>
         </tr>
      </tbody>
   </table>
   <!-- end of header -->
</div><div class="block">
   <!-- image + text -->
   <table width="100%" bgcolor="#f6f4f5" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="bigimage">
      <tbody>
         <tr>
            <td>
               <table bgcolor="#ffffff" width="580" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth" modulebg="edit">
                  <tbody>
                     <tr>
                        <td width="100%" height="20"></td>
                     </tr>
                     <tr>
                        <td>
                           <table width="540" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidthinner">
                              <tbody>
<!--                                  <tr style="background-color:#EEA14E;">
                                     start of image 
                                    <td align="center">
                                        <a target="_blank" href="#"><img width="350px" height="250px" border="0" alt="" style="display:block; border:none; outline:none; text-decoration:none;" src="<?php echo base_url() . getConfig('site_logo');?>" class="bigimage"></a>
                                    </td>
                                 </tr>-->
                                 <!-- end of image -->
                                 <!-- Spacing -->
                                 <tr>
                                    <td width="100%" height="20"></td>
                                 </tr>
                                 <!-- Spacing -->
                                 <!-- title -->
                                 <tr>
                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 18px; color: #333333; text-align:left;line-height: 20px;" st-title="rightimage-title">
                                       Hi <?php echo $user;?>,
                                    </td>
                                 </tr>
                                  <tr>
                                    <td width="100%" height="20"></td>
                                 </tr>
                                    <tr>
                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 13px; color: #000000; text-align:left;line-height: 20px;" st-title="rightimage-title">
                                       Here is a one-time verification code to reset your password.
                                       This code ensures that only you can access your account
                                    </td>
                                 </tr>
                                 <!-- end of title -->
                                 <!-- Spacing -->
                                 <tr>
                                    <td width="100%" height="20"></td>
                                 </tr>
                                 <!-- Spacing -->
                                 
                                 <!-- content -->
                                <tr>
                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 13px; color: #000000; text-align:left;line-height: 20px; font-weight: 900;" st-title="rightimage-title">
                                       Your Verification Code: <?php echo $token;?>
                                    </td>
                                 </tr>
                                 <!-- end of content -->
                                 <!-- Spacing -->

                                 <!-- button -->
                                 <tr>
                                    <td width="100%" height="20"></td>
                                 </tr>
                                 <!-- /button -->
                                 <!-- Spacing -->
                                 <tr>
                                    <td width="100%" height="20">Best,<br>Team <?php echo getConfig('site_name');?></td>
                                 </tr>
                                 <!-- Spacing -->
                              </tbody>
                           </table>
                        </td>
                     </tr>
                  </tbody>
               </table>
            </td>
         </tr>
      </tbody>
   </table>
</div>

<div class="block">
<!--    Start of preheader -->
   <table width="100%" bgcolor="#f6f4f5" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="postfooter">
      <tbody>
         <tr>
            <td width="100%">
               <table width="580" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                  <tbody>
<!--                      Spacing -->
                     <tr>
                        <td width="100%" height="5"></td>
                     </tr>
<!--                      Spacing -->
                     <tr>
                        <td align="center" valign="middle" style="font-family: Helvetica, arial, sans-serif; font-size: 10px;color: #999999" st-content="preheader">
                          Check our <a class="hlite" href="<?php echo base_url();?>" style="text-decoration: none; color: #F29B50"><?php echo getConfig('site_name');?></a> page to know more. 
                        </td>
                     </tr>
<!--                      Spacing -->
                     <tr>
                        <td width="100%" height="5"></td>
                     </tr>
<!--                      Spacing -->
                  </tbody>
               </table>
            </td>
         </tr>
      </tbody>
   </table>
<!--    End of preheader -->
</div>

</body></html>

