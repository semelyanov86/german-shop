<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\Post as TCPost;

class Post extends TCPost
{
    public function getMoreImagesAttribute(){
        return json_decode(html_entity_decode($this->add_images, ENT_QUOTES), true);
    }
}
