<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\User;
use Session;
use Auth;

class ArticlesController extends Controller
{
    function showArticles(){
    	$articles = Article::paginate(5);
    	//SELECT * FROM articles;

    	return view('articles.articles_list', 
    		compact('articles'));
    }

    function show($id) {
    	$article = Article::find($id);
    	//SELECT * FROM articles WHERE id = $id;

    	return view('articles.articles_show_single_item', 
    		compact('article'));
    }

    function create() {
    	return view('articles.articles_create');
    }

    function store(Request $request) {
  

        $new_article = new Article();
        $new_article->title = $request->title;
        $new_article->content = $request->content;
        $new_article->user_id = Auth::user()->id;
        $new_article->save();

        return redirect('articles');
    }

    function delete($id) {
        // echo "we are deleting this id: $id";

        $article_tbd = Article::find($id);
        $article_tbd->delete();
        Session::flash('delete_notif', "Article deleted");
        
        return redirect('articles');   
    }

    function edit_form($id) {
        $article_tbe = Article::find($id);

        return view('articles.articles_edit_form',
            compact('article_tbe'));
    }

    function edit($id, Request $request) {

        $article_tbe = Article::find($id);
        $article_tbe->title = $request->title;
        $article_tbe->content = $request->content;
        $article_tbe->save();

        Session::flash('edit_notif', "Article Edited Successfully");

        return redirect("articles/$id");
    }

    function showArticlesByAuthor($id){
        $articles = User::find($id)->get_articles;

        return view('articles.articles_list', compact('articles'));
    }
}
