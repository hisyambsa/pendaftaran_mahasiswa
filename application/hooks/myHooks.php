<?php
// $hook['post_controller'] = function () {
//     $dataHeader = array(
//         'judul' => 'AUTH LOGIN',
//     );
//     $this->load->view('inc/footer', $dataHeader, TRUE);
// };

function showHeader()
{
    $CI = &get_instance();
    $dataHeader = array(
        'judul' => 'Pendaftaran',
    );
    $CI->load->view('inc/header', $dataHeader);
}
function showFooter()
{
    $CI = &get_instance();
    $CI->load->view('inc/footer');
}
