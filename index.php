<?php
require_once dirname(__DIR__) . '\generateur_json\components\header.php';
?>

<div class="container">
    <!-- Formulaire pour une nouvelle signature -->
    <div class="formBorder">
        <form id="addForm">
            <div class="">
                <input type="hidden" name="imgAgence" value="/generateur_signature/assets/img/Énumière-logotype.svg">

                <div class="marg">
                    <label class="utilisateur" for="prenom">Prenom :</label>
                    <input class="" type="text" name="prenom" id="prenom">
                    <label class="utilisateur" for="nom">Nom :</label>
                    <input class="" size="22" type="text" name="nom" id="nom">
                </div>
                <br>
                <div class="marg">
                    <label class="utilisateur" for="poste1">Poste 1 :</label>
                    <input class="" size="57" type="text" name="poste1" id="poste1">
                </div>
                <br>
                <div class="marg">
                    <label class="utilisateur" for="poste2">Poste 2 :</label>
                    <input class="" size="57" type="text" name="poste2" id="poste2">
                </div>
                <br>
                <div class="marg">
                    <label class="utilisateur" for="numero">Numéro :</label>
                    <input class="" type="tel" name="numero" id="numero">
                    <label class="utilisateur" for="mail">Email :</label>
                    <input class="" type="email" name="mail" id="mail">
                </div>
                <br>
                <div class="buttonGenerer">
                    <!-- Bouton pour générer la nouvelle signature -->
                    <button class="buttonGenerer" type="button" onclick="addData()">Générer la signature</button>
                    <!-- Fin du Bouton -->
                </div>
            </div>
        </form>
    </div>
    <!-- Fin du formulaire pour les nouvelles signatures -->

    <!-- Vue de la signature -->
    <table>
        <tr>
            <td style="padding: 15px; font-family: Arial;">
                <!-- Affichage du logo -->
                <a href="http://www.enumiere.com" target="_blank"><img src="https://i.goopics.net/c3xabf.jpg"
                        style="width: 150px; width: 9rem; text-decoration-line: none; text-decoration:none; background-color: white;"
                        alt="Logo Agence"></a>
                <!-- Fin logo -->
            </td>
            <td style="padding: 15px; font-family: Arial;">
                <!-- Séparation entre logo et contenu -->
                <span style="border-left: 1px solid #e85d1c; display: inline-block; height: 115px;"></span>
                <!-- Fin séparation -->
            </td>
            <td style="padding: 15px; font-family: Arial;">
                <!-- Information utilisateur -->
                <span id="userInfo"
                    style="color: #e85d1c; font-family: Arial; font-weight: bold; font-size: 20px;"></span><br>
                <div style="color: #065f60; font-family: Arial; font-weight: normal; margin: 8px 0px 8px 0px;">
                    <span id="userPoste1"></span><br>
                    <span id="userPoste2"></span>
                </div>
                <span style="color: #e85d1c; font-family: Arial; font-style: italic;">
                    <a id="userNumero" href="#"
                        style="text-decoration-line: none; text-decoration:none; color: #e85d1c;"></a> | <a
                        id="userMail" href="#"
                        style="text-decoration-line: none; text-decoration:none; color: #e85d1c;"></a><br>
                    <a href="http://www.enumiere.com" target="_blank"
                        style="text-decoration-line: none; text-decoration:none; color: #e85d1c;">www.enumiere.com</a>
                </span>
                <!-- Fin information -->
            </td>
        </tr>
    </table><br>
    <!-- Fin de la vue de la signature -->
    <hr>
    <!-- Signature refaite au plus proche de la maquette -->
    <table>
        <tr>
            <td>
                <!-- Affichage du logo -->
                <a href="http://www.enumiere.com" target="_blank"><img src="https://i.goopics.net/c3xabf.jpg"
                        style="width: 150px; width: 9rem; text-decoration-line: none; text-decoration:none; background-color: white;"
                        alt="Logo Agence"></a>
                <!-- Fin logo -->
            </td>
            <td>
                <!-- Séparation entre logo et contenu -->
                <span class="vertical-line"></span>
                <!-- Fin séparation -->
            </td>
            <td>
                <!-- Information utilisateur -->
                <span class="utilisateur">Christelle Pommier Fischer</span><br>
                <div class="poste">
                    Commissaire aux comptes<br>
                    Expert comptable - Associée
                </div>
                <span class="coordonnee">06 65 25 76 06 | c.pommier@enumiere.com<span><br>
                        www.enumiere.com</span>
                    <!-- Fin information -->
            </td>
        </tr>
    </table>
    <!-- Fin de la signature de la maquette -->

    <textarea id="jsonPreview" cols="50" rows="10" readonly></textarea>

    <div id="signaturesContainer"></div>
</div>

<?php
require_once dirname(__DIR__) . '\generateur_json\components\footer.php';
?>