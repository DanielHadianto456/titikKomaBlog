<x-default-layout>
    <section class="header-section grid grid-cols-12 gap-8">
        <div class="main-article col-span-8">
            <div class="image-container relative h-[65vh] w-[100%] rounded-xl drop-shadow-xl bg-cover bg-center"
            style="background-image: url('https://cdn.britannica.com/22/187222-050-07B17FB6/apples-on-a-tree-branch.jpg')">
                <div class="article-credentials absolute bottom-0 left-0 p-6 font-montserrat">
                    <h3 class="article-category text-base">
                        Fruits Category
                    </h3>
                    <h2 class="article-title text-4xl font-bold ">
                        These are apples
                    </h2>
                    <h3 class="article-author text-base ">
                        <strong>By</strong> John Doe
                    </h3>
                </div>
            </div>
        </div>
        <div class="side-article col-span-4 flex flex-col">
            <div class="side-title bg-[#02A28F] p-2 rounded-xl drop-shadow-xl mb-3">
                <h2 class="text-xl font-montserrat font-bold text-[#FFFFFF] text-center">
                    Paling Populer
                </h2>
            </div>
            <div class="side-article-list flex flex-col gap-3 flex-grow">
                <x-horizontal-article-card />
                <x-horizontal-article-card />
                <x-horizontal-article-card />
            </div>
        </div>
    </section>
</x-default-layout>