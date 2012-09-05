<?php
$lang['ac_title_menu'] = 'Attenzione';
$lang['ac_title_menu_statut'] ='Informatione';
$lang['ac_text'] = 'Questa galleria contiene delle foto destinate ad un pubblico adulto';
$lang['ac_lien'] = 'togliere la protezione';
$lang['ac_identif'] = 'o identificarsi';
$lang['ac_fermer'] = 'o non più visualizzare';

$lang['ac_title_fermer'] = 'contenuto filtrato';

$lang['ac_user_text_18'] = 'Avete più di 18 anni';
$lang['ac_user_text_16'] = 'Avete 16 o 17 anni';
$lang['ac_logout'] = 'oppure cliccare qui';

$lang['ac_user_no'] = 'non avete desiderato attivare questo tipo di contenuti';
$lang['ac_user_no_s'] = 'Filtro attivato';
$lang['ac_statut'] = 'Il tuo stato :';

$lang['ac_button_activ_18'] = 'Attivare il contenuto pornografico';
$lang['ac_button_activ_16'] = 'Attivare il contenuto erotico';
$lang['ac_text_charte'] = 'State entrando in un sito nel quale i contenuti a carattere erotico e/o pornografico sono destinati ad un pubblico adulto. Questo sito è di fatto destinato ad un pubblico maggiorenne. Il presente sito non può essere ritenuto responsabile dell\'uso che verrà fatto dei contenuti e servizi del suddetto sito. Accettando di entrare in questo sito destinato ad un pubblico adulto, assumete di fatto tutte le conseguenze legate alla sua consultazione. </p>
<p> In caso di violazioni di questi impegni o in caso di falsa dichiarazione, potrei essere in violazione con le leggi del mio paese, e <B>me ne assumo l\'intera reponsabilità</B>. Dichiaro di essere stato correttamente informato dei contenuti proposti e rinunciare a tutti i procedimenti nei confronti del provider e del/degli autore/i di questo sito. Ho letto attentamente i paragrafi qui sopra e firmo elettronicamente il mio accordo, con ciò che precede, cliccando sul pulsante corrispondente alla mia età.';
$lang['ac_text_activ_18'] = '  <u>... e garantisco sull\'onore che </u>: <br>
- <B>ho più di 18 anni e che sono maggiorenne </B> secondo le leggi in vigore nel mio paese. <br>
- sono al corrente che il sito propone delle foto a carattere pornografico e/o erotico. <br>
- Le leggi del mio paese mi autorizzano ad accedere a questo sito.';
$lang['ac_text_activ_16'] = '<u> ... e garantisco sull\'onore che </u>: <br>
        - <B>ho 16 o 17 anni.</B> <br>
- sono al corrente che il sito propone delle foto a carattere pornografico ed erotico. <br>
- Le leggi del mio paese mi autorizzano ad accedere a questo sito.';
$lang['ac_retour'] = 'Non desidero attivare questo genere di contenuti e desidero ritornare alla pagina precedente';
$lang['ac_retour_b'] = 'Non desidero attivare questo genere di contenuti';
$lang['ac_retour_c'] = 'Desitero ritornare alla pagina precedente';

$lang['ac_charte_user_not'] = 'Selezionare l\'età!';
$lang['ac_charte_user_def'] = 'cambiare il vostro statuto';
$lang['ac_not_def'] = 'Questa operazione è indispensabile ma, in seguito, non vi sarà più richiesta';
$lang['ac_def'] = 'Volete cambiare il tuo stato?';

