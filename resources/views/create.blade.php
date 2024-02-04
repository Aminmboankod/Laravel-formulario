
<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100" style="margin:15px">
                    <div>
                        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                            {{ __('form.New') }}
                        </h2>
                        <hr />
                        <br />

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('post.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-2">
                                    <label for="callable" class="block text-gray-700 dark:text-gray-400 text-sm font-bold mb-2">{{__('form.Callable')}}</label>
                                    <input type="checkbox" name="callable[]" id="callable"
                                            value="1"
                                        @if(is_array(old('callable')) && in_array(1, old('callable'))) checked @endif>
                                    @error('callable')
                                        <p style="color:red">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-2">
                                    <label for="commentable" class="block text-gray-700 dark:text-gray-400 text-sm font-bold mb-2">{{__('form.Commentable')}}</label>
                                    <input type="checkbox" name="commentable[]" id="commentable"
                                           value="1"
                                           @if(is_array(old('commentable')) && in_array(1, old('commentable'))) checked @endif>
                                    @error('commentable')
                                    <p style="color:red">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-8">
                                    <label for="access" class="block text-gray-700 dark:text-gray-400 text-sm font-bold mb-2">{{__('form.Access')}}</label>
                                    <select name="access" id="access"
                                            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-400 leading-tight focus:outline-none focus:shadow-outline">
                                        <option value="public" @if(old('access') == 'public') selected @endif>Public</option>
                                        <option value="private" @if(old('access') == 'private') selected @endif >Private</option>
                                    </select>
                                </div>
                                @error('access')
                                    <p style="color:red">{{ $message }}</p>
                                @enderror
                           </div>
                            <div class="mb-4">
                                <label for="title" class="block text-gray-700 dark:text-gray-400 text-sm font-bold mb-2">{{__('form.Title')}}</label>
                                <input type="text" name="title" id="title" placeholder="Ingrese el título del post"
                                       class="appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-400 leading-tight focus:outline-none focus:shadow-outline"
                                       value="{{old('title')}}">
                                @error('title')
                                    <p style="color:red">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="extract" class="block text-gray-700 dark:text-gray-400 text-sm font-bold mb-2">{{__('form.Extract')}}</label>
                                <input type="text" name="extract" id="extract" placeholder="Ingrese el extracto del post"
                                       class="appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-400 leading-tight focus:outline-none focus:shadow-outline"
                                        value="{{old('extract')}}">
                                @error('extract')
                                    <p style="color:red">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="content" class="block text-gray-700 dark:text-gray-400 text-sm font-bold mb-2">{{__('form.Content')}}</label>
                                <textarea name="content" id="content" placeholder="Ingrese el contenido del post"
                                          value="{{old('content')}}"
                                          class="appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-400 leading-tight focus:outline-none focus:shadow-outline">
                                </textarea>
                                @error('content')
                                    <p style="color:red">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <button type="submit" class="btn btn-secondary bg-dark">
                                    {{ __('form.Save') }}
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

