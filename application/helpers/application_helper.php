<?php
defined('BASEPATH') or exit('No direct script access allowed');

function load_view($viewName, $data = null)
{
    $CI = get_instance();

    $CI->load->view('templates/head', $data);
    $CI->load->view('templates/navigation', $data);
    $CI->load->view($viewName, $data);
    $CI->load->view('templates/footer', $data);
    $CI->load->view('templates/foot', $data);
}

function set_page_title($pageTitle)
{

    $CI = get_instance();

    $CI->config->set_item('page_title', $pageTitle);
}

function get_page_title()
{
    $CI = get_instance();

    return $CI->config->item('page_title');
}

function load_view_auth($viewName, $data = null)
{
    $CI = get_instance();

    $CI->load->view('templates/head', $data);
    $CI->load->view($viewName, $data);
    $CI->load->view('templates/foot', $data);
}

function is_logged_in()
{
    $ci = get_instance();

    if ($ci->session->userdata('email')) {
        return true;
    }
    return false;
}

function login_required()
{
    if (is_logged_in() == false) {
        redirect('auth/login');
    }
}

function load_view_report($viewName, $data = null)
{
    $CI = get_instance();

    $CI->load->view($viewName, $data);
   

}
