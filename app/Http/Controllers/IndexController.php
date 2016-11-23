<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Arcanedev\SeoHelper\Entities\Title;
use Arcanedev\SeoHelper\Entities\Description;
use Arcanedev\SeoHelper\Entities\Keywords;
use Arcanedev\SeoHelper\Entities\OpenGraph\Graph;
use Arcanedev\SeoHelper\Entities\Twitter\Card;
use App\Models\Post;


class IndexController extends Controller
{
	public function index(Post $postModel)
	{
		$nameDefault = 'ALIINFO';
		$titleDefaul = 'ЧТО Я НАШЕЛ НА АЛИЭКСПРЕСС';
		$descriptionDefault = 'Что я нашел на алиэкспресс — это видеообзоры на самые интересные вещи с сайта Aliexpress! aliinfo';
		$keywordsDefault = 'aliinfo, алиинфо, алиэкспресс, aliexpress, обзоры товаров, китайский магазин, топ алиэкспресс, что я нашел на алиэкспресс';
		$urlDefault = 'http://aliinfo.ru';
		$imgDefault = '/public/client/img/social.jpg';
		
		$posts = $postModel->getPublishedPosts();
		$lastModified = $postModel->getLastModified();
		
		$title = new Title;	
		$description = new Description;
		$keywords = new Keywords;
		$openGraph = new Graph;
		$card = new Card;
		
		$title
			->set($titleDefaul)
			->setSeparator('|')
			->setSiteName($nameDefault);
		
		$description->set($descriptionDefault);
		
		$keywords->set($keywordsDefault);
		
		$openGraph
			->setType('website')
			->setTitle($titleDefaul)
			->setDescription($descriptionDefault)
			->setSiteName($nameDefault)
			->setUrl($urlDefault)
			->setImage($imgDefault);
		
		$card->setType('summary_large_image');
		$card->setSite('@aliinfo'); 
		$card->setTitle($titleDefaul);
		$card->setDescription($descriptionDefault);
		$card->addImage($imgDefault);
		
		return view('post.index', [
			'lastModified' => $lastModified,
			'posts' => $posts, 
			'title' => $title,
			'description' => $description,
			'keywords' => $keywords,
			'openGraph' => $openGraph,
			'card' => $card
		]);
	}
	
	public function show(Post $postModel, $id)
	{
		$nameDefault = 'ALIINFO';
		$urlDefault = 'http://aliinfo.ru';
		
		$post = $postModel->find($id);
		$lastModified = $postModel->getLastModified();
		
		$title = new Title;
		$description = new Description;
		$keywords = new Keywords;
		$openGraph = new Graph;
		$card = new Card;

		$title
			->set($post->seo_title)
			->setSeparator('|')
			->setSiteName($nameDefault);
		
		$description->set($post->seo_description);
		
		$keywords->set($post->seo_keywords);
		
		$openGraph
			->setType('website')
			->setTitle($post->seo_title)
			->setDescription($post->seo_description)
			->setSiteName($nameDefault)
			->setUrl($urlDefault)
			->setImage($post->photo);
		
		$card->setType('summary_large_image');
		$card->setSite('@aliinfo');
		$card->setTitle($post->seo_title);
		$card->setDescription($post->seo_description);
		$card->addImage($post->photo);
		
		return view('post.show', [
			'lastModified' => $lastModified,
			'post' => $post, 
			'title' => $title,
			'description' => $description,
			'keywords' => $keywords,
			'openGraph' => $openGraph,
			'card' => $card
		]);
	}
	
	public function register()
	{
		return redirect()->route('root');
	}
}