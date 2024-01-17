<?php
/**
 * CNTechnoLabs
 * Copyright (C) 2021 CNTechnoLabs 
 *
 * @category  CNTechnoLabs
 * @package   CNTechnoLabs_Core
 * @copyright Copyright (c) 2021 CNTechnoLabs
 * @license   http://opensource.org/licenses/gpl-3.0.html GNU General Public License,version 3 (GPL-3.0)
 * @author    CNTechnoLabs
 */

namespace CNTechnoLabs\Core\Plugin\Magento\Backend\Model\View\Result;

class Page
{
    public function beforeSetActiveMenu($subject, $menu)
    {
        if (strpos($menu, 'CNTechnoLabs_') !== false) {
            $menu = 'CNTechnoLabs_Core::cnt_core_root';
        }

        return [$menu];
    }
}
