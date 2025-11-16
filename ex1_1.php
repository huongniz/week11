<?php
header('Content-Type: text/plain');

$cookieName = "username";
$dynamicUserValue = "HuongLy_". rand(1000, 9999);
$expirationTime = time() + 3600; 
$success = setcookie($cookieName, $dynamicUserValue, $expirationTime);
if ($success) {
    echo "Cookie '{$cookieName}' has been set.\n";
    echo "Value: {$dynamicUserValue}\n";
    echo "Expires: " . date("Y-m-d H:i:s", $expirationTime) . "\n";
} else {
    echo "Failed to set cookie. Headers may have already been sent.";
}
?>