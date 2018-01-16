<?php
/**
 * Configuration - Plugin: S3 Uploads
 * @url: https://github.com/humanmade/S3-Uploads
 */
if (!empty(getenv('AWS_S3_URL'))) {
    $env = parse_url(getenv('AWS_S3_URL'));

    error_log("hello Diego, this is a test!");
    error_log($env['host']);

    define('S3_UPLOADS_AUTOENABLE', true);
    define('S3_UPLOADS_KEY', $env['user']);
    define('S3_UPLOADS_SECRET', $env['pass']);
    //define('S3_UPLOADS_REGION', str_replace(array('s3-', '.amazonaws.com'), array('', ''), $env['host']));
    define('S3_UPLOADS_REGION', 'us-east-2');
    define('S3_UPLOADS_BUCKET', ltrim($env['path'], '/'));

    // error_log("hello Diego, this is a test!");

    // define('S3_UPLOADS_AUTOENABLE', true);
    // define('S3_UPLOADS_BUCKET', 'dgarciasblog');
    // define('S3_UPLOADS_KEY', 'AKIAJZXQRQLRHLELDJ2A');
    // define('S3_UPLOADS_SECRET', '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');
    // define('S3_UPLOADS_REGION', 'us-east-2');

    unset($env);
} else {
    define('S3_UPLOADS_AUTOENABLE', false);
}

// S3 Uploads - Cache will expire after 30 days
define('S3_UPLOADS_HTTP_CACHE_CONTROL', 30 * 24 * 60 * 60);
