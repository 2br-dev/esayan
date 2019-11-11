<!DOCTYPE html>
{strip}
<html class="no-js" itemscope="itemscope" itemtype="http://schema.org/{if !isset($uri[1])}WebPage{else}ItemPage{/if}" lang="{$_page.lang}">
<head>
	<title itemprop="name">{$_meta.title}</title>
	<meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta content="{$_meta.robots}" name="robots">
    <meta content="{$_meta.keywords}" name="keywords">
    <meta content="{$_meta.description}" name="description" itemprop="description">
	{if isset($pagination.prev) && $pagination.prev !== ''}
		<link rel="prev" href="?page={$pagination.prev}">
	{/if}
	{if isset($pagination.next) && $pagination.next !== ''}
		<link rel="next" href="?page={$pagination.next}">
	{/if}
	<link rel="home" href="/">
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- CSS -->
	<link type="text/css" rel="stylesheet" href="/fonts/phenomena/phenomena.css" >
	<link type="text/css" rel="stylesheet" href="/css/normalize.css" />
	<link type="text/css" rel="stylesheet" href="/slick/slick.css" />
	<link type="text/css" rel="stylesheet" href="/css/style.css" />
    <link type="text/css" rel="stylesheet" href="/css/style320.css"/>
    <link type="text/css" rel="stylesheet" href="/css/style1600.css"/>
    <link type="text/css" rel="stylesheet" href="/css/style1920.css"/>

	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<script src="/js/template7.min.js"></script>
</head>
<body class="page-{$_page.system}">
{literal}
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript" >
		(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
			m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
		(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

		ym(56171233, "init", {
			clickmap:true,
			trackLinks:true,
			accurateTrackBounce:true,
			webvisor:true
		});
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/56171233" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
{/literal}
{/strip}