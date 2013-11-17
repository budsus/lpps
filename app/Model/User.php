<?php
class User extends AppModel {
    var $name = "User";
    var $useTable = "users";
    var $validate = array(

    );

    function doLogin($data) {
        // SELECT * FROM users `User`
        // WHERE User.username = $data['username']
        //       AND User.password = md5($data['password']);
        pr($data);
        $datalogin = $this->find( 'first', array(
                'conditions' => array(
                    'username' => $data['Username'],
                    'password' => $data['Password'])
                )
            );


        if (empty($datalogin)) {
            return false;
        } else {
            return $datalogin;
        }
    }
}
?>