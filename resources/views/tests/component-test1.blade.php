<x-tests.app>
    <x-slot name="header">ヘッダー1</x-slot>
    コンポーネントテスト1
    <x-tests.card title="タイトル1" content="本文" :message="$message"></x-tests.card>
    <x-tests.card title="タイトル2"></x-tests.card>
    <x-tests.card title="スペシャルタイトル" class="bg-red-300"></x-tests.card>
</x-tests.app>