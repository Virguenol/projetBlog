<x-base-layout>

    {{-- Meta Description --}}
    @section('meta_description', $post->metaDescription())

    {{-- Facebook Meta --}}
    @section('og:title', $post->title)
    @section('og:image', 'storge/images/' .$post->cover_image)

    {{-- Title --}}
    @section('title', $post->title)
    <main class="min-h-screen">
        <section class="container pt-24 mx-auto space-y-4">

           <article class="p-4 bg-white">
                <h1 class="mb-2 text-2x1 font-bold">{{ $post->title }}</h1>

                <div>{{  $post->body  }}</div>

                <button class="p-2 mt-16 text-xs text-white bg-blue-500">
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ Resquest::url() }}
                    " target="_blank">
                        SHARE ON Facebook
                    </a>
                </button>
           </article>
        </section>
    </main>
</x-base-layout>