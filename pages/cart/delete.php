<?php

if(server('REQUEST_METHOD') == 'POST') {

    $id = post('id');
    delete_session([ "cart" , "{$id}" ]);
}