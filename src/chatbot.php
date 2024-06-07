<?php 
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // User is not logged in. Redirect them to the login page
    header("Location: login.php");
    exit;
}
use GeminiAPI\Client;
use GeminiAPI\Resources\Parts\TextPart;
use Dotenv\Dotenv;
require '../vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();
$API = $_ENV['GEMINI_API_KEY'];


$client = new Client($API);
$response = $client->geminiPro()->generateContent(
    new TextPart('Explain what Nuclear Physics is to a toddler'),
);

print $response->text();
?>