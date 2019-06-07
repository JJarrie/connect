<?php

/*
 * This file is part of the SensioLabs Connect package.
 *
 * (c) SensioLabs <contact@sensiolabs.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SensioLabs\Connect\Api\Entity;

@trigger_error(sprintf('The "%s" class is deprecated since Connect 4.3 and will be removed in 5.0.', Membership::class), E_USER_DEPRECATED);

/**
 * Membership
 *
 * @author     Marc Weistroff <marc.weistroff@sensiolabs.com>
 * @deprecated since Connect 4.3 and will be removed in 5.0.
 */
class Membership extends AbstractEntity
{
    public function configure()
    {
        $this->addProperty('club')
             ->addProperty('isPublic')
             ->addProperty('isOwner')
        ;
    }
}
