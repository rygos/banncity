<?php

/*
 * This file is part of Hifone.
 *
 * (c) until 2016-08-11 Hifone.com <hifone@hifone.com>
 * (c) changes made after 2016-08-11 banncity.de <broxxer@broxxer.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return  [
  'reply' =>  [
    'store' =>  [
      'awesome' => 'Super!',
      'success' => 'Deine Antwort wurde gespeichert.',
    ],
    'destroy' =>  [
      'awesome' => 'Sehr gut.',
      'success' => 'Deine Antwort wurde gelöscht.',
    ],
  ],
  'notification' =>  [
    'clean' =>  [
      'awesome' => 'Super!',
      'success' => 'Deine Benachrichtigungen wurden erfolgreich gelöscht.',
    ],
  ],
  'pm' =>  [
    'store' =>  [
      'recipient_error' => 'Der Empfänger existiert nicht. Bitte versuche es erneut.',
      'awesome' => 'Super!',
      'success' => 'Deine Nachricht wurde erfolgreich gesendet.',
    ],
  ],
  'thread' =>  [
    'create' =>  [
      'add' => 'Thread erstellen',
    ],
    'store' =>  [
      'awesome' => 'Super!',
      'success' => 'Der Thread wurde erfolgreich erstellt.',
    ],
    'append' =>  [
      'awesome' => 'Super.',
      'success' => 'Die Bemerkung wurde erfolgreich hinzugefügt.',
    ],
    'update' =>  [
      'awesome' => 'Erfolg!',
      'success' => 'Der Thread wurde erfolgreich aktualisiert.',
    ],
    'recommend' =>  [
      'awesome' => 'Sehr schön.',
      'success' => 'Der Thread wurde erfolgreich Vorgeschlagen.',
    ],
    'destroy' =>  [
      'awesome' => 'Hervorragend.',
      'success' => 'Der Thread wurde erfolgreich gelöscht.',
    ],
  ],
  'upload' =>  [
    'uploadimage' =>  [
      'upload_error' => 'Das Bild konnte nicht hochgeladen werden.',
    ],
  ],
  'user' =>  [
    'update' =>  [
      'awesome' => 'Sehr fein!',
      'success' => 'Das Userprofil wurde erfolgreich aktualisiert.',
    ],
    'unbind' =>  [
      'unbound_success' => 'Dein Account wurde erfolgreich vom Drittanbieter entbunden.',
    ],
    'avatarupdate' =>  [
      'avatar_upload_success' => 'Dein Avatar wurde erfolgreich hochgeladen.',
    ],
  ],
  'home' =>  [
    'feed' =>  [
      'feed' => 'Banncity Newsfeed',
    ],
  ],
  'install' =>  [
    'title' => 'Banncity Installation',
    'role_founder' => 'Gründer',
    'role_admin' => 'Administrator',
  ],
  'auth' =>  [
    'auth' =>  [
      'getlogin' =>  [
        'login' => 'Anmeldung',
      ],
      'postlogin' =>  [
        'failure' => 'Die Anmeldung ist fehlgeschlagen. Versuche es erneut.',
        'awesome' => 'Toll!',
        'success' => 'Du hast dich erfolgreich Angemeldet.',
        'invalid' => 'Der Benutzername oder dein Passwort sind fehlerhaft.',
      ],
      'getregister' =>  [
        'login' => 'Anmeldung',
      ],
      'postregister' =>  [
        'whoops' => 'Ups...',
        'failure' => 'Dein Account konnte nicht erstellt werden.',
        'captchafailure' => 'Du hast das Captcha falsch eingegeben.',
      ],
      'callback' =>  [
        'invalidstate' => 'Die Verbindung zum Drittanbieter konnte leider nicht hergestellt werden.',
        'awesome' => 'Super!',
        'success' => 'Du wurdest erfolgreich mit :provider verbunden.',
      ],
    ],
  ],
];
