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
  'login' =>  [
    'login' => 'Anmeldung',
    'oauth' =>  [
      'note' => 'Nach einem erfolgreichem Login, wird der ":provider" Account für ":name" mit dem Login verbunden.',
    ],
    'placeholder_user' => 'Benutzername oder E-Mail Adresse',
    'placeholder_pass' => 'Dein Passwort',
    'remember' => 'Anmeldung merken',
    'login_button' => 'Anmelden',
    'register' => 'Registrieren',
    'with_oauth' => 'Anmeldung mit Drittanbieter',
  ],
  'landing' =>  [
    'title' => 'Fremdanbieter Login',
    'welcome' => ', um deine Registrierung abschließen zu können, wähle aus folgenden Möglichkeiten:',
    'option' =>  [
      1 =>  [
        'title' => '1. Vorhandener Banncity Account',
        'button' => 'Login',
      ],
      2 =>  [
        'title' => '2. Neuer Banncity Account',
        'button' => 'Auto Registrierung',
      ],
    ],
    'note' => 'Folgende 2 Möglichekeiten verknüpfen deinen :provider Account :name mit einem Account auf Banncity.',
  ],
  'register' =>  [
    'oauth_alert' => ', wenn du schon einen Banncity Account erstellt hast, dann <a href="/auth/login" class="btn btn-success">logge</a> dich ein um die Verknüpfung abzuschließen.',
    'title' => 'Account Registrierung',
    'username' => 'Benutzername',
    'email' => 'E-Mail Adresse',
    'password' => 'Passwort',
    'password_confirmation' => 'Passwort bestätigen',
    'register_button' => 'Registrierung Abschließen',
    'cancel' => 'Abbrechen',
    'account_available' => 'Wenn du schon einen Account registriert hast, oder dich über einen Drittanbieter registrieren willst, klicke auf <a href="/auth/login">Login</a>.',
  ],
];
