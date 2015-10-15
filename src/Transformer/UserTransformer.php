<?php
namespace App\Transformer;

use League\Fractal\TransformerAbstract;

/**
 * Concept transformer for working with User data
 */
class UserTransformer extends TransformerAbstract
{
    public function transform($data) 
    {
        return [
            'username' => $data['username'],
            'displayName' => $data['display_name'],
            'facebookUrl' => $data['facebook_url'],
        ];
    }
    
}
