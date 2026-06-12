<?php

return [
    'database' => [
        'host' => getenv('DB_HOST') ?: 'localhost',
        'port' => getenv('DB_PORT') ?: 3306,
        'name' => getenv('DB_NAME') ?: 'oauth_db',
        'user' => getenv('DB_USER') ?: 'root',
        'password' => getenv('DB_PASS') ?: '',
    ],
    'oauth2' => [
        'client_id' => getenv('OAUTH_CLIENT_ID'),
        'client_secret' => getenv('OAUTH_CLIENT_SECRET'),
        'redirect_uri' => getenv('OAUTH_REDIRECT_URI'),
    ],
    'jwt' => [
        'secret_key' => getenv('JWT_SECRET'),
        'algorithm' => getenv('JWT_ALGORITHM') ?: 'HS256',
        'expiry' => (int)getenv('JWT_EXPIRY') ?: 3600,
        'refresh_expiry' => (int)getenv('JWT_REFRESH_EXPIRY') ?: 604800,
    ],
    'cors' => [
        'allowed_origins' => explode(',', getenv('CORS_ALLOWED_ORIGINS')),
        'allowed_methods' => explode(',', getenv('CORS_ALLOWED_METHODS')),
        'allowed_headers' => explode(',', getenv('CORS_ALLOWED_HEADERS')),
    ],
    'app' => [
        'env' => getenv('APP_ENV') ?: 'production',
        'debug' => getenv('APP_DEBUG') === 'true',
        'name' => getenv('APP_NAME') ?: 'PHP OAuth2 API',
        'url' => getenv('API_BASE_URL') ?: 'http://localhost:8000',
    ]
];
