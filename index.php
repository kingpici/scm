$env = getenv("CI_ENV");
$env_default = "development";
if ($env === false) { $env = $env_default; }
define('ENVIRONMENT', $env)
