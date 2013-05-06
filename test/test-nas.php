<?php
    include '../src/BTSyncClient.php';

    $bt = new BTSyncClient( 'http://10.10.10.2:8888', 'admin', 'password' );
    $a = $bt->RequestToken();

    $s = $bt->GenerateSecret();

    var_dump( $bt->GetOsType() );
    var_dump( $bt->GetDir() );
    var_dump( $bt->GetVersion() );

    var_dump( $bt->GetSettings() );
    print_r( $bt->GetSyncFolders() );
    var_dump( $bt->CheckNewVersion() );
    var_dump( $bt->GetFolderPreferences('/volume1/Dump','RLNJS4ZFQAEUFXJ7RJ5YX73VV4GYUP3V1N') );
