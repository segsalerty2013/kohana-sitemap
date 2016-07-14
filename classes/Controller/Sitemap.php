<?php

class Controller_Sitemap extends Controller{
    
    public function __construct(\Request $request, \Response $response) {
        parent::__construct($request, $response);
    }
    
    public function action_index(){
	$cache = Cache::instance();
        $sitemap = new Kohana_Sitemap();
        $sites_array = $cache->get('saved_sitemap');
        $now = new DateTime();
        if(is_array($sites_array)){
            foreach ($sites_array as $value) {
                $url = new Sitemap_URL;
                $url->set_loc($value)
                    ->set_last_mod($now->getTimestamp())
                    ->set_change_frequency('daily')
                    ->set_priority(1);
                $sitemap->add($url);
            }
        }
        // Output the sitemap.
        $this->response->headers("Content-Type", "text/xml");
        $this->response->body($sitemap->render());

    }
}