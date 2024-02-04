

@foreach ($posts as $post)
<div class="flex bg-white dark:bg-gray-800 shadow-md sm:rounded-lg p-6" style="margin:10px; background-color: #4b5563" >
    <div class="container">
        <h1><strong>{{__('form.Title')}}: </strong> {{ $post->title }}</h1>
        <p><strong>{{__('form.User')}}: </strong> {{ $post->user->email }}</p>
        <h2><strong>{{__('form.Extract')}}: </strong> {{ $post->extract }}</h2>
        <p><strong>{{__('form.Content')}}: </strong> {{ $post->content }}</p>
    </div>
</div>
@endforeach
