@extends('layouts.default-layout')

@section('title', 'Titik Koma Blog')

@section('main_content')
<section class="header-section">
    <div class="image-container relative h-[65vh] w-[100%] rounded-xl drop-shadow-xl bg-cover bg-center"
    style="background-image: url('https://cdn.britannica.com/22/187222-050-07B17FB6/apples-on-a-tree-branch.jpg')">
        <div class="article-credentials absolute bottom-0 left-0 p-6 font-montserrat">
            <h3 class="article-category text-base">
                Fruits Category
            </h3>
            <h2 class="article-title text-4xl font-bold ">
                These are apples
            </h2>
            <h3 class="article-author text-base">
                <strong>By</strong> John Doe
            </h3>
        </div>
    </div>
</section>

<section class="newest-article-section my-6">
    <div class="newest-article-container col-span-8">
        <div class="newest-article-title flex justify-between content-center-safe bg-[#02A28F] py-3 px-6 rounded-xl drop-shadow-xl mb-3">
            <h2 class="text-xl font-montserrat font-bold text-[#FFFFFF]">
                Postingan Terbaru
            </h2>
            <a href="#" class="text-base underline font-montserrat text-[#FFFFFF]">
                Lebih Banyak
            </a>
        </div>
        <div class="newest-articles grid grid-cols-2 gap-4">
            @foreach ($articles as $article)
                <x-article-card
                    image="{{ $article->image }}"
                    category="{{ $article->category->name }}" 
                    title="{{ $article->title }}" 
                    author="{{ $article->author }}"
                    description="{{ $article->content }}"
                    date="{{ $article->date }}" 
                />
            @endforeach
        </div>
    </div>
</section>
@endsection