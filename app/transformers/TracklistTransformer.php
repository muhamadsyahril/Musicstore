<?php
namespace Musicstore;

class TracklistTransformer extends \League\Fractal\TransformerAbstract
{
    public function transform(Track $track)
    {
        return [
            'id' => (int) $track->id,
            'title' => $track->title,
            'artist' => $track->artist->name
        ];
    }
}