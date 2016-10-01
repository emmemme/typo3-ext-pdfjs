<?php
namespace JonathanHeilmann\Pdfjs\ViewHelpers\PageRenderer;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016 Jonathan Heilmann <mail@jonathan-heilmann.de>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

use TYPO3\CMS\Core\Page\PageRenderer;

/**
 * Class AddCssFileViewHelper
 * @package JonathanHeilmann\Pdfjs\ViewHelpers\PageRenderer
 */
class AddCssFileViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper
{

    /**
     * @param string $file
     * @param string $rel
     * @param string $media
     * @param string $title
     * @param bool $compress
     * @param bool $forceOnTop
     * @param string $allWrap
     * @param bool $excludeFromConcatenation
     * @param string $splitChar
     *
     * @see PageRenderer::addJsFile
     * @see PageRenderer::addJsFooterFile
     */
    public function render(
        $file = '',
        $rel = 'stylesheet',
        $media = 'all',
        $title = '',
        $compress = true,
        $forceOnTop = false,
        $allWrap = '',
        $excludeFromConcatenation = false,
        $splitChar = '|')
    {
        if ($file === '')
            return;

        $file = $GLOBALS['TSFE']->tmpl->getFileName($file);
        /** @var PageRenderer $pageRenderer */
        $pageRenderer = $this->objectManager->get(PageRenderer::class);
        $pageRenderer->addCssFile($file, $rel, $media, $title, $compress, $forceOnTop, $allWrap, $excludeFromConcatenation, $splitChar);
    }

}