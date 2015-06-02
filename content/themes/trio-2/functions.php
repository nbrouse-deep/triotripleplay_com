<?php

/**
* Ban/Limit Email Domains for Gravity Form Email Fields
* http://gravitywiz.com/2012/11/11/banlimit-email-domains-for-gravity-form-email-fields/
*/
class GWEmailDomainControl {
    
    private $_args;
    
    function __construct($args) {
        
        $this->_args = wp_parse_args($args, array(
            'form_id' => false,
            'field_id' => false,
            'domains' => false,
            'validation_message' => __('Sorry, <strong>%s</strong> email accounts are not eligible for this form.'),
            'mode' => 'ban' // also accepts "limit"
            ));
        
        // convert field ID to an array for consistency, it can be passed as an array or a single ID
        if($this->_args['field_id'] && !is_array($this->_args['field_id']))
            $this->_args['field_id'] = array($this->_args['field_id']);
        
        $form_filter = $this->_args['form_id'] ? "_{$this->_args['form_id']}" : '';
        
        add_filter("gform_validation{$form_filter}", array($this, 'validate'));
        
    }
    
    function validate($validation_result) {
        
        $form = $validation_result['form'];
        
        foreach($form['fields'] as &$field) {
            
            // if this is not an email field, skip
            if(RGFormsModel::get_input_type($field) != 'email')
                continue;
                
            // if field ID was passed and current field is not in that array, skip
            if($this->_args['field_id'] && !in_array($field['id'], $this->_args['field_id']))
                continue;
            
            $domain = $this->get_email_domain($field);
            
            // if domain is valid OR if the email field is empty, skip
            if($this->is_domain_valid($domain) || empty($domain))
                continue;
            
            $validation_result['is_valid'] = false;
            $field['failed_validation'] = true;
            $field['validation_message'] = sprintf($this->_args['validation_message'], $domain);
            
        }
        
        $validation_result['form'] = $form;
        return $validation_result;
    }
        
    function get_email_domain($field){
        $email = explode('@', rgpost("input_{$field['id']}"));
        return rgar($email, 1);
    }
    
    function is_domain_valid($domain) {
        if($this->_args['mode'] == 'ban') {
            return !in_array($domain, $this->_args['domains']);
        } 
        else {
            return in_array($domain, $this->_args['domains']);
        }
    }
    
}

new GWEmailDomainControl(array(
    'form_id' => 9,
    'field_id' => 1,
    'domains' => array('mail.ru', 'yandex.ru', 'list.ru'),
    'validation_message' => __(''),
    'mode' => 'ban'
    ));

new GWEmailDomainControl(array(
    'form_id' => 8,
    'field_id' => 5,
    'domains' => array('mail.ru', 'yandex.ru', 'list.ru'),
    'validation_message' => __(''),
    'mode' => 'ban'
    ));

new GWEmailDomainControl(array(
    'form_id' => 12,
    'field_id' => 5,
    'domains' => array('mail.ru', 'yandex.ru', 'list.ru'),
    'validation_message' => __(''),
    'mode' => 'ban'
    ));

?>