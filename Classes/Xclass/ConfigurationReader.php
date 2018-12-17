<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2015 Dmitry Dulepov (dmitry.dulepov@gmail.com)
 *  All rights reserved
 *
 *  You may not remove or change the name of the author above. See:
 *  http://www.gnu.org/licenses/gpl-faq.html#IWantCredit
 *
 *  This script is part of the Typo3 project. The Typo3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *  A copy is found in the textfile GPL.txt and important notices to the license
 *  from the author is found in LICENSE.txt distributed with these scripts.
 *
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/
namespace Pixelant\PxaRealurlFbclid\Xclass;

use \TYPO3\CMS\Backend\Utility\BackendUtility;
use \TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\MathUtility;

/**
 * This class extends DmitryDulepov\Realurl\Configuration\ConfigurationReader
 * extension to be able to add fbclid to ignoredGetParametersRegExp until new version is released.
 * see: https://github.com/dmitryd/typo3-realurl/issues/649
 *
 * @package Resultify\SubthemeT3kitAvfallsverige\Xclass
 * @author Dmitry Dulepov <dmitry.dulepov@gmail.com>
 */
class ConfigurationReader extends \DmitryDulepov\Realurl\Configuration\ConfigurationReader
{

    /**
     * Default values for some configuration options.
     *
     * @var array
     */
    protected $defaultValues = array(
        'cache/banUrlsRegExp' => '/tx_solr|tx_indexedsearch|tx_kesearch|(?:^|\?|&)q=/',
        'cache/ignoredGetParametersRegExp' => '/^(?:gclid|utm_(?:source|medium|campaign|term|content)|fbclid|pe_data|pk_campaign|pk_kwd|TSFE_ADMIN_PANEL.*)$/',
        'fileName/acceptHTMLsuffix' => true,
        'fileName/defaultToHTMLsuffixOnPrev' => false,
        'init/appendMissingSlash' => 'ifNotFile,redirect[301]',
        'init/defaultLanguageUid' => 0,
        'init/emptySegmentValue' => '',
        'pagePath/spaceCharacter' => '-', // undocumented & deprecated!
    );
}