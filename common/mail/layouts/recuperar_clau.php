<?php
  include("_header.php");
?>
  <tr>
    <td align="center" valign="top" width="100%" style="background-color: #f7f7f7;" class="content-padding">
      <center>
        <img src="./site/pixel?g=<?php echo $guid;?>" alt="">
        <table cellspacing="0" cellpadding="0" width="600" class="w320">
          <tr>
            <td class="header-lg">
              <?= Yii::t('app', 'La teva nova contrasenya és:'); ?>
            </td>
          </tr>
          <tr>
            <td class="free-text">
              <?= $contrasenya ?>
            </td>
          </tr>
          <tr>
            <td class="button">
              <div><!--[if mso]>
                <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="http://" style="height:45px;v-text-anchor:middle;width:155px;" arcsize="15%" strokecolor="#ffffff" fillcolor="#ff6f6f">
                  <w:anchorlock/>
                  <center style="color:#ffffff;font-family:Helvetica, Arial, sans-serif;font-size:14px;font-weight:regular;">Track Order</center>
                </v:roundrect>
              <![endif]--><a href="<?= \Yii::$app->getRequest()->serverName ?>"
              style="background-color:#ff6f6f;border-radius:5px;color:#ffffff;display:inline-block;font-family:'Cabin', Helvetica, Arial, sans-serif;font-size:14px;font-weight:regular;line-height:45px;text-align:center;text-decoration:none;width:155px;-webkit-text-size-adjust:none;mso-hide:all;"><?= Yii::t('app', 'Iniciar sessió'); ?></a></div>
            </td>
          </tr>
        </table>
      </center>
    </td>
  </tr>
<?php
  include("_footer.php");
?>
