BTSyncClient
============

PHP Client Implementation for BitTorrent SyncApp WebUI.
Tested against 1.0.116.

Example Usage
------

    $bt = new BTSyncClient( 'http://10.10.10.2:8888', 'admin', 'password' );
    $a = $bt->RequestToken();
    if ( $a ) {
        print_r( $bt->GetSyncFolders() );
    }