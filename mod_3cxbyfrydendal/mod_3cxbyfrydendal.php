<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_3cxbyfrydendal
 * @copyright   Copyright (C) 2026 FRDNDL by Frydendal
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, version 2 or later.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Language\Text;

$pbxUrl = trim((string) $params->get('phonesystem_url', ''));
$party  = trim((string) $params->get('party', ''));

// Accept only an HTTPS origin. Credentials, paths, query strings and fragments
// are deliberately rejected so the provider receives a predictable host URL.
$parsedPbx = $pbxUrl !== '' ? parse_url($pbxUrl) : false;
$isValidPbx = is_array($parsedPbx)
    && isset($parsedPbx['scheme'], $parsedPbx['host'])
    && strtolower($parsedPbx['scheme']) === 'https'
    && !isset($parsedPbx['user'])
    && !isset($parsedPbx['pass'])
    && !isset($parsedPbx['query'])
    && !isset($parsedPbx['fragment'])
    && (!isset($parsedPbx['path']) || $parsedPbx['path'] === '' || $parsedPbx['path'] === '/')
    && preg_match('/^[A-Za-z0-9.-]+$/', $parsedPbx['host']);

if (!$isValidPbx || $party === '') {
    if (Factory::getApplication()->getIdentity()->authorise('core.edit', 'com_modules')) {
        echo '<div class="alert alert-warning">'
            . htmlspecialchars(Text::_('MOD_3CXBYFRYDENDAL_MISSING_CONFIG'), ENT_QUOTES, 'UTF-8')
            . '</div>';
    }

    return;
}

$pbxUrl = rtrim($pbxUrl, '/');

// Use the official 3CX selector and script, matching the verified 1.0.3 module
// implementation. Joomla's document API handles script registration.
$document = Factory::getApplication()->getDocument();
$document->addScript(
    'https://downloads-global.3cx.com/downloads/livechatandtalk/v1/callus.js',
    [],
    ['defer' => true, 'id' => 'tcx-callus-js', 'charset' => 'utf-8']
);
?>
<call-us-selector
    phonesystem-url="<?php echo htmlspecialchars($pbxUrl, ENT_QUOTES, 'UTF-8'); ?>"
    party="<?php echo htmlspecialchars($party, ENT_QUOTES, 'UTF-8'); ?>"
></call-us-selector>
