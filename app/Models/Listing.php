<?php

namespace App\Models;

class Listing {
    public static function all() {
        return [
            [
                'id' => 1,
                'title' => 'List One',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                 Nullam accumsan malesuada tempus. Pellentesque quis facilisis erat. Sed iaculis, 
                 diam aliquam molestie aliquam, odio orci euismod nulla, eget malesuada felis lectus et tortor.
                  Sed consequat felis a mi venenatis euismod. Duis quam metus, fringilla id velit et, pretium ultricies nunc.
                   Nam ut nisi suscipit, gravida ex et, pulvinar felis. Vestibulum a blandit dui.'
            ],
            [
                'id' => 2,
                'title' => 'List Two',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                 Nullam accumsan malesuada tempus. Pellentesque quis facilisis erat. Sed iaculis, 
                 diam aliquam molestie aliquam, odio orci euismod nulla, eget malesuada felis lectus et tortor.
                  Sed consequat felis a mi venenatis euismod. Duis quam metus, fringilla id velit et, pretium ultricies nunc.
                   Nam ut nisi suscipit, gravida ex et, pulvinar felis. Vestibulum a blandit dui.'
            ],
        ];
    }

    //single listing
    public static function find($id) {
        $listing = self::all();
        foreach($listing as $list) {
            if($list['id'] == $id) {
                return $list;
            }
        }
    }
}