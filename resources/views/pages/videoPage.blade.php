@extends('layouts.welcome-layout')
@section('content')

<div class="container-fluid">
     <div class="row flex-xl-nowrap">
       <div class="col-12 col-md-3 col-xl-2 bd-sidebar">

  <nav class="collapse bd-links" id="bd-docs-nav"><div class="bd-toc-item">
     <a class="bd-toc-link" href="/docs/4.0/getting-started/introduction/">
       Getting started
     </a>

     <ul class="nav bd-sidenav"><li>
           <a href="/docs/4.0/getting-started/introduction/">
             Introduction
           </a></li><li>
           <a href="/docs/4.0/getting-started/download/">
             Download
           </a></li><li>
           <a href="/docs/4.0/getting-started/contents/">
             Contents
           </a></li><li>
           <a href="/docs/4.0/getting-started/browsers-devices/">
             Browsers & devices
           </a></li><li>
           <a href="/docs/4.0/getting-started/javascript/">
             JavaScript
           </a></li><li>
           <a href="/docs/4.0/getting-started/theming/">
             Theming
           </a></li><li>
           <a href="/docs/4.0/getting-started/build-tools/">
             Build tools
           </a></li><li>
           <a href="/docs/4.0/getting-started/webpack/">
             Webpack
           </a></li><li>
           <a href="/docs/4.0/getting-started/accessibility/">
             Accessibility
           </a></li></ul>
   </div><div class="bd-toc-item">
     <a class="bd-toc-link" href="/docs/4.0/layout/overview/">
       Layout
     </a>

     <ul class="nav bd-sidenav"><li>
           <a href="/docs/4.0/layout/overview/">
             Overview
           </a></li><li>
           <a href="/docs/4.0/layout/grid/">
             Grid
           </a></li><li>
           <a href="/docs/4.0/layout/media-object/">
             Media object
           </a></li><li>
           <a href="/docs/4.0/layout/utilities-for-layout/">
             Utilities for layout
           </a></li></ul>
   </div><div class="bd-toc-item">
     <a class="bd-toc-link" href="/docs/4.0/content/reboot/">
       Content
     </a>

     <ul class="nav bd-sidenav"><li>
           <a href="/docs/4.0/content/reboot/">
             Reboot
           </a></li><li>
           <a href="/docs/4.0/content/typography/">
             Typography
           </a></li><li>
           <a href="/docs/4.0/content/code/">
             Code
           </a></li><li>
           <a href="/docs/4.0/content/images/">
             Images
           </a></li><li>
           <a href="/docs/4.0/content/tables/">
             Tables
           </a></li><li>
           <a href="/docs/4.0/content/figures/">
             Figures
           </a></li></ul>
   </div><div class="bd-toc-item active">
     <a class="bd-toc-link" href="/docs/4.0/components/alerts/">
       Components
     </a>

     <ul class="nav bd-sidenav"><li>
           <a href="/docs/4.0/components/alerts/">
             Alerts
           </a></li><li class="active bd-sidenav-active">
           <a href="/docs/4.0/components/badge/">
             Badge
           </a></li><li>
           <a href="/docs/4.0/components/breadcrumb/">
             Breadcrumb
           </a></li><li>
           <a href="/docs/4.0/components/buttons/">
             Buttons
           </a></li><li>
           <a href="/docs/4.0/components/button-group/">
             Button group
           </a></li><li>
           <a href="/docs/4.0/components/card/">
             Card
           </a></li><li>
           <a href="/docs/4.0/components/carousel/">
             Carousel
           </a></li><li>
           <a href="/docs/4.0/components/collapse/">
             Collapse
           </a></li><li>
           <a href="/docs/4.0/components/dropdowns/">
             Dropdowns
           </a></li><li>
           <a href="/docs/4.0/components/forms/">
             Forms
           </a></li><li>
           <a href="/docs/4.0/components/input-group/">
             Input group
           </a></li><li>
           <a href="/docs/4.0/components/jumbotron/">
             Jumbotron
           </a></li><li>
           <a href="/docs/4.0/components/list-group/">
             List group
           </a></li><li>
           <a href="/docs/4.0/components/modal/">
             Modal
           </a></li><li>
           <a href="/docs/4.0/components/navs/">
             Navs
           </a></li><li>
           <a href="/docs/4.0/components/navbar/">
             Navbar
           </a></li><li>
           <a href="/docs/4.0/components/pagination/">
             Pagination
           </a></li><li>
           <a href="/docs/4.0/components/popovers/">
             Popovers
           </a></li><li>
           <a href="/docs/4.0/components/progress/">
             Progress
           </a></li><li>
           <a href="/docs/4.0/components/scrollspy/">
             Scrollspy
           </a></li><li>
           <a href="/docs/4.0/components/tooltips/">
             Tooltips
           </a></li></ul>
   </div><div class="bd-toc-item">
     <a class="bd-toc-link" href="/docs/4.0/utilities/borders/">
       Utilities
     </a>

     <ul class="nav bd-sidenav"><li>
           <a href="/docs/4.0/utilities/borders/">
             Borders
           </a></li><li>
           <a href="/docs/4.0/utilities/clearfix/">
             Clearfix
           </a></li><li>
           <a href="/docs/4.0/utilities/close-icon/">
             Close icon
           </a></li><li>
           <a href="/docs/4.0/utilities/colors/">
             Colors
           </a></li><li>
           <a href="/docs/4.0/utilities/display/">
             Display
           </a></li><li>
           <a href="/docs/4.0/utilities/embed/">
             Embed
           </a></li><li>
           <a href="/docs/4.0/utilities/flex/">
             Flex
           </a></li><li>
           <a href="/docs/4.0/utilities/float/">
             Float
           </a></li><li>
           <a href="/docs/4.0/utilities/image-replacement/">
             Image replacement
           </a></li><li>
           <a href="/docs/4.0/utilities/position/">
             Position
           </a></li><li>
           <a href="/docs/4.0/utilities/screenreaders/">
             Screenreaders
           </a></li><li>
           <a href="/docs/4.0/utilities/sizing/">
             Sizing
           </a></li><li>
           <a href="/docs/4.0/utilities/spacing/">
             Spacing
           </a></li><li>
           <a href="/docs/4.0/utilities/text/">
             Text
           </a></li><li>
           <a href="/docs/4.0/utilities/vertical-align/">
             Vertical align
           </a></li><li>
           <a href="/docs/4.0/utilities/visibility/">
             Visibility
           </a></li></ul>
   </div><div class="bd-toc-item">
     <a class="bd-toc-link" href="/docs/4.0/extend/approach/">
       Extend
     </a>

     <ul class="nav bd-sidenav"><li>
           <a href="/docs/4.0/extend/approach/">
             Approach
           </a></li><li>
           <a href="/docs/4.0/extend/icons/">
             Icons
           </a></li></ul>
   </div><div class="bd-toc-item">
     <a class="bd-toc-link" href="/docs/4.0/migration/">
       Migration
     </a>

     <ul class="nav bd-sidenav"></ul>
   </div><div class="bd-toc-item">
     <a class="bd-toc-link" href="/docs/4.0/about/overview/">
       About
     </a>

     <ul class="nav bd-sidenav"><li>
           <a href="/docs/4.0/about/overview/">
             Overview
           </a></li><li>
           <a href="/docs/4.0/about/brand/">
             Brand
           </a></li><li>
           <a href="/docs/4.0/about/license/">
             License
           </a></li><li>
           <a href="/docs/4.0/about/translations/">
             Translations
           </a></li></ul>
         </div>
        </nav>

       </div>



       <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">

        <div class="col-12">
            <div class="video"><iframe src="https://www.youtube.com/embed/AWdA7hdP4ZA?rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe></div>
    	  </div>

        <div class="col py-2">
    	    <div class="video"><iframe src="https://www.youtube.com/embed/I39RKjerJss?rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe></div>
		    </div>

        <div class="col py-2">
            <div class="video"><iframe src="https://www.youtube.com/embed/Dkx4LYeFnVY?rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe></div>
		    </div>

       </main>

       <div class="d-none d-xl-block col-xl-2 bd-toc">
         <ul class="section-nav">
<li class="toc-entry toc-h2"><a href="#example">Example</a></li>
<li class="toc-entry toc-h2"><a href="#contextual-variations">Contextual variations</a></li>
<li class="toc-entry toc-h2"><a href="#pill-badges">Pill badges</a></li>
<li class="toc-entry toc-h2"><a href="#links">Links</a></li>
</ul>
       </div>
     </div>
@endsection
