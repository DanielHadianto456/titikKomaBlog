<div class="newest-article-card flex flex-col shadow-2xl rounded-xl">
    <img class="rounded-xl h-[30vh] object-cover" src="https://cdn.britannica.com/22/187222-050-07B17FB6/apples-on-a-tree-branch.jpg" alt="">
    <div class="flex flex-col newest-article-description px-3 py-4 gap-3">
        <div class="newest-article-credentials">
            <h3 class="article-category text-sm leading-4 text-[#02A28F]">
                {{ $category ?? '-'  }}
            </h3>
            <h2 class="article-title text-xl font-bold">
                {{$title ?? '-'  }}
            </h2>
            <h3 class="article-author text-sm leading-4 text-[#616161]">
                <strong>By</strong> {{ $author ?? '-'  }}
            </h3>
        </div>
        <div class="newest-article-description">
            <p class="text-base">
                {{ $description ?? '-'  }}
            </p>
        </div>
        <div class="newest-article-date pb-4">
            <p class="text-base text-[#616161]">
                {{ $date ?? '-'  }}
            </p>
        </div>
    </div>
</div>