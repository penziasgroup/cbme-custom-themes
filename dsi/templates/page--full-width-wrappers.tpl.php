<?php
/**
 * @file
 * Adaptivetheme implementation to display a single Drupal page.
 *
 * ###  Full Width Wrappers  ###
 *
 * This page template that has 100% width wrappers, which effectively
 * divide the page up into sections to you can style with full width
 * backgrounds. AT Commerce uses markup similar to this to achieve
 * its style - its worth checking out to see how I did this.
 *
 * To use copy this to your subtheme and rename it page.tpl.php,
 * or enable this in theme settings under "Site Tweaks".
 *
 * Available variables:
 *
 * Adaptivetheme supplied variables:
 * - $site_logo: Themed logo - linked to front with alt attribute.
 * - $site_name: Site name linked to the homepage.
 * - $site_name_unlinked: Site name without any link.
 * - $hide_site_name: Toggles the visibility of the site name.
 * - $visibility: Holds the class .element-invisible or is empty.
 * - $primary_navigation: Themed Main menu.
 * - $secondary_navigation: Themed Secondary/user menu.
 * - $primary_local_tasks: Split local tasks - primary.
 * - $secondary_local_tasks: Split local tasks - secondary.
 * - $tag: Prints the wrapper element for the main content.
 * - $is_mobile: Mixed, requires the Mobile Detect or Browscap module to return
 *   TRUE for mobile.  Note that tablets are also considered mobile devices.
 *   Returns NULL if the feature could not be detected.
 * - $is_tablet: Mixed, requires the Mobile Detect to return TRUE for tablets.
 *   Returns NULL if the feature could not be detected.
 * - *_attributes: attributes for various site elements, usually holds id, class
 *   or role attributes.
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Core Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * Adaptivetheme Regions:
 * - $page['leaderboard']: full width at the very top of the page
 * - $page['menu_bar']: menu blocks placed here will be styled horizontal
 * - $page['secondary_content']: full width just above the main columns
 * - $page['content_aside']: like a main content bottom region
 * - $page['tertiary_content']: full width just above the footer
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see adaptivetheme_preprocess_page()
 * @see adaptivetheme_process_page()
 */
?>

<?php

// Helper tasks

if(isset($section_title)){
    $title = '<span class="section">' . $section_title . '</span> ' . '<span class="section-title">' . $title . '</span>';
}elseif (!empty($title)){
    $title = '<span class="section">' . $title . '</span> ';
}

?>

<section id="brown-nav" class="">
  <div class="marginator">
    <div id="brown-header">
      <div class="penzias-wrap">
      <h1><a href="//www.brown.edu">Explore Brown University</a></h1>
      <span class="search-brown">
      <a href="https://www.brown.edu/search" id="search-brown-button">Search Brown</a></span> 
      <span class="toggle-brown"><a href="#" id="brown-menu-button">Show/Hide</a></span> 
      <div id="brown-nav-region">
      <div class="block block-bs2-search block-bs2-search-bs2-search-block ">
        <div class="width">
          <div id="___gcse_0">
            <div class="gsc-control-searchbox-only gsc-control-searchbox-only-en" dir="ltr">
              <form class="gsc-search-box" accept-charset="utf-8">
                <table cellspacing="0" cellpadding="0" class="gsc-search-box">
                  <tbody>
                    <tr>
                      <td class="gsc-input"><input autocomplete="off" type="text" size="10" class=" gsc-input" name="search" title="search" id="gsc-i-id1" dir="ltr" spellcheck="false" style="outline: none;">
                        <input type="hidden" name="bgresponse" id="bgresponse"></td>
                      <td class="gsc-search-button"><input type="button" value="Search" class="gsc-search-button" title="search"></td>
                      <td class="gsc-clear-button"><div class="gsc-clear-button" title="clear results">&nbsp;</div></td>
                    </tr>
                  </tbody>
                </table>
                <table cellspacing="0" cellpadding="0" class="gsc-branding">
                  <tbody>
                    <tr style="display: none;">
                      <td class="gsc-branding-user-defined"></td>
                      <td class="gsc-branding-text"><div class="gsc-branding-text">powered by</div></td>
                      <td class="gsc-branding-img"></td>
                    </tr>
                  </tbody>
                </table>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
      </div>
    </div>
    <nav id="u-nav">
      <div class="penzias-wrap">
      <div class="item-list" id="learn-list">
        <h3>Learn More</h3>
        <ul>
          <li><a href="//www.brown.edu/about">About Brown</a></li>
          <li><a href="//www.brown.edu/academics">Academics</a></li>
          <li><a href="//www.brown.edu/admission">Admission</a></li>
          <li><a href="//www.brown.edu/research">Research</a></li>
          <li class="last"><a href="//www.brown.edu/campus-life">Campus Life</a></li>
        </ul>
      </div>
      <div class="item-list" id="find-list">
        <h3>Find</h3>
        <ul>
          <li class="first"><a href="//www.brown.edu/a-to-z">A to Z Index</a></li>
          <li class="last"><a href="//directory.brown.edu">People Directory</a></li>
        </ul>
      </div>
      <div class="item-list" id="information-list">
        <h3>Information for</h3>
        <ul>
          <li class="first"><a href="//www.brown.edu/gateway/current-students">Students</a></li>
          <li><a href="//www.brown.edu/gateway/faculty">Faculty</a></li>
          <li><a href="//www.brown.edu/gateway/staff">Staff</a></li>
          <li><a href="//www.brown.edu/gateway/families">Families</a></li>
          <li><a href="//www.brown.edu/gateway/alumni">Alumni</a></li>
          <li class="last"><a href="//www.brown.edu/gateway/friends-and-neighbors">Friends &amp; Neighbors</a></li>
        </ul>
      </div>
      <div class="item-list" id="destination-list">
        <h3>Top Destinations</h3>
        <ul>
          <li><a href="http://www.brown.edu/about/administration/global-engagement/">Global Brown</a></li>
          <li><a href="http://watson.brown.edu/">Watson Institute</a></li>
          <li><a href="http://www.brown.edu/gradschool">Graduate School</a></li>
          <li><a href="http://med.brown.edu">Alpert Medical School</a></li>
          <li><a href="http://www.brown.edu/academics/public-health/">School of Public Health</a></li>
          <li><a href="http://brown.edu/academics/engineering/">School of Engineering</a></li>
        </ul>
      </div>
      </div>
    </nav>
    </div>
