<?php 
$date = "2021-03-29T23:03:30+00:00";
echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset
      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
<url>
  <loc>https://www.{{$app->request->get('api_domain')}}/</loc>
  <lastmod>{{ $date }}</lastmod>
  <priority>1.00</priority>
</url>
<url>
  <loc>https://www.{{$app->request->get('api_domain')}}/about</loc>
  <lastmod>{{ $date }}</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.{{$app->request->get('api_domain')}}/paid-advertising</loc>
  <lastmod>{{ $date }}</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.{{$app->request->get('api_domain')}}/social-media-management</loc>
  <lastmod>{{ $date }}</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.{{$app->request->get('api_domain')}}/website-development</loc>
  <lastmod>{{ $date }}</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.{{$app->request->get('api_domain')}}/search-engine-optimization</loc>
  <lastmod>{{ $date }}</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.{{$app->request->get('api_domain')}}/brand-strategy</loc>
  <lastmod>{{ $date }}</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.{{$app->request->get('api_domain')}}/email-marketing</loc>
  <lastmod>{{ $date }}</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.{{$app->request->get('api_domain')}}/contact</loc>
  <lastmod>{{ $date }}</lastmod>
  <priority>0.80</priority>
</url>
<url>
  <loc>https://www.{{$app->request->get('api_domain')}}/terms-and-conditions</loc>
  <lastmod>{{ $date }}</lastmod>
  <priority>0.64</priority>
</url>
<url>
  <loc>https://www.{{$app->request->get('api_domain')}}/privacy-policy</loc>
  <lastmod>{{ $date }}</lastmod>
  <priority>0.64</priority>
</url>
<url>
  <loc>https://www.{{$app->request->get('api_domain')}}/unsubscribe</loc>
  <lastmod>{{ $date }}</lastmod>
  <priority>0.64</priority>
</url>
</urlset>