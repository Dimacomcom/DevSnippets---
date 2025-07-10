function loginUser($username, $password) {
  $db = new PDO('mysql:host=localhost;dbname=app', 'user', 'pass');
  $stmt = $db->prepare("SELECT * FROM users WHERE username = ?");
  $stmt->execute([$username]);
  $user = $stmt->fetch();
  
  if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user_id'] = $user['id'];
    return true;
  }
  return false;
}
