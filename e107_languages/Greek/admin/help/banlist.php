<?php
/*
+ ----------------------------------------------------------------------------+
|     e107 website system
|
|     Copyright (C) 2001-2002 Steve Dunstan (jalist@e107.org)
|     Copyright (C) 2008-2010 e107 Inc (e107.org)
|
|
|     Released under the terms and conditions of the
|     GNU General Public License (http://gnu.org).
|
|     $URL: ../e107_languages/Greek/admin/admin/Greek/admin/help/banlist.php $
|     $Revision: 1.0 $
|     $Id: banlist.php 1.0 2011/03/04 00:43:45Z e107gr.com $
|     $Author: e107gr.com $
+----------------------------------------------------------------------------+
*/

if (!defined('e107_INIT')) { exit; }

$caption = "Απαγόρευση των χρηστών από το site σας";
$text = "Μπορείτε να απαγορεύσετε τους χρήστες από το site σας σε αυτήν την οθόνη.<br />
Είτε εισάγετε πλήρη διεύθυνση IP ή να χρησιμοποιήσετε μια wildcard για να απαγορεύσει σειρά των διευθύνσεων IP. Μπορείτε επίσης να εισάγετε μια διεύθυνση email να σταματήσετε έναν χρήστη να κανει εγγραφή ως μέλος στο site σας.<br /><br />
<b>Απαγόρευση από τη διεύθυνση IP:</b><br />
Εισαγωγή της διεύθυνσης IP 123.123.123.123 η διεύθυνση αυτή θα σταματήσει τον χρήστη να επισκέπτεται την ιστοσελίδα σας.<br />
Καταχώριση διεύθυνσης IP με ένα ή περισσότερα μπαλαντέρ (wildcards) στο τμημα λήξης, όπως 123.123.123 .* ή 214,098 .*.*, θα σταματήσει οποιονδήποτε σε αυτό το εύρος των διευθύνσεων IP να σας επισκεφθούν την
τοποθεσία σας. (Σημειώστε ότι πρέπει να υπάρχουν ακριβώς τέσσερις ομάδες των ψηφίων είτε αστερίσκους)<br /><br />
<b>Απαγόρευση από τη διεύθυνση ηλεκτρονικού ταχυδρομείου</b><br />
Εισάγοντας την ηλεκτρονική διεύθυνση foo@bar.com θα σταματήσει οποιονδήποτε χρησιμοποιεί την διεύθυνση ηλεκτρονικού ταχυδρομείου να κανει εγγραφή ως μέλος στην ιστοσελίδα σας. <br />
Εισάγοντας την ηλεκτρονική διεύθυνση @ * bar.com θα σταματήσει οποιονδήποτε χρησιμοποιεί το email τομέα αυτο, να κανει εγγραφή ως μέλος στην ιστοσελίδα σας. <br /> <br />
<b> Απαγόρευση ανά όνομα χρήστη </ b> <br />
Αυτό γίνεται από τη σελίδα διαχείρισης χρηστών.";
$ns -> tablerender($caption, $text);
?>