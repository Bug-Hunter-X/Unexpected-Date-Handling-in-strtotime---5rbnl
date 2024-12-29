```php
$dateString = '2024-02-29';

try {
    $date = new DateTime($dateString);
    echo $date->format('Y-m-d');
} catch (Exception $e) {
    echo "Invalid date: " . $e->getMessage();
}
```