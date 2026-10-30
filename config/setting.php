<?php
/**
 * BcBlogEssaySoftTheme : baserCMS5 エッセイのブログテーマ（やわらかい）
 *
 * スタイルの設定（scripts/new-blog-theme.sh が variants/soft から書き出す）
 */
return [
    'BlogTheme' => [
        // スタイル名（<html data-variant>）
        'variant' => 'soft',
        // Google Fonts（layout で読み込む）
        'fonts' => 'https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@400;500;700&family=Zen+Maru+Gothic:wght@500;700;900&display=swap',
        // 配色モードの初期値（auto = OS の設定に合わせる／light = ライト／dark = ダーク）
        // 管理画面の「テーマ設定」で変えられる（テーマ設定の値が優先）
        'colorScheme' => 'auto',
        // ヘッダーにライト／ダークの切り替えボタンを出す（テーマ設定で変えられる）
        'schemeToggle' => true,
        // ヘッダー・フッターのナビの作り方（テーマ設定で変えられる）
        //   contents = コンテンツ管理のルート直下（ブログ・固定ページ・リンク・メールフォームなど）
        //   categories = 最初のブログのカテゴリ（第1階層）＋ルート直下の固定ページ・メールフォーム・リンク
        'navSource' => 'categories',
        // トップの一覧の上に「タグから探す」を出す
        'tagStrip' => false,
        // 記事の目次（PC はサイドバー、スマホは本文の上）。読み物なので出さない
        'toc' => false,
        // 記事の上のシェア（下のシェアは常に出す）。本文の下に1か所だけにする
        'shareTop' => false,
        // アイキャッチも本文の画像もない記事のカード：frame = 色の枠＋カテゴリ名／none = 画像の場所を出さない（文字だけ）
        'thumbFallback' => 'none',
        // カード・記事の日付の書式（PHP の date の書式）
        'dateFormat' => 'Y年n月j日',
        // テーマ設定の4色の初期値（css の代わりの値にも使う）
        'colors' => ['main' => '#e07a5f', 'sub' => '#3d405b', 'link' => '#c4573c', 'hover' => '#9c4430'],
    ],
];
