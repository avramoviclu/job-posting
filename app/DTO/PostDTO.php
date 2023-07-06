<?php

declare(strict_types=1);

namespace App\DTO;

class PostDTO
{
    public string $company_id;
    
    public string $content_id;
    
    public string $title;
    
    public bool $is_active;
    
    public string $published_at;
    
    public string $meta_title;
    
    public string $meta_description;
    
    public string $meta_keywords;
    
    public string $meta_canonical_url;
    
    public string $og_title;
    
    public string $og_description;
    
    public string $og_type;
    
    public string $og_image;
    
    public string $og_url;
    
    public string $twitter_title;
    
    public string $twitter_description;
    
    public string $twitter_image;
    
    public string $twitter_card;
    
    public string $email;

    public function __construct(
        string $company_id,
        string $content_id,
        string $title,
        bool $is_active,
        string $published_at,
        string $meta_title,
        string $meta_description,
        string $meta_keywords,
        string $meta_canonical_url,
        string $og_title,
        string $og_description,
        string $og_type,
        string $og_image,
        string $og_url,
        string $twitter_title,
        string $twitter_description,
        string $twitter_image,
        string $twitter_card,
        string $email
    ){
        $this->company_id = $company_id;

        $this->content_id = $content_id;

        $this->title = $title;

        $this->is_active = $is_active;

        $this->published_at = $published_at;

        $this->meta_title = $meta_title;

        $this->meta_description = $meta_description;

        $this->meta_keywords = $meta_keywords;

        $this->meta_canonical_url = $meta_canonical_url;

        $this->og_title = $og_title;

        $this->og_description = $og_description;

        $this->og_type = $og_type;

        $this->og_image = $og_image;

        $this->og_url = $og_url;

        $this->twitter_title = $twitter_title;

        $this->twitter_description = $twitter_description;

        $this->twitter_image = $twitter_image;

        $this->twitter_card = $twitter_card;

        $this->email = $email;
    }
}