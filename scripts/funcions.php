<?php
function clearEntry($dada) {
    return htmlspecialchars(trim($dada));
}

function createCookie($nickname) {
    setcookie('user_session', $nickname, time() + (86400 * 30), "/");
}

function deleteCookie() {
    if (isset($_COOKIE['user_session'])) {
        setcookie('user_session', '', time() - 3600, "/");
        unset($_COOKIE['user_session']);
    }
}

function validateUser($nickname, $password) {
    $users = [
        'admin' => '1234',
        'user1' => '12345',
        'user2' => '123456',
    ];

    return isset($users[$nickname]) && $users[$nickname] === $password;
}
?>
