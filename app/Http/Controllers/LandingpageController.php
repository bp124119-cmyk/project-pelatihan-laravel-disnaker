<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Info;
use App\Models\Review;
use App\Models\Service;
use App\Models\SosialMedia;
use App\Models\Staff;
use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    public function landingpage()
    {
        $reviews = Review::where('is_visible', true)->latest()->get();
        $articles = Article::with('category')
            ->where('is_published', true)
            ->latest()
            ->take(4)
            ->get();
        $services = Service::all();
        $infos = Info::first();
        $socialMedias = SosialMedia::all();

        return view('front-end.landingpage', [
            'title' => 'Landing Page-' . config('app.name'),
            'reviews' => $reviews,
            'articles' => $articles,
            'services' => $services,
            'infos' => $infos,
            'socialMedias' => $socialMedias,
        ]);
    }

    public function article()
    {
        $articles = Article::with('category')
            ->where('is_published', true)
            ->latest()
            ->get();
        $categories = ArticleCategory::all();
        $infos = Info::first();
        $socialMedias = SosialMedia::all();

        return view('front-end.article', [
            'title' => 'Article-' . config('app.name'),
            'articles' => $articles,
            'categories' => $categories,
            'infos' => $infos,
            'socialMedias' => $socialMedias,
        ]);
    }

    public function articleDetail(Article $article)
    {
        abort_unless($article->is_published, 404);

        $article->load('category');
        $relatedArticles = Article::with('category')
            ->where('is_published', true)
            ->where('id', '!=', $article->id)
            ->latest()
            ->take(3)
            ->get();
        $infos = Info::first();
        $socialMedias = SosialMedia::all();
        $articleTitle = $article->article_title ?? $article->articles_name ?? 'Detail Artikel';

        return view('front-end.article-detail', [
            'title' => $articleTitle . ' - ' . config('app.name'),
            'article' => $article,
            'relatedArticles' => $relatedArticles,
            'infos' => $infos,
            'socialMedias' => $socialMedias,
        ]);
    }

    public function aboutus()
    {
        $infos = Info::first();
        $staffs = Staff::all();
        $socialMedias = SosialMedia::all();

        return view('front-end.about', [
            'title' => 'About-' . config('app.name'),
            'infos' => $infos,
            'staffs' => $staffs,
            'socialMedias' => $socialMedias,
        ]);
    }

    public function service()
    {
        $services = Service::all();
        $infos = Info::first();
        $socialMedias = SosialMedia::all();

        return view('front-end.service', [
            'title' => 'Service-' . config('app.name'),
            'services' => $services,
            'infos' => $infos,
            'socialMedias' => $socialMedias,
        ]);
    }

    public function storeReview(Request $request)
    {
        $validated = $request->validate([
            'review_name' => 'required|string|max:255',
            'review_position' => 'required|string|max:255',
            'review_content' => 'required|string',
        ]);

        Review::create([
            'review_name' => $validated['review_name'],
            'review_position' => $validated['review_position'],
            'review_content' => $validated['review_content'],
            'is_visible' => false,
        ]);

        return back()->with('success', 'Terima kasih! Ulasan Anda berhasil dikirim dan menunggu persetujuan admin.');
    }
}