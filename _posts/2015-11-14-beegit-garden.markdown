---
layout: post
title:  "Beegit Garden"
date:   2015-11-14 11:46:49
categories: webapp
short: "Micro-service hosting files from Beegit projects, indexed in Elastic Search"
---

Beegit Garden was developed to give a publicly viewable version of documents in Beegit. Each document in the project is indexed in Elastic Search, and rendered into HTML in node.js. The user can search through the project they are looking at.

<ul class="slides">
<li>
<a href="/css/images/bg-garden4.png">
<img alt="project page" src="/css/images/bg-garden4.png">
</a>
</li>

<li>
<a href="/css/images/bg-garden2.png">
<img alt="file page" src="/css/images/bg-garden2.png">
</a>
</li>

<li>
<a href="/css/images/bg-garden3.png">
<img alt="search page" src="/css/images/bg-garden3.png">
</a>
</li>
</ul>
<hr class="clear">

I used:

 - Express.js
 - Elastic Search
 - Markdown parsing in node.js
 - handlebars.js
