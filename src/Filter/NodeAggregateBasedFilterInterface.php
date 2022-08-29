<?php

/*
 * This file is part of the Neos.ContentRepository package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

declare(strict_types=1);

namespace Neos\ContentRepository\NodeMigration\Filter;

use Neos\ContentRepository\Core\Projection\ContentGraph\NodeAggregate;

/**
 * Filter instances are used to filter nodes to be worked on during a migration.
 * A call to the matches() method is used to determine that.
 *
 * Settings given to a filter will be passed to accordingly named setters.
 */
interface NodeAggregateBasedFilterInterface
{
    /**
     * If the given node satisfies the filter constraints, true is returned.
     */
    public function matches(NodeAggregate $nodeAggregate): bool;
}
