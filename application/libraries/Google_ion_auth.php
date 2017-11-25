<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
set_include_path(APPPATH . 'third_party/' . PATH_SEPARATOR . get_include_path());

require_once 'Google/Google_Client.php';
require_once 'Google/contrib/Google_Oauth2Service.php';

class Google_ion_auth extends Google_Client {

    function __construct($params = array()) {
        parent::__construct();
        // get Codeigniter instance
        $this->CI = & get_instance();
        // Load config
        $this->CI->load->config('google_ion_auth', TRUE);
        $this->client_id = $this->CI->config->item('client_id', 'google_ion_auth');
        $this->client_secret = $this->CI->config->item('client_secret', 'google_ion_auth');
        $this->scope = $this->CI->config->item('scope', 'google_ion_auth');
        if ($this->CI->config->item('redirect_uri', 'google_ion_auth') === '') {
            $this->my_url = site_url('');
        } else {
            $this->my_url = site_url('') . $this->CI->config->item('redirect_uri', 'google_ion_auth');
        }
    }

    private function init_client() {
        $this->client = new Google_Client();
        $this->client->setApplicationName("Google UserInfo PHP Starter Application");
        $this->client->setClientId($this->client_id);
        $this->client->setClientSecret($this->client_secret);
        $this->client->setRedirectUri($this->my_url);
        $this->client->setApprovalPrompt('auto');
        $this->client->setAccessType('offline');
        $this->oauth2 = new Google_Oauth2Service($this->client);
    }

    public function login() {
        if (!$this->CI->ion_auth->logged_in()) {
            $code = $this->CI->input->get('code');
            $this->init_client();
            if (!$code) {
                $authUrl = $this->client->createAuthUrl();
                redirect($authUrl);
            } else {
                $this->client->authenticate($code);
                if ($this->client->getAccessToken()) {
                    $user = $this->oauth2->userinfo->get();

                    if ($user['verified_email']) {
                        if (!$this->CI->ion_auth_model->identity_check($user['email'])) {
                            $register = $this->CI->ion_auth->register($user['name'], 'doesnothavepass123^&*%', $user['email'], array('first_name' => $user['given_name'],
                                'last_name' => $user['family_name'],
                                'picture' => $user['picture'],
                                'social_id' => $user['id'],
                                'reg_type' => 'google'));
                            if (isset($register['id'])) {
                                $activation_code = $this->CI->ion_auth->user($register['id'])->row()->activation_code;
                                $this->CI->ion_auth_model->activate($register['id'], $activation_code);
                            }
                        }
                        $login = $this->CI->social_ion_auth->login($user['email'], 'doesnothavepass123^&*%', 1);
                        return $login;
                    }
                }
            }
        }
        return false;
    }

}