</section>

<div id="page-wrapper">
  <div id="page" class="<?php print $classes; ?>">

    <?php if($page['leaderboard']): ?>
      <div id="leaderboard-wrapper">
        <div class="container clearfix">
          <?php print render($page['leaderboard']); ?>
        </div>
      </div>
    <?php endif; ?>

    <div id="header-wrapper">
      <div class="container clearfix">
        <header<?php print $header_attributes; ?>>
            <div class="header-inner clearfix">
          <?php if ($site_logo || $site_name || $site_slogan): ?>
            <!-- start: Branding -->
            <div<?php print $branding_attributes; ?>>
                
                <div id="site-name"><a href="/" title="home">Center for <span class="mobile-break"><span class="institute">Biomedical Engineering</span></span></a></div>  
              
              <?php if ($site_logo): ?>
                <div id="logo">
                  <?php print $site_logo; ?>
                </div>    
              <?php endif; ?>

              <?php if ($site_name || $site_slogan): ?>
                <!-- start: Site name and Slogan -->
                <div<?php print $hgroup_attributes; ?>>

                  <?php if ($site_name): ?>
                    <h1<?php print $site_name_attributes; ?>><?php print $site_name; ?></h1>
                  <?php endif; ?>

                  <?php if ($site_slogan): ?>
                    <h2<?php print $site_slogan_attributes; ?>><?php print $site_slogan; ?></h2>
                  <?php endif; ?>

                </div><!-- /end #name-and-slogan -->
              <?php endif; ?>


            </div><!-- /end #branding -->
          <?php endif; ?>

        <?php print render($page['header']); ?>
            </div>
        </header>
      </div>
    </div>
    <?php if ($page['primary_menu']): ?>
      <div id="primary-menu-wrapper">
        <div class="container clearfix">
          <?php print render($page['primary_menu']); ?>
        </div>
      </div>
    <?php endif; ?>
      
    <?php if ($page['side_menu']): ?>
      <div id="side-menu-wrapper">
        <div class="container clearfix">
          <?php print render($page['side_menu']); ?>
        </div>
      </div>
    <?php endif; ?>

    <?php print render($title_prefix); ?>

    <?php if ($title || $primary_local_tasks || $secondary_local_tasks || $action_links = render($action_links)): ?>
        <header<?php print $content_header_attributes; ?>>

        <div class="title-wrap">
            <?php if ($title): ?>
              <h1 id="page-title"><?php print $title; ?></h1>
            <?php endif; ?>
        </div>

        </header>
    <?php endif; ?>


    <?php if ($messages || $page['help']): ?>
    <div id="messages-help-wrapper">
        <div class="container clearfix">
        <?php print $messages; ?>
        <?php print render($page['help']); ?>
        </div>
    </div>
    <?php endif; ?>      
      
    <?php if ($breadcrumb): ?>
      <div id="breadcrumb-wrapper">
        <div class="container clearfix">
          <?php print $breadcrumb; ?>
        </div>
      </div>
    <?php endif; ?>

    <?php if ($page['secondary_content']): ?>
      <div id="secondary-content-wrapper">
        <div class="container clearfix">
          <?php print render($page['secondary_content']); ?>
        </div>
      </div>
    <?php endif; ?>

    <div id="content-wrapper"><div class="container">
      <div id="columns"><div class="columns-inner clearfix">
        
        <?php print render($page['content_nav']); ?>       
        
        <div id="content-column"><div class="content-inner">

          <?php print render($page['highlighted']); ?>

          <<?php print $tag; ?> id="main-content">
          
            <?php if ($primary_local_tasks || $secondary_local_tasks || $action_links): ?>
              <div id="tasks">

                <?php if ($primary_local_tasks): ?>
                  <ul class="tabs primary clearfix"><?php print render($primary_local_tasks); ?></ul>
                <?php endif; ?>

                <?php if ($secondary_local_tasks): ?>
                  <ul class="tabs secondary clearfix"><?php print render($secondary_local_tasks); ?></ul>
                <?php endif; ?>

                <?php if ($action_links = render($action_links)): ?>
                  <ul class="action-links clearfix"><?php print $action_links; ?></ul>
                <?php endif; ?>

              </div>
            <?php endif; ?>
          
       
            <?php if ($content = render($page['content'])): ?>
              <div id="content">
                <?php print $content; ?>
              </div>
            <?php endif; ?>

            <?php print $feed_icons; ?>

            <?php print render($title_suffix); // Prints page level contextual links ?>

          </<?php print $tag; ?>>

        </div></div>
        
        <?php print render($page['sidebar_first']); ?>     
        <?php print render($page['sidebar_second']); ?>  
      
        </div></div>
    </div></div>

    <?php if ($page['tertiary_content']): ?>
      <div id="tertiary-content-wrapper">
        <div class="container clearfix">
          <?php print render($page['tertiary_content']); ?>
        </div>
      </div>
    <?php endif; ?>

    <?php if ($page['footer'] || $attribution): ?>
      <div id="footer-wrapper">
        <div class="container clearfix">
          <footer<?php print $footer_attributes; ?>>
            <?php print render($page['footer']); ?>
            <?php print $attribution; ?>
          </footer>
        </div>
      </div>
    <?php endif; ?>
      
  </div>
