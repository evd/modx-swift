<?php
/**
 * @package swift
 */
/**
 * Handles adding SwiftMediaSource to Extension Packages
 *
 * @package swift
 * @subpackage build
 */

 if ($transport->xpdo) {
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
        case xPDOTransport::ACTION_UPGRADE:
            /** @var modX $modx */
            $modx =& $transport->xpdo;
            $modelPath = $modx->getOption('swift.core_path');
            if (empty($modelPath)) {
                $modelPath = '[[++core_path]]components/swift/model/';
            }
            if ($modx instanceof modX) {
                $modx->addExtensionPackage('swift',$modelPath);
            }
            break;
        case xPDOTransport::ACTION_UNINSTALL:
            $modx =& $transport->xpdo;
            $modelPath = $modx->getOption('swift.core_path',null,$modx->getOption('core_path').'components/swift/').'model/';
            if ($modx instanceof modX) {
                $modx->removeExtensionPackage('swift');
            }
            break;
    }
}
return true;