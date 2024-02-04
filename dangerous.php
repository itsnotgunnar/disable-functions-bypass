<?php
dangerous_functions = array('pcntl_alarm','pcntl_fork','pcntl_waitpid','pcntl_wait','pcntl_wifexited','pcntl_wifstopped','pcntl_wifsignaled','pcntl_wifcontinued','pcntl_wexitstatus','pcntl_wtermsig','pcntl_wstopsig','pcntl_signal','pcntl_signal_get_handler','pcntl_signal_dispatch','pcntl_get_last_error','pcntl_strerror','pcntl_sigprocmask','pcntl_sigwaitinfo','pcntl_sigtimedwait','pcntl_exec','pcntl_getpriority','pcntl_setpriority','pcntl_async_signals','error_log','system','exec','shell_exec','popen','proc_open','passthru','link','symlink','syslog','ld','mail', 'mbstring', 'imap_open', 'imap_mail', 'libvert_connect', 'gnupg_init', 'imagick')

function check($code) {
    global $dangerous_functions;
    foreach($dangerous_functions as $function) {
        if (preg_match("/".function."i/", $code)) {
            return true;
        }
    }
    return false;
}