<x-tests.app>
  <x-slot name="header">
    ヘッダー1
  </x-slot>
コンポーネントテスト1
  <x-tests.card title="タイトル1" content="本文1" :message="$message" />
  <x-tests.card title="タイトル123" />
  <x-tests.card title="CSSを変更した" class="bg-red-300" />
</x-tests.app>