$lang['ad_c_menublock_for_guest'] = 'Permettere ai visitatori di selezionare la loro età?';
$lang['ad_c_block_on_index'] = 'Visualizzare un flyer sulla home page ? (Necessita il plugin PWG Stuffs)';
$lang['ad_c_block_on_index_error_2'] = 'PWG Stuffs in una versione superiore à 2.1.l è necessario';
$lang['ad_c_block_on_index_error'] = 'funzione non disponibile attualmente';
$lang['ad_c_send'] = 'Registrare le modifiche';
$lang['ad_c_msg_admin_1'] = 'Configurazione del plugin aggiornata correttamente!';
$lang['ad_c_howitworks'] = 'Il principio del plugin è di aiutare nella gestione di contenuti per adulti (può essere adattato per i contenuti violenti). Per ciò, il plugin gestisce i visitatori e/o gli utenti (a scelta a seconda delle impostazioni del plugin).<br />
<br />
1 - Cosa dovete fare inquanto amministratore<br />
<br />
Dovete mettere gli album in questione come privati (il plugin non gestisce per il momento gli accessi al livello delle foto).<br />
Poi, attibuire questi album ai gruppi "+18" e "16-17" (creati dal plugin) in questo modo :<br />
 - autorizzare il gruppo "+18" ad accedere ai contenuti pornografici o altro, per chi a più di 18 anni E i contenuti erotici, per chi a più di 16 anni E ai contenuti detti normali (considerate che di solito, i contenuti normali sono già pubblici)<br />
 - autorizzare il gruppo "16-17" ad accedere ai contenuti erotici, per chi a più di 16 anni E ai contenuti detti normali (considerate che di solito, i contenuti normali sono già pubblici)<br />
 - autorizzare il gruppo "nothing" ad accedere ai contenuti detti normali (considerate che di solito, i contenuti normali sono già pubblici)<br />
<br />
Non avete niet\'altro da fare.<br />
<br />
2 - Funzionamento del plugin<br />
2.1 - Gestione degli utenti<br />
<br />
Se l\'utente è già registrato a l\'attivazione del plugin, il plugin visualizza un blocco menu indicanto che deve selezionare la sua età. Se clicca, la pagina contenente il messaggio d\'avvertimento e la scelta dell\'età apparirà (charte_user.php).<br />
Si un visitatore si registra, viene indirizzato direttamente sulla pagina di scelta dell\'età (charte_user.php), direttamente dopo la registrazione.<br />
<br />
In pratica, il plugin piazza gli utenti nei 3 gruppi, "+18", "16-17" et "nothing", a seconda della scelta dell\'età. Un utente può ad ogni momento cambiare la sua età via il blocco menu di adult_content solo se l\'ozione non è stata disattivata dall\'amministrtore di piwigo (attenzione, il link verso charte_user.php è sempre presente) : se non volete permettere agli utenti di modificare l\'età allora questo plugin non serve a niente, usate direttamente l\'opzione standard di Piwigo di gestione dei gruppi ed utenti.<br />
<br />
2.2 - Gestione dei visitatori<br />
<br />
Se l\'opzione "Permettere ai visitatori di selezionare la loro età?" è attivata, allora il plugin gestirà anche i visitatori.<br />
Viene visualizzato un bloco menu, indicando che la galleria è "filtrata" e che se desidera disattivare il filtro, deve selezionare la sua età. Viene allore rinidirizzato verso la pagina di scelta dell\'età dei visitatori (chartre.php).<br />
<br />
In pratica, il visitatore viene allora abbinato ad uno dei 2 utenti creati dal plugin : "18" per il gruppo "+18", e "16" per il gruppo "16-17". Questi due gruppi possono solo essere modificati dall\'amministratore. Potete allora cscegliere di cambiare il tema a seconda dell\'età visitatore via questi 2 conti utente.<br />
<br />
2.3 - Adattamenti possibili<br />
<br />
Potete adattare questo plugin per dei contenuti violenti, semplicemente cambiando i file lingua del plugin (usare il plugin LocalFiles Editor).<br />
Il limite di età può anche esso essere cambiato in questo modo.<br />
';

$lang['ad_c_linktolang'] = 'Vai al file della lingua di Adult Content (necessità il LocalFiles Editor abilitato)';
$lang['ad_c_manage_both'] = 'contenuto erotico e pornografico';
$lang['ad_c_manage_eroticonly'] = 'solo contenuto erotico';
$lang['ad_c_manage_pornonly'] = 'solo contenuto pornografico';
$lang['ad_c_manage_what'] = 'Selezionare il tipo di contenuto che il plug-in dovrebbe gestire:';
?>