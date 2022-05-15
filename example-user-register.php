<?php 
namespace Drupal\ex93\form;
class exampleuserregister {
    public function getFormId()
    {
    return 'ex93_example_user_register';
    }
    public function buildForm(array $form, $form_state)
    {
       $form['hoten'] = [
           '#title'=>('Họ Tên'),
           '#type'=>'textfield',
           '#required'=>TRUE,
       ];
       $form['sdt'] = [
           '#title'=>('Số ĐT'),
           '#type'=>'numberfield',
           '#required'=>TRUE,
       ];
       $form['email'] = [
        '#title'=>('Email'),
        '#type'=>'textfield',
        '#required'=>TRUE,
        ];
        $form['dotuoi'] = [
            '#title'=>('Độ Tuổi'),
            '#type'=>'numberfield',
            '#required'=>TRUE,
        ];
        $form['dotuoi'] = [
            '#title'=>('10-20'),
            '#type'=>'numberfield',
            '#required'=>TRUE,
        ];
        $form['dotuoi'] = [
            '#title'=>('20-30'),
            '#type'=>'numberfield',
            '#required'=>TRUE,
        ];
        $form['dotuoi'] = [
            '#title'=>('30-50'),
            '#type'=>'numberfield',
            '#required'=>TRUE,
        ];
        $form['description'] = [
            '#title'=>('Mô Tả Bản Thân'),
            '#type'=>'textfield',
            '#required'=>TRUE,
        ];
        $form['submit'] = [
            '#type'=>'submit',
            '#value'=>('Submit'),
        ];
        return $form;
    }
    public function validateForm($form,$form_state)
    {
        $dotuoi = $form_state->getValue('10-20');
        $dotuoi = $form_state->getValue('20-30');
        $dotuoi = $form_state->getValue('30-50');
        $email = $form_state->getValue('Email');
        if($dotuoi < 18) {
            $form_state->setErrorByAge('10-20', ('You are not old enough'));
            $form_state->setErrorByAge('20-30', ('You are not old enough'));
            $form_state->setErrorByAge('30-50', ('You are not old enough'));
        }
        if($email != '@kyanon.digital')
        {
            $form_state->setErrorByEmail('Email', ('Your Email is not the right syntax'));
        }
    }
    public function submitForm($form, $form_state)
    {
        $form_state->setRedirect('<front>');
    }
}

?>