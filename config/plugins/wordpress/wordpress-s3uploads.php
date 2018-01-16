<?php
/**
 * Configuration - Plugin: S3 Uploads
 * @url: https://github.com/humanmade/S3-Uploads
 */
if (!empty(getenv('AWS_S3_URL'))) {
    $env = parse_url(getenv('AWS_S3_URL'));

    error_log('Ojo Diego');
    error_log(getenv('AWS_S3_URL'));

    // define('S3_UPLOADS_AUTOENABLE', true);
    // define('S3_UPLOADS_KEY', $env['user']);
    // define('S3_UPLOADS_SECRET', $env['pass']);
    // define('S3_UPLOADS_REGION', str_replace(array('s3-', '.amazonaws.com'), array('', ''), $env['host']));
    // define('S3_UPLOADS_BUCKET', ltrim($env['path'], '/'));

    define('S3_UPLOADS_AUTOENABLE', true);
    define('S3_UPLOADS_BUCKET', 'dgarciasblogbucket');
    define('S3_UPLOADS_KEY', 'AKIAJLGCNZCERWD5T3ZA');
    define('S3_UPLOADS_SECRET', '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');
    define('S3_UPLOADS_REGION', 'us-east-2');

    unset($env);
} else {
    define('S3_UPLOADS_AUTOENABLE', false);
}

// S3 Uploads - Cache will expire after 30 days
define('S3_UPLOADS_HTTP_CACHE_CONTROL', 30 * 24 * 60 * 60);
