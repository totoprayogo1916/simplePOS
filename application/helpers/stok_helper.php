<?php

if (!function_exists('chek_session')) {
    function chek_session()
    {
        $CI = &get_instance();
        if ($CI->session->status_login != 'oke') {
            redirect('auth/login');
        }
    }
}

if (!function_exists('chek_role')) {
    function chek_role()
    {
        $CI = &get_instance();

        if ($CI->session->status_login != 'oke') {
            return redirect('auth/login');
        } else if ($CI->session->akses != 1) {
            // show_error('Hanya administrator yang dapat mengakses halaman ini', 403, 'akses terlarang');
            return show_error('Hanya administrator yang dapat mengakses halaman ini', 403, 'akses terlarang');
        }
    }
}
