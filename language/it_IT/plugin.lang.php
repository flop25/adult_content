<?php
$lang['ac_title_menu'] = 'Attenzione';
$lang['ac_title_menu_statut'] = 'Informazione';
$lang['ac_text'] = 'Questa galleria contiene delle foto destinate ad un pubblico adulto.';
$lang['ac_lien'] = 'togliere questa protezione';
$lang['ac_identif'] = 'o identificarsi';
$lang['ac_fermer'] = 'o chiudere';

$lang['ac_title_fermer'] = 'contenuto filtrato';

$lang['ac_user_text_18'] = 'Hai più di 18 anni';
$lang['ac_user_text_16'] = 'Hai 16 o 17 anni';
$lang['ac_logout'] = 'oppure clicca qui';

$lang['ac_user_no'] = 'non hai desiderato attivare questo tipo di contenuti';
$lang['ac_user_no_s'] = 'Filtro attivato';
$lang['ac_statut'] = 'Il tuo stato :';

$lang['ac_button_activ_18'] = 'Attiva il contenuto pornografico';
$lang['ac_button_activ_16'] = 'Attiva il contenuto erotico';
$lang['ac_text_charte'] = 'Stai entrando in un sito nel quale i contenuti visivi sono a carattere erotico e/o pornografico sono destinati ad un pubblico adulto. Questo sito è di fatto destinato ad un pubblico maggiorenne. Il presente sito non può essere ritenuto responsabile dell\'uso che verrà fatto dei contenuti e servizi del suddetto sito. Accettando di entrare in questo sito destinato ad un pubblico adulto, assumi di fatto tutte le conseguenze legate alla sua consultazione. </p>
<p>Se Io violo uno di questi impegni o in caso di falsa dichiarazione, posso essere in violazione con le leggi della mia nazione, e <B>mi assumo l\'intera reponsabilità delle mie azioni</B>. Dichiaro di essere stato correttamente informato dei contenuti proposti e rinuncio a tutti i procedimenti nei confronti del provider e degli amministratori di questo sito. Ho letto attentamente i paragrafi qui sopra e firmo elettronicamente il mio accordo, con ciò che precede, cliccando sul pulsante corrispondente alla mia età.';
$lang['ac_text_activ_18'] = '  <u>... e garantisco sul mio onore che </u>: <br>
- <B>Io ho più di 18 anni e che sono maggiorenne </B> secondo le leggi in vigore nel mio paese. <br>
- Sono al corrente che il sito propone delle foto a carattere pornografico e/o erotico. <br>
- Le leggi della mia nazione mi autorizzano ad accedere a questo sito.';
$lang['ac_text_activ_16'] = '<u> ... e garantisco sul mio onore che </u>: <br>
        - <B>Io ho 16 o 17 anni.</B> <br>
- Sono al corrente che il sito propone delle foto a carattere pornografico ed erotico. <br>
- Le leggi del mio paese mi autorizzano ad accedere a questo sito.';
$lang['ac_retour'] = 'Non desidero attivare questo genere di contenuti e desidero ritornare alla pagina precedente';
$lang['ac_retour_b'] = 'Non desidero attivare questo genere di contenuti';
$lang['ac_retour_c'] = 'Desidero ritornare alla pagina precedente';

$lang['ac_charte_user_not'] = 'Prego seleziona la tua età!';
$lang['ac_charte_user_def'] = 'o altrimenti clicca qui';
$lang['ac_not_def'] = 'Questa operazione è fondamentale ma non vi sarà più richiesta in seguito';
$lang['ac_def'] = 'Vuoi cambiare il tuo stato?';

