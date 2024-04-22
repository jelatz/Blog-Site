<x-app-layout>
    <div class="container min-h-screen">
        <x-success-message />
            <x-partials.search />
            <div class="flex-items-center justify-evenly mt-10">
                <x-blog.blog-layout>
                    <figure>
                        <img src="" alt="image">
                        <p class="text-center">title</p>
                        <p class="text-center">Author</p>
                    </figure>
                    <div>
                        <p class="line-clamp-4">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est magni quis voluptates laudantium?
                            Dolorum excepturi, explicabo tenetur facilis omnis voluptates, numquam dolorem nobis blanditiis
                            maxime quas aperiam earum? Accusantium, tempora.
                            Facere quas assumenda ipsum modi libero nam. Aspernatur esse dignissimos excepturi rem
                            accusantium placeat, id enim vel nisi ab sunt similique magni cumque atque numquam amet nobis
                            nostrum laborum architecto!
                            Assumenda dolorem modi nam magni quibusdam explicabo sequi ex magnam pariatur facere saepe
                            consequatur ducimus labore, autem repudiandae adipisci earum, molestiae voluptatibus fuga
                            recusandae sunt tenetur, quam tempora. Quos, mollitia!
                            Magni nemo officiis id doloremque quos tenetur atque exercitationem, suscipit error harum
                            necessitatibus explicabo dolorum ipsa repudiandae dolore perspiciatis placeat cum! Voluptatem
                            perferendis, quibusdam repellat modi odit vitae adipisci eos?
                            Harum earum consequuntur nisi accusamus eaque unde inventore cum dolorem illo, perferendis
                            tempora, voluptatibus in. Rerum laboriosam illum qui repellendus a ducimus ut, hic minima dolor!
                            Facilis ratione dicta laboriosam.
                        </p>
                    </div>
                </x-blog.blog-layout>
                <a href="{{route('blog.create')}}" class="mt-10 block md:ml-auto text-white bg-red-800 w-fit px-10 py-2 rounded-lg">New Blog</a>
        </div>
    </div>
</x-app-layout>