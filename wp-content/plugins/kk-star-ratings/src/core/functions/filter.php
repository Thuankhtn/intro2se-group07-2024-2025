<?php

/*
 * This file is part of bhittani/kk-star-ratings.
 *
 * (c) Kamal Khan <shout@bhittani.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Bhittani\StarRating\core\functions;

use function Bhittani\StarRating\functions\filter as base_filter;

if (! defined('KK_STAR_RATINGS')) {
    http_response_code(404);
    exit();
}


// alias for apply_filters
function filter(string $tag, ...$args)
{
    return base_filter('Bhittani\StarRating\core\filters', $tag, ...$args);
}
