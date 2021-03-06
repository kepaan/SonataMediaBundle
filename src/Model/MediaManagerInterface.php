<?php

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\MediaBundle\Model;

use Sonata\CoreBundle\Model\ManagerInterface;
use Sonata\CoreBundle\Model\PageableManagerInterface;

/**
 * NEXT_MAJOR: remove this class.
 *
 * @deprecated Use Sonata\CoreBundle\Model\ManagerInterface instead
 */
interface MediaManagerInterface extends ManagerInterface, PageableManagerInterface
{
}
