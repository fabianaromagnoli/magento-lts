<?php

/**
 * OpenMage
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available at https://opensource.org/license/osl-3-0-php
 *
 * @category   OpenMage
 * @package    OpenMage_Tests
 * @copyright  Copyright (c) 2024 The OpenMage Contributors (https://www.openmage.org)
 * @license    https://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

declare(strict_types=1);

namespace OpenMage\Tests\Unit\Mage\Adminhtml\Block\System\Convert\Gui\Edit\Tab;

use Mage;
use Mage_Adminhtml_Block_System_Convert_Gui_Edit_Tab_View;
use PHPUnit\Framework\TestCase;

class ViewTest extends TestCase
{
    public Mage_Adminhtml_Block_System_Convert_Gui_Edit_Tab_View $subject;

    public function setUp(): void
    {
        Mage::app();
        // phpcs:ignore Ecg.Classes.ObjectInstantiation.DirectInstantiation
        $this->subject = new Mage_Adminhtml_Block_System_Convert_Gui_Edit_Tab_View();
    }

    /**
     * @return void
     *
     * @group Mage_Adminhtml
     */
//    public function testInitForm(): void
//    {
//        $this->assertInstanceOf(Mage_Adminhtml_Block_System_Convert_Gui_Edit_Tab_View::class, $this->subject->initForm());
//    }
}