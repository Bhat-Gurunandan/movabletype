<?php
# Movable Type (r) (C) 2001-2014 Six Apart, Ltd. All Rights Reserved.
# This code cannot be redistributed without permission from www.sixapart.com.
# For more information, consult your Movable Type license.
#
# $Id: function.mtblogname.php 4196 2009-09-04 07:46:50Z takayama $

function smarty_function_mtblogthemeid($args, &$ctx) {
    // status: complete
    // parameters: raw
    $blog = $ctx->stash('blog');
    $id = $blog->blog_theme_id;
    $raw = isset($args['raw']) ? $args['raw'] : 0;
    if (!$raw)
        $id = str_replace ('_', '-', $id);
    return $id;
}
?>
