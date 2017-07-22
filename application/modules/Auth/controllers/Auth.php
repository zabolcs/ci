<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');


class Auth extends MY_Controller {

    public function index() {
        redirect('auth/login');
    }

    public function login() {
        if ($this->ion_auth->logged_in())
            redirect('auth/dashboard');

        $this->form_validation->set_rules('email', 'email', 'required|valid_email|trim');
        $this->form_validation->set_rules('password', 'password', 'required|trim');

        $this->form_validation->set_message('required', 'Please enter your %s');

        //  Validate form
        if ($this->form_validation->run()) {
            $remember = (bool) $this->input->post('remember');

            //  Check login
            if ($this->ion_auth->login($this->input->post('email'), $this->input->post('password'), $remember)) {
                //  Login was successful
                redirect('auth/dashboard', 'refresh');
            } else {
                //  Login was un-successful
                $this->session->set_flashdata('message', $this->ion_auth->errors());
                redirect('auth/login', 'refresh');
            }
        } else {
            $data['message'] = $this->session->flashdata('message');
            $this->theme->theme('semantic')->title('Login')->view('auth/login', $data);
        }
    }

    public function google() {
        if (!$this->ion_auth->logged_in()) {
            $this->google_ion_auth->login();

            if (!$this->ion_auth->logged_in()) {
                redirect('auth/login', 'refresh');
            } else {
                redirect('auth/dashboard', 'refresh');
            }
        } else {
            redirect('auth/dashboard', 'refresh');
        }
    }

    public function facebook() {
        if (!$this->ion_auth->logged_in()) {
            $this->facebook_ion_auth->login();

            if (!$this->ion_auth->logged_in()) {
                redirect('auth/login', 'refresh');
            } else {
                redirect('auth/dashboard', 'refresh');
            }
        } else {
            redirect('auth/dashboard', 'refresh');
        }
    }

    public function logout() {
        if ($this->ion_auth->logout())
            redirect('auth/login');
        else
            die("There was an error logging you out");
    }

}
