<?php
/**
 * CodeIgniter Skeleton
 *
 * A ready-to-use CodeIgniter skeleton  with tons of new features
 * and a whole new concept of hooks (actions and filters) as well
 * as a ready-to-use and application-free theme and plugins system.
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2018, Kader Bouyakoub <bkader[at]mail[dot]com>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package 	CodeIgniter
 * @author 		Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright	Copyright (c) 2018, Kader Bouyakoub <bkader[at]mail[dot]com>
 * @license 	http://opensource.org/licenses/MIT	MIT License
 * @link 		https://goo.gl/wGXHO9
 * @since 		2.0.0
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User registration email.
 *
 * @package 	CodeIgniter
 * @subpackage 	Skeleton
 * @category 	Views
 * @author 		Kader Bouyakoub <bkader[at]mail[dot]com>
 * @link 		https://goo.gl/wGXHO9
 * @copyright 	Copyright (c) 2018, Kader Bouyakoub (https://goo.gl/wGXHO9)
 * @since 		2.0.0
 * @version 	2.0.0
 */

/**
 * English version (Required).
 * @since 	2.0.0
 */
$messages['english'] = <<<EOT
Hello {name},

You are receiving this email because we received a password reset request for your account on {site_anchor}.

Click on the following link or copy-paste it in your browser if you wish to proceed:
{link}

If you did not request a password reset, no further action is required.

This action was requested from this IP address: {ip_link}.

Kind regards,
-- {site_name} Team.
EOT;

// ------------------------------------------------------------------------

/**
 * French version.
 * @since 	2.0.0
 */
$messages['french'] = <<<EOT
Salut {name},

Vous recevez cet e-mail, car nous avons reçu une demande de réinitialisation de mot de passe pour votre compte sur {site_anchor}.

Cliquez sur le lien suivant ou copiez-collez-le dans votre navigateur si vous souhaitez continuer:
{link}

Si vous n'avez pas demandé la réinitialisation du mot de passe, aucune autre action n'est requise.

Cette action a été demandée à partir de cette adresse IP: {ip_link}.

Amicalement,
-- Équipe {site_name}.
EOT;

// ------------------------------------------------------------------------

/**
 * Arabic version.
 * @since 	2.0.0
 */
$messages['arabic'] = <<<EOT
مرحبًا {name}،

لقد تلقيت هذه الرسالة الإلكترونية لأننا تلقينا طلبًا لإعادة تعيين كلمة المرور لحسابك على {site_anchor}.

انقر فوق الرابط التالي أو قم بنسخه ولصقه في المستعرض الخاص بك إذا كنت ترغب في المتابعة:
{link}

إذا لم تطلب إعادة تعيين كلمة المرور، الرجاء تجاهل هذه الرسالة..

تم طلب هذا الإجراء من عنوان IP هذا: {ip_link}.

أطيب التحيات،
-- فريق {site_name}.
EOT;

// ------------------------------------------------------------------------

/**
 * We make sure to use the correct translation if found.
 * Otherwise, we fall-back to English.
 */
$lang    = langinfo('folder');
$message = isset($messages[$lang]) ? $messages[$lang] : $messages['english'];

/**
 * Filters the welcome email message.
 * @since 	2.0.0
 */
echo apply_filters('email_users_lost_password', $message, $lang);
