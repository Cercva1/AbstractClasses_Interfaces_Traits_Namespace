<?php 

require 'Profile.php';

use App\Models\User\Profile;

$profile = new Profile();
echo $profile->getProfile();

?>