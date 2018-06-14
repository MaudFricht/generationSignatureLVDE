<?php
if (isset($_POST['submitDl']))
{
    header("Content-disposition:filename=signature-lavoixdelenfant.htm");
    header("Content-type:application/octetstream");
    echo urldecode($_POST['signature']);
    exit(0);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;" />
    <meta charset="utf-8"/>
</head>
<body style=" font-family: 'Hind'">
    <h1 style=" font-weight: bold; color: #F63439; font-size: 2rem"> Créez votre signatures mail pour La Voix De l'Enfant</h1>
<p>
    <b style=" color: #FFAF00">Mode d'emploi</b>
<ol>
    <li>Remplir les champs ci-dessous en prenant bien soin de mettre les numéro de téléphone au format <b>+33 (0)X.XX.XX.XX.XX</b>.</li>
    <li>Cliquer sur "Générer".</li>
    <li>Cliquer sur "Télécharger" pour télécharger le fichier <b>signature-lavoixdelenfant.html</b> qui contient la signature.</li>
    <li>Ouvrir le fichier sous un navigateur, copier l'ensemble de la signature et la coller dans l'interface <b>Gmail ou hotmail</b>.</li>
</ol>
</p>
<p> <b style=" color: #FFAF00">Formulaire</b> </p>
<form method="post">
    <label for="prenom">Prénom</label>
    <input name="prenom" id="prenom" type="text" value="<?php if(isset($_POST['prenom'])):echo $_POST['prenom'];  endif; ?>" /><br /><br />
    <label for="nom">Nom</label>
    <input name="nom" id="nom" type="text" value="<?php if(isset($_POST['nom'])): echo $_POST['nom']; endif; ?>" /><br /><br />
    <label for="poste">Poste</label>
    <input name="poste" id="poste" type="text" value="<?php if(isset($_POST['poste'])): echo $_POST['poste']; endif; ?>" /><br /><br />
    <label for="email">Email</label>
    <input name="email" id="email" type="text" value="<?php if(isset($_POST['email'])): echo $_POST['email']; endif; ?>" /><br /><br />
    <label for="phone">Phone (format : "+33 (0)x xx xx xx xx")</label>
    <input name="phone" id="phone" type="text" value="<?php if(isset($_POST['phone'])): echo $_POST['phone']; endif; ?>" /><br /><br />
    <label for="phonedirect">Ligne directe (format : "+33 (0)x xx xx xx xx")</label>
    <input name="phonedirect" id="phonedirect" type="text" value="<?php if(isset($_POST['phonedirect'])): echo $_POST['phone']; endif; ?>" /><br /><br />
    <label for="fax">Fax (format : "+33 (0)x xx xx xx xx")</label>
    <input name="fax" id="fax" type="text" value="<?php if(isset($_POST['fax'])): echo $_POST['fax']; endif; ?>" /><br /><br />
    <input style="background-color: #5A6CEA; border-radius: 10px; border: none; height: 30px; width: 200px; color:white; font-weight: bold; margin: auto;" name="submit" type="submit" value="Générer"/>
    <?php
    if (isset($_POST['submit']))
    {
        //$contact = $_POST['email'];
        //$contact .= (!empty($_POST['phone']))?' | ':'';
        //$contact .= $_POST['phone'];
        $_POST['nom'] = mb_strtoupper($_POST['nom']);
        $htmlSig = <<<END
<table style="font-family: 'Hind', 'Arial', sans-serif; padding: 10px;font-size: 12px; min-width: 405px; line-height: 120%;">
    <tr>
        <td style="vertical-align: middle; padding: 0; width: 50px"><img style="width: 50px; height: auto"
                                                                         src="img/lvde.png"/>
        </td>
        <td style="padding-left: 10px"><p style="color: rgb(71, 71, 71);font-size: 13px; font-weight: bold; padding: 0; margin: 0;">
            <strong>{$_POST['prenom']} {$_POST['nom']}</strong></p>
            <p style="color: #FFAF00;font-size: 13px; font-weight: bold; padding: 0; margin: 0;"> {$_POST['poste']}</p>
            <p style="padding: 0; margin: 0;font-size: 11px; color: #4D4D4D">Email : <span style="color: #5A6CEA;">{$_POST['email']}</span> </p>
            <p style="padding: 0; margin: 0;font-size: 11px; color: #4D4D4D">Fixe : <span style="color: #5A6CEA;">{$_POST['phone']}</span> &nbsp;•&nbsp;
                Fax : <span style="color: #5A6CEA;">{$_POST['fax']}</span></p>
            <p style="padding: 0; margin: 0;font-size: 11px; color: #4D4D4D">Ligne directe : <span style="color: #5A6CEA;">{$_POST['phonedirect']}</span> </p>
        </td>
    </tr>
    <tr>
        <td colspan="2" style="padding-top: 7px">
            <p style="padding: 0; margin: 0; font-weight: bold; color: #F63439; font-size: 13px;">
            <strong>La Voix De L'Enfant</strong></p>
            <p style="padding: 0; margin: 0;font-size: 11px; color: #4D4D4D;">33-35 rue de la Brèche aux Loups - 75012 PARIS</p>

            <p style="padding: 0; margin: 0; color: #5A6CEA;"><a style="text-decoration: none; color: #5A6CEA;" href="https://www.lavoixdelenfant.org">www.lavoixdelenfant.org</a><br>
                <a style="text-decoration: none;" href="https://twitter.com/lavoixdelenfant?lang=fr">
                <img style="height:20px; width:auto; padding-left:2px; padding-top: 2px" src="img/twitter.png"/>
                </a>&nbsp;
                <a style="text-decoration: none" href="https://www.facebook.com/synerghetic.je">
                <img style="height:20px; width:auto; padding-left:2px; padding-top: 2px" src="img/fb.png"/></a>
                <a style="text-decoration: none" href="https://instagram.com/lavoixdelenfant/">
                <img style="height:20px; width:auto; padding-left:2px; padding-top: 2px" src="img/insta.png"/></a>
            </p>
        </td>
    </tr>
</table>

END;
        echo $htmlSig;
        echo '<input name="signature" style="background:#5A6CEA;" type="hidden" value="'.urlencode($htmlSig).'"/>';
        echo '<input style="background-color: #FFAF00; border-radius: 10px; border: none; height: 30px; width: 200px; color:white; font-weight: bold; margin: auto;" name="submitDl" type="submit" value="Télécharger"/>';
    }
    ?>
</form>
</body>
</html>
