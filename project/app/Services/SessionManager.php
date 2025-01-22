<!-- auto_prepend_file -->
<!-- serialize() your object and unserialize() it afterwards. -->

SID
PHP_SESSION_DISABLED
PHP_SESSION_DISABLED
PHP_SESSION_NONE
PHP_SESSION_ACTIVE
session_destroy();

if(isset($_COOKIE[session_name()])){
    setcookie(session_name(),'',time() - 3600, '/');
}

$_SESSION[] = array();

session_destroy();

This is most likely to be an issue on Web sites that use AJAX heavily and have
multiple concurrent requests. The easiest way to deal with it is to call
session_write_close() as soon as any required changes to the session have
been made, preferably early in the script. Alternatively, a different session
backend that does support concurrency could be used.



There are two methods to propagate a session id:

Cookies
URL parameter


session.use_trans_sid

echo htmlspecialchars(SID);