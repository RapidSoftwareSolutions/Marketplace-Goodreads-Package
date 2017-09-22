<?php






$str = 'newborn baby child teenager young_adult adult adults_only mature_adult senior_adult 0-1_months 2-5_months 6-11_months 12-17_months 18-23_months 2-3_years 4-5_years 6-7_years 8-9_years 10-11_years 12-13_years 14-15_years 16-17_years 18-19_years 20-24_years 20-29_years 25-29_years 30-34_years 30-39_years 35-39_years 40-44_years 40-49_years 45-49_years 50-54_years 50-59_years 55-59_years 60-64_years 60-69_years 65-69_years 70-79_years 80-89_years 90_plus_years 100_over';

$part = explode(' ',$str);
foreach($part as $key => $value)
{
   $value = trim($value);
   $part[$key] = '"'.$value.'"';
}
echo implode(',',$part);
exit();















if (PHP_SAPI == 'cli-server') {
    // To help the built-in PHP dev server, check if the request was actually for
    // something which should probably be served as a static file
    $url  = parse_url($_SERVER['REQUEST_URI']);
    $file = __DIR__ . $url['path'];
    if (is_file($file)) {
        return false;
    }
}

require __DIR__ . '/../vendor/autoload.php';

session_start();

// Instantiate the app
$settings = require __DIR__ . '/../src/settings.php';
$app = new \Slim\App($settings);

// Register models
require __DIR__ . '/../src/Models/paginationClass.php';
require __DIR__ . '/../src/Models/normalizeJson.php';
require __DIR__ . '/../src/Models/checkRequest.php';
require __DIR__ . '/../src/Models/Params.php';
require __DIR__ . '/../src/Models/Metadata.php';

// Set up dependencies
require __DIR__ . '/../src/dependencies.php';

// Register middleware
require __DIR__ . '/../src/middleware.php';

// Register routes
require __DIR__ . '/../src/routes.php';

// Run app
$app->run();
