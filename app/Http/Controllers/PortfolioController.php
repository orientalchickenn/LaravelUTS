<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        $portfolio = Portfolio::all();
        return view('portfolio.index', compact(['portfolio']));
    }
    public function create(){
        return view('portfolio.create');
    }
    public function store(Request $request){
        Portfolio::create($request->except(['_token','submit']));
        return redirect('/portfolio');
    }
    public function edit($id){
        $portfolio = Portfolio::find($id);
        return view('portfolio.edit',compact(['portfolio']));
    }
    public function update($id, Request $request){
        $portfolio = Portfolio::find($id);
        $portfolio->update($request->except(['_token','submit']));
        return redirect('/portfolio');
    }
    public function destroy($id){
        $portfolio = Portfolio::find($id);
        $portfolio->delete();
        return redirect('/portfolio');
    }
}