$lang['ad_c_menublock_for_guest'] = 'Permettere ai visitatori di selezionare la loro età?';
$lang['ad_c_send'] = 'Salva le modifiche';
$lang['ad_c_msg_admin_1'] = 'Configurazione del plugin aggiornata correttamente!';
$lang['ad_c_howitworks'] = 'Il principio del plugin è di aiutare nella gestione di contenuti per adulti (può essere adattato per i contenuti violenti). Per fare questo, il plugin gestisce i visitatori e/o gli utenti come desideri secondo la definizione dei parametri del plugin.<br />
<br />
1 - Cosa devi fare in qualità di amministratore<br />
Devi inserire i tuoi contenuti per adulti in una galleria privata o in un album (il plug-in non gestisce i permessi di accesso a livello delle immagini, almeno non ancora). Quindi assegna la galleria o un album per i due gruppi di \'18\' e \'16-17\' (creato dal plugin) in questo modo:<br /><br />
- permetti al gruppo \'18\' di vedere i contenuti per adulti, riservato agli utenti sopra i 18 anni e il normale contenuto (ma generalmente il normale contenuto è spesso pubblico)<br /><br />
- permetti al gruppo \'16-17\' di vedere i contenuti per adulti, riservato agli utenti sopra i 16 anni e il normale contenuto (ma generalmente il normale contenuto è spesso pubblico)<br /><br />
- il gruppo \'nothing\' vedrà il contenuto normale (ma generalmente il normale contenuto è spesso pubblico)<br /><br />
2 - Funzionamento del plugin<br />
2.1 - La gestione degli utenti<br />
<br />
Se l\'utente è già registrato all\'attivazione del plugin, il plugin visualizza un blocco menu indicando che egli deve scegliere la sua età. Se clicca, la pagina contenente il messaggio \'contenuto per adulti\' apparirà per scegliere la sua età (charte_user.php). Se un visitatore si registra, viene reindirizzato alla pagina di scelta dell\'età (charte_user.php), direttamente dopo la registrazione.<br />
<br />
In pratica, il plugin mette gli utenti nei 3 gruppi, "+18", "16-17" e "nothing", a seconda dell\'età scelta. Un utente può in qualsiasi momento cambiare la sua età tramite il blocco menu di adult_content tranne che non sia disattivata tramite l\'amministrazione di Piwigo (attenzione, il link verso charte_user.php è sempre presente e funzionante) : se non vuoi permettere agli utenti di modificare l\'età allora questo plugin non serve a niente, utilizza direttamente l\'opzione standard di Piwigo di gestione dei gruppi ed utenti.<br />
<br />
2.2 - Gestione dei visitatori<br />
<br />
Se l\'opzione "Permetti ai visitatori non registrati di selezionare la loro età?" è attivata, allora il plugin gestirà anche i visitatori.<br />
Viene visualizzato un blocco menu, indicando che la galleria è "filtrata" e che se egli desidera disattivare il filtro, deve selezionare la sua età. Viene quindi reindirizzato verso la pagina di scelta dell\'età per i visitatori (chartre.php).<br />
<br />
In pratica, il visitatore viene registrato sotto uno dei 2 gruppi utente creati dal plugin : "18" per il gruppo "+18", e "16" per il gruppo "16-17". Questi due gruppi utente possono solo essere modificati dall\'amministratore. Puoi scegliere di cambiare il tema a seconda dell\'età visitatore tramite questi 2 gruppi utente.<br />
<br />
2.3 - Adattamenti possibili<br />
<br />
Potete adattare questo plugin per dei contenuti violenti, semplicemente cambiando i file di lingua del plugin (usate il plugin LocalFiles Editor).<br />
Il limite di età può anche esso essere cambiato in questo modo.<br />
';

$lang['ad_c_linktolang'] = 'Vai al file di lingua di Adult Content (necessità il LocalFiles Editor abilitato)';
$lang['ad_c_manage_both'] = 'contenuto erotico e pornografico';
$lang['ad_c_manage_eroticonly'] = 'solo contenuto erotico';
$lang['ad_c_manage_pornonly'] = 'solo contenuto pornografico';
$lang['ad_c_manage_what'] = 'Selezionare il tipo di contenuto che il plug-in dovrebbe gestire:';
$lang['No options. Just check "Allow unregistered users to select their age?" on the Adult Content administration page'] = 'Nessuna opzione. Basta controllare "Consenti agli utenti non registrati di selezionare la loro età?" nella pagina di amministrazione di Adult Content';
$lang['NEW! Check the Plugin PWG Stuffs to add the disclaimer on the index/album pages'] = 'Nuovo! Controlla il plugin PWG Stuffs per aggiungere l\'esclusione di responsabilità su indice/album pagine';
$lang['Disclaimer for the guest, with the ability to choose its age to unlock the adult content'] = 'Esclusione di responsabilità per gli ospiti, con la possibilità di scegliere la sua età';
?>