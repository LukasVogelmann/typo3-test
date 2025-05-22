<?php

declare(strict_types=1);

/*
 * This file is part of the package nft/webapp.
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

namespace SchommerMedia\SmediaFrontend\ViewHelpers;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

class SvgViewHelper extends AbstractViewHelper
{
    public function initializeArguments(): void
    {
        $this->registerArgument('icon', 'string', 'The requested SVG\'s unique file-name without file-extension.', true);
    }

    public function render(): string
    {

        $icon = $this->arguments['icon'];
        $path = GeneralUtility::getFileAbsFileName('EXT:smedia_frontend/Resources/Public/Icons/' . $icon . '.svg');

        if (!file_exists($path)) {
            throw new \RuntimeException('The requested SVG icon: "' . $path . '" does not exist.', 1726517019);
        }

        $contents = file_get_contents($path);

        if ($contents === false) {
            return '';
        }

        return $contents;
    }
}
