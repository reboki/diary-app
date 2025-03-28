<x-app-layout>
    <div class="max-w-3xl mx-auto py-10">
        <form method="POST" action="{{ route('diaries.store') }}">
            @csrf
            <div>
                <label>タイトル</label>
                <input type="text" name="title" required>
            </div>
            <div>
                <label>本文</label>
                <textarea name="body" required></textarea>
            </div>
            <button type="submit">投稿する</button>
        </form>
    </div>
</x-app-layout>
