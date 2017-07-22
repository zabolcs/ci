<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Facebook_ion_auth {

    public function __construct() {
        // get Codeigniter instance
        $this->CI = & get_instance();
        // Load config
        $this->CI->load->config('facebook_ion_auth', TRUE);
        $this->app_id = $this->CI->config->item('app_id', 'facebook_ion_auth');
        $this->app_secret = $this->CI->config->item('app_secret', 'facebook_ion_auth');
        $this->scope = $this->CI->config->item('scope', 'facebook_ion_auth');

        if ($this->CI->config->item('redirect_uri', 'facebook_ion_auth') === '') {
            $this->my_url = site_url('');
        } else {
            $this->my_url = $this->CI->config->item('redirect_uri', 'facebook_ion_auth');
        }
    }

    public function login() {
        // null at first
        $code = $this->CI->input->get('code');
        // if is not set go make a facebook connection
        if (!$code) {
            // create a unique state
            $this->CI->session->set_userdata('state', md5(uniqid(rand(), TRUE)));
            // redirect to facebook oauth page
            $url_to_redirect = "https://www.facebook.com/dialog/oauth?client_id="
                    . $this->app_id
                    . "&redirect_uri=" . urlencode($this->my_url)
                    . "&state=" . $this->CI->session->userdata('state') . '&scope=' . $this->scope;
            redirect($url_to_redirect);
        } else {
            // check if session state is equal to the returned state
            if ($this->CI->session->userdata('state') && ($this->CI->session->userdata('state') === $this->CI->input->get('state'))) {
                $token_url = "https://graph.facebook.com/oauth/access_token?"
                        . "client_id=" . $this->app_id . "&redirect_uri=" . urlencode($this->my_url)
                        . "&client_secret=" . $this->app_secret . "&code=" . $code;

                $response = file_get_contents($token_url);
                $params = json_decode($response, TRUE);

                $this->CI->session->set_userdata('access_token', $params['access_token']);
                $graph_url = "https://graph.facebook.com/me?access_token=" . $params['access_token'] . '&fields=name,id,email,picture.width(720).height(720),cover.width(1000).height(1000)';
                $user = json_decode(file_get_contents($graph_url));

                // check if this user is already registered
                if (!$this->CI->ion_auth_model->identity_check($user->email)) {
                    $name = explode(" ", $user->name);
                    $this->CI->config->load('ion_auth');
                    $this->CI->config->set_item('email_activation', false);
                    $additional_data = array('first_name' => $name[0],
                        'last_name' => $name[1],
                        'social_id' => $user->id,
                        'picture' => $user->picture->data->url,
                        'reg_type' => 'facebook');
                    $register = $this->CI->ion_auth->register($user->name, 'doesnothavepass123^&*%', $user->email, $additional_data);
                }

                $login = $this->CI->social_ion_auth->login($user->email/* , 'doesnothavepass123^&*%', 1 */);

                return true;
            } else {
                return false;
            }
        }
    }

}

/* End of file Facebook_ion_auth.php */
