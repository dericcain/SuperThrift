<?php

function get_map_data_stores()
{

    $data = array();
    
    $stores = get_posts('post_type=store&posts_per_page=-1');
    
    foreach ($stores as $store) {
        $metas = get_post_meta($store->ID);
        
        $name = $metas['store_name'][0];
       
        $address = $metas['store_address'][0];
        $zip = $metas['store_zipcode'][0];
        $city = $metas['store_city'][0];
        $state = $metas['store_state'][0];
        $email = $metas['store_email'][0];
        $phone = $metas['store_phone'][0];
        
        $monday = $metas['store_monday'][0];
        $tuesday = $metas['store_tuesday'][0];
        $wednesday = $metas['store_wednesday'][0];
        $thursday = $metas['store_thursday'][0];
        $friday = $metas['store_friday'][0];
        $saturday = $metas['store_saturday'][0];
        $sunday = $metas['store_sunday'][0];
        $note = isset($metas['store_note'][0]) ? $metas['store_note'][0] : '';
        $donate_link = $metas['donate_link'][0];

        $location = unserialize($metas['store_marker'][0]);
        
        $data[] = array(
            'id' => $store->ID,
            'lat' => $location['lat'],
            'lng' => $location['lng'],
            'address' => $address,
            'zip' => $zip,
            'city' => $city,
            'state' => $state,
            'email' => $email,
            'phone' => $phone,
            'name' => $name,
            'monday' => $monday,
            'tuesday' => $tuesday,
            'wednesday' => $wednesday,
            'thursday' => $thursday,
            'friday' => $friday,
            'saturday' => $saturday,
            'sunday' => $sunday,
            'note' => $note,
            'donate_link' => $donate_link,
        );

    }

    usort($data, function($a, $b) {
        return ($a['city'] < $b['city']) ? -1 : 1;
    });

    return $data;
}

function get_map_data_dropboxes()
{

    $data = array();
    
    $dropboxes = get_posts('post_type=dropbox&posts_per_page=-1');
    
    foreach ($dropboxes as $dropbox) {
        $metas = get_post_meta($dropbox->ID);
        
        $name = $metas['dropbox_name'][0];
       
        $address = isset($metas['dropbox_address'][0]) ? $metas['dropbox_address'][0] : '';
        $address2 = isset($metas['dropbox_address2'][0]) ? $metas['dropbox_address2'][0] : '';
        $zip = isset($metas['dropbox_zip'][0]) ? $metas['dropbox_zip'][0] : '';
        $city = isset($metas['dropbox_city'][0]) ? $metas['dropbox_city'][0] : '';
        $state = isset($metas['dropbox_state'][0]) ? $metas['dropbox_state'][0] : '';
        
        $location = unserialize($metas['dropbox_marker'][0]);
        
        $data[] = array(
            'lat' => $location['lat'],
            'lng' => $location['lng'],
            'address' => $address,
            'address2' => $address2,
            'zip' => $zip,
            'state' => $state,
            'name' => $name,
            'city' => $city,
        );

    }

    usort($data, function($a, $b) {
        return ($a['city'] < $b['city']) ? -1 : 1;
    });

    return $data;
}
