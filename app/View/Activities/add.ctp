<h2>Tambah Kegiatan Baru</h2>
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
        // init the FB JS SDK
        FB.init({
            appId      : '146608792180384',                        // App ID from the app dashboard
            channelUrl : '', // Channel file for x-domain comms
            status     : true,                                 // Check Facebook Login status
            xfbml      : true                                  // Look for social plugins on the page
        });

        // Additional initialization code such as adding Event Listeners goes here
    };

    // Load the SDK asynchronously
    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    FB.getLoginStatus(function(response) {
        if (response.status === 'connected') {
            document.write('authorized!');
            var uid = response.authResponse.userID;
            var accessToken = response.authResponse.accessToken;
        } else if (response.status === 'not_authorized') {
            document.write('not authorized!');
        } else {
            document.write('not logged in!!');
        }
    });
</script>
<?php
    echo $this->Form->create('Activity', array('type' => 'file'));
    echo $this->Form->input('nama_kegiatan');
    echo $this->Form->input('penyelenggaraan');
    echo $this->Form->input('latar_belakang');
    echo $this->Form->input('tujuan');
    echo $this->Form->input('sasaran');
    echo $this->Form->input('jadwal_kegiatan');
    echo $this->Form->input('tempat');
    echo $this->Form->input('penanggung_jawab');
    echo $this->Form->input('biaya_pendaftaran');
    echo $this->Form->input('brosur', array('type' => 'file'));
    echo $this->Form->input('brosur_dir', array('type' => 'hidden'));
    echo $this->Form->end('Save');

?>