</div>

<footer id="brown-footer">
  <div class="marginator">
    <section>
      <div id="give-to-brown"> <a class="giving-footer" href="http://giving.brown.edu">Giving to Brown</a> </div>
    </section>
    <div id="brown-contact">
      <h1>Brown University</h1>
      <p><span class="city-state-country">Providence, Rhode Island 02912, USA</span><br>
        <span class="telephone">Phone: 401-863-1000</span><br>
        <span class="maps-contact"><a href="http://www.brown.edu/Facilities/Facilities_Management/maps/#building/" tabindex="220">Maps</a> &amp; <a href="http://www.brown.edu/about/visit/driving-directions" tabindex="221">Directions</a> / <a href="http://www.brown.edu/contact" accesskey="9" tabindex="222">Contact Us</a></span><br>
        <span class="copyright">© 2016 Brown University</span></p>
      <p class="social-links">Connect: <a href="http://www.brown.edu/about/social-media/" title="Get Connected to the Brown Community">Social@Brown</a></p>
      <ul class="social-media">
        <li><a href="https://www.facebook.com/BrownUniversity" title="Facebook" id="footer-facebook">Facebook</a></li>
        <li><a href="https://twitter.com/BrownUniversity" id="footer-twitter">Twitter</a></li>
        <li><a href="https://www.youtube.com/brownuniversity" id="footer-youtube">YouTube</a></li>
        <li><a href="https://instagram.com/brownu" id="footer-instagram">Instagram</a></li>
        <li><a href="https://itunes.apple.com/institution/brown-university/id381076688#ls=1" id="footer-itunesu">iTunes U</a></li>
        <li><a href="https://plus.google.com/100931085598361161047/posts" id="footer-google-plus">Google+</a></li>
        <li><a href="https://www.linkedin.com/edu/school?id=19348&amp;trk=tyah" id="footer-linkedin">LinkedIn</a></li>
        <li><a href="https://www.snapchat.com/add/brown-u" id="footer-snapchat">SnapChat</a></li>
      </ul>
    </div>
  </div>
</footer>