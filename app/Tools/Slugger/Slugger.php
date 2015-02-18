<?php namespace TGL\Tools\Slugger;


use TGL\Core\Repositories\EloquentRepository;

trait Slugger
{
    public  function sluggify($text)
    {
        // replace non letter or digits by -
        $text = preg_replace('~[^\\pL\d]+~u', '-', $text);
        // trim
        $text = trim($text, '-');
        // transliterate
        if (function_exists('iconv'))
        {
            $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        }
        // lowercase
        $text = strtolower($text);
        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);
        if (empty($text))
        {
            return 'n-a';
        }
        return $text;
    }

    /**
     * @param $string
     * @param EloquentRepository $repo
     * @return mixed|string
     */
    public function sluggifyUnique($string, EloquentRepository $repo)
    {
        $slug = $this->sluggify($string);

        $exist = $repo->getBySlug($slug);

        if( ! $exist) return $slug;

        return $slug.rand(1000,9999);
    }
}