<?php
$errors = [];

if(isset($_SESSION['message'])) {
  $message = $_SESSION['message'];
  unset($_SESSION['message']);
}

if(isset($exception)) {
  $message = [
    'type' => 'error',
    'message' => $exception->getMessage()
  ];

  if(get_class($exception) === 'ValidationException') {
    $errors = $exception->getErrors();
  }
}

$alertType = '';

if(isset($message) && $message['type'] === 'error') {
  $alertType = 'danger';
} else {
  $alertType = 'info';
}
?>

<?php if(isset($message)): ?>
  <div class="my-3 alert alert-<?= $alertType ?>" role="alert">
    <?= $message['message']; ?>
  </div>
<?php endif ?>